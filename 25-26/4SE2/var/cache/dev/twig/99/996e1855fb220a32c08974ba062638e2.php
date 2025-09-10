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

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_95edf39a88d7003d6748734dd22004cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        yield "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\" class=\"sf-minitoolbar\" data-no-turbolink data-turbo=\"false\">
    <button type=\"button\" title=\"Show Symfony toolbar\" id=\"sfToolbarMiniToggler-";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\" accesskey=\"D\" aria-expanded=\"false\" aria-controls=\"sfToolbarMainContent-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 4
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
        yield "
    </button>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\" class=\"sf-toolbarreset notranslate clear-fix\" data-no-turbolink data-turbo=\"false\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            yield "        ";
            if (            $this->load($context["template"], 11)->unwrap()->hasBlock("toolbar", $context)) {
                // line 12
                yield "            ";
                $_v0 = $context;
                $_v1 = ["collector" => (((($tmp =                 // line 13
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })()), "getcollector", [$context["name"]], "method", false, false, false, 13)) : (null)), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 14, $this->source); })()), "token" => (((                // line 15
array_key_exists("token", $context) &&  !(null === $context["token"]))) ? ($context["token"]) : ((((($tmp = (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })()), "token", [], "any", false, false, false, 15)) : (null)))), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 17, $this->source); })()), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 18, $this->source); })()), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 19, $this->source); })())];
                if (!is_iterable($_v1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 13, $this->getSourceContext());
                }
                $_v1 = CoreExtension::toArray($_v1);
                $context = $_v1 + $context + $this->env->getGlobals();
                // line 21
                yield "                ";
                yield from                 $this->load($context["template"], 21)->unwrap()->yieldBlock("toolbar", $context);
                yield "
            ";
                $context = $_v0;
                // line 23
                yield "        ";
            }
            // line 24
            yield "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    ";
        if ((($tmp = (isset($context["full_stack"]) || array_key_exists("full_stack", $context) ? $context["full_stack"] : (function () { throw new RuntimeError('Variable "full_stack" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        <div class=\"sf-full-stack sf-toolbar-block sf-toolbar-block-full-stack sf-toolbar-status-red sf-toolbar-block-right\">
            <div class=\"sf-toolbar-icon\">
                <span class=\"sf-toolbar-value\">Using symfony/symfony is NOT supported</span>
            </div>
            <div class=\"sf-toolbar-info sf-toolbar-status-red\">
                <p>This project is using Symfony via the \"symfony/symfony\" package.</p>
                <p>This is NOT supported anymore since Symfony 4.0.</p>
                <p>Even if it seems to work well, it has some important limitations with no workarounds.</p>
                <p>Using this package also makes your project slower.</p>

                <strong>Please, stop using this package and replace it with individual packages instead.</strong>
            </div>
            <div></div>
        </div>
    ";
        }
        // line 41
        yield "
    <button class=\"hide-button\" type=\"button\" id=\"sfToolbarHideButton-";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\" title=\"Close Toolbar\" accesskey=\"D\" aria-expanded=\"true\" aria-controls=\"sfToolbarMainContent-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 43
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/close.svg");
        yield "
    </button>
</div>
<!-- END of Symfony Web Debug Toolbar -->
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
        return "@WebProfiler/Profiler/toolbar.html.twig";
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
        return array (  164 => 43,  158 => 42,  155 => 41,  138 => 26,  135 => 25,  121 => 24,  118 => 23,  112 => 21,  105 => 19,  104 => 18,  103 => 17,  102 => 16,  101 => 15,  100 => 14,  99 => 13,  96 => 12,  93 => 11,  76 => 10,  72 => 9,  67 => 7,  61 => 4,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink data-turbo=\"false\">
    <button type=\"button\" title=\"Show Symfony toolbar\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\" aria-expanded=\"false\" aria-controls=\"sfToolbarMainContent-{{ token }}\">
        {{ source('@WebProfiler/Icon/symfony.svg') }}
    </button>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset notranslate clear-fix\" data-no-turbolink data-turbo=\"false\">
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile ? profile.getcollector(name) : null,
                profiler_url: profiler_url,
                token: token ?? (profile ? profile.token : null),
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}
    {% if full_stack %}
        <div class=\"sf-full-stack sf-toolbar-block sf-toolbar-block-full-stack sf-toolbar-status-red sf-toolbar-block-right\">
            <div class=\"sf-toolbar-icon\">
                <span class=\"sf-toolbar-value\">Using symfony/symfony is NOT supported</span>
            </div>
            <div class=\"sf-toolbar-info sf-toolbar-status-red\">
                <p>This project is using Symfony via the \"symfony/symfony\" package.</p>
                <p>This is NOT supported anymore since Symfony 4.0.</p>
                <p>Even if it seems to work well, it has some important limitations with no workarounds.</p>
                <p>Using this package also makes your project slower.</p>

                <strong>Please, stop using this package and replace it with individual packages instead.</strong>
            </div>
            <div></div>
        </div>
    {% endif %}

    <button class=\"hide-button\" type=\"button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" accesskey=\"D\" aria-expanded=\"true\" aria-controls=\"sfToolbarMainContent-{{ token }}\">
        {{ source('@WebProfiler/Icon/close.svg') }}
    </button>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}
