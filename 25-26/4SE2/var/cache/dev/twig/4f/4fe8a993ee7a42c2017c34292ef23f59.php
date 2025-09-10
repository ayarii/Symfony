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

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_661c96b7c44810f695f30a3be2ff2600 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Redirection Intercepted";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        .sf-redirection-details {
            background: var(--page-background);
            box-shadow: inset 0 0 0 1px var(--menu-border-color), 0 0 0 5px var(--page-background);
            border-radius: 6px;
            margin: 45px auto 30px;
            max-width: 800px;
            padding: 30px 45px;
        }
        .sf-redirection-details h1 {
            font-size: 21px;
            font-weight: bold;
            margin: 0 0 10px;
        }
        .sf-redirection-details p {
            margin-top: 0;
        }
        .sf-redirection-details .sf-redirection-help {
            color: var(--color-muted);
            font-size: 14px;
            margin: 45px 0 0;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        yield "    <div class=\"container\">
        ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", [], false);
        yield "

        <div class=\"sf-reset sf-redirection-details\">
            <div class=\"block-exception\">
                <h1>Redirection Intercepted</h1>

                ";
        // line 42
        $context["absolute_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 42, $this->source); })()));
        // line 43
        yield "                <p>This request redirects to <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</strong></p>

                <p><a class=\"btn\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "\">Follow redirect</a></p>

                <p class=\"sf-redirection-help\">
                    The redirect was intercepted by the Symfony Web Debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  172 => 45,  166 => 43,  164 => 42,  155 => 36,  152 => 35,  139 => 34,  101 => 7,  88 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block title 'Redirection Intercepted' %}


{% block head %}
    {{ parent() }}

    <style>
        .sf-redirection-details {
            background: var(--page-background);
            box-shadow: inset 0 0 0 1px var(--menu-border-color), 0 0 0 5px var(--page-background);
            border-radius: 6px;
            margin: 45px auto 30px;
            max-width: 800px;
            padding: 30px 45px;
        }
        .sf-redirection-details h1 {
            font-size: 21px;
            font-weight: bold;
            margin: 0 0 10px;
        }
        .sf-redirection-details p {
            margin-top: 0;
        }
        .sf-redirection-details .sf-redirection-help {
            color: var(--color-muted);
            font-size: 14px;
            margin: 45px 0 0;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

        <div class=\"sf-reset sf-redirection-details\">
            <div class=\"block-exception\">
                <h1>Redirection Intercepted</h1>

                {% set absolute_url = absolute_url(location) %}
                <p>This request redirects to <strong>{{ absolute_url }}</strong></p>

                <p><a class=\"btn\" href=\"{{ absolute_url }}\">Follow redirect</a></p>

                <p class=\"sf-redirection-help\">
                    The redirect was intercepted by the Symfony Web Debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
