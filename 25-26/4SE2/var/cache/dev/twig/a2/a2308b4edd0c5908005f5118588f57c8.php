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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_1b81e76c8b7b56d3445a3b89ab09f9a6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
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

        // line 162
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll('.mailer-email-summary-table-row');

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener('click', () => {
                        emailRows.forEach((row) => row.classList.remove('active'));
                        emailRow.classList.add('active');

                        document.querySelectorAll('.mailer-email-details').forEach((emailDetails) => emailDetails.style.display = 'none');
                        document.querySelector(emailRow.getAttribute('data-target')).style.display = 'block';
                    });
                });
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
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

        // line 192
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "events", [], "any", false, false, false, 192);
        // line 193
        yield "
    ";
        // line 194
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 194, $this->source); })()), "messages", [], "any", false, false, false, 194))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 196
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 197, $this->source); })()), "messages", [], "any", false, false, false, 197)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 199
            yield "
        ";
            // line 200
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 201
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 203, $this->source); })()), "events", [], "any", false, false, false, 203), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 203, $this->source); })()), "isQueued", [], "method", false, false, false, 203); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 207, $this->source); })()), "events", [], "any", false, false, false, 207), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 207, $this->source); })()), "isQueued", [], "method", false, false, false, 207); })), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            yield "
        ";
            // line 211
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 211, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 215
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

        // line 216
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 216, $this->source); })()), "events", [], "any", false, false, false, 216);
        // line 217
        yield "
    <span class=\"label ";
        // line 218
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 218, $this->source); })()), "messages", [], "any", false, false, false, 218))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 219
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>Emails</strong>
        ";
        // line 222
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 222, $this->source); })()), "messages", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            yield "            <span class=\"count\">
                <span>";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 224, $this->source); })()), "messages", [], "any", false, false, false, 224)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 227
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 230
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

        // line 231
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "events", [], "any", false, false, false, 231);
        // line 232
        yield "    <h2>Emails</h2>

    ";
        // line 234
        if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 234, $this->source); })()), "messages", [], "any", false, false, false, 234))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 239
            yield "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 242, $this->source); })()), "events", [], "any", false, false, false, 242), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 242, $this->source); })()), "isQueued", [], "method", false, false, false, 242); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 247, $this->source); })()), "events", [], "any", false, false, false, 247), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 247, $this->source); })()), "isQueued", [], "method", false, false, false, 247); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 253
        yield "
    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 254, $this->source); })()), "transports", [], "any", false, false, false, 254)) > 1)) {
            // line 255
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 255, $this->source); })()), "transports", [], "any", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 256
                yield "            <h2><code>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                yield "</code> transport</h2>
            ";
                // line 257
                yield $this->getTemplateForMacro("macro_render_transport_details", $context, 257, $this->getSourceContext())->macro_render_transport_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 257, $this->source); })()), $context["transport"]]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "    ";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 259, $this->source); })()), "transports", [], "any", false, false, false, 259))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 260
            yield "        ";
            yield $this->getTemplateForMacro("macro_render_transport_details", $context, 260, $this->getSourceContext())->macro_render_transport_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 260, $this->source); })()), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 260, $this->source); })()), "transports", [], "any", false, false, false, 260)), true]);
            yield "
    ";
        }
        // line 262
        yield "
    ";
        // line 317
        yield "
    ";
        // line 501
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 263
    public function macro_render_transport_details($collector = null, $transport = null, $show_transport_name = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "transport" => $transport,
            "show_transport_name" => $show_transport_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 264
            yield "        <div class=\"card\">
            ";
            // line 265
            $context["num_emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 265, $this->source); })()), "events", [], "any", false, false, false, 265), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 265, $this->source); })())], "method", false, false, false, 265));
            // line 266
            yield "            ";
            if (((isset($context["num_emails"]) || array_key_exists("num_emails", $context) ? $context["num_emails"] : (function () { throw new RuntimeError('Variable "num_emails" does not exist.', 266, $this->source); })()) > 1)) {
                // line 267
                yield "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 278
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 278, $this->source); })()), "events", [], "any", false, false, false, 278), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 278, $this->source); })())], "method", false, false, false, 278));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 279
                    yield "                                <tr class=\"mailer-email-summary-table-row ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 279)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\" data-target=\"#email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 279), "html", null, true);
                    yield "\">
                                    <td>";
                    // line 280
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 280), "html", null, true);
                    yield "</td>
                                    <td>
                                        ";
                    // line 282
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 282), "subject", [], "any", true, true, false, 282)) {
                        // line 283
                        yield "                                            ";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", true, true, false, 283) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 283), "getSubject", [], "method", false, false, false, 283)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 283), "getSubject", [], "method", false, false, false, 283), "html", null, true)) : ("(No subject)"));
                        yield "
                                        ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 284
$context["event"], "message", [], "any", false, false, false, 284), "headers", [], "any", false, false, false, 284), "has", ["subject"], "method", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 285
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 285), "headers", [], "any", false, true, false, 285), "get", ["subject"], "method", false, true, false, 285), "bodyAsString", [], "method", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 285), "headers", [], "any", false, false, false, 285), "get", ["subject"], "method", false, false, false, 285), "bodyAsString", [], "method", false, false, false, 285), "(No subject)")) : ("(No subject)")), "html", null, true);
                        yield "
                                        ";
                    } else {
                        // line 287
                        yield "                                            (No subject)
                                        ";
                    }
                    // line 289
                    yield "                                    </td>
                                    <td>
                                        ";
                    // line 291
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 291), "to", [], "any", true, true, false, 291)) {
                        // line 292
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 292), "getTo", [], "method", false, false, false, 292), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 292, $this->source); })()), "toString", [], "method", false, false, false, 292); }), ", "), "(empty)"), "html", null, true);
                        yield "
                                        ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 293
