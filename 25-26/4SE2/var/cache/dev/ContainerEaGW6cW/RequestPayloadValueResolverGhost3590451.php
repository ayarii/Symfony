<?php

namespace ContainerEaGW6cW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ValueResolverInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'RequestPayloadValueResolver.php';

class RequestPayloadValueResolverGhost3590451 extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', null, 530],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', null, 530],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', null, 530],
        'serializer' => [parent::class, 'serializer', null, 530],
        'translator' => [parent::class, 'translator', null, 530],
        'validator' => [parent::class, 'validator', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost3590451', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost3590451', 'RequestPayloadValueResolverGhost3590451', false);
}
