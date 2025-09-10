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

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_04381ca141b6eeb83ee1a19a615cbef9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "totals", [], "any", false, false, false, 4), "calls", [], "any", false, false, false, 4) > 0)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/cache.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "totals", [], "any", false, false, false, 7), "calls", [], "any", false, false, false, 7), "html", null, true);
                yield "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "totals", [], "any", false, false, false, 10), "time", [], "any", false, false, false, 10) * 1000)), "html", null, true);
                yield "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            yield "        ";
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 15
                yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "totals", [], "any", false, false, false, 17), "calls", [], "any", false, false, false, 17), "html", null, true);
                yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "totals", [], "any", false, false, false, 21), "time", [], "any", false, false, false, 21) * 1000)), "html", null, true);
                yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hits", [], "any", false, false, false, 25), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "reads", [], "any", false, false, false, 25), "html", null, true);
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25), "html", null, true);
                    yield "%)";
                }
                yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "totals", [], "any", false, false, false, 29), "writes", [], "any", false, false, false, 29), "html", null, true);
                yield "</span>
        </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            yield "
        ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 33, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        // line 38
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "totals", [], "any", false, false, false, 38), "calls", [], "any", false, false, false, 38) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">
            ";
        // line 40
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/cache.svg");
        yield "
        </span>
        <strong>Cache</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "    <h2>Cache</h2>

    ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "totals", [], "any", false, false, false, 49), "calls", [], "any", false, false, false, 49) == 0)) {
            // line 50
            yield "        <div class=\"empty empty-panel\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            yield "        ";
            yield $this->getTemplateForMacro("macro_render_metrics", $context, 54, $this->getSourceContext())->macro_render_metrics(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "totals", [], "any", false, false, false, 54), true]);
            yield "

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 59
            yield "            ";
            $context["cache_pools_with_calls"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "calls", [], "any", false, false, false, 59), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["calls"]) || array_key_exists("calls", $context) ? $context["calls"] : (function () { throw new RuntimeError('Variable "calls" does not exist.', 59, $this->source); })())) > 0); }), []);
            // line 60
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cache_pools_with_calls"]) || array_key_exists("cache_pools_with_calls", $context) ? $context["cache_pools_with_calls"] : (function () { throw new RuntimeError('Variable "cache_pools_with_calls" does not exist.', 60, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 61
                yield "                <div class=\"tab ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["calls"]) == 0)) ? ("disabled") : (""));
                yield "\">
                    <h3 class=\"tab-title\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield " <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "statistics", [], "any", false, false, false, 62), $context["name"], [], "array", false, false, false, 62), "calls", [], "any", false, false, false, 62), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        <h4>Adapter</h4>
                        <div class=\"card\">
                            ";
                // line 67
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "adapters", [], "any", false, true, false, 67), $context["name"], [], "array", true, true, false, 67)) {
                    // line 68
                    yield "                                <code>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "adapters", [], "any", false, false, false, 68), $context["name"], [], "array", false, false, false, 68), "html", null, true);
                    yield "</code>
                            ";
                } else {
                    // line 70
                    yield "                                <span class=\"text-muted\">Unable to get the adapter class.</span>
                            ";
                }
                // line 72
                yield "                        </div>
                        ";
                // line 73
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["calls"]) == 0)) {
                    // line 74
                    yield "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield " pool.</p>
                            </div>
                        ";
                } else {
                    // line 78
                    yield "                            <h4>Metrics</h4>
                            ";
                    // line 79
                    yield $this->getTemplateForMacro("macro_render_metrics", $context, 79, $this->getSourceContext())->macro_render_metrics(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "statistics", [], "any", false, false, false, 79), $context["name"], [], "array", false, false, false, 79)]);
                    yield "

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["calls"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 93
                        yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 94
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 94), "html", null, true);
                        yield "</td>
                                        <td class=\"nowrap\">";
                        // line 95
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", ((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "end", [], "any", false, false, false, 95) - CoreExtension::getAttribute($this->env, $this->source, $context["call"], "start", [], "any", false, false, false, 95)) * 1000)), "html", null, true);
                        yield " ms</td>
                                        <td class=\"nowrap\">";
                        // line 96
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "name", [], "any", false, false, false, 96), "html", null, true);
                        yield "()</td>
                                        <td>";
                        // line 97
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "value", [], "any", false, false, false, 97), "result", [], "any", false, false, false, 97), 2);
                        yield "</td>
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
                    unset($context['_seq'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 103
                yield "                    </div>
                </div>

                ";
                // line 106
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Pools without calls <span class=\"badge\">";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 108, $this->source); })()), "calls", [], "any", false, false, false, 108), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["calls"])); })), "html", null, true);
                    yield "</span></h3>

                        <div class=\"tab-content\">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Cache pools that received no calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "calls", [], "any", false, false, false, 118), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["calls"])); }))));
                    foreach ($context['_seq'] as $context["_key"] => $context["cache_pool"]) {
                        // line 119
                        yield "                                        <tr><td>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cache_pool"], "html", null, true);
                        yield "</td></tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['cache_pool'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                ";
                }
                // line 126
                yield "            ";
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
            unset($context['_seq'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 131
    public function macro_render_metrics($pool = null, $is_total = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "pool" => $pool,
            "is_total" => $is_total,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_metrics"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_metrics"));

            // line 132
            yield "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 134, $this->source); })()), "calls", [], "any", false, false, false, 134), "html", null, true);
            yield "</span>
            <span class=\"label\">";
            // line 135
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total calls") : ("Calls"));
            yield "</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 138, $this->source); })()), "time", [], "any", false, false, false, 138) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
            <span class=\"label\">";
            // line 139
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 139, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total time") : ("Time"));
            yield "</span>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 146, $this->source); })()), "reads", [], "any", false, false, false, 146), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 147
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total reads") : ("Reads"));
            yield "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 150, $this->source); })()), "writes", [], "any", false, false, false, 150), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 151
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 151, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total writes") : ("Writes"));
            yield "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 154, $this->source); })()), "deletes", [], "any", false, false, false, 154), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 155
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 155, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total deletes") : ("Deletes"));
            yield "</span>
            </div>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 163, $this->source); })()), "hits", [], "any", false, false, false, 163), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 164
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 164, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total hits") : ("Hits"));
            yield "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 167, $this->source); })()), "misses", [], "any", false, false, false, 167), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 168
            yield (((($tmp = (isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 168, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Total misses") : ("Misses"));
            yield "</span>
            </div>
            <div class=\"metric\">
                    <span class=\"value\">
                        ";
            // line 172
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", true, true, false, 172) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 172, $this->source); })()), "hit_read_ratio", [], "any", false, false, false, 172)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 172, $this->source); })()), "hit_read_ratio", [], "any", false, false, false, 172), "html", null, true)) : (0));
            yield " <span class=\"unit\">%</span>
                    </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>
    </div>
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
        return "@WebProfiler/Collector/cache.html.twig";
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
        return array (  538 => 172,  531 => 168,  527 => 167,  521 => 164,  517 => 163,  506 => 155,  502 => 154,  496 => 151,  492 => 150,  486 => 147,  482 => 146,  472 => 139,  468 => 138,  462 => 135,  458 => 134,  454 => 132,  435 => 131,  422 => 127,  408 => 126,  401 => 121,  392 => 119,  388 => 118,  375 => 108,  372 => 107,  370 => 106,  365 => 103,  360 => 100,  343 => 97,  339 => 96,  335 => 95,  331 => 94,  328 => 93,  311 => 92,  295 => 79,  292 => 78,  286 => 75,  283 => 74,  281 => 73,  278 => 72,  274 => 70,  268 => 68,  266 => 67,  256 => 62,  251 => 61,  233 => 60,  230 => 59,  222 => 54,  216 => 50,  214 => 49,  210 => 47,  197 => 46,  181 => 40,  175 => 38,  162 => 37,  148 => 33,  145 => 32,  138 => 29,  124 => 25,  117 => 21,  110 => 17,  106 => 15,  103 => 14,  95 => 10,  89 => 7,  84 => 6,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.totals.calls > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/cache.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.totals.calls }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.totals.time * 1000) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}
        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>{{ collector.totals.calls }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.totals.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>{{ collector.totals.hits }} / {{ collector.totals.reads }}{% if collector.totals.hit_read_ratio is not null %} ({{ collector.totals.hit_read_ratio }}%){% endif %}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>{{ collector.totals.writes }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.totals.calls == 0 ? 'disabled' }}\">
        <span class=\"icon\">
            {{ source('@WebProfiler/Icon/cache.svg') }}
        </span>
        <strong>Cache</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Cache</h2>

    {% if collector.totals.calls == 0 %}
        <div class=\"empty empty-panel\">
            <p>No cache calls were made.</p>
        </div>
    {% else %}
        {{ _self.render_metrics(collector.totals, true) }}

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            {# the empty merge is needed to turn the iterator into an array #}
            {% set cache_pools_with_calls = collector.calls|filter(calls => calls|length > 0)|merge([]) %}
            {% for name, calls in cache_pools_with_calls %}
                <div class=\"tab {{ calls|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ collector.statistics[name].calls }}</span></h3>

                    <div class=\"tab-content\">
                        <h4>Adapter</h4>
                        <div class=\"card\">
                            {% if collector.adapters[name] is defined %}
                                <code>{{ collector.adapters[name] }}</code>
                            {% else %}
                                <span class=\"text-muted\">Unable to get the adapter class.</span>
                            {% endif %}
                        </div>
                        {% if calls|length == 0 %}
                            <div class=\"empty\">
                                <p>No calls were made for {{ name }} pool.</p>
                            </div>
                        {% else %}
                            <h4>Metrics</h4>
                            {{ _self.render_metrics(collector.statistics[name]) }}

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for call in calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"nowrap\">{{ '%0.2f'|format((call.end - call.start) * 1000) }} ms</td>
                                        <td class=\"nowrap\">{{ call.name }}()</td>
                                        <td>{{ profiler_dump(call.value.result, maxDepth=2) }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                </div>

                {% if loop.last %}
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Pools without calls <span class=\"badge\">{{ collector.calls|filter(calls => 0 == calls|length)|length }}</span></h3>

                        <div class=\"tab-content\">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Cache pools that received no calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for cache_pool in collector.calls|filter(calls => 0 == calls|length)|keys|sort %}
                                        <tr><td>{{ cache_pool }}</td></tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}

{% macro render_metrics(pool, is_total = false) %}
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ pool.calls }}</span>
            <span class=\"label\">{{ is_total ? 'Total calls' : 'Calls' }}</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(pool.time * 1000) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">{{ is_total ? 'Total time' : 'Time' }}</span>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ pool.reads }}</span>
                <span class=\"label\">{{ is_total ? 'Total reads' : 'Reads' }}</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ pool.writes }}</span>
                <span class=\"label\">{{ is_total ? 'Total writes' : 'Writes' }}</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ pool.deletes }}</span>
                <span class=\"label\">{{ is_total ? 'Total deletes' : 'Deletes' }}</span>
            </div>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ pool.hits }}</span>
                <span class=\"label\">{{ is_total ? 'Total hits' : 'Hits' }}</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ pool.misses }}</span>
                <span class=\"label\">{{ is_total ? 'Total misses' : 'Misses' }}</span>
            </div>
            <div class=\"metric\">
                    <span class=\"value\">
                        {{ pool.hit_read_ratio ?? 0 }} <span class=\"unit\">%</span>
                    </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/cache.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\cache.html.twig");
    }
}
