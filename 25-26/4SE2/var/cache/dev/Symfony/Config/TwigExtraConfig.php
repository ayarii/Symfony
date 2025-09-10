<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'HtmlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'MarkdownConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'IntlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CssinlinerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'InkyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'StringConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CommonmarkConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigExtraConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $cache;
    private $html;
    private $markdown;
    private $intl;
    private $cssinliner;
    private $inky;
    private $string;
    private $commonmark;
    private $_usedProperties = [];

    /**
     * @default {"enabled":false}
    */
    public function cache(array $value = []): \Symfony\Config\TwigExtra\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\TwigExtra\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    /**
     * @default {"enabled":false}
    */
    public function html(array $value = []): \Symfony\Config\TwigExtra\HtmlConfig
    {
        if (null === $this->html) {
            $this->_usedProperties['html'] = true;
            $this->html = new \Symfony\Config\TwigExtra\HtmlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "html()" has already been initialized. You cannot pass values the second time you call html().');
        }

        return $this->html;
    }

    /**
     * @default {"enabled":false}
    */
    public function markdown(array $value = []): \Symfony\Config\TwigExtra\MarkdownConfig
    {
        if (null === $this->markdown) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = new \Symfony\Config\TwigExtra\MarkdownConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "markdown()" has already been initialized. You cannot pass values the second time you call markdown().');
        }

        return $this->markdown;
    }

    /**
     * @default {"enabled":false}
    */
    public function intl(array $value = []): \Symfony\Config\TwigExtra\IntlConfig
    {
        if (null === $this->intl) {
            $this->_usedProperties['intl'] = true;
            $this->intl = new \Symfony\Config\TwigExtra\IntlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "intl()" has already been initialized. You cannot pass values the second time you call intl().');
        }

        return $this->intl;
    }

    /**
     * @default {"enabled":false}
    */
    public function cssinliner(array $value = []): \Symfony\Config\TwigExtra\CssinlinerConfig
    {
        if (null === $this->cssinliner) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = new \Symfony\Config\TwigExtra\CssinlinerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cssinliner()" has already been initialized. You cannot pass values the second time you call cssinliner().');
        }

        return $this->cssinliner;
    }

    /**
     * @default {"enabled":false}
    */
    public function inky(array $value = []): \Symfony\Config\TwigExtra\InkyConfig
    {
        if (null === $this->inky) {
            $this->_usedProperties['inky'] = true;
            $this->inky = new \Symfony\Config\TwigExtra\InkyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "inky()" has already been initialized. You cannot pass values the second time you call inky().');
        }

        return $this->inky;
    }

    /**
     * @default {"enabled":false}
    */
    public function string(array $value = []): \Symfony\Config\TwigExtra\StringConfig
    {
        if (null === $this->string) {
            $this->_usedProperties['string'] = true;
            $this->string = new \Symfony\Config\TwigExtra\StringConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "string()" has already been initialized. You cannot pass values the second time you call string().');
        }

        return $this->string;
    }

    public function commonmark(array $value = []): \Symfony\Config\TwigExtra\CommonmarkConfig
    {
        if (null === $this->commonmark) {
            $this->_usedProperties['commonmark'] = true;
            $this->commonmark = new \Symfony\Config\TwigExtra\CommonmarkConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "commonmark()" has already been initialized. You cannot pass values the second time you call commonmark().');
        }

        return $this->commonmark;
    }

    public function getExtensionAlias(): string
    {
        return 'twig_extra';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = \is_array($value['cache']) ? new \Symfony\Config\TwigExtra\CacheConfig($value['cache']) : $value['cache'];
            unset($value['cache']);
        }

        if (array_key_exists('html', $value)) {
            $this->_usedProperties['html'] = true;
            $this->html = \is_array($value['html']) ? new \Symfony\Config\TwigExtra\HtmlConfig($value['html']) : $value['html'];
            unset($value['html']);
        }

        if (array_key_exists('markdown', $value)) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = \is_array($value['markdown']) ? new \Symfony\Config\TwigExtra\MarkdownConfig($value['markdown']) : $value['markdown'];
            unset($value['markdown']);
        }

        if (array_key_exists('intl', $value)) {
            $this->_usedProperties['intl'] = true;
            $this->intl = \is_array($value['intl']) ? new \Symfony\Config\TwigExtra\IntlConfig($value['intl']) : $value['intl'];
            unset($value['intl']);
        }

        if (array_key_exists('cssinliner', $value)) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = \is_array($value['cssinliner']) ? new \Symfony\Config\TwigExtra\CssinlinerConfig($value['cssinliner']) : $value['cssinliner'];
            unset($value['cssinliner']);
        }

        if (array_key_exists('inky', $value)) {
            $this->_usedProperties['inky'] = true;
            $this->inky = \is_array($value['inky']) ? new \Symfony\Config\TwigExtra\InkyConfig($value['inky']) : $value['inky'];
            unset($value['inky']);
        }

        if (array_key_exists('string', $value)) {
            $this->_usedProperties['string'] = true;
            $this->string = \is_array($value['string']) ? new \Symfony\Config\TwigExtra\StringConfig($value['string']) : $value['string'];
            unset($value['string']);
        }

        if (array_key_exists('commonmark', $value)) {
            $this->_usedProperties['commonmark'] = true;
            $this->commonmark = new \Symfony\Config\TwigExtra\CommonmarkConfig($value['commonmark']);
            unset($value['commonmark']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache instanceof \Symfony\Config\TwigExtra\CacheConfig ? $this->cache->toArray() : $this->cache;
        }
        if (isset($this->_usedProperties['html'])) {
            $output['html'] = $this->html instanceof \Symfony\Config\TwigExtra\HtmlConfig ? $this->html->toArray() : $this->html;
        }
        if (isset($this->_usedProperties['markdown'])) {
            $output['markdown'] = $this->markdown instanceof \Symfony\Config\TwigExtra\MarkdownConfig ? $this->markdown->toArray() : $this->markdown;
        }
        if (isset($this->_usedProperties['intl'])) {
            $output['intl'] = $this->intl instanceof \Symfony\Config\TwigExtra\IntlConfig ? $this->intl->toArray() : $this->intl;
        }
        if (isset($this->_usedProperties['cssinliner'])) {
            $output['cssinliner'] = $this->cssinliner instanceof \Symfony\Config\TwigExtra\CssinlinerConfig ? $this->cssinliner->toArray() : $this->cssinliner;
        }
        if (isset($this->_usedProperties['inky'])) {
            $output['inky'] = $this->inky instanceof \Symfony\Config\TwigExtra\InkyConfig ? $this->inky->toArray() : $this->inky;
        }
        if (isset($this->_usedProperties['string'])) {
            $output['string'] = $this->string instanceof \Symfony\Config\TwigExtra\StringConfig ? $this->string->toArray() : $this->string;
        }
        if (isset($this->_usedProperties['commonmark'])) {
            $output['commonmark'] = $this->commonmark->toArray();
        }

        return $output;
    }

}
