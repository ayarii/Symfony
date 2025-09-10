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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_435398a872c5eb820a574584a21afaa4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

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
        .sf-profiler-httpclient-requests thead th {
            vertical-align: top;
        }
        .sf-profiler-httpclient-requests .http-method {
            border: 1px solid var(--header-status-request-method-color);
            border-radius: 5px;
            color: var(--header-status-request-method-color);
            display: inline-block;
            font-weight: 500;
            line-height: 1;
            margin-right: 6px;
            padding: 2px 4px;
            text-align: center;
            white-space: nowrap;
        }
        .sf-profiler-httpclient-requests .status-response-status-code {
            background: var(--gray-600);
            border-radius: 4px;
            color: var(--white);
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 2px;
            padding: 1px 3px;
        }
        .sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "requestCount", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 42
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/http-client.svg");
                yield "
            ";
                // line 43
                $context["status_color"] = "";
                // line 44
                yield "            <span class=\"sf-toolbar-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "requestCount", [], "any", false, false, false, 44), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "
        ";
            // line 47
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 48
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "requestCount", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status ";
                // line 54
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "errorCount", [], "any", false, false, false, 54) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "errorCount", [], "any", false, false, false, 54), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield "
        ";
            // line 58
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 58, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 58, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "<span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "requestCount", [], "any", false, false, false, 63) == 0)) ? ("disabled") : (""));
        yield "\">
    <span class=\"icon\">";
        // line 64
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/http-client.svg");
        yield "</span>
    <strong>HTTP Client</strong>
    ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "requestCount", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "        <span class=\"count\">
            ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "requestCount", [], "any", false, false, false, 68), "html", null, true);
            yield "
        </span>
    ";
        }
        // line 71
        yield "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    <h2>HTTP Client</h2>
    ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "requestCount", [], "any", false, false, false, 76) == 0)) {
            // line 77
            yield "        <div class=\"empty empty-panel\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 81
            yield "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "requestCount", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "errorCount", [], "any", false, false, false, 87), "html", null, true);
            yield "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 93, $this->source); })()), "clients", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 94
                yield "                <div class=\"tab ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 94)) == 0)) ? ("disabled") : (""));
                yield "\">
                    <h3 class=\"tab-title\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield " <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 95)), "html", null, true);
                yield "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 97
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 97)) == 0)) {
                    // line 98
                    yield "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 102
                    yield "                            <h4>Requests</h4>
                            ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 103));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 104
                        yield "                                ";
                        $context["profiler_token"] = "";
                        // line 105
                        yield "                                ";
                        $context["profiler_link"] = "";
                        // line 106
                        yield "                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, true, false, 106), "response_headers", [], "any", true, true, false, 106)) {
                            // line 107
                            yield "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 107), "response_headers", [], "any", false, false, false, 107));
                            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                                // line 108
                                yield "                                        ";
                                if (CoreExtension::matches("/^x-debug-token: .*\$/i", $context["header"])) {
                                    // line 109
                                    yield "                                            ";
                                    $context["profiler_token"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, false, 109), Twig\Extension\CoreExtension::length($this->env->getCharset(), "x-debug-token: "));
                                    // line 110
                                    yield "                                        ";
                                }
                                // line 111
                                yield "                                        ";
                                if (CoreExtension::matches("/^x-debug-token-link: .*\$/i", $context["header"])) {
                                    // line 112
                                    yield "                                            ";
                                    $context["profiler_link"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, false, 112), Twig\Extension\CoreExtension::length($this->env->getCharset(), "x-debug-token-link: "));
                                    // line 113
                                    yield "                                        ";
                                }
                                // line 114
                                yield "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            yield "                                ";
                        }
                        // line 116
                        yield "                                <table class=\"sf-profiler-httpclient-requests\">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"http-method\">";
                        // line 120
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, false, 120), "html", null, true);
                        yield "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 123
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, false, 123), "html", null, true);
                        yield "
                                        </th>
                                        ";
                        // line 125
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 125, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 125, $this->source); })()))) {
                            // line 126
                            yield "                                            <th>
                                                Profile
                                            </th>
                                        ";
                        }
                        // line 130
                        yield "                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", true, true, false, 130) && CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 130))) {
                            // line 131
                            yield "                                            <th>
                                                <button class=\"btn btn-sm hidden\" title=\"Copy as cURL\" data-clipboard-text=\"";
                            // line 132
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 132), "html", null, true);
                            yield "\">Copy as cURL</button>
                                            </th>
                                        ";
                        }
                        // line 135
                        yield "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                        // line 138
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 138))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 139
                            yield "                                        <tr>
                                            <th class=\"font-normal\">Request options</th>
                                            <td>";
                            // line 141
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 141), 1);
                            yield "</td>
                                        </tr>
                                    ";
                        }
                        // line 144
                        yield "                                    <tr>
                                        <th class=\"font-normal\">Response</th>
                                        <td";
                        // line 146
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", true, true, false, 146) && CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 146))) {
                            yield " colspan=\"2\"";
                        }
                        yield ">
                                            ";
                        // line 147
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 147) >= 500)) {
                            // line 148
                            yield "                                                ";
                            $context["responseStatus"] = "error";
                            // line 149
                            yield "                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 149) >= 400)) {
                            // line 150
                            yield "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 151
                            yield "                                            ";
                        } else {
                            // line 152
                            yield "                                                ";
                            $context["responseStatus"] = "success";
                            // line 153
                            yield "                                            ";
                        }
                        // line 154
                        yield "                                            <span class=\"font-normal status-response-status-code status-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["responseStatus"]) || array_key_exists("responseStatus", $context) ? $context["responseStatus"] : (function () { throw new RuntimeError('Variable "responseStatus" does not exist.', 154, $this->source); })()), "html", null, true);
                        yield "\">
                                                ";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 155), "html", null, true);
                        yield "
                                            </span>

                                            ";
                        // line 158
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 158), 1);
                        yield "
                                        </td>
                                        ";
                        // line 160
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 160, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 160, $this->source); })()))) {
                            // line 161
                            yield "                                            <td>
                                                <span><a href=\"";
                            // line 162
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 162, $this->source); })()), "html", null, true);
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 162, $this->source); })()), "html", null, true);
                            yield "</a></span>
                                            </td>
                                        ";
                        }
                        // line 165
                        yield "                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 169
                    yield "                        ";
                }
                // line 170
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "        ";
        }
        // line 174
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
        return "@WebProfiler/Collector/http_client.html.twig";
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
        return array (  500 => 174,  497 => 173,  489 => 170,  486 => 169,  477 => 165,  469 => 162,  466 => 161,  464 => 160,  459 => 158,  453 => 155,  448 => 154,  445 => 153,  442 => 152,  439 => 151,  436 => 150,  433 => 149,  430 => 148,  428 => 147,  422 => 146,  418 => 144,  412 => 141,  408 => 139,  406 => 138,  401 => 135,  395 => 132,  392 => 131,  389 => 130,  383 => 126,  381 => 125,  376 => 123,  370 => 120,  364 => 116,  361 => 115,  355 => 114,  352 => 113,  349 => 112,  346 => 111,  343 => 110,  340 => 109,  337 => 108,  332 => 107,  329 => 106,  326 => 105,  323 => 104,  319 => 103,  316 => 102,  310 => 99,  307 => 98,  305 => 97,  298 => 95,  293 => 94,  289 => 93,  280 => 87,  273 => 83,  269 => 81,  263 => 77,  261 => 76,  258 => 75,  245 => 74,  233 => 71,  227 => 68,  224 => 67,  222 => 66,  217 => 64,  212 => 63,  199 => 62,  185 => 58,  182 => 57,  173 => 54,  166 => 50,  162 => 48,  160 => 47,  157 => 46,  150 => 44,  148 => 43,  143 => 42,  140 => 41,  137 => 40,  124 => 39,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        .sf-profiler-httpclient-requests thead th {
            vertical-align: top;
        }
        .sf-profiler-httpclient-requests .http-method {
            border: 1px solid var(--header-status-request-method-color);
            border-radius: 5px;
            color: var(--header-status-request-method-color);
            display: inline-block;
            font-weight: 500;
            line-height: 1;
            margin-right: 6px;
            padding: 2px 4px;
            text-align: center;
            white-space: nowrap;
        }
        .sf-profiler-httpclient-requests .status-response-status-code {
            background: var(--gray-600);
            border-radius: 4px;
            color: var(--white);
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 2px;
            padding: 1px 3px;
        }
        .sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
    </style>
{% endblock %}


{% block toolbar %}
    {% if collector.requestCount %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/http-client.svg') }}
            {% set status_color = '' %}
            <span class=\"sf-toolbar-value\">{{ collector.requestCount }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>{{ collector.requestCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status {{ collector.errorCount > 0 ? 'sf-toolbar-status-red' }}\">{{ collector.errorCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label {{ collector.requestCount == 0 ? 'disabled' }}\">
    <span class=\"icon\">{{ source('@WebProfiler/Icon/http-client.svg') }}</span>
    <strong>HTTP Client</strong>
    {% if collector.requestCount %}
        <span class=\"count\">
            {{ collector.requestCount }}
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>HTTP Client</h2>
    {% if collector.requestCount == 0 %}
        <div class=\"empty empty-panel\">
            <p>No HTTP requests were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestCount }}</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.errorCount }}</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            {% for name, client in collector.clients %}
                <div class=\"tab {{ client.traces|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ client.traces|length }}</span></h3>
                    <div class=\"tab-content\">
                        {% if client.traces|length == 0 %}
                            <div class=\"empty\">
                                <p>No requests were made with the \"{{ name }}\" service.</p>
                            </div>
                        {% else %}
                            <h4>Requests</h4>
                            {% for trace in client.traces %}
                                {% set profiler_token = '' %}
                                {% set profiler_link = '' %}
                                {% if trace.info.response_headers is defined %}
                                    {% for header in trace.info.response_headers %}
                                        {% if header matches '/^x-debug-token: .*\$/i' %}
                                            {% set profiler_token = (header.getValue | slice('x-debug-token: ' | length)) %}
                                        {% endif %}
                                        {% if header matches '/^x-debug-token-link: .*\$/i' %}
                                            {% set profiler_link = (header.getValue | slice('x-debug-token-link: ' | length)) %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                <table class=\"sf-profiler-httpclient-requests\">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"http-method\">{{ trace.method }}</span>
                                        </th>
                                        <th class=\"full-width\">
                                            {{ trace.url }}
                                        </th>
                                        {% if profiler_token and profiler_link %}
                                            <th>
                                                Profile
                                            </th>
                                        {% endif %}
                                        {% if trace.curlCommand is defined and trace.curlCommand %}
                                            <th>
                                                <button class=\"btn btn-sm hidden\" title=\"Copy as cURL\" data-clipboard-text=\"{{ trace.curlCommand }}\">Copy as cURL</button>
                                            </th>
                                        {% endif %}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% if trace.options is not empty %}
                                        <tr>
                                            <th class=\"font-normal\">Request options</th>
                                            <td>{{ profiler_dump(trace.options, maxDepth=1) }}</td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <th class=\"font-normal\">Response</th>
                                        <td{% if trace.curlCommand is defined and trace.curlCommand %} colspan=\"2\"{% endif %}>
                                            {% if trace.http_code >= 500 %}
                                                {% set responseStatus = 'error' %}
                                            {% elseif trace.http_code >= 400 %}
                                                {% set responseStatus = 'warning' %}
                                            {% else %}
                                                {% set responseStatus = 'success' %}
                                            {% endif %}
                                            <span class=\"font-normal status-response-status-code status-{{ responseStatus }}\">
                                                {{ trace.http_code }}
                                            </span>

                                            {{ profiler_dump(trace.info, maxDepth=1) }}
                                        </td>
                                        {% if profiler_token and profiler_link %}
                                            <td>
                                                <span><a href=\"{{ profiler_link }}\" target=\"_blank\">{{ profiler_token }}</a></span>
                                            </td>
                                        {% endif %}
                                    </tr>
                                    </tbody>
                                </table>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}
", "@WebProfiler/Collector/http_client.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\http_client.html.twig");
    }
}
