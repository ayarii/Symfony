<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Turbo'.\DIRECTORY_SEPARATOR.'BroadcastConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class TurboConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $broadcast;
    private $defaultTransport;
    private $_usedProperties = [];

    /**
     * @default {"enabled":true,"entity_template_prefixes":{"App\\Entity\\":"broadcast\/"},"doctrine_orm":{"enabled":true}}
    */
    public function broadcast(array $value = []): \Symfony\Config\Turbo\BroadcastConfig
    {
        if (null === $this->broadcast) {
            $this->_usedProperties['broadcast'] = true;
            $this->broadcast = new \Symfony\Config\Turbo\BroadcastConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "broadcast()" has already been initialized. You cannot pass values the second time you call broadcast().');
        }

        return $this->broadcast;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTransport($value): static
    {
        $this->_usedProperties['defaultTransport'] = true;
        $this->defaultTransport = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'turbo';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('broadcast', $value)) {
            $this->_usedProperties['broadcast'] = true;
            $this->broadcast = new \Symfony\Config\Turbo\BroadcastConfig($value['broadcast']);
            unset($value['broadcast']);
        }

        if (array_key_exists('default_transport', $value)) {
            $this->_usedProperties['defaultTransport'] = true;
            $this->defaultTransport = $value['default_transport'];
            unset($value['default_transport']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['broadcast'])) {
            $output['broadcast'] = $this->broadcast->toArray();
        }
        if (isset($this->_usedProperties['defaultTransport'])) {
            $output['default_transport'] = $this->defaultTransport;
        }

        return $output;
    }

}
