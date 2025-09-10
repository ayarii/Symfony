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

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_2a3f5446367f523145c7082afd15c904 extends Template
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

        // line 1
        $_trait_0 = $this->load("bootstrap_5_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_horizontal_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_horizontal_layout.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 19
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 23
        yield "
";
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 72
        yield "
";
        // line 73
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 89
        yield "
";
        // line 90
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 98
        yield "
";
        // line 99
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 116
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 127
        yield "
";
        // line 128
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()) === false)) {
            // line 7
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 9
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 9, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9), "")) : (""))));
            // line 10
            if ((!CoreExtension::inFilter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 10, $this->source); })())) && !CoreExtension::inFilter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 10, $this->source); })())))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 11, $this->source); })()))) {
                    // line 12
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 12, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 12, $this->source); })()), "class", [], "any", false, false, false, 12), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 14, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 14, $this->source); })()), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 21
        yield "col-sm-2";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 27
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["widget_attr"] = [];
            // line 31
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 31, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()) . "_help")]];
            }
            // line 34
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 34, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 34, $this->source); })()), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 34, $this->source); })()), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3"))));
            // line 35
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_form_floating"]) || array_key_exists("is_form_floating", $context) ? $context["is_form_floating"] : (function () { throw new RuntimeError('Variable "is_form_floating" does not exist.', 35, $this->source); })()), CoreExtension::inFilter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 35, $this->source); })())))) : (CoreExtension::inFilter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 35, $this->source); })()))));
            // line 36
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 36, $this->source); })()), CoreExtension::inFilter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 36, $this->source); })())))) : (CoreExtension::inFilter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 36, $this->source); })()))));
            // line 38
            $context["row_class"] = Twig\Extension\CoreExtension::replace((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 38, $this->source); })()), ["form-floating" => "", "input-group" => ""]);
            // line 39
            yield "<div";
            $_v0 = $context;
            $_v1 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 39, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 39, $this->source); })()) . " row") . (((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 39, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 39, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 39, $this->source); })()))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($_v1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 39, $this->getSourceContext());
            }
            $_v1 = CoreExtension::toArray($_v1);
            $context = $_v1 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v0;
            yield ">";
            // line 40
            if (((isset($context["is_form_floating"]) || array_key_exists("is_form_floating", $context) ? $context["is_form_floating"] : (function () { throw new RuntimeError('Variable "is_form_floating" does not exist.', 40, $this->source); })()) || (isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 40, $this->source); })()))) {
                // line 41
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
                <div class=\"";
                // line 42
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 43
                if ((($tmp = (isset($context["is_form_floating"]) || array_key_exists("is_form_floating", $context) ? $context["is_form_floating"] : (function () { throw new RuntimeError('Variable "is_form_floating" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "<div class=\"form-floating\">";
                    // line 45
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 45, $this->source); })()));
                    // line 46
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'label');
                    // line 47
                    yield "</div>";
                } elseif ((($tmp =                 // line 48
(isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "<div class=\"input-group\">";
                    // line 50
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'label');
                    // line 51
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 51, $this->source); })()));
                    // line 53
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'help');
                    // line 54
                    yield "</div>";
                }
                // line 56
                if ((($tmp =  !(isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'help');
                }
                // line 59
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'errors');
                // line 60
                yield "</div>";
            } else {
                // line 62
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'label');
                // line 63
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 64
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 64, $this->source); })()));
                // line 65
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'help');
                // line 66
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'errors');
                // line 67
                yield "</div>";
            }
            // line 69
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fieldset_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 74
        $context["widget_attr"] = [];
        // line 75
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 75, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })()) . "_help")]];
        }
        // line 78
        yield "<fieldset";
        $_v2 = $context;
        $_v3 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 78, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 78, $this->source); })()), "class", [], "any", false, false, false, 78), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($_v3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 78, $this->getSourceContext());
        }
        $_v3 = CoreExtension::toArray($_v3);
        $context = $_v3 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v2;
        yield ">
        <div class=\"row";
        // line 79
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 79, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 79, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 79, $this->source); })()))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'label');
        // line 81
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 82, $this->source); })()));
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'help');
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors');
        // line 85
        yield "</div>
        </div>
    </fieldset>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        // line 91
        yield "<div";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 91, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 91, $this->source); })()), "class", [], "any", false, false, false, 91), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 91, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">";
        // line 92
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 93
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'widget');
        // line 95
        yield "</div>";
        // line 96
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reset_row"));

        // line 100
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 100, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 100, $this->source); })()), "class", [], "any", false, false, false, 100), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 100, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 101
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 102
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'widget');
        // line 104
        yield "</div>";
        // line 105
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 109
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 109, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 109, $this->source); })()), "class", [], "any", false, false, false, 109), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 109, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">";
        // line 110
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 111
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'widget');
        // line 113
        yield "</div>";
        // line 114
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 118
        yield "<div";
        $_v10 = $context;
        $_v11 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 118, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 118, $this->source); })()), "class", [], "any", false, false, false, 118), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 118, $this->getSourceContext());
        }
        $_v11 = CoreExtension::toArray($_v11);
        $context = $_v11 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v10;
        yield ">";
        // line 119
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 120
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'widget');
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'help');
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'errors');
        // line 124
        yield "</div>";
        // line 125
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 129
        yield "col-sm-10";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  584 => 129,  571 => 128,  560 => 125,  558 => 124,  556 => 123,  554 => 122,  552 => 121,  548 => 120,  544 => 119,  532 => 118,  519 => 117,  508 => 114,  506 => 113,  504 => 112,  500 => 111,  496 => 110,  484 => 109,  471 => 108,  460 => 105,  458 => 104,  456 => 103,  452 => 102,  448 => 101,  436 => 100,  423 => 99,  412 => 96,  410 => 95,  408 => 94,  404 => 93,  400 => 92,  388 => 91,  375 => 90,  362 => 85,  360 => 84,  358 => 83,  356 => 82,  352 => 81,  350 => 80,  345 => 79,  332 => 78,  329 => 76,  327 => 75,  325 => 74,  312 => 73,  300 => 69,  297 => 67,  295 => 66,  293 => 65,  291 => 64,  287 => 63,  285 => 62,  282 => 60,  280 => 59,  277 => 57,  275 => 56,  272 => 54,  270 => 53,  268 => 51,  266 => 50,  264 => 49,  262 => 48,  260 => 47,  258 => 46,  256 => 45,  254 => 44,  252 => 43,  249 => 42,  244 => 41,  242 => 40,  230 => 39,  228 => 38,  226 => 36,  224 => 35,  222 => 34,  219 => 32,  217 => 31,  215 => 30,  212 => 28,  210 => 27,  197 => 26,  186 => 21,  173 => 20,  161 => 16,  158 => 14,  155 => 12,  153 => 11,  151 => 10,  149 => 9,  144 => 7,  142 => 6,  129 => 5,  118 => 128,  115 => 127,  113 => 117,  110 => 116,  108 => 108,  105 => 107,  103 => 99,  100 => 98,  98 => 90,  95 => 89,  93 => 73,  90 => 72,  88 => 26,  85 => 25,  82 => 23,  80 => 20,  77 => 19,  75 => 5,  72 => 4,  69 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% use \"bootstrap_5_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set row_class = row_class|default(row_attr.class|default('')) -%}
        {%- if 'form-floating' not in row_class and 'input-group' not in row_class -%}
            {%- if expanded is not defined or not expanded -%}
                {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
            {%- endif -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {%- endif -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
    col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        {%- set widget_attr = {} -%}
        {%- if help is not empty -%}
            {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\"}} -%}
        {%- endif -%}
        {%- set row_class = row_class|default(row_attr.class|default('mb-3')) -%}
        {%- set is_form_floating = is_form_floating|default('form-floating' in row_class) -%}
        {%- set is_input_group = is_input_group|default('input-group' in row_class) -%}
        {#- Remove behavior class from the main container -#}
        {%- set row_class = row_class|replace({'form-floating': '', 'input-group': ''}) -%}
        <div{% with {attr: row_attr|merge({class: (row_class ~ ' row' ~ ((not compound or force_error|default(false)) and not valid ? ' is-invalid'))|trim})} %}{{ block('attributes') }}{% endwith %}>
            {%- if is_form_floating or is_input_group -%}
                <div class=\"{{ block('form_label_class') }}\"></div>
                <div class=\"{{ block('form_group_class') }}\">
                    {%- if is_form_floating -%}
                        <div class=\"form-floating\">
                            {{- form_widget(form, widget_attr) -}}
                            {{- form_label(form) -}}
                        </div>
                    {%- elseif is_input_group -%}
                        <div class=\"input-group\">
                            {{- form_label(form) -}}
                            {{- form_widget(form, widget_attr) -}}
                            {#- Hack to properly display help with input group -#}
                            {{- form_help(form) -}}
                        </div>
                    {%- endif -%}
                    {%- if not is_input_group -%}
                        {{- form_help(form) -}}
                    {%- endif -%}
                    {{- form_errors(form) -}}
                </div>
            {%- else -%}
                {{- form_label(form) -}}
                <div class=\"{{ block('form_group_class') }}\">
                    {{- form_widget(form, widget_attr) -}}
                    {{- form_help(form) -}}
                    {{- form_errors(form) -}}
                </div>
            {%- endif -%}
        {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    {%- set widget_attr = {} -%}
    {%- if help is not empty -%}
        {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\"}} -%}
    {%- endif -%}
    <fieldset{% with {attr: row_attr|merge({class: row_attr.class|default('mb-3')|trim})} %}{{ block('attributes') }}{% endwith %}>
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form, widget_attr) -}}
                {{- form_help(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
    </fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block button_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock button_row %}

{% block checkbox_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_help(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}

{% block form_group_class -%}
    col-sm-10
{%- endblock form_group_class %}
", "bootstrap_5_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\3A27\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_5_horizontal_layout.html.twig");
    }
}
