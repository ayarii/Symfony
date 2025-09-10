<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\RememberMe;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentToken;
use Symfony\Component\Security\Core\Authentication\RememberMe\TokenProviderInterface;
use Symfony\Component\Security\Core\Authentication\RememberMe\TokenVerifierInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CookieTheftException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Implements remember-me tokens using a {@see TokenProviderInterface}.
 *
 * This requires storing remember-me tokens in a database. This allows
 * more control over the invalidation of remember-me tokens. See
 * {@see SignatureRememberMeHandler} if you don't want to use a database.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
final class PersistentRememberMeHandler extends AbstractRememberMeHandler
{
    private TokenProviderInterface $tokenProvider;
    private ?TokenVerifierInterface $tokenVerifier;

    /**
     * @param UserProviderInterface       $userProvider
     * @param RequestStack                $requestStack
     * @param array                       $options
     * @param LoggerInterface|null        $logger
     * @param TokenVerifierInterface|null $tokenVerifier
     */
    public function __construct(TokenProviderInterface $tokenProvider, #[\SensitiveParameter] $userProvider, $requestStack, $options, $logger = null, $tokenVerifier = null)
    {
        if (\is_string($userProvider)) {
            trigger_deprecation('symfony/security-http', '6.3', 'Calling "%s()" with the secret as the second argument is deprecated. The argument will be dropped in 7.0.', __CLASS__);

            $userProvider = $requestStack;
            $requestStack = $options;
            $options = $logger;
            $logger = $tokenVerifier;
            $tokenVerifier = \func_num_args() > 6 ? func_get_arg(6) : null;
        }

        if (!$userProvider instanceof UserProviderInterface) {
            throw new \TypeError(\sprintf('Argument 2 passed to "%s()" must be an instance of "%s", "%s" given.', __CLASS__, UserProviderInterface::class, get_debug_type($userProvider)));
        }

        if (!$requestStack instanceof RequestStack) {
            throw new \TypeError(\sprintf('Argument 3 passed to "%s()" must be an instance of "%s", "%s" given.', __CLASS__, RequestStack::class, get_debug_type($userProvider)));
        }

        if (!\is_array($options)) {
            throw new \TypeError(\sprintf('Argument 4 passed to "%s()" must be an array, "%s" given.', __CLASS__, get_debug_type($userProvider)));
        }

        if (null !== $logger && !$logger instanceof LoggerInterface) {
            throw new \TypeError(\sprintf('Argument 5 passed to "%s()" must be an instance of "%s", "%s" given.', __CLASS__, LoggerInterface::class, get_debug_type($userProvider)));
        }

        if (null !== $tokenVerifier && !$tokenVerifier instanceof TokenVerifierInterface) {
            throw new \TypeError(\sprintf('Argument 6 passed to "%s()" must be an instance of "%s", "%s" given.', __CLASS__, TokenVerifierInterface::class, get_debug_type($userProvider)));
        }

        parent::__construct($userProvider, $requestStack, $options, $logger);

        if (!$tokenVerifier && $tokenProvider instanceof TokenVerifierInterface) {
            $tokenVerifier = $tokenProvider;
        }
        $this->tokenProvider = $tokenProvider;
        $this->tokenVerifier = $tokenVerifier;
    }

    public function createRememberMeCookie(UserInterface $user): void
    {
        $series = random_bytes(66);
        $tokenValue = strtr(base64_encode(substr($series, 33)), '+/=', '-_~');
        $series = strtr(base64_encode(substr($series, 0, 33)), '+/=', '-_~');
        $token = new PersistentToken($user::class, $user->getUserIdentifier(), $series, $tokenValue, new \DateTimeImmutable());

        $this->tokenProvider->createNewToken($token);
        $this->createCookie(RememberMeDetails::fromPersistentToken($token, time() + $this->options['lifetime']));
    }

    public function consumeRememberMeCookie(RememberMeDetails $rememberMeDetails): UserInterface
    {
        if (!str_contains($rememberMeDetails->getValue(), ':')) {
            throw new AuthenticationException('The cookie is incorrectly formatted.');
        }

        [$series, $tokenValue] = explode(':', $rememberMeDetails->getValue(), 2);
        $persistentToken = $this->tokenProvider->loadTokenBySeries($series);

        if ($persistentToken->getUserIdentifier() !== $rememberMeDetails->getUserIdentifier() || $persistentToken->getClass() !== $rememberMeDetails->getUserFqcn()) {
            throw new AuthenticationException('The cookie\'s hash is invalid.');
        }

        // content of $rememberMeDetails is not trustable. this prevents use of this class
        unset($rememberMeDetails);

        if ($this->tokenVerifier) {
            $isTokenValid = $this->tokenVerifier->verifyToken($persistentToken, $tokenValue);
        } else {
            $isTokenValid = hash_equals($persistentToken->getTokenValue(), $tokenValue);
        }
        if (!$isTokenValid) {
            throw new CookieTheftException('This token was already used. The account is possibly compromised.');
        }

        $expires = $persistentToken->getLastUsed()->getTimestamp() + $this->options['lifetime'];
        if ($expires < time()) {
            throw new AuthenticationException('The cookie has expired.');
        }

        return parent::consumeRememberMeCookie(new RememberMeDetails(
            $persistentToken->getClass(),
            $persistentToken->getUserIdentifier(),
            $expires,
            $persistentToken->getLastUsed()->getTimestamp().':'.$series.':'.$tokenValue.':'.$persistentToken->getClass()
        ));
    }

    public function processRememberMe(RememberMeDetails $rememberMeDetails, UserInterface $user): void
    {
        [$lastUsed, $series, $tokenValue, $class] = explode(':', $rememberMeDetails->getValue(), 4);
        $persistentToken = new PersistentToken($class, $rememberMeDetails->getUserIdentifier(), $series, $tokenValue, new \DateTimeImmutable('@'.$lastUsed));

        // if a token was regenerated less than a minute ago, there is no need to regenerate it
        // if multiple concurrent requests reauthenticate a user we do not want to update the token several times
        if ($persistentToken->getLastUsed()->getTimestamp() + 60 >= time()) {
            return;
        }

        $tokenValue = strtr(base64_encode(random_bytes(33)), '+/=', '-_~');
        $tokenLastUsed = new \DateTime();
        $this->tokenVerifier?->updateExistingToken($persistentToken, $tokenValue, $tokenLastUsed);
        $this->tokenProvider->updateToken($series, $tokenValue, $tokenLastUsed);

        $this->createCookie($rememberMeDetails->withValue($series.':'.$tokenValue));
    }

    public function clearRememberMeCookie(): void
    {
        parent::clearRememberMeCookie();

        $cookie = $this->requestStack->getMainRequest()->cookies->get($this->options['name']);
        if (null === $cookie) {
            return;
        }

        try {
            $rememberMeDetails = RememberMeDetails::fromRawCookie($cookie);
        } catch (AuthenticationException) {
            // malformed cookie should not fail the response and can be simply ignored
            return;
        }
        [$series] = explode(':', $rememberMeDetails->getValue());
        $this->tokenProvider->deleteTokenBySeries($series);
    }

    /**
     * @internal
     */
    public function getTokenProvider(): TokenProviderInterface
    {
        return $this->tokenProvider;
    }
}
