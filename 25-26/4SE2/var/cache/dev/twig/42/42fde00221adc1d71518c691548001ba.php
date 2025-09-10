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

/* @WebProfiler/Profiler/_request_summary.html.twig */
class __TwigTemplate_7509a16041f4e1480d977d6bf0d730df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_request_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_request_summary.html.twig"));

        // line 1
        $context["status_code"] = (((($tmp = (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 1, $this->source); })()), "statuscode", [], "any", false, false, false, 1), 0)) : (0))) : (0));
        // line 2
        $context["css_class"] = ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 2, $this->source); })()) > 399)) ? ("status-error") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 2, $this->source); })()) > 299)) ? ("status-warning") : ("status-success"))));
        // line 3
        yield "
";
        // line 4
        if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 4, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 4, $this->source); })()), "redirect", [], "any", false, false, false, 4))) {
            // line 5
            yield "    ";
            $context["redirect"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 5, $this->source); })()), "redirect", [], "any", false, false, false, 5);
            // line 6
            yield "    ";
            $context["link_to_source_code"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 6), "class", [], "any", true, true, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 6, $this->source); })()), "controller", [], "any", false, false, false, 6), "file", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 6, $this->source); })()), "controller", [], "any", false, false, false, 6), "line", [], "any", false, false, false, 6))) : (""));
            // line 7
            yield "    ";
            $context["redirect_route_name"] = ("@" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 7, $this->source); })()), "route", [], "any", false, false, false, 7));
            // line 8
            yield "
    <div class=\"status status-compact status-warning\">
        <span class=\"icon icon-redirect\">";
            // line 10
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/redirect.svg");
            yield "</span>

        <span class=\"status-response-status-code\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 12, $this->source); })()), "status_code", [], "any", false, false, false, 12), "html", null, true);
            yield "</span> redirect from

        <span class=\"status-request-method\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 14, $this->source); })()), "method", [], "any", false, false, false, 14), "html", null, true);
            yield "</span>

        ";
            // line 16
            if ((($tmp = (isset($context["link_to_source_code"]) || array_key_exists("link_to_source_code", $context) ? $context["link_to_source_code"] : (function () { throw new RuntimeError('Variable "link_to_source_code" does not exist.', 16, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link_to_source_code"]) || array_key_exists("link_to_source_code", $context) ? $context["link_to_source_code"] : (function () { throw new RuntimeError('Variable "link_to_source_code" does not exist.', 17, $this->source); })()), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 17, $this->source); })()), "controller", [], "any", false, false, false, 17), "file", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirect_route_name"]) || array_key_exists("redirect_route_name", $context) ? $context["redirect_route_name"] : (function () { throw new RuntimeError('Variable "redirect_route_name" does not exist.', 17, $this->source); })()), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 19
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirect_route_name"]) || array_key_exists("redirect_route_name", $context) ? $context["redirect_route_name"] : (function () { throw new RuntimeError('Variable "redirect_route_name" does not exist.', 19, $this->source); })()), "html", null, true);
                yield "
        ";
            }
            // line 21
            yield "
        (<a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 22, $this->source); })()), "token", [], "any", false, false, false, 22), "panel" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 22, $this->source); })()), "query", [], "any", false, false, false, 22), "get", ["panel", "request"], "method", false, false, false, 22)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 22, $this->source); })()), "token", [], "any", false, false, false, 22), "html", null, true);
            yield "</a>)
    </div>
";
        }
        // line 25
        yield "
