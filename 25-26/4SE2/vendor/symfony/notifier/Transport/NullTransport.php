<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Transport;

use Symfony\Component\Notifier\Event\MessageEvent;
use Symfony\Component\Notifier\Event\SentMessageEvent;
use Symfony\Component\Notifier\Message\MessageInterface;
use Symfony\Component\Notifier\Message\NullMessage;
use Symfony\Component\Notifier\Message\SentMessage;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NullTransport implements TransportInterface
{
    private ?EventDispatcherInterface $dispatcher;

    public function __construct(?EventDispatcherInterface $dispatcher = null)
    {
        $this->dispatcher = $dispatcher;
    }

    public function send(MessageInterface $message): SentMessage
    {
        $message = new NullMessage($message);
        $sentMessage = new SentMessage($message, (string) $this);

        if (null === $this->dispatcher) {
            return $sentMessage;
        }

        $this->dispatcher->dispatch(new MessageEvent($message));
        $this->dispatcher->dispatch(new SentMessageEvent($sentMessage));

        return $sentMessage;
    }

    public function __toString(): string
    {
        return 'null';
    }

    public function supports(MessageInterface $message): bool
    {
        return true;
    }
}
