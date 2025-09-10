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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_b5bc785025987f0eb98061bccc4fd09a extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        // line 6
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "querycount", [], "any", false, false, false, 6) > 0) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            yield "
        ";
            // line 8
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                $context["status"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
                // line 10
                yield "
            ";
                // line 11
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 11, $this->source); })()) >= 3)) {
                    // line 12
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/database.svg");
                    yield "
            ";
                } else {
                    // line 14
                    yield "                <span class=\"icon\">";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
                    yield "</span>
            ";
                }
                // line 16
                yield "
            ";
                // line 17
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "querycount", [], "any", false, false, false, 17) == 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                    // line 18
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
                } else {
                    // line 21
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "querycount", [], "any", false, false, false, 21), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                    yield "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                }
                // line 28
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            yield "
        ";
            // line 30
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 31
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
                // line 33
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
                yield " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
                // line 45
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Managed entities</b>
                <span class=\"sf-toolbar-status\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "managedEntityCount", [], "any", false, false, false, 49), "html", null, true);
                yield "</span>
            </div>
            ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                    // line 58
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 58), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                    // line 62
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 62) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 62), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 65
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
                }
                // line 70
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "
        ";
            // line 72
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 72, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 72, $this->source); })()), "")) : (""))]);
            yield "

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        // line 78
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 78) > 0)) ? ("label-status-error") : (""));
        yield " ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "querycount", [], "any", false, false, false, 78) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@Doctrine/Collector/" . ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 79, $this->source); })()) < 3)) ? ("icon") : ("database"))) . ".svg"));
        yield "</span>
        <strong>Doctrine</strong>
        ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 81, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "            <span class=\"count\">
                <span>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 86
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "    ";
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "        ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 92
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 92, $this->source); })()), "panel" => "db", "connectionName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 94, $this->source); })()), "query", [], "any", false, false, false, 94), "get", ["connection"], "method", false, false, false, 94), "query" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 95, $this->source); })()), "query", [], "any", false, false, false, 95), "get", ["query"], "method", false, false, false, 95)]));
            // line 96
            yield "
    ";
        } else {
            // line 98
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("queries", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_queries(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 103
        yield "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        ";
        // line 109
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 109, $this->source); })()) >= 3)) {
            // line 110
            yield "        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        ";
        }
        // line 119
        yield "    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "querycount", [], "any", false, false, false, 126), "html", null, true);
        yield "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 131), "html", null, true);
        yield "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "time", [], "any", false, false, false, 136) * 1000)), "html", null, true);
        yield " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 141), "html", null, true);
        yield "</span>
                <span class=\"label\">Invalid entities</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 146, $this->source); })()), "managedEntityCount", [], "any", false, false, false, 146), "html", null, true);
        yield "</span>
                <span class=\"label\">Managed entities</span>
            </div>
        </div>

        ";
        // line 151
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 154, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 154), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 158, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 158), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 162, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 162), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 167
        yield "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 170
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 170, $this->source); })()), "queries", [], "any", false, false, false, 170))) ? ("disabled") : (""));
        yield "\">
            ";
        // line 171
        $context["group_queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 171, $this->source); })()), "query", [], "any", false, false, false, 171), "getBoolean", ["group"], "method", false, false, false, 171);
        // line 172
        yield "            <h3 class=\"tab-title\">
                ";
        // line 173
        if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 173, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 174
            yield "                    Grouped Statements
                ";
        } else {
            // line 176
            yield "                    Queries
                ";
        }
        // line 178
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 181
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 181, $this->source); })()), "queries", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 186
            yield "                    ";
            if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 186, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "                        <p><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 187, $this->source); })())]), "html", null, true);
                yield "\">Show all queries</a></p>
                    ";
            } else {
                // line 189
                yield "                        <p><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 189, $this->source); })()), "group" => true]), "html", null, true);
                yield "\">Group similar statements</a></p>
                    ";
            }
            // line 191
            yield "
                    ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "queries", [], "any", false, false, false, 192));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 193
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "connections", [], "any", false, false, false, 193)) > 1)) {
                    // line 194
                    yield "                            <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["connection"], "html", null, true);
                    yield " <small>connection</small></h3>
                        ";
                }
                // line 196
                yield "
                        ";
                // line 197
                if (Twig\Extension\CoreExtension::testEmpty($context["queries"])) {
                    // line 198
                    yield "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 202
                    yield "                            ";
                    if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 203
                        yield "                                ";
                        $context["queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 203, $this->source); })()), "groupedQueries", [], "any", false, false, false, 203), $context["connection"], [], "array", false, false, false, 203);
                        // line 204
                        yield "                            ";
                    }
                    // line 205
                    yield "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 208
                    if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 208, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 209
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 209), "html", null, true);
                        yield "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 210
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 210), "html", null, true);
                        yield "')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 212
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 212), "html", null, true);
                        yield "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 213
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 213), "html", null, true);
                        yield "')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 215
                    yield "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 218), "html", null, true);
                    yield "\">
                                ";
                    // line 219
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 220
                        yield "                                    ";
                        $context["i"] = (((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 220, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 220)) : ($context["i"]));
                        // line 221
                        yield "                                    <tr id=\"queryNo-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 221), "loop", [], "any", false, false, false, 221), "index", [], "any", false, false, false, 221), "html", null, true);
                        yield "\">
                                        ";
                        // line 222
                        if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 223
                            yield "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 224
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 224)), "html", null, true);
                            yield "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 225
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 225) * 1000)), "html", null, true);
                            yield "&nbsp;ms<br />(";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 225)), "html", null, true);
                            yield "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 227
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 227), "html", null, true);
                            yield "</td>
                                        ";
                        } else {
                            // line 229
                            yield "                                            <td class=\"nowrap\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229), "html", null, true);
                            yield "</td>
                                            <td class=\"nowrap\">";
                            // line 230
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 230) * 1000)), "html", null, true);
                            yield "&nbsp;ms</td>
                                        ";
                        }
                        // line 232
                        yield "                                        <td>
                                            ";
                        // line 233
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 233));
                        yield "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 236
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 236), 2);
                        yield "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 240
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 240), "loop", [], "any", false, false, false, 240), "index", [], "any", false, false, false, 240), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 242
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 243
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 244
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 244), "loop", [], "any", false, false, false, 244), "index", [], "any", false, false, false, 244), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 246
                        yield "
                                                ";
                        // line 247
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 248
                            yield "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 249
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 249, $this->source); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            yield "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 249), "loop", [], "any", false, false, false, 249), "index", [], "any", false, false, false, 249), "html", null, true);
                            yield "\">Explain query</a>
                                                ";
                        }
                        // line 251
                        yield "
                                                ";
                        // line 252
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 252)) {
                            // line 253
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 254
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 254), "loop", [], "any", false, false, false, 254), "index", [], "any", false, false, false, 254), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 256
                        yield "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 258
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 258), "loop", [], "any", false, false, false, 258), "index", [], "any", false, false, false, 258), "html", null, true);
                        yield "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 259
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 259), true);
                        yield "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 260
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 260), false), "html_attr");
                        yield "\">Copy</button>
                                            </div>

                                            ";
                        // line 263
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 264
                            yield "                                                <div id=\"original-query-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 264), "loop", [], "any", false, false, false, 264), "index", [], "any", false, false, false, 264), "html", null, true);
                            yield "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 265
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 265) . ";"), CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 265));
                            // line 266
                            yield "                                                    ";
                            yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 266, $this->source); })()));
                            yield "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 267
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 267, $this->source); })()), "html_attr");
                            yield "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 270
                        yield "
                                            ";
                        // line 271
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 272
                            yield "                                                <div id=\"explain-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 272), "loop", [], "any", false, false, false, 272), "index", [], "any", false, false, false, 272), "html", null, true);
                            yield "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 274
                        yield "
                                            ";
                        // line 275
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 275)) {
                            // line 276
                            yield "                                                <div id=\"backtrace-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 276), "loop", [], "any", false, false, false, 276), "index", [], "any", false, false, false, 276), "html", null, true);
                            yield "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 285
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 285));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 286
                                yield "                                                            <tr>
                                                                <td>";
                                // line 287
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), "html", null, true);
                                yield "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 290
                                $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 290), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 290), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 290), [], "array", false, true, false, 290), "line", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 290), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 290), [], "array", false, false, false, 290), "line", [], "any", false, false, false, 290), 1)) : (1)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 290), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 290), [], "array", false, true, false, 290), "line", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 290), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 290), [], "array", false, false, false, 290), "line", [], "any", false, false, false, 290), 1)) : (1))));
                                // line 291
                                yield "                                                                                ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 291)) {
                                    // line 292
                                    yield "                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 292), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 292, $this->source); })())), "html", null, true);
                                    yield "\">
                                                                                ";
                                }
                                // line 294
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 294), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 294), [], "array", false, true, false, 294), "class", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 294), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 294), [], "array", false, false, false, 294), "class", [], "any", false, false, false, 294))) : ("")) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 294), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 294), [], "array", false, true, false, 294), "class", [], "any", true, true, false, 294)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 294), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 295
                                yield "<span class=\"status-warning\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 295), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 295), [], "array", false, true, false, 295), "function", [], "any", true, true, false, 295)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 295), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 295), [], "array", false, false, false, 295), "function", [], "any", false, false, false, 295), CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 295))) : (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 295))), "html", null, true);
                                yield "</span>
                                                                                ";
                                // line 296
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 296)) {
                                    // line 297
                                    yield "                                                                                    </a>
                                                                                ";
                                }
                                // line 299
                                yield "                                                                                (line ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 299, $this->source); })()), "html", null, true);
                                yield ")
                                                                            </span>
                                                                </td>
                                                            </tr>
                                                        ";
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
                            unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 304
                            yield "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 308
                        yield "                                        </td>
                                    </tr>
                                ";
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
                    unset($context['_seq'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 311
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 314
                yield "                    ";
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
            unset($context['_seq'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            yield "                ";
        }
        // line 316
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 319
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 319, $this->source); })()), "connections", [], "any", false, false, false, 319))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 322
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 322, $this->source); })()), "connections", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 327
            yield "                    ";
            yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 327, $this->getSourceContext())->macro_render_simple_table(...["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 327, $this->source); })()), "connections", [], "any", false, false, false, 327)]);
            yield "
                ";
        }
        // line 329
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 332
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 332, $this->source); })()), "managers", [], "any", false, false, false, 332))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 336
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 336, $this->source); })()), "managers", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 337
            yield "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 341
            yield "                    ";
            yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 341, $this->getSourceContext())->macro_render_simple_table(...["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 341, $this->source); })()), "managers", [], "any", false, false, false, 341)]);
            yield "
                ";
        }
        // line 343
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 346
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 346, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 350
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 350, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 350)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 351
            yield "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 355
            yield "                    ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 355, $this->source); })()), "cacheCounts", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 356
                yield "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 360
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 362, $this->source); })()), "cacheCounts", [], "any", false, false, false, 362), "hits", [], "any", false, false, false, 362), "html", null, true);
                yield "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 367, $this->source); })()), "cacheCounts", [], "any", false, false, false, 367), "misses", [], "any", false, false, false, 367), "html", null, true);
                yield "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 372, $this->source); })()), "cacheCounts", [], "any", false, false, false, 372), "puts", [], "any", false, false, false, 372), "html", null, true);
                yield "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 377
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 377, $this->source); })()), "cacheRegions", [], "any", false, false, false, 377), "hits", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 378
                    yield "                            <h3>Number of cache hits</h3>
                            ";
                    // line 379
                    yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 379, $this->getSourceContext())->macro_render_simple_table(...["Region", "Hits", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 379, $this->source); })()), "cacheRegions", [], "any", false, false, false, 379), "hits", [], "any", false, false, false, 379)]);
                    yield "
                        ";
                }
                // line 381
                yield "
                        ";
                // line 382
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 382, $this->source); })()), "cacheRegions", [], "any", false, false, false, 382), "misses", [], "any", false, false, false, 382)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 383
                    yield "                            <h3>Number of cache misses</h3>
                            ";
                    // line 384
                    yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 384, $this->getSourceContext())->macro_render_simple_table(...["Region", "Misses", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 384, $this->source); })()), "cacheRegions", [], "any", false, false, false, 384), "misses", [], "any", false, false, false, 384)]);
                    yield "
                        ";
                }
                // line 386
                yield "
                        ";
                // line 387
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 387, $this->source); })()), "cacheRegions", [], "any", false, false, false, 387), "puts", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 388
                    yield "                            <h3>Number of cache puts</h3>
                            ";
                    // line 389
                    yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 389, $this->getSourceContext())->macro_render_simple_table(...["Region", "Puts", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 389, $this->source); })()), "cacheRegions", [], "any", false, false, false, 389), "puts", [], "any", false, false, false, 389)]);
                    yield "
                        ";
                }
                // line 391
                yield "                    ";
            }
            // line 392
            yield "                ";
        }
        // line 393
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Managed Entities</h3>
            <div class=\"tab-content\">
                ";
        // line 399
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 399, $this->source); })()), "managedEntityCountByClass", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 400
            yield "                    <div class=\"empty\">
                        <p>No managed entities.</p>
                    </div>
                ";
        } else {
            // line 404
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 404, $this->source); })()), "managedEntityCountByClass", [], "any", false, false, false, 404));
            foreach ($context['_seq'] as $context["manager"] => $context["entityCounts"]) {
                // line 405
                yield "                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                yield " <small>entity manager</small></h4>
                        ";
                // line 406
                yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 406, $this->getSourceContext())->macro_render_simple_table(...["Class", "Amount of managed objects", $context["entityCounts"]]);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['entityCounts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "                ";
        }
        // line 409
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 412
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 412, $this->source); })()), "entities", [], "any", false, false, false, 412)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 416
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 416, $this->source); })()), "entities", [], "any", false, false, false, 416)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 417
            yield "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 421
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 421, $this->source); })()), "entities", [], "any", false, false, false, 421));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 422
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 422, $this->source); })()), "managers", [], "any", false, false, false, 422)) > 1)) {
                    // line 423
                    yield "                            <h4>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                    yield " <small>entity manager</small></h4>
                        ";
                }
                // line 425
                yield "
                        ";
                // line 426
                if (Twig\Extension\CoreExtension::testEmpty($context["classes"])) {
                    // line 427
                    yield "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 431
                    yield "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 439
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 440
                        yield "                                    ";
                        $context["contains_errors"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 440), $context["manager"], [], "array", true, true, false, 440) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 440), $context["manager"], [], "array", false, true, false, 440), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 440), [], "array", true, true, false, 440));
                        // line 441
                        yield "                                    <tr class=\"";
                        yield (((($tmp = (isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 441, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-error") : (""));
                        yield "\">
                                        <td>
                                            <a href=\"";
                        // line 443
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 443), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 443)), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 443), "html", null, true);
                        yield "</a>
                                        </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 446
                        if ((($tmp = (isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 446, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 447
                            yield "                                                <ul>
                                                    ";
                            // line 448
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 448, $this->source); })()), "mappingErrors", [], "any", false, false, false, 448), $context["manager"], [], "array", false, false, false, 448), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 448), [], "array", false, false, false, 448));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 449
                                yield "                                                        <li>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                                yield "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 451
                            yield "                                                </ul>
                                            ";
                        } else {
                            // line 453
                            yield "                                                No errors.
                                            ";
                        }
                        // line 455
                        yield "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['class'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 458
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 461
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['classes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            yield "                ";
        }
        // line 463
        yield "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                if (targetElement.getAttribute('data-sfurl') !== link.href) {
                    fetch(link.href, {
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute('data-sfurl', link.href)
                    }, function () {
                        targetElement.innerHTML = 'An error occurred while loading the query explanation.';
                    })
                }

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                button.classList.remove('hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 541
    public function macro_render_simple_table($label1 = null, $label2 = null, $data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label1" => $label1,
            "label2" => $label2,
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 542
            yield "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label1"]) || array_key_exists("label1", $context) ? $context["label1"] : (function () { throw new RuntimeError('Variable "label1" does not exist.', 545, $this->source); })()), "html", null, true);
            yield "</th>
            <th scope=\"col\">";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label2"]) || array_key_exists("label2", $context) ? $context["label2"] : (function () { throw new RuntimeError('Variable "label2" does not exist.', 546, $this->source); })()), "html", null, true);
            yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 550
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 550, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 551
                yield "            <tr>
                <th scope=\"row\">";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</th>
                <td>";
                // line 553
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 556
            yield "        </tbody>
    </table>