<div class=\"status ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 27
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 27, $this->source); })()) > 399)) {
            // line 28
            yield "        <p class=\"status-error-details\">
            <span class=\"icon\">";
            // line 29
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/alert-circle.svg");
            yield "</span>
            <span class=\"status-response-status-code\">Error ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "</span>
            <span class=\"status-response-status-text\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 31, $this->source); })()), "statusText", [], "any", false, false, false, 31), "html", null, true);
            yield "</span>
        </p>
    ";
        }
        // line 34
        yield "
    <h2>
        <span class=\"status-request-method\">
            ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 37, $this->source); })()), "method", [], "any", false, false, false, 37)), "html", null, true);
        yield "
        </span>

        ";
        // line 40
        $context["profile_title"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40)) < 160)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40)) : ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), 0, 160) . "…")));
        // line 41
        yield "        ";
        if (CoreExtension::inFilter(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 41, $this->source); })()), "method", [], "any", false, false, false, 41)), ["GET", "HEAD"])) {
            // line 42
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 42, $this->source); })()), "url", [], "any", false, false, false, 42), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profile_title"]) || array_key_exists("profile_title", $context) ? $context["profile_title"] : (function () { throw new RuntimeError('Variable "profile_title" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 44
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profile_title"]) || array_key_exists("profile_title", $context) ? $context["profile_title"] : (function () { throw new RuntimeError('Variable "profile_title" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "
        ";
        }
        // line 46
        yield "    </h2>

    <dl class=\"metadata\">
        ";
        // line 49
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 49, $this->source); })()) < 400)) {
            // line 50
            yield "            <dt>Response</dt>
            <dd>
                <span class=\"status-response-status-code\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</span>
                <span class=\"status-response-status-text\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 53, $this->source); })()), "statusText", [], "any", false, false, false, 53), "html", null, true);
            yield "</span>
            </dd>
        ";
        }
        // line 56
        yield "
        ";
        // line 57
        $context["referer"] = (((($tmp = (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 57, $this->source); })()), "requestheaders", [], "any", false, false, false, 57), "get", ["referer"], "method", false, false, false, 57)) : (null));
        // line 58
        yield "        ";
        if ((($tmp = (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "            <dt></dt>
            <dd>
                <span class=\"icon icon-referer\">";
            // line 61
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/referrer.svg");
            yield "</span>
                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 62, $this->source); })()), "html", null, true);
            yield "\" class=\"referer\">Browse referrer URL</a>
            </dd>
        ";
        }
        // line 65
        yield "
        <dt>IP</dt>
        <dd>
            <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 68, $this->source); })()), "limit" => 10, "ip" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "ip", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "ip", [], "any", false, false, false, 68), "html", null, true);
        yield "</a>
        </dd>

        <dt>Profiled on</dt>
        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 72, $this->source); })()), "time", [], "any", false, false, false, 72), "c"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 72, $this->source); })()), "time", [], "any", false, false, false, 72), "r"), "html", null, true);
        yield "</time></dd>

        <dt>Token</dt>
        <dd>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 75, $this->source); })()), "token", [], "any", false, false, false, 75), "html", null, true);
        yield "</dd>
    </dl>
</div>

