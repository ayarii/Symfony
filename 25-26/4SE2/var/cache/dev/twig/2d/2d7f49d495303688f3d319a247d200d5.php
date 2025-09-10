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

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_f788a593f061e05841cd851237b91f3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base_js.html.twig"));

        // line 3
        yield "
";
        // line 7
        yield "<script";
        if ((array_key_exists("csp_script_nonce", $context) && (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 7, $this->source); })()))) {
            yield " nonce=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
    window.addEventListener('DOMContentLoaded', () => {
        new SymfonyProfiler();
    });

    class SymfonyProfiler {
        constructor() {
            this.#createTabs();
            this.#createToggles();
            this.#createCopyToClipboard();
            this.#convertDateTimesToUserTimezone();
        }

        #createTabs() {
            /* the accessibility options of this component have been defined according to: */
            /* www.w3.org/WAI/ARIA/apg/example-index/tabs/tabs-manual.html */
            const tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

            /* create the tab navigation for each group of tabs */
            tabGroups.forEach((tabGroup, i) => {
                const tabs = tabGroup.querySelectorAll(':scope > .tab');
                const tabNavigation = document.createElement('div');
                tabNavigation.classList.add('tab-navigation');
                tabNavigation.setAttribute('role', 'tablist');

                let selectedTabId = `tab-\${i}-0`; /* select the first tab by default */
                tabs.forEach((tab, j) => {
                    const tabId = `tab-\${i}-\${j}`;
                    const tabTitle = tab.querySelector('.tab-title').innerHTML;

                    const tabNavigationItem = document.createElement('button');
                    tabNavigationItem.classList.add('tab-control');
                    tabNavigationItem.setAttribute('data-tab-id', tabId);
                    tabNavigationItem.setAttribute('role', 'tab');
                    tabNavigationItem.setAttribute('aria-controls', tabId);
                    if (tab.classList.contains('active')) { selectedTabId = tabId; }
                    if (tab.classList.contains('disabled')) {
                        tabNavigationItem.classList.add('disabled');
                    }
                    tabNavigationItem.innerHTML = tabTitle;
                    tabNavigation.appendChild(tabNavigationItem);

                    const tabContent = tab.querySelector('.tab-content');
                    tabContent.parentElement.setAttribute('id', tabId);
                });

                tabGroup.insertBefore(tabNavigation, tabGroup.firstChild);
                document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]').classList.add('active');
            });

            /* display the active tab and add the 'click' event listeners */
            tabGroups.forEach((tabGroup) => {
                const tabs = tabGroup.querySelectorAll(':scope > .tab-navigation .tab-control');
                tabs.forEach((tab) => {
                    const tabId = tab.getAttribute('data-tab-id');
                    const tabPanel = document.getElementById(tabId);
                    tabPanel.setAttribute('role', 'tabpanel');
                    tabPanel.setAttribute('aria-labelledby', tabId);
                    tabPanel.querySelector('.tab-title').className = 'hidden';

                    if (tab.classList.contains('active')) {
                        tabPanel.className = 'block';
                        tab.setAttribute('aria-selected', 'true');
                        tab.removeAttribute('tabindex');
                    } else {
                        tabPanel.className = 'hidden';
                        tab.removeAttribute('aria-selected');
                        tab.setAttribute('tabindex', '-1');
                    }

                    tab.addEventListener('click', function(e) {
                        let activeTab = e.target || e.srcElement;

                        /* needed because when the tab contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '<button>' element */
                        while ('button' !== activeTab.tagName.toLowerCase()) {
                            activeTab = activeTab.parentNode;
                        }

                        /* get the full list of tabs through the parent of the active tab element */
                        const tabs = Array.from(activeTab.parentNode.children);
                        tabs.forEach((tab) => {
                            const tabId = tab.getAttribute('data-tab-id');
                            document.getElementById(tabId).className = 'hidden';
                            tab.classList.remove('active');
                            tab.removeAttribute('aria-selected');
                            tab.setAttribute('tabindex', '-1');
                        });

                        activeTab.classList.add('active');
                        activeTab.setAttribute('aria-selected', 'true');
                        activeTab.removeAttribute('tabindex');
                        const activeTabId = activeTab.getAttribute('data-tab-id');
                        document.getElementById(activeTabId).className = 'block';
                    });
                });

                tabGroup.setAttribute('data-processed', 'true');
            });
        }

        #createToggles() {
            const toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');
            toggles.forEach((toggle) => {
                const elementSelector = toggle.getAttribute('data-toggle-selector');
                const element = document.querySelector(elementSelector);

                element.classList.add('sf-toggle-content');

                if (toggle.hasAttribute('data-toggle-initial') && 'display' === toggle.getAttribute('data-toggle-initial')) {
                    toggle.classList.add('sf-toggle-on');
                    element.classList.add('sf-toggle-visible');
                } else {
                    toggle.classList.add('sf-toggle-off');
                    element.classList.add('sf-toggle-hidden');
                }

                toggle.addEventListener('click', (e) => {
                    const toggle = e.currentTarget;

                    if (e.target.closest('a, .sf-toggle') !== toggle) {
                        return;
                    }

                    e.preventDefault();

                    if ('' !== window.getSelection().toString()) {
                        /* Don't do anything on text selection */
                        return;
                    }

                    const element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                    toggle.classList.toggle('sf-toggle-on');
                    toggle.classList.toggle('sf-toggle-off');
                    element.classList.toggle('sf-toggle-hidden');
                    element.classList.toggle('sf-toggle-visible');

                    /* the toggle doesn't change its contents when clicking on it */
                    if (!toggle.hasAttribute('data-toggle-alt-content')) {
                        return;
                    }

                    if (!toggle.hasAttribute('data-toggle-original-content')) {
                        toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                    }

                    const currentContent = toggle.innerHTML;
                    const originalContent = toggle.getAttribute('data-toggle-original-content');
                    const altContent = toggle.getAttribute('data-toggle-alt-content');
                    toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                });

                toggle.setAttribute('data-processed', 'true');
            });
        }

        #createCopyToClipboard() {
            if (!navigator.clipboard) {
                return;
            }

            const copyToClipboardElements = document.querySelectorAll('[data-clipboard-text]');

            copyToClipboardElements.forEach((copyToClipboardElement) => {
                copyToClipboardElement.classList.remove('hidden');

                copyToClipboardElement.addEventListener('click', (e) => {
                    /* Prevents from disallowing clicks on \"copy to clipboard\" elements inside toggles */
                    e.stopPropagation();

                    navigator.clipboard.writeText(copyToClipboardElement.getAttribute('data-clipboard-text'));

                    let oldContent = copyToClipboardElement.textContent;

                    copyToClipboardElement.textContent = `✅ Copied!`;
                    copyToClipboardElement.disabled = true;

                    setTimeout(() => {
                        copyToClipboardElement.textContent = oldContent;
                        copyToClipboardElement.disabled = false;
                    }, 7000);
                });
            });
        }

        #convertDateTimesToUserTimezone() {
            const userTimezoneName = Intl.DateTimeFormat().resolvedOptions().timeZone;

            document.querySelectorAll('time[data-convert-to-user-timezone]').forEach((timeElement) => {
                const iso8601Datetime = timeElement.getAttribute('datetime');
                const dateInUserTimezone = new Date(iso8601Datetime);

                let options = {};
                if (timeElement.hasAttribute('data-render-as-datetime')) {
                    options = {
                        year: 'numeric', month: 'long', day: 'numeric',
                        hour: 'numeric', minute: 'numeric', second: 'numeric'
                    };
                } else if (timeElement.hasAttribute('data-render-as-date')) {
                    options = { year: 'numeric', month: 'long', day: 'numeric' };
                } else if (timeElement.hasAttribute('data-render-as-time')) {
                    options = { hour: 'numeric', minute: 'numeric', second: 'numeric' };
                }

                if (timeElement.hasAttribute('data-render-with-millisecond-precision')) {
                    options.fractionalSecondDigits = 3;
                }

                /* dates/times are always rendered in English to match the rest of the Profiler interface */
                timeElement.textContent = dateInUserTimezone.toLocaleString('en', options);

                if (undefined !== userTimezoneName) {
                    const existingTitle = timeElement.getAttribute('title');
                    const newTitle = null === existingTitle
                        ? `Date/times shown in your timezone: \${userTimezoneName}`
                        : existingTitle + ` (date/times shown in your timezone: \${userTimezoneName})`;
                    timeElement.setAttribute('title', newTitle);
                }
            });
        }
    }
