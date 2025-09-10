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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_4f1a70313906aac236bc053f82f1e86a extends Template
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
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        .empty-query-post-files {
            display: flex;
            justify-content: space-between;
        }
        .empty-query-post-files > div {
            flex: 1;
        }
        .empty-query-post-files > div + div {
            margin-left: 30px;
        }
        .empty-query-post-files h3 {
            margin-top: 0;
        }
        .empty-query-post-files .empty {
            margin-bottom: 0;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 27
        yield "    ";
        $context["request_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "        ";
            yield $this->getTemplateForMacro("macro_set_handler", $context, 28, $this->getSourceContext())->macro_set_handler(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "controller", [], "any", false, false, false, 28)]);
            yield "
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        yield "
    ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "redirect", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "        ";
            $context["redirect_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 33
                yield "            ";
                yield $this->getTemplateForMacro("macro_set_handler", $context, 33, $this->getSourceContext())->macro_set_handler(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "redirect", [], "any", false, false, false, 33), "controller", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "redirect", [], "any", false, false, false, 33), "route", [], "any", false, false, false, 33), ((("GET" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "redirect", [], "any", false, false, false, 33), "method", [], "any", false, false, false, 33))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "redirect", [], "any", false, false, false, 33), "method", [], "any", false, false, false, 33)) : (""))]);
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            yield "    ";
        }
        // line 36
        yield "
    ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "forwardtoken", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        ";
            $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 38, $this->source); })()), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "forwardtoken", [], "any", false, false, false, 38)], "method", false, false, false, 38);
            // line 39
            yield "        ";
            $context["forward_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 40
                yield "            ";
                yield $this->getTemplateForMacro("macro_set_handler", $context, 40, $this->getSourceContext())->macro_set_handler(...[(((($tmp = (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 40, $this->source); })()), "collector", ["request"], "method", false, false, false, 40), "controller", [], "any", false, false, false, 40)) : ("n/a"))]);
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "    ";
        }
        // line 43
        yield "
    ";
        // line 44
        $context["request_status_code_color"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "statuscode", [], "any", false, false, false, 44) >= 400)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "statuscode", [], "any", false, false, false, 44) >= 300)) ? ("yellow") : ("green"))));
        // line 45
        yield "
    ";
        // line 46
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["request_status_code_color"]) || array_key_exists("request_status_code_color", $context) ? $context["request_status_code_color"] : (function () { throw new RuntimeError('Variable "request_status_code_color" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "statuscode", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
        ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "route", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "redirect", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"sf-toolbar-request-icon\">";
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/redirect.svg");
                    yield "</span>";
                }
                // line 50
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "forwardtoken", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"sf-toolbar-request-icon\">";
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/forward.svg");
                    yield "</span>";
                }
                // line 51
                yield "            <span class=\"sf-toolbar-label\">";
                yield ((("GET" != CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "method", [], "any", false, false, false, 51))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "method", [], "any", false, false, false, 51), "html", null, true)) : (""));
                yield " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "route", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
        ";
            }
            // line 54
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "
    ";
        // line 56
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "statuscode", [], "any", false, false, false, 60), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "statustext", [], "any", false, false, false, 60), "html", null, true);
            yield "</span>
            </div>

            ";
            // line 63
            if (("GET" != CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "method", [], "any", false, false, false, 63))) {
                // line 64
                yield "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "method", [], "any", false, false, false, 66), "html", null, true);
                yield "</span>
                </div>";
            }
            // line 69
            yield "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["request_handler"]) || array_key_exists("request_handler", $context) ? $context["request_handler"] : (function () { throw new RuntimeError('Variable "request_handler" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "route", [], "any", false, false, false, 77), "n/a")) : ("n/a")), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
            // line 82
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
            // line 87
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "statelesscheck", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>
        </div>

        ";
            // line 91
            if (array_key_exists("redirect_handler", $context)) {
                // line 92
                yield "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "redirect", [], "any", false, false, false, 95), "status_code", [], "any", false, false, false, 95), "html", null, true);
                yield "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context) ? $context["redirect_handler"] : (function () { throw new RuntimeError('Variable "redirect_handler" does not exist.', 99, $this->source); })()), "html", null, true);
                yield "
                        (<a href=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "redirect", [], "any", false, false, false, 100), "token", [], "any", false, false, false, 100)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "redirect", [], "any", false, false, false, 100), "token", [], "any", false, false, false, 100), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 105
            yield "
        ";
            // line 106
            if (array_key_exists("forward_handler", $context)) {
                // line 107
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["forward_handler"]) || array_key_exists("forward_handler", $context) ? $context["forward_handler"] : (function () { throw new RuntimeError('Variable "forward_handler" does not exist.', 111, $this->source); })()), "html", null, true);
                yield "
                        (<a href=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "forwardtoken", [], "any", false, false, false, 112)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "forwardtoken", [], "any", false, false, false, 112), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 117
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "
    ";
        // line 119
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 119, $this->source); })())]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 123
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 124
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/request.svg");
        yield "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 130
        yield "    ";
        $context["controller_name"] = $this->getTemplateForMacro("macro_set_handler", $context, 130, $this->getSourceContext())->macro_set_handler(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 130, $this->source); })()), "controller", [], "any", false, false, false, 130)]);
        // line 131
        yield "    <h2>
        ";
        // line 132
        yield ((CoreExtension::inFilter("n/a", (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 132, $this->source); })()))) ? ("Request / Response") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 132, $this->source); })()), "html", null, true)));
        yield "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        $context["has_no_query_post_or_files"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 140, $this->source); })()), "requestquery", [], "any", false, false, false, 140), "all", [], "any", false, false, false, 140)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 140, $this->source); })()), "requestrequest", [], "any", false, false, false, 140), "all", [], "any", false, false, false, 140))) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 140, $this->source); })()), "requestfiles", [], "any", false, false, false, 140)));
        // line 141
        yield "                ";
        if ((($tmp = (isset($context["has_no_query_post_or_files"]) || array_key_exists("has_no_query_post_or_files", $context) ? $context["has_no_query_post_or_files"] : (function () { throw new RuntimeError('Variable "has_no_query_post_or_files" does not exist.', 141, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                ";
        } else {
            // line 157
            yield "                    <h3>GET Parameters</h3>

                    ";
            // line 159
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "requestquery", [], "any", false, false, false, 159), "all", [], "any", false, false, false, 159))) {
                // line 160
                yield "                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    ";
            } else {
                // line 164
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 164, $this->source); })()), "requestquery", [], "any", false, false, false, 164), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 166
            yield "
                    <h3>POST Parameters</h3>

                    ";
            // line 169
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 169, $this->source); })()), "requestrequest", [], "any", false, false, false, 169), "all", [], "any", false, false, false, 169))) {
                // line 170
                yield "                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    ";
            } else {
                // line 174
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 174, $this->source); })()), "requestrequest", [], "any", false, false, false, 174), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 176
            yield "
                    <h4>Uploaded Files</h4>

                    ";
            // line 179
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 179, $this->source); })()), "requestfiles", [], "any", false, false, false, 179))) {
                // line 180
                yield "                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    ";
            } else {
                // line 184
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "requestfiles", [], "any", false, false, false, 184), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 186
            yield "                ";
        }
        // line 187
        yield "
                <h3>Request Attributes</h3>

                ";
        // line 190
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 190, $this->source); })()), "requestattributes", [], "any", false, false, false, 190), "all", [], "any", false, false, false, 190))) {
            // line 191
            yield "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 195
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 195, $this->source); })()), "requestattributes", [], "any", false, false, false, 195)], false);
            yield "
                ";
        }
        // line 197
        yield "
                <h3>Request Headers</h3>
                ";
        // line 199
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "requestheaders", [], "any", false, false, false, 199), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "

                <h3>Request Content</h3>

                ";
        // line 203
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 203, $this->source); })()), "content", [], "any", false, false, false, 203) == false)) {
            // line 204
            yield "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 207
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 207, $this->source); })()), "content", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "                    <div class=\"sf-tabs\">
                        ";
            // line 209
            $context["prettyJson"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "isJsonRequest", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "prettyJson", [], "any", false, false, false, 209)) : (null));
            // line 210
            yield "                        ";
            if ((($tmp =  !(null === (isset($context["prettyJson"]) || array_key_exists("prettyJson", $context) ? $context["prettyJson"] : (function () { throw new RuntimeError('Variable "prettyJson" does not exist.', 210, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 211
                yield "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prettyJson"]) || array_key_exists("prettyJson", $context) ? $context["prettyJson"] : (function () { throw new RuntimeError('Variable "prettyJson" does not exist.', 215, $this->source); })()), "html", null, true);
                yield "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 220
            yield "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 225, $this->source); })()), "content", [], "any", false, false, false, 225), "html", null, true);
            yield "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 231
            yield "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 235
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 244
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 244, $this->source); })()), "responseheaders", [], "any", false, false, false, 244), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "
            </div>
        </div>

        <div class=\"tab ";
        // line 248
        yield (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 248, $this->source); })()), "requestcookies", [], "any", false, false, false, 248), "all", [], "any", false, false, false, 248)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 248, $this->source); })()), "responsecookies", [], "any", false, false, false, 248), "all", [], "any", false, false, false, 248)))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 254
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 254, $this->source); })()), "requestcookies", [], "any", false, false, false, 254), "all", [], "any", false, false, false, 254))) {
            // line 255
            yield "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 259
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "requestcookies", [], "any", false, false, false, 259)], false);
            yield "
                ";
        }
        // line 261
        yield "
                <h3>Response Cookies</h3>

                ";
        // line 264
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 264, $this->source); })()), "responsecookies", [], "any", false, false, false, 264), "all", [], "any", false, false, false, 264))) {
            // line 265
            yield "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 269
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 269, $this->source); })()), "responsecookies", [], "any", false, false, false, 269)], true);
            yield "
                ";
        }
        // line 271
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 274
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 274, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 274))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Session";
        // line 275
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 275, $this->source); })()), "sessionusages", [], "any", false, false, false, 275))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 275, $this->source); })()), "sessionusages", [], "any", false, false, false, 275)), "html", null, true);
            yield "</span>";
        }
        yield "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 280
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 280, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 280))) {
            // line 281
            yield "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 285
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 285, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 285)], false);
            yield "
                ";
        }
        // line 287
        yield "
                <h3>Session Attributes</h3>

                ";
        // line 290
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 290, $this->source); })()), "sessionattributes", [], "any", false, false, false, 290))) {
            // line 291
            yield "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 295
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 295, $this->source); })()), "sessionattributes", [], "any", false, false, false, 295), "labels" => ["Attribute", "Value"]], false);
            yield "
                ";
        }
        // line 297
        yield "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 302, $this->source); })()), "sessionusages", [], "any", false, false, false, 302)), "html", null, true);
        yield "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 307
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 307, $this->source); })()), "statelesscheck", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 312
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 312, $this->source); })()), "sessionusages", [], "any", false, false, false, 312))) {
            // line 313
            yield "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 317
            yield "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 325, $this->source); })()), "sessionusages", [], "any", false, false, false, 325));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 326
                yield "                            <tr>
                                <td class=\"font-normal\">";
                // line 328
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 328), CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 328));
                // line 329
                if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 329, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 329, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 329), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 329), "html", null, true);
                    yield "\">";
                }
                // line 330
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 330), "html", null, true);
                // line 331
                if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 331, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
                // line 332
                yield "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 333
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 334
                yield "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usage_id"]) || array_key_exists("usage_id", $context) ? $context["usage_id"] : (function () { throw new RuntimeError('Variable "usage_id" does not exist.', 334, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usage_id"]) || array_key_exists("usage_id", $context) ? $context["usage_id"] : (function () { throw new RuntimeError('Variable "usage_id" does not exist.', 336, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 337
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 337), 2);
                yield "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['usage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 345
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 348
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 348, $this->source); })()), "flashes", [], "any", false, false, false, 348))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 354
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 354, $this->source); })()), "flashes", [], "any", false, false, false, 354))) {
            // line 355
            yield "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 359
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 359, $this->source); })()), "flashes", [], "any", false, false, false, 359)], false);
            yield "
                ";
        }
        // line 361
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 369
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 369, $this->source); })()), "dotenvvars", [], "any", false, false, false, 369)], false);
        yield "

                <h4>Defined as regular env variables</h4>
                ";
        // line 372
        $context["requestserver"] = [];
        // line 373
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 373, $this->source); })()), "requestserver", [], "any", false, false, false, 373), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 373, $this->source); })()), "dotenvvars", [], "any", false, false, false, 373), "keys", [], "any", false, false, false, 373)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 374
            yield "                    ";
            $context["requestserver"] = Twig\Extension\CoreExtension::merge((isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 374, $this->source); })()), [ (string)$context["key"] => $context["value"]]);
            // line 375
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => (isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 376, $this->source); })())], false);
        yield "
            </div>
        </div>

        ";
        // line 380
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 380, $this->source); })()), "parent", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 381
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 386, $this->source); })()), "parent", [], "any", false, false, false, 386), "token", [], "any", false, false, false, 386)]), "html", null, true);
            yield "\">Return to parent request</a>
                    <small>(token = ";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 387, $this->source); })()), "parent", [], "any", false, false, false, 387), "token", [], "any", false, false, false, 387), "html", null, true);
            yield ")</small>
                </h3>

                ";
            // line 390
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 390, $this->source); })()), "parent", [], "any", false, false, false, 390), "getcollector", ["request"], "method", false, false, false, 390), "requestattributes", [], "any", false, false, false, 390)], false);
            yield "
            </div>
        </div>
        ";
        }
        // line 394
        yield "
        ";
        // line 395
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 395, $this->source); })()), "children", [], "any", false, false, false, 395))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 396
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 397, $this->source); })()), "children", [], "any", false, false, false, 397)), "html", null, true);
            yield "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 400, $this->source); })()), "children", [], "any", false, false, false, 400));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 401
                yield "                    <h3>
                        ";
                // line 402
                yield $this->getTemplateForMacro("macro_set_handler", $context, 402, $this->getSourceContext())->macro_set_handler(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 402), "controller", [], "any", false, false, false, 402)]);
                yield "
                        <small>(token = <a href=\"";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 403)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 403), "html", null, true);
                yield "</a>)</small>
                    </h3>

                    ";
                // line 406
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 406), "requestattributes", [], "any", false, false, false, 406)], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "            </div>
        </div>
        ";
        }
        // line 411
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 414
    public function macro_set_handler($controller = null, $route = null, $method = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "controller" => $controller,
            "route" => $route,
            "method" => $method,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 415
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 415)) {
                // line 416
                if ((($tmp = ((array_key_exists("method", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 416, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 416, $this->source); })()), "html", null, true);
                    yield "</span>";
                }
                // line 417
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 417, $this->source); })()), "file", [], "any", false, false, false, 417), CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 417, $this->source); })()), "line", [], "any", false, false, false, 417));
                // line 418
                if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 418, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 418, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 418, $this->source); })()), "class", [], "any", false, false, false, 418), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 418, $this->source); })()), "class", [], "any", false, false, false, 418), "html", null, true);
                    yield "\">";
                }
                // line 420
                if ((($tmp = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 420, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 421
                    yield "@";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 421, $this->source); })()), "html", null, true);
                } else {
                    // line 423
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 423, $this->source); })()), "class", [], "any", false, false, false, 423), "html", null, true))), "html", null, true);
                    // line 424
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 424, $this->source); })()), "method", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 424, $this->source); })()), "method", [], "any", false, false, false, 424)), "html", null, true)) : (""));
                }
                // line 427
                if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 427, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
            } else {
                // line 429
                yield "<span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 429, $this->source); })()), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 429, $this->source); })()))) : ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 429, $this->source); })()))), "html", null, true);
                yield "</span>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/request.html.twig";
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
        return array (  1021 => 429,  1014 => 427,  1011 => 424,  1009 => 423,  1005 => 421,  1003 => 420,  991 => 418,  989 => 417,  983 => 416,  980 => 415,  960 => 414,  948 => 411,  943 => 408,  935 => 406,  927 => 403,  923 => 402,  920 => 401,  916 => 400,  910 => 397,  907 => 396,  905 => 395,  902 => 394,  895 => 390,  889 => 387,  885 => 386,  878 => 381,  876 => 380,  868 => 376,  862 => 375,  859 => 374,  854 => 373,  852 => 372,  846 => 369,  836 => 361,  830 => 359,  824 => 355,  822 => 354,  813 => 348,  808 => 345,  803 => 342,  792 => 337,  788 => 336,  782 => 334,  780 => 333,  777 => 332,  771 => 331,  768 => 330,  756 => 329,  754 => 328,  751 => 326,  747 => 325,  737 => 317,  731 => 313,  729 => 312,  721 => 307,  713 => 302,  706 => 297,  700 => 295,  694 => 291,  692 => 290,  687 => 287,  681 => 285,  675 => 281,  673 => 280,  661 => 275,  657 => 274,  652 => 271,  646 => 269,  640 => 265,  638 => 264,  633 => 261,  627 => 259,  621 => 255,  619 => 254,  610 => 248,  603 => 244,  592 => 235,  586 => 231,  577 => 225,  570 => 220,  562 => 215,  556 => 211,  553 => 210,  551 => 209,  548 => 208,  546 => 207,  541 => 204,  539 => 203,  532 => 199,  528 => 197,  522 => 195,  516 => 191,  514 => 190,  509 => 187,  506 => 186,  500 => 184,  494 => 180,  492 => 179,  487 => 176,  481 => 174,  475 => 170,  473 => 169,  468 => 166,  462 => 164,  456 => 160,  454 => 159,  450 => 157,  433 => 142,  430 => 141,  428 => 140,  417 => 132,  414 => 131,  411 => 130,  398 => 129,  383 => 124,  380 => 123,  367 => 122,  354 => 119,  351 => 118,  347 => 117,  337 => 112,  333 => 111,  327 => 107,  325 => 106,  322 => 105,  312 => 100,  308 => 99,  301 => 95,  296 => 92,  294 => 91,  283 => 87,  271 => 82,  263 => 77,  255 => 72,  250 => 69,  245 => 66,  241 => 64,  239 => 63,  231 => 60,  226 => 57,  224 => 56,  221 => 55,  217 => 54,  212 => 52,  207 => 51,  200 => 50,  193 => 49,  191 => 48,  184 => 47,  182 => 46,  179 => 45,  177 => 44,  174 => 43,  171 => 42,  164 => 40,  161 => 39,  158 => 38,  156 => 37,  153 => 36,  150 => 35,  143 => 33,  140 => 32,  138 => 31,  135 => 30,  128 => 28,  125 => 27,  112 => 26,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        .empty-query-post-files {
            display: flex;
            justify-content: space-between;
        }
        .empty-query-post-files > div {
            flex: 1;
        }
        .empty-query-post-files > div + div {
            margin-left: 30px;
        }
        .empty-query-post-files h3 {
            margin-top: 0;
        }
        .empty-query-post-files .empty {
            margin-bottom: 0;
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% set request_handler %}
        {{ _self.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ _self.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forwardtoken %}
        {% set forward_profile = profile.childByToken(collector.forwardtoken) %}
        {% set forward_handler %}
            {{ _self.set_handler(forward_profile ? forward_profile.collector('request').controller : 'n/a') }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}<span class=\"sf-toolbar-request-icon\">{{ source('@WebProfiler/Icon/redirect.svg') }}</span>{% endif %}
            {% if collector.forwardtoken %}<span class=\"sf-toolbar-request-icon\">{{ source('@WebProfiler/Icon/forward.svg') }}</span>{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('n/a') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>{% if collector.statelesscheck %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forwardtoken }) }}\">{{ collector.forwardtoken }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set controller_name = _self.set_handler(collector.controller) %}
    <h2>
        {{ 'n/a' in controller_name ? 'Request / Response' : controller_name }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                {% set has_no_query_post_or_files = collector.requestquery.all is empty and collector.requestrequest.all is empty and collector.requestfiles is empty %}
                {% if has_no_query_post_or_files %}
                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                {% else %}
                    <h3>GET Parameters</h3>

                    {% if collector.requestquery.all is empty %}
                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                    {% endif %}

                    <h3>POST Parameters</h3>

                    {% if collector.requestrequest.all is empty %}
                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                    {% endif %}

                    <h4>Uploaded Files</h4>

                    {% if collector.requestfiles is empty %}
                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestfiles, maxDepth: 1 }, with_context = false) }}
                    {% endif %}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"sf-tabs\">
                        {% set prettyJson = collector.isJsonRequest ? collector.prettyJson : null %}
                        {% if prettyJson is not null %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">{{ prettyJson }}</pre>
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">{{ collector.content }}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session{% if collector.sessionusages is not empty %} <span class=\"badge\">{{ collector.sessionusages|length }}</span>{% endif %}</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}

                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.sessionusages|length }}</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.statelesscheck ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                {% if collector.sessionusages is empty %}
                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                {% else %}
                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for key, usage in collector.sessionusages %}
                            <tr>
                                <td class=\"font-normal\">
                                    {%- set link = usage.file|file_link(usage.line) %}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ usage.name }}\">{% else %}<span title=\"{{ usage.name }}\">{% endif %}
                                        {{ usage.name }}
                                    {%- if link %}</a>{% else %}</span>{% endif %}
                                    <div class=\"text-small font-normal\">
                                        {% set usage_id = 'session-usage-trace-' ~ key %}
                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ usage_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"{{ usage_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        {{ profiler_dump(usage.trace, maxDepth=2) }}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.dotenvvars }, with_context = false) }}

                <h4>Defined as regular env variables</h4>
                {% set requestserver = [] %}
                {% for key, value in collector.requestserver|filter((_, key) => key not in collector.dotenvvars.keys) %}
                    {% set requestserver = requestserver|merge({(key): value}) %}
                {% endfor %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: requestserver }, with_context = false) }}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        {{ _self.set_handler(child.getcollector('request').controller) }}
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.class }}\">{% else %}<span title=\"{{ controller.class }}\">{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\request.html.twig");
    }
}
