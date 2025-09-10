<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Profiler/open.css.twig */
class __TwigTemplate_3da422616b4938464ab30e3844df1f06 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.css.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.css.twig"));

        // line 1
        yield "#header {
    margin-bottom: 30px;
}

#source {
    background: var(--page-background);
    border: 1px solid var(--menu-border-color);
    box-shadow: 0 0 0 5px var(--page-background);
    border-radius: 6px;
    margin: 0 30px 45px 0;
    max-width: 960px;
    padding: 15px 20px;
}
.width-full #source {
    max-width: unset;
    width: 100%;
}

#source code {
    font-size: 15px;
}

#source .source-file-name {
    border-bottom: 1px solid var(--table-border-color);
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 15px 0;
    padding: 0 0 15px;
}
#source .source-file-name small {
    color: var(--color-muted);
}

#source .source-content {
    overflow-x: auto;
}
#source .source-content ol {
    margin: 0;
}
#source .source-content ol li {
    margin: 0 0 2px 0;
    padding-left: 5px;
    white-space: preserve nowrap;
}
#source .source-content ol li::marker {
    color: var(--color-muted);
    font-family: var(--font-family-monospace);
    padding-right: 5px;
}
#source .source-content li.selected {
    background: var(--yellow-100);
    border-radius: 4px;
}
.theme-dark #source .source-content li.selected {
    background: var(--gray-600);
}
#source .source-content li.selected::marker {
    color: var(--color-text);
    font-weight: bold;
}

#source span[style=\"color: #FF8000\"] { color: var(--highlight-comment) !important; }
#source span[style=\"color: #007700\"] { color: var(--highlight-keyword) !important; }
#source span[style=\"color: #0000BB\"] { color: var(--color-text) !important; }
#source span[style=\"color: #DD0000\"] { color: var(--highlight-string) !important; }

.file-metadata dt {
    color: var(--header-metadata-key);
    display: block;
    font-weight: bold;
}
.file-metadata dd {
    color: var(--header-metadata-value);
    margin: 5px 0 20px;

    /* needed to break the long file paths */
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-all;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/open.css.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("#header {
    margin-bottom: 30px;
}

#source {
    background: var(--page-background);
    border: 1px solid var(--menu-border-color);
    box-shadow: 0 0 0 5px var(--page-background);
    border-radius: 6px;
    margin: 0 30px 45px 0;
    max-width: 960px;
    padding: 15px 20px;
}
.width-full #source {
    max-width: unset;
    width: 100%;
}

#source code {
    font-size: 15px;
}

#source .source-file-name {
    border-bottom: 1px solid var(--table-border-color);
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 15px 0;
    padding: 0 0 15px;
}
#source .source-file-name small {
    color: var(--color-muted);
}

#source .source-content {
    overflow-x: auto;
}
#source .source-content ol {
    margin: 0;
}
#source .source-content ol li {
    margin: 0 0 2px 0;
    padding-left: 5px;
    white-space: preserve nowrap;
}
#source .source-content ol li::marker {
    color: var(--color-muted);
    font-family: var(--font-family-monospace);
    padding-right: 5px;
}
#source .source-content li.selected {
    background: var(--yellow-100);
    border-radius: 4px;
}
.theme-dark #source .source-content li.selected {
    background: var(--gray-600);
}
#source .source-content li.selected::marker {
    color: var(--color-text);
    font-weight: bold;
}

#source span[style=\"color: #FF8000\"] { color: var(--highlight-comment) !important; }
#source span[style=\"color: #007700\"] { color: var(--highlight-keyword) !important; }
#source span[style=\"color: #0000BB\"] { color: var(--color-text) !important; }
#source span[style=\"color: #DD0000\"] { color: var(--highlight-string) !important; }

.file-metadata dt {
    color: var(--header-metadata-key);
    display: block;
    font-weight: bold;
}
.file-metadata dd {
    color: var(--header-metadata-value);
    margin: 5px 0 20px;

    /* needed to break the long file paths */
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-all;
}
", "@WebProfiler/Profiler/open.css.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.css.twig");
    }
}
