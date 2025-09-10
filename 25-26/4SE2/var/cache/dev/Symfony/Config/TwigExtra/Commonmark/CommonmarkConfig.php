<?php

namespace Symfony\Config\TwigExtra\Commonmark;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CommonmarkConfig 
{
    private $enableEm;
    private $enableStrong;
    private $useAsterisk;
    private $useUnderscore;
    private $unorderedListMarkers;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableEm($value): static
    {
        $this->_usedProperties['enableEm'] = true;
        $this->enableEm = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableStrong($value): static
    {
        $this->_usedProperties['enableStrong'] = true;
        $this->enableStrong = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useAsterisk($value): static
    {
        $this->_usedProperties['useAsterisk'] = true;
        $this->useAsterisk = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useUnderscore($value): static
    {
        $this->_usedProperties['useUnderscore'] = true;
        $this->useUnderscore = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function unorderedListMarkers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['unorderedListMarkers'] = true;
        $this->unorderedListMarkers = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable_em', $value)) {
            $this->_usedProperties['enableEm'] = true;
            $this->enableEm = $value['enable_em'];
            unset($value['enable_em']);
        }

        if (array_key_exists('enable_strong', $value)) {
            $this->_usedProperties['enableStrong'] = true;
            $this->enableStrong = $value['enable_strong'];
            unset($value['enable_strong']);
        }

        if (array_key_exists('use_asterisk', $value)) {
            $this->_usedProperties['useAsterisk'] = true;
            $this->useAsterisk = $value['use_asterisk'];
            unset($value['use_asterisk']);
        }

        if (array_key_exists('use_underscore', $value)) {
            $this->_usedProperties['useUnderscore'] = true;
            $this->useUnderscore = $value['use_underscore'];
            unset($value['use_underscore']);
        }

        if (array_key_exists('unordered_list_markers', $value)) {
            $this->_usedProperties['unorderedListMarkers'] = true;
            $this->unorderedListMarkers = $value['unordered_list_markers'];
            unset($value['unordered_list_markers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableEm'])) {
            $output['enable_em'] = $this->enableEm;
        }
        if (isset($this->_usedProperties['enableStrong'])) {
            $output['enable_strong'] = $this->enableStrong;
        }
        if (isset($this->_usedProperties['useAsterisk'])) {
            $output['use_asterisk'] = $this->useAsterisk;
        }
        if (isset($this->_usedProperties['useUnderscore'])) {
            $output['use_underscore'] = $this->useUnderscore;
        }
        if (isset($this->_usedProperties['unorderedListMarkers'])) {
            $output['unordered_list_markers'] = $this->unorderedListMarkers;
        }

        return $output;
    }

}