$context["event"], "message", [], "any", false, false, false, 293), "headers", [], "any", false, false, false, 293), "has", ["to"], "method", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 294
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 294), "headers", [], "any", false, true, false, 294), "get", ["to"], "method", false, true, false, 294), "bodyAsString", [], "method", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 294), "headers", [], "any", false, false, false, 294), "get", ["to"], "method", false, false, false, 294), "bodyAsString", [], "method", false, false, false, 294), "(empty)")) : ("(empty)")), "html", null, true);
                        yield "
                                        ";
                    } else {
                        // line 296
                        yield "                                            (empty)
                                        ";
                    }
                    // line 298
                    yield "                                    </td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 299), "html", null, true);
                    yield "\">View email details</button></td>
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                yield "                        </tbody>
                    </table>
                </div>

                ";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 306, $this->source); })()), "events", [], "any", false, false, false, 306), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 306, $this->source); })())], "method", false, false, false, 306));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 307
                    yield "                    <div class=\"mailer-email-details ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\" id=\"email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 307), "html", null, true);
                    yield "\">
                        ";
                    // line 308
                    yield $this->getTemplateForMacro("macro_render_email_details", $context, 308, $this->getSourceContext())->macro_render_email_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 308, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 308, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 308), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 308), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 308, $this->source); })())]);
                    yield "
                    </div>
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 311
                yield "            ";
            } else {
                // line 312
                yield "                ";
                $context["event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 312, $this->source); })()), "events", [], "any", false, false, false, 312), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 312, $this->source); })())], "method", false, false, false, 312));
                // line 313
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_email_details", $context, 313, $this->getSourceContext())->macro_render_email_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 313, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 313, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 313, $this->source); })()), "message", [], "any", false, false, false, 313), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 313, $this->source); })()), "isQueued", [], "any", false, false, false, 313), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 313, $this->source); })())]);
                yield "
            ";
            }
            // line 315
            yield "        </div>
    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 318
    public function macro_render_email_details($collector = null, $transport = null, $message = null, $message_is_queued = null, $show_transport_name = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "transport" => $transport,
            "message" => $message,
            "message_is_queued" => $message_is_queued,
            "show_transport_name" => $show_transport_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 319
            yield "        ";
            if ((($tmp = (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 319, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 320
                yield "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 321
                yield (((($tmp = (isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 321, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
                yield "\">";
                yield (((($tmp = (isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 321, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Queued") : ("Sent"));
                yield "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 323, $this->source); })()), "html", null, true);
                yield "</code>
            </p>
        ";
            }
            // line 326
            yield "
        ";
            // line 327
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 328
                yield "            ";
                // line 329
                yield "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 329, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 329, $this->source); })()), "toString", [], "method", false, false, false, 329)], "method", false, false, false, 329), "html", null, true);
                yield "\" download=\"email.eml\">
                ";
                // line 330
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 334, $this->source); })()), "toString", [], "method", false, false, false, 334), "html", null, true);
                yield "</pre>
        ";
            } else {
                // line 336
                yield "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 342
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "subject", [], "any", true, true, false, 342)) {
                    // line 343
                    yield "                                    ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 343) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 343, $this->source); })()), "getSubject", [], "method", false, false, false, 343)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 343, $this->source); })()), "getSubject", [], "method", false, false, false, 343), "html", null, true)) : ("(No subject)"));
                    yield "
                                ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 344
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 344, $this->source); })()), "headers", [], "any", false, false, false, 344), "has", ["subject"], "method", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 345
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 345), "get", ["subject"], "method", false, true, false, 345), "bodyAsString", [], "method", true, true, false, 345)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 345, $this->source); })()), "headers", [], "any", false, false, false, 345), "get", ["subject"], "method", false, false, false, 345), "bodyAsString", [], "method", false, false, false, 345), "(No subject)")) : ("(No subject)")), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 347
                    yield "                                    (No subject)
                                ";
                }
                // line 349
                yield "                            </p>
                            <div class=\"mailer-message-headers\">
                                <p>
                                    <strong>From:</strong>
                                    ";
                // line 353
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "from", [], "any", true, true, false, 353)) {
                    // line 354
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 354, $this->source); })()), "getFrom", [], "method", false, false, false, 354), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 354, $this->source); })()), "toString", [], "method", false, false, false, 354); }), ", "), "(empty)"), "html", null, true);
                    yield "
                                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 355
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 355, $this->source); })()), "headers", [], "any", false, false, false, 355), "has", ["from"], "method", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 356
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 356), "get", ["from"], "method", false, true, false, 356), "bodyAsString", [], "method", true, true, false, 356)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 356, $this->source); })()), "headers", [], "any", false, false, false, 356), "get", ["from"], "method", false, false, false, 356), "bodyAsString", [], "method", false, false, false, 356), "(empty)")) : ("(empty)")), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 358
                    yield "                                        (empty)
                                    ";
                }
                // line 360
                yield "                                </p>
                                <p>
                                    <strong>To:</strong>
                                    ";
                // line 363
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "to", [], "any", true, true, false, 363)) {
                    // line 364
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 364, $this->source); })()), "getTo", [], "method", false, false, false, 364), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 364, $this->source); })()), "toString", [], "method", false, false, false, 364); }), ", "), "(empty)"), "html", null, true);
                    yield "
                                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 365
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 365, $this->source); })()), "headers", [], "any", false, false, false, 365), "has", ["to"], "method", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 366
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 366), "get", ["to"], "method", false, true, false, 366), "bodyAsString", [], "method", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 366, $this->source); })()), "headers", [], "any", false, false, false, 366), "get", ["to"], "method", false, false, false, 366), "bodyAsString", [], "method", false, false, false, 366), "(empty)")) : ("(empty)")), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 368
                    yield "                                        (empty)
                                    ";
                }
                // line 370
                yield "                                </p>
                                ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 371, $this->source); })()), "headers", [], "any", false, false, false, 371), "all", [], "any", false, false, false, 371), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 371)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 371)) : (""))), ["subject", "from", "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 372
                    yield "                                    <p class=\"mailer-message-header-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 372), "html", null, true);
                    yield "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                yield "                            </div>
                        </div>

                        ";
                // line 377
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", true, true, false, 377) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 377, $this->source); })()), "attachments", [], "any", false, false, false, 377))) {
                    // line 378
                    yield "                            <div class=\"card-block\">
                                ";
                    // line 379
                    $context["num_of_attachments"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 379, $this->source); })()), "attachments", [], "any", false, false, false, 379));
                    // line 380
                    yield "                                ";
                    $context["total_attachments_size_in_bytes"] = Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 380, $this->source); })()), "attachments", [], "any", false, false, false, 380), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return ((isset($context["total_size"]) || array_key_exists("total_size", $context) ? $context["total_size"] : (function () { throw new RuntimeError('Variable "total_size" does not exist.', 380, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 380, $this->source); })()), "body", [], "any", false, false, false, 380))); }, 0);
                    // line 381
                    yield "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 382
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/attachment.svg");
                    yield "
                                    Attachments <span>(";
                    // line 383
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 383, $this->source); })()), "html", null, true);
                    yield " file";
                    yield ((((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 383, $this->source); })()) > 1)) ? ("s") : (""));
                    yield " / ";
                    yield $this->getTemplateForMacro("macro_render_file_size_humanized", $context, 383, $this->getSourceContext())->macro_render_file_size_humanized(...[(isset($context["total_attachments_size_in_bytes"]) || array_key_exists("total_attachments_size_in_bytes", $context) ? $context["total_attachments_size_in_bytes"] : (function () { throw new RuntimeError('Variable "total_attachments_size_in_bytes" does not exist.', 383, $this->source); })())]);
                    yield ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 387
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 387, $this->source); })()), "attachments", [], "any", false, false, false, 387));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 388
                        yield "                                        <li>
                                            ";
                        // line 389
                        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/file.svg");
                        yield "

                                            ";
                        // line 391
                        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 391))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 392
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 392), "html", null, true);
                            yield "
                                            ";
                        } else {
                            // line 394
                            yield "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 396
                        yield "
                                            (";
                        // line 397
                        yield $this->getTemplateForMacro("macro_render_file_size_humanized", $context, 397, $this->getSourceContext())->macro_render_file_size_humanized(...[Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 397))]);
                        yield ")

                                            <a href=\"data:";
                        // line 399
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 399)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 399), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        yield ";base64,";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 399, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 399)], "method", false, false, false, 399), "html", null, true);
                        yield "\" download=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 399)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 399), "attachment")) : ("attachment")), "html", null, true);
                        yield "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 402
                    yield "                                </ul>
                            </div>
                        ";
                }
                // line 405
                yield "
                        <div class=\"card-block\">
                            <div class=\"sf-tabs sf-tabs-sm\">
                            ";
                // line 408
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 408)) {
                    // line 409
                    yield "                                ";
                    $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 409, $this->source); })()), "textBody", [], "any", false, false, false, 409);
                    // line 410
                    yield "                                ";
                    $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 410, $this->source); })()), "htmlBody", [], "any", false, false, false, 410);
                    // line 411
                    yield "                                <div class=\"tab ";
                    yield (((($tmp =  !(isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 411, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (((($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 411, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 414
                    if ((($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 414, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 415
                        yield "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 416
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 416, $this->source); })()), "textCharset", [], "method", false, false, false, 416)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 417
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 417, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 417, $this->source); })()), "textCharset", [], "method", false, false, false, 417)), "html", null, true);
                        } else {
                            // line 419
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 419, $this->source); })()), "html", null, true);
                        }
                        // line 421
                        yield "</pre>
                                        ";
                    } else {
                        // line 423
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 427
                    yield "                                    </div>
                                </div>

                                ";
                    // line 430
                    if ((($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 430, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 431
                        yield "                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                        // line 434
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 434, $this->source); })()), "base64Encode", [(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 434, $this->source); })())], "method", false, false, false, 434), "html", null, true);
                        yield "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 439
                    yield "
                                <div class=\"tab ";
                    // line 440
                    yield (((($tmp =  !(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 440, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield ((( !(isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 440, $this->source); })()) && (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 440, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 443
                    if ((($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 443, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 444
                        yield "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 445
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 445, $this->source); })()), "htmlCharset", [], "method", false, false, false, 445)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 446
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 446, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 446, $this->source); })()), "htmlCharset", [], "method", false, false, false, 446)), "html", null, true);
                        } else {
                            // line 448
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 448, $this->source); })()), "html", null, true);
                        }
                        // line 450
                        yield "</pre>
                                        ";
                    } else {
                        // line 452
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 456
                    yield "                                    </div>
                                </div>
                            ";
                } else {
                    // line 459
                    yield "                                ";
                    $context["body"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 459, $this->source); })()), "body", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 459, $this->source); })()), "body", [], "any", false, false, false, 459), "toString", [], "method", false, false, false, 459)) : (null));
                    // line 460
                    yield "                                <div class=\"tab ";
                    yield (((($tmp =  !(isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 460, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (((($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 460, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">Content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 463
                    if ((($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 463, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 464
                        yield "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 465
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 465, $this->source); })()), "html", null, true);
                        yield "
                                            </pre>
                                        ";
                    } else {
                        // line 468
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 472
                    yield "                                    </div>
                                </div>
                            ";
                }
                // line 475
                yield "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 483
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 483, $this->source); })()), "body", [], "method", false, false, false, 483), "asDebugString", [], "method", false, false, false, 483), "html", null, true);
                yield "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 490, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 490, $this->source); })()), "toString", [], "method", false, false, false, 490)], "method", false, false, false, 490), "html", null, true);
                yield "\" download=\"email.eml\">
                            ";
                // line 491
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 495, $this->source); })()), "toString", [], "method", false, false, false, 495), "html", null, true);
                yield "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 500
            yield "    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 502
    public function macro_render_file_size_humanized($bytes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "bytes" => $bytes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 503
            if (((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 503, $this->source); })()) < 1000)) {
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 504, $this->source); })()) . " bytes"), "html", null, true);
            } elseif ((            // line 505
(isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 505, $this->source); })()) < (1000 ** 2))) {
                // line 506
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 506, $this->source); })()) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 508, $this->source); })()) / (1000 ** 2)), 2) . " MB"), "html", null, true);
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
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  1185 => 508,  1182 => 506,  1180 => 505,  1178 => 504,  1176 => 503,  1158 => 502,  1146 => 500,  1138 => 495,  1131 => 491,  1127 => 490,  1117 => 483,  1107 => 475,  1102 => 472,  1096 => 468,  1090 => 465,  1088 => 464,  1086 => 463,  1077 => 460,  1074 => 459,  1069 => 456,  1063 => 452,  1059 => 450,  1056 => 448,  1053 => 446,  1051 => 445,  1049 => 444,  1047 => 443,  1039 => 440,  1036 => 439,  1028 => 434,  1023 => 431,  1021 => 430,  1016 => 427,  1010 => 423,  1006 => 421,  1003 => 419,  1000 => 417,  998 => 416,  996 => 415,  994 => 414,  985 => 411,  982 => 410,  979 => 409,  977 => 408,  972 => 405,  967 => 402,  954 => 399,  949 => 397,  946 => 396,  942 => 394,  936 => 392,  934 => 391,  929 => 389,  926 => 388,  922 => 387,  911 => 383,  907 => 382,  904 => 381,  901 => 380,  899 => 379,  896 => 378,  894 => 377,  889 => 374,  880 => 372,  876 => 371,  873 => 370,  869 => 368,  863 => 366,  861 => 365,  856 => 364,  854 => 363,  849 => 360,  845 => 358,  839 => 356,  837 => 355,  832 => 354,  830 => 353,  824 => 349,  820 => 347,  814 => 345,  812 => 344,  807 => 343,  805 => 342,  797 => 336,  792 => 334,  785 => 330,  780 => 329,  778 => 328,  776 => 327,  773 => 326,  767 => 323,  760 => 321,  757 => 320,  754 => 319,  732 => 318,  719 => 315,  713 => 313,  710 => 312,  707 => 311,  690 => 308,  683 => 307,  666 => 306,  660 => 302,  643 => 299,  640 => 298,  636 => 296,  630 => 294,  628 => 293,  623 => 292,  621 => 291,  617 => 289,  613 => 287,  607 => 285,  605 => 284,  600 => 283,  598 => 282,  593 => 280,  586 => 279,  569 => 278,  556 => 267,  553 => 266,  551 => 265,  548 => 264,  528 => 263,  516 => 501,  513 => 317,  510 => 262,  504 => 260,  501 => 259,  493 => 257,  488 => 256,  483 => 255,  481 => 254,  478 => 253,  469 => 247,  461 => 242,  456 => 239,  450 => 235,  448 => 234,  444 => 232,  441 => 231,  428 => 230,  416 => 227,  410 => 224,  407 => 223,  405 => 222,  399 => 219,  395 => 218,  392 => 217,  389 => 216,  376 => 215,  362 => 211,  359 => 210,  352 => 207,  345 => 203,  341 => 201,  339 => 200,  336 => 199,  330 => 197,  325 => 196,  322 => 195,  320 => 194,  317 => 193,  314 => 192,  301 => 191,  261 => 162,  248 => 161,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block stylesheets %}
    {{  parent() }}

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll('.mailer-email-summary-table-row');

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener('click', () => {
                        emailRows.forEach((row) => row.classList.remove('active'));
                        emailRow.classList.add('active');

                        document.querySelectorAll('.mailer-email-details').forEach((emailDetails) => emailDetails.style.display = 'none');
                        document.querySelector(emailRow.getAttribute('data-target')).style.display = 'block';
                    });
                });
            }
        }
    </script>
{% endblock %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/mailer.svg') }}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => e.isQueued())|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/mailer.svg') }}</span>

        <strong>Emails</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}
    <h2>Emails</h2>

    {% if not events.messages|length %}
        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => e.isQueued())|length }}</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    {% endif %}

    {% if events.transports|length > 1 %}
        {% for transport in events.transports %}
            <h2><code>{{ transport }}</code> transport</h2>
            {{ _self.render_transport_details(collector, transport) }}
        {% endfor %}
    {% elseif events.transports is not empty %}
        {{ _self.render_transport_details(collector, events.transports|first, true) }}
    {% endif %}

    {% macro render_transport_details(collector, transport, show_transport_name = false) %}
        <div class=\"card\">
            {% set num_emails = collector.events.events(transport)|length %}
            {% if num_emails > 1 %}
                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for event in collector.events.events(transport) %}
                                <tr class=\"mailer-email-summary-table-row {{ loop.first ? 'active' }}\" data-target=\"#email-{{ loop.index }}\">
                                    <td>{{ loop.index }}</td>
                                    <td>
                                        {% if event.message.subject is defined %}
                                            {{ event.message.getSubject() ?? '(No subject)' }}
                                        {% elseif event.message.headers.has('subject') %}
                                            {{ event.message.headers.get('subject').bodyAsString()|default('(No subject)') }}
                                        {% else %}
                                            (No subject)
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if event.message.to is defined %}
                                            {{ event.message.getTo()|map(addr => addr.toString())|join(', ')|default('(empty)') }}
                                        {% elseif event.message.headers.has('to') %}
                                            {{ event.message.headers.get('to').bodyAsString()|default('(empty)') }}
                                        {% else %}
                                            (empty)
                                        {% endif %}
                                    </td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-{{ loop.index }}\">View email details</button></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                {% for event in collector.events.events(transport) %}
                    <div class=\"mailer-email-details {{ loop.first ? 'active' }}\" id=\"email-{{ loop.index }}\">
                        {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
                    </div>
                {% endfor %}
            {% else %}
                {% set event = (collector.events.events(transport)|first) %}
                {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
            {% endif %}
        </div>
    {% endmacro %}

    {% macro render_email_details(collector, transport, message, message_is_queued, show_transport_name = false) %}
        {% if show_transport_name %}
            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-{{ message_is_queued ? 'warning' : 'success' }}\">{{ message_is_queued ? 'Queued' : 'Sent' }}</span>
                &bull;
                <strong>Transport:</strong> <code>{{ transport }}</code>
            </p>
        {% endif %}

        {% if message.headers is not defined %}
            {# render the raw message contents #}
            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
                {{ source('@WebProfiler/Icon/download.svg') }}
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.toString() }}</pre>
        {% else %}
            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                {% if message.subject is defined %}
                                    {{ message.getSubject() ?? '(No subject)' }}
                                {% elseif message.headers.has('subject') %}
                                    {{ message.headers.get('subject').bodyAsString()|default('(No subject)') }}
                                {% else %}
                                    (No subject)
                                {% endif %}
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p>
                                    <strong>From:</strong>
                                    {% if message.from is defined %}
                                        {{ message.getFrom()|map(addr => addr.toString())|join(', ')|default('(empty)') }}
                                    {% elseif message.headers.has('from') %}
                                        {{ message.headers.get('from').bodyAsString()|default('(empty)') }}
                                    {% else %}
                                        (empty)
                                    {% endif %}
                                </p>
                                <p>
                                    <strong>To:</strong>
                                    {% if message.to is defined %}
                                        {{ message.getTo()|map(addr => addr.toString())|join(', ')|default('(empty)') }}
                                    {% elseif message.headers.has('to') %}
                                        {{ message.headers.get('to').bodyAsString()|default('(empty)') }}
                                    {% else %}
                                        (empty)
                                    {% endif %}
                                </p>
                                {% for header in message.headers.all|filter(header => (header.name ?? '')|lower not in ['subject', 'from', 'to']) %}
                                    <p class=\"mailer-message-header-secondary\">{{ header.toString }}</p>
                                {% endfor %}
                            </div>
                        </div>

                        {% if message.attachments is defined and message.attachments %}
                            <div class=\"card-block\">
                                {% set num_of_attachments = message.attachments|length %}
                                {% set total_attachments_size_in_bytes = message.attachments|reduce((total_size, attachment) => total_size + attachment.body|length, 0) %}
                                <p class=\"mailer-message-attachments-title\">
                                    {{ source('@WebProfiler/Icon/attachment.svg') }}
                                    Attachments <span>({{ num_of_attachments }} file{{ num_of_attachments > 1 ? 's' }} / {{ _self.render_file_size_humanized(total_attachments_size_in_bytes) }})</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    {% for attachment in message.attachments %}
                                        <li>
                                            {{ source('@WebProfiler/Icon/file.svg') }}

                                            {% if attachment.filename|default %}
                                                {{ attachment.filename }}
                                            {% else %}
                                                <em>(no filename)</em>
                                            {% endif %}

                                            ({{ _self.render_file_size_humanized(attachment.body|length) }})

                                            <a href=\"data:{{ attachment.contentType|default('application/octet-stream') }};base64,{{ collector.base64Encode(attachment.body) }}\" download=\"{{ attachment.filename|default('attachment') }}\">Download</a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        <div class=\"card-block\">
                            <div class=\"sf-tabs sf-tabs-sm\">
                            {% if message.htmlBody is defined %}
                                {% set textBody = message.textBody %}
                                {% set htmlBody = message.htmlBody %}
                                <div class=\"tab {{ not textBody ? 'disabled' }} {{ textBody ? 'active' }}\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        {% if textBody %}
                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">
                                                {%- if message.textCharset() %}
                                                    {{- textBody|convert_encoding('UTF-8', message.textCharset()) }}
                                                {%- else %}
                                                    {{- textBody }}
                                                {%- endif -%}
                                            </pre>
                                        {% else %}
                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>

                                {% if htmlBody %}
                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,{{ collector.base64Encode(htmlBody) }}\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                {% endif %}

                                <div class=\"tab {{ not htmlBody ? 'disabled' }} {{ not textBody and htmlBody ? 'active' }}\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        {% if htmlBody %}
                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">
                                                {%- if message.htmlCharset() %}
                                                    {{- htmlBody|convert_encoding('UTF-8', message.htmlCharset()) }}
                                                {%- else %}
                                                    {{- htmlBody }}
                                                {%- endif -%}
                                            </pre>
                                        {% else %}
                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% else %}
                                {% set body = message.body ? message.body.toString() : null %}
                                <div class=\"tab {{ not body ? 'disabled' }} {{ body ? 'active' }}\">
                                    <h3 class=\"tab-title\">Content</h3>
                                    <div class=\"tab-content\">
                                        {% if body %}
                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">
                                                {{- body }}
                                            </pre>
                                        {% else %}
                                            <div class=\"mailer-empty-email-body\">
                                                <p>The body is empty.</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.body().asDebugString() }}</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
                            {{ source('@WebProfiler/Icon/download.svg') }}
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.toString() }}</pre>
                    </div>
                </div>
            </div>
        {% endif %}
    {% endmacro %}

    {% macro render_file_size_humanized(bytes) %}
        {%- if bytes < 1000 -%}
            {{- bytes ~ ' bytes' -}}
        {%- elseif bytes < 1000 ** 2 -%}
            {{- (bytes / 1000)|number_format(2) ~ ' kB' -}}
        {%- else -%}
            {{- (bytes / 1000 ** 2)|number_format(2) ~ ' MB' -}}
        {%- endif -%}
    {% endmacro %}
{% endblock %}
", "@WebProfiler/Collector/mailer.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\mailer.html.twig");
    }
}