";
            
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
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1349 => 556,  1340 => 553,  1336 => 552,  1333 => 551,  1329 => 550,  1322 => 546,  1318 => 545,  1313 => 542,  1293 => 541,  1206 => 463,  1203 => 462,  1197 => 461,  1192 => 458,  1184 => 455,  1180 => 453,  1176 => 451,  1167 => 449,  1163 => 448,  1160 => 447,  1158 => 446,  1150 => 443,  1144 => 441,  1141 => 440,  1137 => 439,  1127 => 431,  1121 => 427,  1119 => 426,  1116 => 425,  1110 => 423,  1107 => 422,  1102 => 421,  1096 => 417,  1094 => 416,  1087 => 412,  1082 => 409,  1079 => 408,  1071 => 406,  1066 => 405,  1061 => 404,  1055 => 400,  1053 => 399,  1045 => 393,  1042 => 392,  1039 => 391,  1034 => 389,  1031 => 388,  1029 => 387,  1026 => 386,  1021 => 384,  1018 => 383,  1016 => 382,  1013 => 381,  1008 => 379,  1005 => 378,  1003 => 377,  995 => 372,  987 => 367,  979 => 362,  975 => 360,  969 => 356,  966 => 355,  960 => 351,  958 => 350,  951 => 346,  946 => 343,  940 => 341,  934 => 337,  932 => 336,  925 => 332,  920 => 329,  914 => 327,  908 => 323,  906 => 322,  900 => 319,  895 => 316,  892 => 315,  878 => 314,  873 => 311,  857 => 308,  851 => 304,  831 => 299,  827 => 297,  825 => 296,  820 => 295,  818 => 294,  812 => 292,  809 => 291,  807 => 290,  801 => 287,  798 => 286,  781 => 285,  766 => 276,  764 => 275,  761 => 274,  753 => 272,  751 => 271,  748 => 270,  742 => 267,  737 => 266,  735 => 265,  728 => 264,  726 => 263,  720 => 260,  716 => 259,  710 => 258,  706 => 256,  699 => 254,  696 => 253,  694 => 252,  691 => 251,  682 => 249,  679 => 248,  677 => 247,  674 => 246,  667 => 244,  664 => 243,  662 => 242,  655 => 240,  648 => 236,  642 => 233,  639 => 232,  634 => 230,  629 => 229,  624 => 227,  617 => 225,  613 => 224,  610 => 223,  608 => 222,  601 => 221,  598 => 220,  581 => 219,  577 => 218,  572 => 215,  567 => 213,  562 => 212,  557 => 210,  552 => 209,  550 => 208,  545 => 205,  542 => 204,  539 => 203,  536 => 202,  530 => 198,  528 => 197,  525 => 196,  519 => 194,  516 => 193,  499 => 192,  496 => 191,  490 => 189,  484 => 187,  481 => 186,  475 => 182,  473 => 181,  468 => 178,  464 => 176,  460 => 174,  458 => 173,  455 => 172,  453 => 171,  449 => 170,  444 => 167,  436 => 162,  429 => 158,  422 => 154,  418 => 152,  416 => 151,  408 => 146,  400 => 141,  392 => 136,  384 => 131,  376 => 126,  367 => 119,  356 => 110,  354 => 109,  346 => 103,  333 => 102,  318 => 98,  314 => 96,  312 => 95,  311 => 94,  310 => 92,  308 => 91,  305 => 90,  292 => 89,  280 => 86,  274 => 83,  271 => 82,  269 => 81,  264 => 79,  257 => 78,  244 => 77,  229 => 72,  226 => 71,  222 => 70,  215 => 65,  207 => 62,  198 => 58,  191 => 54,  187 => 52,  185 => 51,  180 => 49,  171 => 45,  164 => 41,  157 => 37,  148 => 33,  144 => 31,  142 => 30,  139 => 29,  135 => 28,  128 => 24,  121 => 21,  114 => 18,  112 => 17,  109 => 16,  103 => 14,  97 => 12,  95 => 11,  92 => 10,  89 => 9,  87 => 8,  84 => 7,  81 => 6,  68 => 5,  58 => 1,  56 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set icon %}
            {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

            {% if profiler_markup_version >= 3 %}
                {{ include('@Doctrine/Collector/database.svg') }}
            {% else %}
                <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
            {% endif %}

            {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"sf-toolbar-label\">errors</span>
            {% else %}
                <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">{{ collector.groupedQueryCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Managed entities</b>
                <span class=\"sf-toolbar-status\">{{ collector.managedEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Doctrine/Collector/' ~ (profiler_markup_version < 3 ? 'icon' : 'database') ~ '.svg') }}</span>
        <strong>Doctrine</strong>
        {% if collector.invalidEntityCount %}
            <span class=\"count\">
                <span>{{ collector.invalidEntityCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if 'explain' == page %}
        {{ render(controller('Doctrine\\\\Bundle\\\\DoctrineBundle\\\\Controller\\\\ProfilerController::explainAction', {
            token: token,
            panel: 'db',
            connectionName: request.query.get('connection'),
            query: request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        {% if profiler_markup_version >= 3 %}
        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        {% endif %}
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.groupedQueryCount }}</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.managedEntityCount }}</span>
                <span class=\"label\">Managed entities</span>
            </div>
        </div>

        {% if collector.cacheEnabled %}
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheHitsCount }}</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheMissesCount }}</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cachePutsCount }}</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab {{ collector.queries is empty ? 'disabled' }}\">
            {% set group_queries = request.query.getBoolean('group') %}
            <h3 class=\"tab-title\">
                {% if group_queries %}
                    Grouped Statements
                {% else %}
                    Queries
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if not collector.queries %}
                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                {% else %}
                    {% if group_queries %}
                        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token }) }}\">Show all queries</a></p>
                    {% else %}
                        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token, group: true }) }}\">Group similar statements</a></p>
                    {% endif %}

                    {% for connection, queries in collector.queries %}
                        {% if collector.connections|length > 1 %}
                            <h3>{{ connection }} <small>connection</small></h3>
                        {% endif %}

                        {% if queries is empty %}
                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        {% else %}
                            {% if group_queries %}
                                {% set queries = collector.groupedQueries[connection] %}
                            {% endif %}
                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    {% if group_queries %}
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    {% else %}
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    {% endif %}
                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-{{ loop.index }}\">
                                {% for i, query in queries %}
                                    {% set i = group_queries ? query.index : i %}
                                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                                        {% if group_queries %}
                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:{{ '%0.2f'|format(query.executionPercent) }}%\"></span>
                                                <span class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ '%0.2f'|format(query.executionPercent) }}%)</span>
                                            </td>
                                            <td class=\"nowrap\">{{ query.count }}</td>
                                        {% else %}
                                            <td class=\"nowrap\">{{ loop.index }}</td>
                                            <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                                        {% endif %}
                                        <td>
                                            {{ query.sql|doctrine_prettify_sql }}

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params, 2) }}
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                {% if query.runnable %}
                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                {% endif %}

                                                {% if query.explainable %}
                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                                {% endif %}

                                                {% if query.backtrace is defined %}
                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                {% endif %}
                                            </div>

                                            <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                                {{ query.sql|doctrine_format_sql(highlight = true) }}
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ query.sql|doctrine_format_sql(highlight = false)|e('html_attr') }}\">Copy</button>
                                            </div>

                                            {% if query.runnable %}
                                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                                    {% set runnable_sql = (query.sql ~ ';')|doctrine_replace_query_parameters(query.params) %}
                                                    {{ runnable_sql|doctrine_prettify_sql }}
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ runnable_sql|e('html_attr') }}\">Copy</button>
                                                </div>
                                            {% endif %}

                                            {% if query.explainable %}
                                                <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-explain\"></div>
                                            {% endif %}

                                            {% if query.backtrace is defined %}
                                                <div id=\"backtrace-{{ i }}-{{ loop.parent.loop.index }}\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for trace in query.backtrace %}
                                                            <tr>
                                                                <td>{{ loop.index }}</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                {% set line_number = trace.line|default(query.backtrace[loop.index].line|default(1)) %}
                                                                                {% if trace.file is defined %}
                                                                                    <a href=\"{{ trace.file|file_link(line_number) }}\">
                                                                                {% endif %}
                                                                                        {{- query.backtrace[loop.index].class|default ~ (query.backtrace[loop.index].class is defined ? trace.type|default('::')) -}}
                                                                                    <span class=\"status-warning\">{{ query.backtrace[loop.index].function|default(trace.function) }}</span>
                                                                                {% if trace.file is defined %}
                                                                                    </a>
                                                                                {% endif %}
                                                                                (line {{ line_number }})
                                                                            </span>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.connections is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                {% if not collector.connections %}
                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                {% else %}
                    {{ helper.render_simple_table('Name', 'Service', collector.connections) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.managers is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                {% if not collector.managers %}
                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                {% else %}
                    {{ helper.render_simple_table('Name', 'Service', collector.managers) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ not collector.cacheEnabled ? 'disabled' }}\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                {% if not collector.cacheEnabled %}
                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                {% else %}
                    {% if not collector.cacheCounts %}
                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    {% else %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        {% if collector.cacheRegions.hits %}
                            <h3>Number of cache hits</h3>
                            {{ helper.render_simple_table('Region', 'Hits', collector.cacheRegions.hits) }}
                        {% endif %}

                        {% if collector.cacheRegions.misses %}
                            <h3>Number of cache misses</h3>
                            {{ helper.render_simple_table('Region', 'Misses', collector.cacheRegions.misses) }}
                        {% endif %}

                        {% if collector.cacheRegions.puts %}
                            <h3>Number of cache puts</h3>
                            {{ helper.render_simple_table('Region', 'Puts', collector.cacheRegions.puts) }}
                        {% endif %}
                    {% endif %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Managed Entities</h3>
            <div class=\"tab-content\">
                {% if not collector.managedEntityCountByClass %}
                    <div class=\"empty\">
                        <p>No managed entities.</p>
                    </div>
                {% else %}
                    {% for manager, entityCounts in collector.managedEntityCountByClass %}
                        <h4>{{ manager }} <small>entity manager</small></h4>
                        {{ helper.render_simple_table('Class', 'Amount of managed objects', entityCounts) }}
                    {% endfor %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ not collector.entities ? 'disabled' }}\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                {% if not collector.entities %}
                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                {% else %}
                    {% for manager, classes in collector.entities %}
                        {% if collector.managers|length > 1 %}
                            <h4>{{ manager }} <small>entity manager</small></h4>
                        {% endif %}

                        {% if classes is empty %}
                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        {% else %}
                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for class in classes %}
                                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class.class] is defined %}
                                    <tr class=\"{{ contains_errors ? 'status-error' }}\">
                                        <td>
                                            <a href=\"{{ class.file|file_link(class.line) }}\">{{ class. class}}</a>
                                        </td>
                                        <td class=\"font-normal\">
                                            {% if contains_errors %}
                                                <ul>
                                                    {% for error in collector.mappingErrors[manager][class.class] %}
                                                        <li>{{ error }}</li>
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                No errors.
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                if (targetElement.getAttribute('data-sfurl') !== link.href) {
                    fetch(link.href, {
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute('data-sfurl', link.href)
                    }, function () {
                        targetElement.innerHTML = 'An error occurred while loading the query explanation.';
                    })
                }

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                button.classList.remove('hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
{% endblock %}

{% macro render_simple_table(label1, label2, data) %}
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ label1 }}</th>
            <th scope=\"col\">{{ label2 }}</th>
        </tr>
        </thead>
        <tbody>
        {% for key, value in data %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ value }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@Doctrine/Collector/db.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\doctrine\\doctrine-bundle\\templates\\Collector\\db.html.twig");
    }
}
