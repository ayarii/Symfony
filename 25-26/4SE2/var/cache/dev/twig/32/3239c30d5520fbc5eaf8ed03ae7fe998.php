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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_0b8a39bc0a8475c9e39136afc7aac782 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

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
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "nb_errors", [], "any", false, false, false, 4) > 0) || Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "forms", [], "any", false, false, false, 4)))) {
            // line 5
            yield "        ";
            $context["status_color"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "nb_errors", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
            // line 6
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 7
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/form.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 9
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "nb_errors", [], "any", false, false, false, 9)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "nb_errors", [], "any", false, false, false, 9), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "forms", [], "any", false, false, false, 9)), "html", null, true)));
                yield "
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "data", [], "any", false, false, false, 16), "forms", [], "any", false, false, false, 16)), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 20
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20) > 0)) ? ("red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "
        ";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 24, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 24, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
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

        // line 29
        yield "    <span class=\"label label-status-";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, false, 29), "nb_errors", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : (""));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, false, 29), "forms", [], "any", false, false, false, 29))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 30
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/form.svg");
        yield "</span>
        <strong>Forms</strong>
        ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, false, 32), "nb_errors", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "            <span class=\"count\">
                <span>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, false, 34), "nb_errors", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 37
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 197
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

        // line 198
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = 'sf_toggle_data';
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll('.tree .tree-inner');
                treeItems.forEach((treeItem) => {
                    var targetId = treeItem.getAttribute('data-tab-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener('click', (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add('hidden');
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute('data-tab-target-id');
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove('active');
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add('hidden');
                }

                treeItem.classList.add('active');
                treePanel.classList.remove('hidden');

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll('.toggle-button');
                buttons.forEach((button) => {
                    const targetId = button.getAttribute('data-toggle-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains('hidden')) {
                        button.classList.add('closed');
                    }

                    button.addEventListener('click', (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains('closed');
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove('closed');
                    target.classList.remove('hidden');

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add('closed');
                    target.classList.add('hidden');

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains('closed')) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && 'object' === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 378
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

        // line 379
        yield "    <h2>Forms</h2>

    ";
        // line 381
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 381, $this->source); })()), "data", [], "any", false, false, false, 381), "forms", [], "any", false, false, false, 381))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 382
            yield "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 384, $this->source); })()), "data", [], "any", false, false, false, 384), "forms", [], "any", false, false, false, 384));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 385
                yield "                ";
                yield $this->getTemplateForMacro("macro_form_tree_entry", $context, 385, $this->getSourceContext())->macro_form_tree_entry(...[$context["formName"], $context["formData"], true]);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['formName'], $context['formData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            yield "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 391, $this->source); })()), "data", [], "any", false, false, false, 391), "forms", [], "any", false, false, false, 391));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 392
                yield "                ";
                yield $this->getTemplateForMacro("macro_form_tree_details", $context, 392, $this->getSourceContext())->macro_form_tree_details(...[$context["formName"], $context["formData"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 392, $this->source); })()), "data", [], "any", false, false, false, 392), "forms_by_hash", [], "any", false, false, false, 392), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 392)]);
                yield "
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
            unset($context['_seq'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            yield "        </div>
    ";
        } else {
            // line 396
            yield "        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 402
    public function macro_form_tree_entry($name = null, $data = null, $is_root = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "data" => $data,
            "is_root" => $is_root,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 403
            yield "    ";
            $context["has_error"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 403) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 403, $this->source); })()), "errors", [], "any", false, false, false, 403)) > 0));
            // line 404
            yield "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405), "html", null, true);
            yield "-details\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 405, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            yield "\">
            ";
            // line 406
            if ((($tmp = (isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 406, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 407
                yield "                <div class=\"badge-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 407, $this->source); })()), "errors", [], "any", false, false, false, 407)), "html", null, true);
                yield "</div>
            ";
            }
            // line 409
            yield "
            ";
            // line 410
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 410, $this->source); })()), "children", [], "any", false, false, false, 410))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 411
                yield "                <button class=\"toggle-button\" data-toggle-target-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 411, $this->source); })()), "id", [], "any", false, false, false, 411), "html", null, true);
                yield "-children\">
                    ";
                // line 412
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                yield "
                </button>
            ";
            } else {
                // line 415
                yield "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 417
            yield "
            <span ";
            // line 418
            if (((isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 418, $this->source); })()) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 418)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 418, $this->source); })()), "has_children_error", [], "any", false, false, false, 418), false)) : (false)))) {
                yield "class=\"has-error\"";
            }
            yield ">
                ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 419, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            yield "
            </span>
        </div>

        ";
            // line 423
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 423, $this->source); })()), "children", [], "any", false, false, false, 423))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 424
                yield "            <ul id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 424, $this->source); })()), "id", [], "any", false, false, false, 424), "html", null, true);
                yield "-children\" ";
                if (( !(isset($context["is_root"]) || array_key_exists("is_root", $context) ? $context["is_root"] : (function () { throw new RuntimeError('Variable "is_root" does not exist.', 424, $this->source); })()) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 424, $this->source); })()), "has_children_error", [], "any", false, false, false, 424), false)) : (false)))) {
                    yield "class=\"hidden\"";
                }
                yield ">
                ";
                // line 425
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 425, $this->source); })()), "children", [], "any", false, false, false, 425));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 426
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_form_tree_entry", $context, 426, $this->getSourceContext())->macro_form_tree_entry(...[$context["childName"], $context["childData"], false]);
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['childName'], $context['childData'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                yield "            </ul>
        ";
            }
            // line 430
            yield "    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 433
    public function macro_form_tree_details($name = null, $data = null, $forms_by_hash = null, $show = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "data" => $data,
            "forms_by_hash" => $forms_by_hash,
            "show" => $show,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 434
            yield "    <div class=\"tree-details";
            if ((($tmp =  !((array_key_exists("show", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 434, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " hidden";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 434)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 434, $this->source); })()), "id", [], "any", false, false, false, 434), "html", null, true);
                yield "-details\"";
            }
            yield ">
        <h2>";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 435, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            yield "</h2>
        ";
            // line 436
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 436)) {
                // line 437
                yield "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 439
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 439, $this->source); })()), "type_class", [], "any", false, false, false, 439));
                yield "
            </div>
        ";
            }
            // line 442
            yield "
        ";
            // line 443
            $context["form_has_errors"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 443) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 443, $this->source); })()), "errors", [], "any", false, false, false, 443)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 443, $this->source); })()), "errors", [], "any", false, false, false, 443)) : ([])));
            // line 444
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 445
            yield (((($tmp = (isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 445, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("disabled"));
            yield "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 449
            yield $this->getTemplateForMacro("macro_render_form_errors", $context, 449, $this->getSourceContext())->macro_render_form_errors(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 449, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 453
            yield (((($tmp =  !(isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 453, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 457
            yield $this->getTemplateForMacro("macro_render_form_default_data", $context, 457, $this->getSourceContext())->macro_render_form_default_data(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 457, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 461
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, false, 461) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 461, $this->source); })()), "submitted_data", [], "any", false, false, false, 461)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 461, $this->source); })()), "submitted_data", [], "any", false, false, false, 461)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 465
            yield $this->getTemplateForMacro("macro_render_form_submitted_data", $context, 465, $this->getSourceContext())->macro_render_form_submitted_data(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 465, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 469
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 469) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 469, $this->source); })()), "passed_options", [], "any", false, false, false, 469)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 469, $this->source); })()), "passed_options", [], "any", false, false, false, 469)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 473
            yield $this->getTemplateForMacro("macro_render_form_passed_options", $context, 473, $this->getSourceContext())->macro_render_form_passed_options(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 473, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 477
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 477) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 477, $this->source); })()), "resolved_options", [], "any", false, false, false, 477)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 477, $this->source); })()), "resolved_options", [], "any", false, false, false, 477)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 481
            yield $this->getTemplateForMacro("macro_render_form_resolved_options", $context, 481, $this->getSourceContext())->macro_render_form_resolved_options(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 481, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 485
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 485) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 485, $this->source); })()), "view_vars", [], "any", false, false, false, 485)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 485, $this->source); })()), "view_vars", [], "any", false, false, false, 485)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 489
            yield $this->getTemplateForMacro("macro_render_form_view_variables", $context, 489, $this->getSourceContext())->macro_render_form_view_variables(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 489, $this->source); })())]);
            yield "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 495, $this->source); })()), "children", [], "any", false, false, false, 495));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 496
                yield "        ";
                yield $this->getTemplateForMacro("macro_form_tree_details", $context, 496, $this->getSourceContext())->macro_form_tree_details(...[$context["childName"], $context["childData"], (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 496, $this->source); })())]);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['childName'], $context['childData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 500
    public function macro_render_form_errors($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 501
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 501) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 501, $this->source); })()), "errors", [], "any", false, false, false, 501)) > 0))) {
                // line 502
                yield "        <div class=\"errors\">
            <table id=\"";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 503, $this->source); })()), "id", [], "any", false, false, false, 503), "html", null, true);
                yield "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 512
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 512, $this->source); })()), "errors", [], "any", false, false, false, 512));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 513
                    yield "                    <tr>
                        <td>";
                    // line 514
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 514), "html", null, true);
                    yield "</td>
                        <td>
                            ";
                    // line 516
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 516))) {
                        // line 517
                        yield "                                <em>This form.</em>
                            ";
                    } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,                     // line 518
