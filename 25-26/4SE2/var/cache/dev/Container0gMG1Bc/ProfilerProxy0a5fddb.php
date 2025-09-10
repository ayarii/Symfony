<?php

namespace Container0gMG1Bc;

class ProfilerProxy0a5fddb extends \Symfony\Component\HttpKernel\Profiler\Profiler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'collectors' => [parent::class, 'collectors', null, 16],
        "\0".parent::class."\0".'enabled' => [parent::class, 'enabled', null, 16],
        "\0".parent::class."\0".'initiallyEnabled' => [parent::class, 'initiallyEnabled', null, 16],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null, 16],
        "\0".parent::class."\0".'storage' => [parent::class, 'storage', null, 16],
        'collectors' => [parent::class, 'collectors', null, 16],
        'enabled' => [parent::class, 'enabled', null, 16],
        'initiallyEnabled' => [parent::class, 'initiallyEnabled', null, 16],
        'logger' => [parent::class, 'logger', null, 16],
        'storage' => [parent::class, 'storage', null, 16],
    ];

    public function isEnabled(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isEnabled(...\func_get_args());
        }

        return parent::isEnabled(...\func_get_args());
    }

    public function loadProfileFromResponse(\Symfony\Component\HttpFoundation\Response $response): ?\Symfony\Component\HttpKernel\Profiler\Profile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->loadProfileFromResponse(...\func_get_args());
        }

        return parent::loadProfileFromResponse(...\func_get_args());
    }

    public function loadProfile(string $token): ?\Symfony\Component\HttpKernel\Profiler\Profile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->loadProfile(...\func_get_args());
        }

        return parent::loadProfile(...\func_get_args());
    }

    public function saveProfile(\Symfony\Component\HttpKernel\Profiler\Profile $profile): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->saveProfile(...\func_get_args());
        }

        return parent::saveProfile(...\func_get_args());
    }

    public function find(?string $ip, ?string $url, ?int $limit, ?string $method, ?string $start, ?string $end, ?string $statusCode = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->find(...\func_get_args());
        }

        return parent::find(...\func_get_args());
    }

    public function collect(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response, ?\Throwable $exception = null): ?\Symfony\Component\HttpKernel\Profiler\Profile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->collect(...\func_get_args());
        }

        return parent::collect(...\func_get_args());
    }

    public function all(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->all(...\func_get_args());
        }

        return parent::all(...\func_get_args());
    }

    public function has(string $name): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->has(...\func_get_args());
        }

        return parent::has(...\func_get_args());
    }

    public function get(string $name): \Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ProfilerProxy0a5fddb', false)) {
    \class_alias(__NAMESPACE__.'\\ProfilerProxy0a5fddb', 'ProfilerProxy0a5fddb', false);
}
