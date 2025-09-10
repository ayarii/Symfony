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

/* @WebProfiler/Collector/command.html.twig */
class __TwigTemplate_f173970fc09a611363882f4d447d0c27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/command.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/command.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 5
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/command.svg");
        yield "</span>
        <strong>Console Command</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <h2>
        ";
        // line 12
        $context["command"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "command", [], "any", false, false, false, 12);
        // line 13
        yield "        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 13, $this->source); })()), "file", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 13, $this->source); })()), "line", [], "any", false, false, false, 13)), "html", null, true);
        yield "\">
            ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", true, true, false, 14)) {
            // line 15
            yield "                ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrMethod($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 15, $this->source); })()), "executor", [], "any", false, false, false, 15), "html", null, true));
            yield "
            ";
        } else {
            // line 17
            yield "                ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 17, $this->source); })()), "class", [], "any", false, false, false, 17), "html", null, true));
            yield "
            ";
        }
        // line 19
        yield "        </a>
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Command</h3>

            <div class=\"tab-content\">
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "duration", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                        <span class=\"label\">Duration</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "maxMemoryUsage", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
                        <span class=\"label\">Peak Memory Usage</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 39, $this->source); })()), "verbosityLevel", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                        <span class=\"label\">Verbosity Level</span>
                    </div>
                </div>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 46
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "signalable", [], "any", false, false, false, 46))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Signalable</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 51
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "interactive", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Interactive</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 56
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "validateInput", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Validate Input</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 61
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "enabled", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Enabled</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 66
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "visible", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Visible</span>
                    </div>
                </div>

                <h3>Arguments</h3>

                ";
        // line 73
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "arguments", [], "any", false, false, false, 73))) {
            // line 74
            yield "                    <div class=\"empty\">
                        <p>No arguments were set</p>
                    </div>
                ";
        } else {
            // line 78
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "arguments", [], "any", false, false, false, 78), "labels" => ["Argument", "Value"], "maxDepth" => 2], false);
            yield "
                ";
        }
        // line 80
        yield "
                <h3>Options</h3>

                ";
        // line 83
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "options", [], "any", false, false, false, 83))) {
            // line 84
            yield "                    <div class=\"empty\">
                        <p>No options were set</p>
                    </div>
                ";
        } else {
            // line 88
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "options", [], "any", false, false, false, 88), "labels" => ["Option", "Value"], "maxDepth" => 2], false);
            yield "
                ";
        }
        // line 90
        yield "
                ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "interactive", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                    <h3>Interactive Inputs</h3>

                    <p class=\"help\">
                        The values which have been set interactively.
                    </p>

                    ";
            // line 98
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 98, $this->source); })()), "interactiveInputs", [], "any", false, false, false, 98))) {
                // line 99
                yield "                        <div class=\"empty\">
                            <p>No inputs were set</p>
                        </div>
                    ";
            } else {
                // line 103
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "interactiveInputs", [], "any", false, false, false, 103), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
                yield "
                    ";
            }
            // line 105
            yield "                ";
        }
        // line 106
        yield "
                <h3>Application inputs</h3>

                ";
        // line 109
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "applicationInputs", [], "any", false, false, false, 109))) {
            // line 110
            yield "                    <div class=\"empty\">
                        <p>No application inputs are set</p>
                    </div>
                ";
        } else {
            // line 114
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 114, $this->source); })()), "applicationInputs", [], "any", false, false, false, 114), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
            yield "
                ";
        }
        // line 116
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Input / Output</h3>

            <div class=\"tab-content\">
                <table>
                    <tr>
                        <td class=\"font-normal\">Input</td>
                        <td class=\"font-normal\">";
        // line 126
        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "input", [], "any", false, false, false, 126));
        yield "</td>
                    </tr>
                    <tr>
                        <td class=\"font-normal\">Output</td>
                        <td class=\"font-normal\">";
        // line 130
        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 130, $this->source); })()), "output", [], "any", false, false, false, 130));
        yield "</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Helper Set</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 140, $this->source); })()), "helperSet", [], "any", false, false, false, 140))) {
            // line 141
            yield "                    <div class=\"empty\">
                        <p>No helpers</p>
                    </div>
                ";
        } else {
            // line 145
            yield "                    <table class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 145, $this->source); })()), "")) : ("")), "html", null, true);
            yield "\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Helpers</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "helperSet", [], "any", false, false, false, 152)));
            foreach ($context['_seq'] as $context["_key"] => $context["helper"]) {
                // line 153
                yield "                            <tr>
                                <td>";
                // line 154
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["helper"]);
                yield "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['helper'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 160
        yield "            </div>
        </div>

        <div class=\"tab\">
            ";
        // line 164
        $context["request_collector"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 164, $this->source); })()), "collectors", [], "any", false, false, false, 164), "request", [], "any", false, false, false, 164);
        // line 165
        yield "            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 169
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 169, $this->source); })()), "dotenvvars", [], "any", false, false, false, 169)], false);
        yield "

                <h4>Defined as regular env variables</h4>
                ";
        // line 172
        $context["requestserver"] = [];
        // line 173
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 173, $this->source); })()), "requestserver", [], "any", false, false, false, 173), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 173, $this->source); })()), "dotenvvars", [], "any", false, false, false, 173), "keys", [], "any", false, false, false, 173)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 174
            yield "                    ";
            $context["requestserver"] = Twig\Extension\CoreExtension::merge((isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 174, $this->source); })()), [ (string)$context["key"] => $context["value"]]);
            // line 175
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => (isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 176, $this->source); })())], false);
        yield "
            </div>
        </div>

        ";
        // line 180
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "signalable", [], "any", false, false, false, 180))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Signals</h3>

                <div class=\"tab-content\">
                    <h3>Subscribed signals</h3>
                    ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "signalable", [], "any", false, false, false, 186), ", "), "html", null, true);
            yield "

                    <h3>Handled signals</h3>
                    ";
            // line 189
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "handledSignals", [], "any", false, false, false, 189))) {
                // line 190
                yield "                        <div class=\"empty\">
                            <p>No signals handled</p>
                        </div>
                    ";
            } else {
                // line 194
                yield "                        <table>
                            <thead>
                                <tr>
                                    <th>Signal</th>
                                    <th>Times handled</th>
                                    <th>Total execution time</th>
                                    <th>Memory peak</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 204, $this->source); })()), "handledSignals", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["signal"] => $context["data"]) {
                    // line 205
                    yield "                                    <tr>
                                        <td>";
                    // line 206
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["signal"], "html", null, true);
                    yield "</td>
                                        <td>";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "handled", [], "any", false, false, false, 207), "html", null, true);
                    yield "</td>
                                        <td>";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "duration", [], "any", false, false, false, 208), "html", null, true);
                    yield " ms</td>
                                        <td>";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "memory", [], "any", false, false, false, 209), "html", null, true);
                    yield " MiB</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['signal'], $context['data'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 215
            yield "                </div>
            </div>
        ";
        }
        // line 218
        yield "
        ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 219, $this->source); })()), "parent", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Parent Command</h3>

                <div class=\"tab-content\">
                    <h3>
                        <a href=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 225, $this->source); })()), "parent", [], "any", false, false, false, 225), "token", [], "any", false, false, false, 225)]), "html", null, true);
            yield "\">Return to parent command</a>
                        <small>(token = ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 226, $this->source); })()), "parent", [], "any", false, false, false, 226), "token", [], "any", false, false, false, 226), "html", null, true);
            yield ")</small>
                    </h3>

                    ";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 229, $this->source); })()), "parent", [], "any", false, false, false, 229), "url", [], "any", false, false, false, 229), "html", null, true);
            yield "
                </div>
            </div>
        ";
        }
        // line 233
        yield "
        ";
        // line 234
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 234, $this->source); })()), "children", [], "any", false, false, false, 234))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Sub Commands <span class=\"badge\">";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 236, $this->source); })()), "children", [], "any", false, false, false, 236)), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 239, $this->source); })()), "children", [], "any", false, false, false, 239));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 240
                yield "                        <h3>
                            ";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 241), "html", null, true);
                yield "
                            <small>(token = <a href=\"";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 242)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 242), "html", null, true);
                yield "</a>)</small>
                        </h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            yield "                </div>
            </div>
        ";
        }
        // line 248
        yield "    </div>
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
        return "@WebProfiler/Collector/command.html.twig";
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
        return array (  553 => 248,  548 => 245,  537 => 242,  533 => 241,  530 => 240,  526 => 239,  520 => 236,  517 => 235,  515 => 234,  512 => 233,  505 => 229,  499 => 226,  495 => 225,  488 => 220,  486 => 219,  483 => 218,  478 => 215,  473 => 212,  464 => 209,  460 => 208,  456 => 207,  452 => 206,  449 => 205,  445 => 204,  433 => 194,  427 => 190,  425 => 189,  419 => 186,  412 => 181,  410 => 180,  402 => 176,  396 => 175,  393 => 174,  388 => 173,  386 => 172,  380 => 169,  374 => 165,  372 => 164,  366 => 160,  361 => 157,  352 => 154,  349 => 153,  345 => 152,  334 => 145,  328 => 141,  326 => 140,  313 => 130,  306 => 126,  294 => 116,  288 => 114,  282 => 110,  280 => 109,  275 => 106,  272 => 105,  266 => 103,  260 => 99,  258 => 98,  250 => 92,  248 => 91,  245 => 90,  239 => 88,  233 => 84,  231 => 83,  226 => 80,  220 => 78,  214 => 74,  212 => 73,  202 => 66,  194 => 61,  186 => 56,  178 => 51,  170 => 46,  160 => 39,  152 => 34,  144 => 29,  132 => 19,  126 => 17,  120 => 15,  118 => 14,  113 => 13,  111 => 12,  108 => 11,  95 => 10,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/command.svg') }}</span>
        <strong>Console Command</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>
        {% set command = collector.command %}
        <a href=\"{{ command.file|file_link(command.line) }}\">
            {% if command.executor is defined %}
                {{ command.executor|abbr_method }}
            {% else %}
                {{ command.class|abbr_class }}
            {% endif %}
        </a>
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Command</h3>

            <div class=\"tab-content\">
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.duration }}</span>
                        <span class=\"label\">Duration</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.maxMemoryUsage }}</span>
                        <span class=\"label\">Peak Memory Usage</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.verbosityLevel }}</span>
                        <span class=\"label\">Verbosity Level</span>
                    </div>
                </div>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.signalable is not empty ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Signalable</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.interactive ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Interactive</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.validateInput ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Validate Input</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Enabled</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.visible ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Visible</span>
                    </div>
                </div>

                <h3>Arguments</h3>

                {% if collector.arguments is empty %}
                    <div class=\"empty\">
                        <p>No arguments were set</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.arguments, labels: ['Argument', 'Value'], maxDepth: 2 }, with_context=false) }}
                {% endif %}

                <h3>Options</h3>

                {% if collector.options is empty %}
                    <div class=\"empty\">
                        <p>No options were set</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.options, labels: ['Option', 'Value'], maxDepth: 2 }, with_context=false) }}
                {% endif %}

                {% if collector.interactive %}
                    <h3>Interactive Inputs</h3>

                    <p class=\"help\">
                        The values which have been set interactively.
                    </p>

                    {% if collector.interactiveInputs is empty %}
                        <div class=\"empty\">
                            <p>No inputs were set</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.interactiveInputs, labels: ['Input', 'Value'], maxDepth: 2 }, with_context=false) }}
                    {% endif %}
                {% endif %}

                <h3>Application inputs</h3>

                {% if collector.applicationInputs is empty %}
                    <div class=\"empty\">
                        <p>No application inputs are set</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.applicationInputs, labels: ['Input', 'Value'], maxDepth: 2 }, with_context=false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Input / Output</h3>

            <div class=\"tab-content\">
                <table>
                    <tr>
                        <td class=\"font-normal\">Input</td>
                        <td class=\"font-normal\">{{ profiler_dump(collector.input) }}</td>
                    </tr>
                    <tr>
                        <td class=\"font-normal\">Output</td>
                        <td class=\"font-normal\">{{ profiler_dump(collector.output) }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Helper Set</h3>

            <div class=\"tab-content\">
                {% if collector.helperSet is empty %}
                    <div class=\"empty\">
                        <p>No helpers</p>
                    </div>
                {% else %}
                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Helpers</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for helper in collector.helperSet|sort %}
                            <tr>
                                <td>{{ profiler_dump(helper) }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            {% set request_collector = profile.collectors.request %}
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: request_collector.dotenvvars }, with_context = false) }}

                <h4>Defined as regular env variables</h4>
                {% set requestserver = [] %}
                {% for key, value in request_collector.requestserver|filter((_, key) => key not in request_collector.dotenvvars.keys) %}
                    {% set requestserver = requestserver|merge({(key): value}) %}
                {% endfor %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: requestserver }, with_context = false) }}
            </div>
        </div>

        {% if collector.signalable is not empty %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Signals</h3>

                <div class=\"tab-content\">
                    <h3>Subscribed signals</h3>
                    {{ collector.signalable|join(', ') }}

                    <h3>Handled signals</h3>
                    {% if collector.handledSignals is empty %}
                        <div class=\"empty\">
                            <p>No signals handled</p>
                        </div>
                    {% else %}
                        <table>
                            <thead>
                                <tr>
                                    <th>Signal</th>
                                    <th>Times handled</th>
                                    <th>Total execution time</th>
                                    <th>Memory peak</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for signal, data in collector.handledSignals %}
                                    <tr>
                                        <td>{{ signal }}</td>
                                        <td>{{ data.handled }}</td>
                                        <td>{{ data.duration }} ms</td>
                                        <td>{{ data.memory }} MiB</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>
        {% endif %}

        {% if profile.parent %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Parent Command</h3>

                <div class=\"tab-content\">
                    <h3>
                        <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent command</a>
                        <small>(token = {{ profile.parent.token }})</small>
                    </h3>

                    {{ profile.parent.url }}
                </div>
            </div>
        {% endif %}

        {% if profile.children|length %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Sub Commands <span class=\"badge\">{{ profile.children|length }}</span></h3>

                <div class=\"tab-content\">
                    {% for child in profile.children %}
                        <h3>
                            {{ child.url }}
                            <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                        </h3>
                    {% endfor %}
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "@WebProfiler/Collector/command.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\command.html.twig");
    }
}