";
        // line 79
        if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 79, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 79, $this->source); })()), "forwardtoken", [], "any", false, false, false, 79))) {
            // line 80
            $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 80, $this->source); })()), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 80, $this->source); })()), "forwardtoken", [], "any", false, false, false, 80)], "method", false, false, false, 80);
            // line 81
            yield "    ";
            $context["controller"] = (((($tmp = (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 81, $this->source); })()), "collector", ["request"], "method", false, false, false, 81), "controller", [], "any", false, false, false, 81)) : ("n/a"));
            // line 82
            yield "    <div class=\"status status-compact status-compact-forward\">
        <span class=\"icon icon-forward\">";
            // line 83
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/forward.svg");
            yield "</span>

        Forwarded to

        ";
            // line 87
            $context["link"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, false, 87)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 87, $this->source); })()), "file", [], "any", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 87, $this->source); })()), "line", [], "any", false, false, false, 87))) : (null));
            // line 88
            if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 88, $this->source); })()), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 88, $this->source); })()), "file", [], "any", false, false, false, 88), "html", null, true);
                yield "\">";
            }
            // line 89
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 89)) {
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 90, $this->source); })()), "class", [], "any", false, false, false, 90), "html", null, true))), "html", null, true);
                // line 91
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 91, $this->source); })()), "method", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 91, $this->source); })()), "method", [], "any", false, false, false, 91)), "html", null, true)) : (""));
            } else {
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 93, $this->source); })()), "html", null, true);
            }
            // line 95
            if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 95, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "</a>";
            }
            // line 96
            yield "        (<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 96, $this->source); })()), "forwardtoken", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 96, $this->source); })()), "forwardtoken", [], "any", false, false, false, 96), "html", null, true);
            yield "</a>)

    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/_request_summary.html.twig";
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
        return array (  283 => 96,  279 => 95,  276 => 93,  273 => 91,  271 => 90,  269 => 89,  261 => 88,  259 => 87,  252 => 83,  249 => 82,  246 => 81,  244 => 80,  242 => 79,  235 => 75,  227 => 72,  218 => 68,  213 => 65,  207 => 62,  203 => 61,  199 => 59,  196 => 58,  194 => 57,  191 => 56,  185 => 53,  181 => 52,  177 => 50,  175 => 49,  170 => 46,  164 => 44,  156 => 42,  153 => 41,  151 => 40,  145 => 37,  140 => 34,  134 => 31,  130 => 30,  126 => 29,  123 => 28,  121 => 27,  117 => 26,  114 => 25,  106 => 22,  103 => 21,  97 => 19,  87 => 17,  85 => 16,  80 => 14,  75 => 12,  70 => 10,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set status_code = request_collector ? request_collector.statuscode|default(0) : 0 %}
{% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

{% if request_collector and request_collector.redirect %}
    {% set redirect = request_collector.redirect %}
    {% set link_to_source_code = redirect.controller.class is defined ? redirect.controller.file|file_link(redirect.controller.line) %}
    {% set redirect_route_name = '@' ~ redirect.route %}

    <div class=\"status status-compact status-warning\">
        <span class=\"icon icon-redirect\">{{ source('@WebProfiler/Icon/redirect.svg') }}</span>

        <span class=\"status-response-status-code\">{{ redirect.status_code }}</span> redirect from

        <span class=\"status-request-method\">{{ redirect.method }}</span>

        {% if link_to_source_code %}
            <a href=\"{{ link_to_source_code }}\" title=\"{{ redirect.controller.file }}\">{{ redirect_route_name }}</a>
        {% else %}
            {{ redirect_route_name }}
        {% endif %}

        (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
    </div>
{% endif %}

<div class=\"status {{ css_class }}\">
    {% if status_code > 399 %}
        <p class=\"status-error-details\">
            <span class=\"icon\">{{ source('@WebProfiler/Icon/alert-circle.svg') }}</span>
            <span class=\"status-response-status-code\">Error {{ status_code }}</span>
            <span class=\"status-response-status-text\">{{ request_collector.statusText }}</span>
        </p>
    {% endif %}

    <h2>
        <span class=\"status-request-method\">
            {{ profile.method|upper }}
        </span>

        {% set profile_title = profile.url|length < 160 ? profile.url : profile.url[:160] ~ '…' %}
        {% if profile.method|upper in ['GET', 'HEAD'] %}
            <a href=\"{{ profile.url }}\">{{ profile_title }}</a>
        {% else %}
            {{ profile_title }}
        {% endif %}
    </h2>

    <dl class=\"metadata\">
        {% if status_code < 400 %}
            <dt>Response</dt>
            <dd>
                <span class=\"status-response-status-code\">{{ status_code }}</span>
                <span class=\"status-response-status-text\">{{ request_collector.statusText }}</span>
            </dd>
        {% endif %}

        {% set referer = request_collector ? request_collector.requestheaders.get('referer') : null %}
        {% if referer %}
            <dt></dt>
            <dd>
                <span class=\"icon icon-referer\">{{ source('@WebProfiler/Icon/referrer.svg') }}</span>
                <a href=\"{{ referer }}\" class=\"referer\">Browse referrer URL</a>
            </dd>
        {% endif %}

        <dt>IP</dt>
        <dd>
            <a href=\"{{ path('_profiler_search_results', { token: token, limit: 10, ip: profile.ip }) }}\">{{ profile.ip }}</a>
        </dd>

        <dt>Profiled on</dt>
        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"{{ profile.time|date('c') }}\">{{ profile.time|date('r') }}</time></dd>

        <dt>Token</dt>
        <dd>{{ profile.token }}</dd>
    </dl>
</div>

{% if request_collector and request_collector.forwardtoken -%}
    {% set forward_profile = profile.childByToken(request_collector.forwardtoken) %}
    {% set controller = forward_profile ? forward_profile.collector('request').controller : 'n/a' %}
    <div class=\"status status-compact status-compact-forward\">
        <span class=\"icon icon-forward\">{{ source('@WebProfiler/Icon/forward.svg') }}</span>

        Forwarded to

        {% set link = controller.file is defined ? controller.file|file_link(controller.line) : null -%}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
            {% if controller.class is defined %}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {% else %}
                {{- controller -}}
            {% endif %}
            {%- if link %}</a>{% endif %}
        (<a href=\"{{ path('_profiler', { token: request_collector.forwardtoken }) }}\">{{ request_collector.forwardtoken }}</a>)

    </div>
{%- endif %}
", "@WebProfiler/Profiler/_request_summary.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\_request_summary.html.twig");
    }
}
