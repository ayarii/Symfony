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

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_fa7f01a830f66e926967baab104f0ecc extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getCharset(), "html", null, true);
        yield "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

        ";
        // line 9
        $context["request_collector"] = ((array_key_exists("profile", $context)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 9), "request", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "collectors", [], "any", false, false, false, 9), "request", [], "any", false, false, false, 9), null)) : (null))) : (null));
        // line 10
        yield "        ";
        $context["status_code"] = (((($tmp =  !(null === (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 10, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 10, $this->source); })()), "statuscode", [], "any", false, false, false, 10), 0)) : (0))) : (0));
        // line 11
        yield "        ";
        $context["favicon_color"] = ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 11, $this->source); })()) > 399)) ? ("b41939") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 11, $this->source); })()) > 299)) ? ("af8503") : ("000000"))));
        // line 12
        yield "        <link rel=\"icon\" type=\"image/svg+xml\" href=\"data:image/svg+xml,%3Csvg viewBox='0 0 600 600' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='2'%3E%3Cstyle%3E%23circle %7B fill: %23";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["favicon_color"]) || array_key_exists("favicon_color", $context) ? $context["favicon_color"] : (function () { throw new RuntimeError('Variable "favicon_color" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "; %7D %23sf %7B fill: %23ffffff; %7D%3C/style%3E%3Cpath fill='none' d='M0 0h600v600H0z'/%3E%3CclipPath id='a'%3E%3Cpath d='M0 0h600v600H0z'/%3E%3C/clipPath%3E%3Cg clip-path='url(%23a)'%3E%3Cpath id='circle' d='M599.985 299.974c0 165.696-134.307 300.024-300.003 300.024C134.302 599.998 0 465.67 0 299.974 0 134.304 134.302-.002 299.982-.002c165.696 0 300.003 134.307 300.003 299.976z' fill-rule='nonzero'/%3E%3Cpath id='sf' d='M431.154 110.993c-30.474 1.043-57.08 17.866-76.884 41.076-21.926 25.49-36.508 55.696-47.03 86.55-18.791-15.416-33.282-35.364-63.457-44.04-23.311-6.702-47.794-3.948-70.314 12.833-10.667 7.965-18.016 19.995-21.51 31.34-9.05 29.416 9.506 55.61 17.942 65.004l18.444 19.743c3.792 3.879 12.95 13.983 8.467 28.458-4.82 15.764-23.809 25.938-43.285 19.958-8.703-2.67-21.199-9.147-18.396-18.257 1.145-3.739 3.82-6.553 5.264-9.74 1.305-2.788 1.941-4.858 2.337-6.099 3.557-11.602-1.31-26.714-13.747-30.56-11.613-3.562-23.488-.738-28.094 14.202-5.22 16.979 2.905 47.795 46.436 61.206 51 15.694 94.13-12.084 100.249-48.287 3.857-22.675-6.392-39.536-25.147-61.2l-15.293-16.92c-9.254-9.248-12.437-25.018-2.856-37.134 8.093-10.233 19.6-14.581 38.476-9.457 27.543 7.468 39.809 26.58 60.285 41.996-8.44 27.741-13.977 55.584-18.973 80.548l-3.07 18.626c-14.636 76.766-25.816 118.939-54.856 143.144-5.858 4.167-14.218 10.399-26.821 10.843-6.622.203-8.757-4.355-8.847-6.344-.15-4.628 3.755-6.756 6.349-8.837 3.889-2.124 9.757-5.633 9.356-16.882-.423-13.293-11.431-24.815-27.35-24.286-11.919.402-30.09 11.608-29.4 32.149.701 21.22 20.472 37.118 50.288 36.107 15.935-.535 51.528-7.018 86.592-48.699 40.82-47.8 52.235-102.576 60.82-142.673l9.591-52.946a177.574 177.574 0 0017.209 1.22c50.844 1.075 76.257-25.249 76.653-44.41.257-11.591-7.6-23.011-18.61-22.739-7.863.22-17.759 5.473-20.123 16.353-2.332 10.671 16.17 20.316 1.712 29.704-10.27 6.643-28.683 11.319-54.615 7.526l4.712-26.061c9.623-49.416 21.493-110.193 66.528-111.68 3.284-.155 15.282.139 15.56 8.088.08 2.637-.582 3.332-3.68 9.393-3.166 4.729-4.36 8.773-4.204 13.394.433 12.608 10.024 20.91 23.916 20.429 18.572-.626 23.906-18.7 23.6-27.998-.759-21.846-23.776-35.647-54.224-34.641z' fill-rule='nonzero'/%3E%3C/g%3E%3C/svg%3E\"/>

        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 24
        yield "    </head>
    <body>
        <script";
        // line 26
        if ((array_key_exists("csp_script_nonce", $context) && (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 26, $this->source); })()))) {
            yield " nonce=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
            if (null === localStorage.getItem('symfony/profiler/theme') || 'theme-auto' === localStorage.getItem('symfony/profiler/theme')) {
                document.body.classList.add((matchMedia('(prefers-color-scheme: dark)').matches ? 'theme-dark' : 'theme-light'));
                // needed to respond dynamically to OS changes without having to refresh the page
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                    document.body.classList.remove('theme-light', 'theme-dark');
                    document.body.classList.add(e.matches ? 'theme-dark' : 'theme-light');
                });
            } else {
                document.body.classList.add(localStorage.getItem('symfony/profiler/theme'));
            }

            document.body.classList.add(localStorage.getItem('symfony/profiler/width') || 'width-normal');

            document.body.classList.add(
                (navigator.appVersion.indexOf('Win') !== -1) ? 'windows' : (navigator.appVersion.indexOf('Mac') !== -1) ? 'macos' : 'linux'
            );
        </script>

        ";
        // line 45
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 46
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Symfony Profiler";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "            ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 20
        yield "
            ";
        // line 21
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 23
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        yield "                <style";
        if ((array_key_exists("csp_style_nonce", $context) && (isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 16, $this->source); })()))) {
            yield " nonce=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
                    ";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        yield "
                </style>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        yield "";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/base.html.twig";
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
        return array (  245 => 45,  234 => 22,  221 => 21,  207 => 17,  198 => 16,  185 => 15,  174 => 23,  172 => 21,  169 => 20,  166 => 15,  153 => 14,  130 => 7,  117 => 46,  115 => 45,  89 => 26,  85 => 24,  83 => 14,  77 => 12,  74 => 11,  71 => 10,  69 => 9,  64 => 7,  58 => 4,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}Symfony Profiler{% endblock %}</title>

        {% set request_collector = profile is defined ? profile.collectors.request|default(null) : null %}
        {% set status_code = request_collector is not null ? request_collector.statuscode|default(0) : 0 %}
        {% set favicon_color = status_code > 399 ? 'b41939' : status_code > 299 ? 'af8503' : '000000' %}
        <link rel=\"icon\" type=\"image/svg+xml\" href=\"data:image/svg+xml,%3Csvg viewBox='0 0 600 600' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='2'%3E%3Cstyle%3E%23circle %7B fill: %23{{ favicon_color }}; %7D %23sf %7B fill: %23ffffff; %7D%3C/style%3E%3Cpath fill='none' d='M0 0h600v600H0z'/%3E%3CclipPath id='a'%3E%3Cpath d='M0 0h600v600H0z'/%3E%3C/clipPath%3E%3Cg clip-path='url(%23a)'%3E%3Cpath id='circle' d='M599.985 299.974c0 165.696-134.307 300.024-300.003 300.024C134.302 599.998 0 465.67 0 299.974 0 134.304 134.302-.002 299.982-.002c165.696 0 300.003 134.307 300.003 299.976z' fill-rule='nonzero'/%3E%3Cpath id='sf' d='M431.154 110.993c-30.474 1.043-57.08 17.866-76.884 41.076-21.926 25.49-36.508 55.696-47.03 86.55-18.791-15.416-33.282-35.364-63.457-44.04-23.311-6.702-47.794-3.948-70.314 12.833-10.667 7.965-18.016 19.995-21.51 31.34-9.05 29.416 9.506 55.61 17.942 65.004l18.444 19.743c3.792 3.879 12.95 13.983 8.467 28.458-4.82 15.764-23.809 25.938-43.285 19.958-8.703-2.67-21.199-9.147-18.396-18.257 1.145-3.739 3.82-6.553 5.264-9.74 1.305-2.788 1.941-4.858 2.337-6.099 3.557-11.602-1.31-26.714-13.747-30.56-11.613-3.562-23.488-.738-28.094 14.202-5.22 16.979 2.905 47.795 46.436 61.206 51 15.694 94.13-12.084 100.249-48.287 3.857-22.675-6.392-39.536-25.147-61.2l-15.293-16.92c-9.254-9.248-12.437-25.018-2.856-37.134 8.093-10.233 19.6-14.581 38.476-9.457 27.543 7.468 39.809 26.58 60.285 41.996-8.44 27.741-13.977 55.584-18.973 80.548l-3.07 18.626c-14.636 76.766-25.816 118.939-54.856 143.144-5.858 4.167-14.218 10.399-26.821 10.843-6.622.203-8.757-4.355-8.847-6.344-.15-4.628 3.755-6.756 6.349-8.837 3.889-2.124 9.757-5.633 9.356-16.882-.423-13.293-11.431-24.815-27.35-24.286-11.919.402-30.09 11.608-29.4 32.149.701 21.22 20.472 37.118 50.288 36.107 15.935-.535 51.528-7.018 86.592-48.699 40.82-47.8 52.235-102.576 60.82-142.673l9.591-52.946a177.574 177.574 0 0017.209 1.22c50.844 1.075 76.257-25.249 76.653-44.41.257-11.591-7.6-23.011-18.61-22.739-7.863.22-17.759 5.473-20.123 16.353-2.332 10.671 16.17 20.316 1.712 29.704-10.27 6.643-28.683 11.319-54.615 7.526l4.712-26.061c9.623-49.416 21.493-110.193 66.528-111.68 3.284-.155 15.282.139 15.56 8.088.08 2.637-.582 3.332-3.68 9.393-3.166 4.729-4.36 8.773-4.204 13.394.433 12.608 10.024 20.91 23.916 20.429 18.572-.626 23.906-18.7 23.6-27.998-.759-21.846-23.776-35.647-54.224-34.641z' fill-rule='nonzero'/%3E%3C/g%3E%3C/svg%3E\"/>

        {% block head %}
            {% block stylesheets %}
                <style{% if csp_style_nonce is defined and csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
                    {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
                </style>
            {% endblock %}

            {% block javascripts %}
            {% endblock %}
        {% endblock %}
    </head>
    <body>
        <script{% if csp_script_nonce is defined and csp_script_nonce %} nonce=\"{{ csp_script_nonce }}\"{% endif %}>
            if (null === localStorage.getItem('symfony/profiler/theme') || 'theme-auto' === localStorage.getItem('symfony/profiler/theme')) {
                document.body.classList.add((matchMedia('(prefers-color-scheme: dark)').matches ? 'theme-dark' : 'theme-light'));
                // needed to respond dynamically to OS changes without having to refresh the page
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                    document.body.classList.remove('theme-light', 'theme-dark');
                    document.body.classList.add(e.matches ? 'theme-dark' : 'theme-light');
                });
            } else {
                document.body.classList.add(localStorage.getItem('symfony/profiler/theme'));
            }

            document.body.classList.add(localStorage.getItem('symfony/profiler/width') || 'width-normal');

            document.body.classList.add(
                (navigator.appVersion.indexOf('Win') !== -1) ? 'windows' : (navigator.appVersion.indexOf('Mac') !== -1) ? 'macos' : 'linux'
            );
        </script>

        {% block body '' %}
    </body>
</html>
", "@WebProfiler/Profiler/base.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\base.html.twig");
    }
}