($context["forms_by_hash"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 518), [], "array", true, true, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 519
                        yield "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 521
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 521, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 521), [], "array", false, false, false, 521), "name", [], "any", false, false, false, 521), "html", null, true);
                        yield "
                            ";
                    }
                    // line 523
                    yield "                        </td>
                        <td>
                            ";
                    // line 525
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 526
                        yield "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 527
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 527));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 528
                            yield "                                    ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["stacked"]);
                            yield "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['stacked'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 530
                        yield "                            ";
                    } else {
                        // line 531
                        yield "                                <em>Unknown.</em>
                            ";
                    }
                    // line 533
                    yield "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 536
                yield "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 540
                yield "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 546
    public function macro_render_form_default_data($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 547
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, false, 547)) {
                // line 548
                yield "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 559
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 559), "model", [], "any", true, true, false, 559)) {
                    // line 560
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 560, $this->source); })()), "default_data", [], "any", false, false, false, 560), "seek", ["model"], "method", false, false, false, 560));
                    yield "
                    ";
                } else {
                    // line 562
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 564
                yield "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 568
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 568, $this->source); })()), "default_data", [], "any", false, false, false, 568), "seek", ["norm"], "method", false, false, false, 568));
                yield "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 573
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 573), "view", [], "any", true, true, false, 573)) {
                    // line 574
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 574, $this->source); })()), "default_data", [], "any", false, false, false, 574), "seek", ["view"], "method", false, false, false, 574));
                    yield "
                    ";
                } else {
                    // line 576
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 578
                yield "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 583
                yield "        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 589
    public function macro_render_form_submitted_data($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 590
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 590), "norm", [], "any", true, true, false, 590)) {
                // line 591
                yield "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 602
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 602), "view", [], "any", true, true, false, 602)) {
                    // line 603
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 603, $this->source); })()), "submitted_data", [], "any", false, false, false, 603), "seek", ["view"], "method", false, false, false, 603));
                    yield "
                    ";
                } else {
                    // line 605
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 607
                yield "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 611
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 611, $this->source); })()), "submitted_data", [], "any", false, false, false, 611), "seek", ["norm"], "method", false, false, false, 611));
                yield "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 616
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 616), "model", [], "any", true, true, false, 616)) {
                    // line 617
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 617, $this->source); })()), "submitted_data", [], "any", false, false, false, 617), "seek", ["model"], "method", false, false, false, 617));
                    yield "
                    ";
                } else {
                    // line 619
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 621
                yield "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 626
                yield "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 632
    public function macro_render_form_passed_options($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 633
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 633) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 633, $this->source); })()), "passed_options", [], "any", false, false, false, 633)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 633, $this->source); })()), "passed_options", [], "any", false, false, false, 633)) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 634
                yield "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 643
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 643, $this->source); })()), "passed_options", [], "any", false, false, false, 643));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 644
                    yield "                <tr>
                    <th>";
                    // line 645
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "</th>
                    <td>";
                    // line 646
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                    yield "</td>
                    <td>
                        ";
                    // line 649
                    yield "                        ";
                    $context["option_value"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, false, 649)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 649)) : ($context["value"]));
                    // line 650
                    yield "                        ";
                    $context["resolved_option_value"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 650), $context["option"], [], "array", false, true, false, 650), "value", [], "any", true, true, false, 650)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 651
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 651, $this->source); })()), "resolved_options", [], "any", false, false, false, 651), $context["option"], [], "array", false, false, false, 651), "value", [], "any", false, false, false, 651)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 652
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 652, $this->source); })()), "resolved_options", [], "any", false, false, false, 652), $context["option"], [], "array", false, false, false, 652)));
                    // line 653
                    yield "                        ";
                    if (((isset($context["resolved_option_value"]) || array_key_exists("resolved_option_value", $context) ? $context["resolved_option_value"] : (function () { throw new RuntimeError('Variable "resolved_option_value" does not exist.', 653, $this->source); })()) == (isset($context["option_value"]) || array_key_exists("option_value", $context) ? $context["option_value"] : (function () { throw new RuntimeError('Variable "option_value" does not exist.', 653, $this->source); })()))) {
                        // line 654
                        yield "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 656
                        yield "                            ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 656, $this->source); })()), "resolved_options", [], "any", false, false, false, 656), "seek", [$context["option"]], "method", false, false, false, 656));
                        yield "
                        ";
                    }
                    // line 658
                    yield "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['option'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 661
                yield "            </tbody>
        </table>
    ";
            } else {
                // line 664
                yield "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 670
    public function macro_render_form_resolved_options($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 671
            yield "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 679
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 679) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 679, $this->source); })()), "resolved_options", [], "any", false, false, false, 679)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 679, $this->source); })()), "resolved_options", [], "any", false, false, false, 679)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 680
                yield "            <tr>
                <th scope=\"row\">";
                // line 681
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "</th>
                <td>";
                // line 682
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['option'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 685
            yield "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 689
    public function macro_render_form_view_variables($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 690
            yield "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 698
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 698) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 698, $this->source); })()), "view_vars", [], "any", false, false, false, 698)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 698, $this->source); })()), "view_vars", [], "any", false, false, false, 698)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 699
                yield "            <tr>
                <th scope=\"row\">";
                // line 700
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["variable"], "html", null, true);
                yield "</th>
                <td>";
                // line 701
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['variable'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 704
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
        return "@WebProfiler/Collector/form.html.twig";
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
        return array (  1477 => 704,  1468 => 701,  1464 => 700,  1461 => 699,  1457 => 698,  1447 => 690,  1429 => 689,  1415 => 685,  1406 => 682,  1402 => 681,  1399 => 680,  1395 => 679,  1385 => 671,  1367 => 670,  1351 => 664,  1346 => 661,  1338 => 658,  1332 => 656,  1328 => 654,  1325 => 653,  1323 => 652,  1322 => 651,  1320 => 650,  1317 => 649,  1312 => 646,  1308 => 645,  1305 => 644,  1301 => 643,  1290 => 634,  1287 => 633,  1269 => 632,  1253 => 626,  1246 => 621,  1242 => 619,  1236 => 617,  1234 => 616,  1226 => 611,  1220 => 607,  1216 => 605,  1210 => 603,  1208 => 602,  1195 => 591,  1192 => 590,  1174 => 589,  1158 => 583,  1151 => 578,  1147 => 576,  1141 => 574,  1139 => 573,  1131 => 568,  1125 => 564,  1121 => 562,  1115 => 560,  1113 => 559,  1100 => 548,  1097 => 547,  1079 => 546,  1063 => 540,  1057 => 536,  1049 => 533,  1045 => 531,  1042 => 530,  1033 => 528,  1029 => 527,  1026 => 526,  1024 => 525,  1020 => 523,  1014 => 521,  1010 => 519,  1008 => 518,  1005 => 517,  1003 => 516,  998 => 514,  995 => 513,  991 => 512,  979 => 503,  976 => 502,  973 => 501,  955 => 500,  936 => 496,  932 => 495,  923 => 489,  916 => 485,  909 => 481,  902 => 477,  895 => 473,  888 => 469,  881 => 465,  874 => 461,  867 => 457,  860 => 453,  853 => 449,  846 => 445,  843 => 444,  841 => 443,  838 => 442,  832 => 439,  828 => 437,  826 => 436,  822 => 435,  809 => 434,  788 => 433,  775 => 430,  771 => 428,  762 => 426,  758 => 425,  749 => 424,  747 => 423,  740 => 419,  734 => 418,  731 => 417,  727 => 415,  721 => 412,  716 => 411,  714 => 410,  711 => 409,  705 => 407,  703 => 406,  697 => 405,  694 => 404,  691 => 403,  671 => 402,  656 => 396,  652 => 394,  635 => 392,  618 => 391,  612 => 387,  603 => 385,  599 => 384,  595 => 382,  593 => 381,  589 => 379,  576 => 378,  385 => 198,  372 => 197,  205 => 41,  192 => 40,  180 => 37,  174 => 34,  171 => 33,  169 => 32,  164 => 30,  157 => 29,  144 => 28,  130 => 24,  127 => 23,  118 => 20,  111 => 16,  107 => 14,  105 => 13,  102 => 12,  95 => 9,  89 => 7,  86 => 6,  83 => 5,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.data.nb_errors > 0 or collector.data.forms|length %}
        {% set status_color = collector.data.nb_errors ? 'red' %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/form.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.data.nb_errors ?: collector.data.forms|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">{{ collector.data.forms|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.data.nb_errors > 0 ? 'red' }}\">{{ collector.data.nb_errors }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.data.nb_errors ? 'error' }} {{ collector.data.forms is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/form.svg') }}</span>
        <strong>Forms</strong>
        {% if collector.data.nb_errors > 0 %}
            <span class=\"count\">
                <span>{{ collector.data.nb_errors }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{  parent() }}

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = 'sf_toggle_data';
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll('.tree .tree-inner');
                treeItems.forEach((treeItem) => {
                    var targetId = treeItem.getAttribute('data-tab-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener('click', (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add('hidden');
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute('data-tab-target-id');
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove('active');
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add('hidden');
                }

                treeItem.classList.add('active');
                treePanel.classList.remove('hidden');

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll('.toggle-button');
                buttons.forEach((button) => {
                    const targetId = button.getAttribute('data-toggle-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains('hidden')) {
                        button.classList.add('closed');
                    }

                    button.addEventListener('click', (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains('closed');
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove('closed');
                    target.classList.remove('hidden');

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add('closed');
                    target.classList.add('hidden');

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains('closed')) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && 'object' === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
{% endblock %}

{% block panel %}
    <h2>Forms</h2>

    {% if collector.data.forms|length %}
        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            {% for formName, formData in collector.data.forms %}
                {{ _self.form_tree_entry(formName, formData, true) }}
            {% endfor %}
            </ul>
        </div>

        <div id=\"tree-details-container\">
            {% for formName, formData in collector.data.forms %}
                {{ _self.form_tree_details(formName, formData, collector.data.forms_by_hash, loop.first) }}
            {% endfor %}
        </div>
    {% else %}
        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    {% endif %}
{% endblock %}

{% macro form_tree_entry(name, data, is_root) %}
    {% set has_error = data.errors is defined and data.errors|length > 0 %}
    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"{{ data.id }}-details\" title=\"{{ name|default('(no name)') }}\">
            {% if has_error %}
                <div class=\"badge-error\">{{ data.errors|length }}</div>
            {% endif %}

            {% if data.children is not empty %}
                <button class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-children\">
                    {{ source('@WebProfiler/Icon/chevron-down.svg') }}
                </button>
            {% else %}
                <div class=\"toggle-icon empty\"></div>
            {% endif %}

            <span {% if has_error or data.has_children_error|default(false) %}class=\"has-error\"{% endif %}>
                {{ name|default('(no name)') }}
            </span>
        </div>

        {% if data.children is not empty %}
            <ul id=\"{{ data.id }}-children\" {% if not is_root and not data.has_children_error|default(false) %}class=\"hidden\"{% endif %}>
                {% for childName, childData in data.children %}
                    {{ _self.form_tree_entry(childName, childData, false) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{% macro form_tree_details(name, data, forms_by_hash, show) %}
    <div class=\"tree-details{% if not show|default(false) %} hidden{% endif %}\" {% if data.id is defined %}id=\"{{ data.id }}-details\"{% endif %}>
        <h2>{{ name|default('(no name)') }}</h2>
        {% if data.type_class is defined %}
            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                {{ profiler_dump(data.type_class) }}
            </div>
        {% endif %}

        {% set form_has_errors = data.errors ?? [] is not empty %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ form_has_errors ? 'active' : 'disabled' }}\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_errors(data) }}
                </div>
            </div>

            <div class=\"tab {{ not form_has_errors ? 'active' }}\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_default_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.submitted_data ?? []) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_submitted_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.passed_options ?? []) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_passed_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.resolved_options ?? []) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_resolved_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.view_vars ?? []) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_view_variables(data) }}
                </div>
            </div>
        </div>
    </div>

    {% for childName, childData in data.children %}
        {{ _self.form_tree_details(childName, childData, forms_by_hash) }}
    {% endfor %}
{% endmacro %}

{% macro render_form_errors(data) %}
    {% if data.errors is defined and data.errors|length > 0 %}
        <div class=\"errors\">
            <table id=\"{{ data.id }}-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                {% for error in data.errors %}
                    <tr>
                        <td>{{ error.message }}</td>
                        <td>
                            {% if error.origin is empty %}
                                <em>This form.</em>
                            {% elseif forms_by_hash[error.origin] is not defined %}
                                <em>Unknown.</em>
                            {% else %}
                                {{ forms_by_hash[error.origin].name }}
                            {% endif %}
                        </td>
                        <td>
                            {% if error.trace %}
                                <span class=\"newline\">Caused by:</span>
                                {% for stacked in error.trace %}
                                    {{ profiler_dump(stacked) }}
                                {% endfor %}
                            {% else %}
                                <em>Unknown.</em>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_default_data(data) %}
    {% if data.default_data is defined %}
        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.default_data.model is defined %}
                        {{ profiler_dump(data.default_data.seek('model')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.default_data.seek('norm')) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.default_data.view is defined %}
                        {{ profiler_dump(data.default_data.seek('view')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_submitted_data(data) %}
    {% if data.submitted_data.norm is defined %}
        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.submitted_data.view is defined %}
                        {{ profiler_dump(data.submitted_data.seek('view')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.submitted_data.seek('norm')) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.submitted_data.model is defined %}
                        {{ profiler_dump(data.submitted_data.seek('model')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_passed_options(data) %}
    {% if data.passed_options ?? [] is not empty %}
        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            {% for option, value in data.passed_options %}
                <tr>
                    <th>{{ option }}</th>
                    <td>{{ profiler_dump(value) }}</td>
                    <td>
                        {# values can be stubs #}
                        {% set option_value = (value.value is defined) ? value.value : value %}
                        {% set resolved_option_value = (data.resolved_options[option].value is defined)
                            ? data.resolved_options[option].value
                            : data.resolved_options[option] %}
                        {% if resolved_option_value == option_value %}
                            <em class=\"font-normal text-muted\">same as passed value</em>
                        {% else %}
                            {{ profiler_dump(data.resolved_options.seek(option)) }}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_resolved_options(data) %}
    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for option, value in data.resolved_options ?? [] %}
            <tr>
                <th scope=\"row\">{{ option }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_form_view_variables(data) %}
    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for variable, value in data.view_vars ?? [] %}
            <tr>
                <th scope=\"row\">{{ variable }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\form.html.twig");
    }
}