</script>
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
        return "@WebProfiler/Profiler/base_js.html.twig";
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
        return array (  51 => 7,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# This file is partially duplicated in src/Symfony/Component/ErrorHandler/Resources/assets/js/exception.js.
   If you make any change in this file, verify the same change is needed in the other file. #}

{# CAUTION: the contents of this file are processed by Twig before loading
            them as JavaScript source code. Always use '/*' comments instead
            of '//' comments to avoid impossible-to-debug side-effects #}
<script{% if csp_script_nonce is defined and csp_script_nonce %} nonce=\"{{ csp_script_nonce }}\"{% endif %}>
    window.addEventListener('DOMContentLoaded', () => {
        new SymfonyProfiler();
    });

    class SymfonyProfiler {
        constructor() {
            this.#createTabs();
            this.#createToggles();
            this.#createCopyToClipboard();
            this.#convertDateTimesToUserTimezone();
        }

        #createTabs() {
            /* the accessibility options of this component have been defined according to: */
            /* www.w3.org/WAI/ARIA/apg/example-index/tabs/tabs-manual.html */
            const tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

            /* create the tab navigation for each group of tabs */
            tabGroups.forEach((tabGroup, i) => {
                const tabs = tabGroup.querySelectorAll(':scope > .tab');
                const tabNavigation = document.createElement('div');
                tabNavigation.classList.add('tab-navigation');
                tabNavigation.setAttribute('role', 'tablist');

                let selectedTabId = `tab-\${i}-0`; /* select the first tab by default */
                tabs.forEach((tab, j) => {
                    const tabId = `tab-\${i}-\${j}`;
                    const tabTitle = tab.querySelector('.tab-title').innerHTML;

                    const tabNavigationItem = document.createElement('button');
                    tabNavigationItem.classList.add('tab-control');
                    tabNavigationItem.setAttribute('data-tab-id', tabId);
                    tabNavigationItem.setAttribute('role', 'tab');
                    tabNavigationItem.setAttribute('aria-controls', tabId);
                    if (tab.classList.contains('active')) { selectedTabId = tabId; }
                    if (tab.classList.contains('disabled')) {
                        tabNavigationItem.classList.add('disabled');
                    }
                    tabNavigationItem.innerHTML = tabTitle;
                    tabNavigation.appendChild(tabNavigationItem);

                    const tabContent = tab.querySelector('.tab-content');
                    tabContent.parentElement.setAttribute('id', tabId);
                });

                tabGroup.insertBefore(tabNavigation, tabGroup.firstChild);
                document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]').classList.add('active');
            });

            /* display the active tab and add the 'click' event listeners */
            tabGroups.forEach((tabGroup) => {
                const tabs = tabGroup.querySelectorAll(':scope > .tab-navigation .tab-control');
                tabs.forEach((tab) => {
                    const tabId = tab.getAttribute('data-tab-id');
                    const tabPanel = document.getElementById(tabId);
                    tabPanel.setAttribute('role', 'tabpanel');
                    tabPanel.setAttribute('aria-labelledby', tabId);
                    tabPanel.querySelector('.tab-title').className = 'hidden';

                    if (tab.classList.contains('active')) {
                        tabPanel.className = 'block';
                        tab.setAttribute('aria-selected', 'true');
                        tab.removeAttribute('tabindex');
                    } else {
                        tabPanel.className = 'hidden';
                        tab.removeAttribute('aria-selected');
                        tab.setAttribute('tabindex', '-1');
                    }

                    tab.addEventListener('click', function(e) {
                        let activeTab = e.target || e.srcElement;

                        /* needed because when the tab contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '<button>' element */
                        while ('button' !== activeTab.tagName.toLowerCase()) {
                            activeTab = activeTab.parentNode;
                        }

                        /* get the full list of tabs through the parent of the active tab element */
                        const tabs = Array.from(activeTab.parentNode.children);
                        tabs.forEach((tab) => {
                            const tabId = tab.getAttribute('data-tab-id');
                            document.getElementById(tabId).className = 'hidden';
                            tab.classList.remove('active');
                            tab.removeAttribute('aria-selected');
                            tab.setAttribute('tabindex', '-1');
                        });

                        activeTab.classList.add('active');
                        activeTab.setAttribute('aria-selected', 'true');
                        activeTab.removeAttribute('tabindex');
                        const activeTabId = activeTab.getAttribute('data-tab-id');
                        document.getElementById(activeTabId).className = 'block';
                    });
                });

                tabGroup.setAttribute('data-processed', 'true');
            });
        }

        #createToggles() {
            const toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');
            toggles.forEach((toggle) => {
                const elementSelector = toggle.getAttribute('data-toggle-selector');
                const element = document.querySelector(elementSelector);

                element.classList.add('sf-toggle-content');

                if (toggle.hasAttribute('data-toggle-initial') && 'display' === toggle.getAttribute('data-toggle-initial')) {
                    toggle.classList.add('sf-toggle-on');
                    element.classList.add('sf-toggle-visible');
                } else {
                    toggle.classList.add('sf-toggle-off');
                    element.classList.add('sf-toggle-hidden');
                }

                toggle.addEventListener('click', (e) => {
                    const toggle = e.currentTarget;

                    if (e.target.closest('a, .sf-toggle') !== toggle) {
                        return;
                    }

                    e.preventDefault();

                    if ('' !== window.getSelection().toString()) {
                        /* Don't do anything on text selection */
                        return;
                    }

                    const element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                    toggle.classList.toggle('sf-toggle-on');
                    toggle.classList.toggle('sf-toggle-off');
                    element.classList.toggle('sf-toggle-hidden');
                    element.classList.toggle('sf-toggle-visible');

                    /* the toggle doesn't change its contents when clicking on it */
                    if (!toggle.hasAttribute('data-toggle-alt-content')) {
                        return;
                    }

                    if (!toggle.hasAttribute('data-toggle-original-content')) {
                        toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                    }

                    const currentContent = toggle.innerHTML;
                    const originalContent = toggle.getAttribute('data-toggle-original-content');
                    const altContent = toggle.getAttribute('data-toggle-alt-content');
                    toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                });

                toggle.setAttribute('data-processed', 'true');
            });
        }

        #createCopyToClipboard() {
            if (!navigator.clipboard) {
                return;
            }

            const copyToClipboardElements = document.querySelectorAll('[data-clipboard-text]');

            copyToClipboardElements.forEach((copyToClipboardElement) => {
                copyToClipboardElement.classList.remove('hidden');

                copyToClipboardElement.addEventListener('click', (e) => {
                    /* Prevents from disallowing clicks on \"copy to clipboard\" elements inside toggles */
                    e.stopPropagation();

                    navigator.clipboard.writeText(copyToClipboardElement.getAttribute('data-clipboard-text'));

                    let oldContent = copyToClipboardElement.textContent;

                    copyToClipboardElement.textContent = `✅ Copied!`;
                    copyToClipboardElement.disabled = true;

                    setTimeout(() => {
                        copyToClipboardElement.textContent = oldContent;
                        copyToClipboardElement.disabled = false;
                    }, 7000);
                });
            });
        }

        #convertDateTimesToUserTimezone() {
            const userTimezoneName = Intl.DateTimeFormat().resolvedOptions().timeZone;

            document.querySelectorAll('time[data-convert-to-user-timezone]').forEach((timeElement) => {
                const iso8601Datetime = timeElement.getAttribute('datetime');
                const dateInUserTimezone = new Date(iso8601Datetime);

                let options = {};
                if (timeElement.hasAttribute('data-render-as-datetime')) {
                    options = {
                        year: 'numeric', month: 'long', day: 'numeric',
                        hour: 'numeric', minute: 'numeric', second: 'numeric'
                    };
                } else if (timeElement.hasAttribute('data-render-as-date')) {
                    options = { year: 'numeric', month: 'long', day: 'numeric' };
                } else if (timeElement.hasAttribute('data-render-as-time')) {
                    options = { hour: 'numeric', minute: 'numeric', second: 'numeric' };
                }

                if (timeElement.hasAttribute('data-render-with-millisecond-precision')) {
                    options.fractionalSecondDigits = 3;
                }

                /* dates/times are always rendered in English to match the rest of the Profiler interface */
                timeElement.textContent = dateInUserTimezone.toLocaleString('en', options);

                if (undefined !== userTimezoneName) {
                    const existingTitle = timeElement.getAttribute('title');
                    const newTitle = null === existingTitle
                        ? `Date/times shown in your timezone: \${userTimezoneName}`
                        : existingTitle + ` (date/times shown in your timezone: \${userTimezoneName})`;
                    timeElement.setAttribute('title', newTitle);
                }
            });
        }
    }
</script>
", "@WebProfiler/Profiler/base_js.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\base_js.html.twig");
    }
}
