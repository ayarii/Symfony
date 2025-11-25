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

/* base.html.twig */
class __TwigTemplate_3273f28cbbe85546c890e1bbd841f00b extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"img/favicon.png\" rel=\"icon\">
    <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Libraries CSS Files -->
    <link href=\"libraries/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/icofont/icofont.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/owl.carousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/venobox/venobox.css\" rel=\"stylesheet\">
    <link href=\"libraries/aos/aos.css\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">


</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

        <h1 class=\"logo\"><a href=\"index.html\">Esprit</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

        <nav class=\"nav-menu d-none d-lg-block\">
            <ul>
                <li><a href=\"index.html\">Home</a></li>
                <li class=\"active\"><a href=\"about.html\">About</a></li>
                <li><a href=\"resume.html\">Resume</a></li>
                <li><a href=\"services.html\">Services</a></li>
                <li><a href=\"portfolio.html\">Portfolio</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class=\"header-social-links\">
            <a href=\"#\" class=\"twitter\"><i class=\"icofont-twitter\"></i></a>
            <a href=\"#\" class=\"facebook\"><i class=\"icofont-facebook\"></i></a>
            <a href=\"#\" class=\"instagram\"><i class=\"icofont-instagram\"></i></a>
            <a href=\"#\" class=\"linkedin\"><i class=\"icofont-linkedin\"></i></i></a>
        </div>

    </div>

</header><!-- End Header -->

<main id=\"main\" class=\"container\">
    <div class=\"my-5 \"
   ";
        // line 68
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 71
        yield "</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>Esprit</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>

<!-- Libraries JS Files -->
<script src=\"libraries/jquery/jquery.min.js\"></script>
<script src=\"libraries/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"libraries/jquery.easing/jquery.easing.min.js\"></script>
<script src=\"libraries/php-email-form/validate.js\"></script>
<script src=\"libraries/waypoints/jquery.waypoints.min.js\"></script>
<script src=\"libraries/counterup/counterup.min.js\"></script>
<script src=\"libraries/owl.carousel/owl.carousel.min.js\"></script>
<script src=\"libraries/isotope-layout/isotope.pkgd.min.js\"></script>
<script src=\"libraries/venobox/venobox.min.js\"></script>
<script src=\"libraries/aos/aos.js\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        yield "
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
        return "base.html.twig";
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
        return array (  212 => 69,  199 => 68,  176 => 8,  160 => 102,  127 => 71,  125 => 68,  82 => 28,  59 => 8,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>{% block title %} {% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"img/favicon.png\" rel=\"icon\">
    <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Libraries CSS Files -->
    <link href=\"libraries/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/icofont/icofont.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/owl.carousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
    <link href=\"libraries/venobox/venobox.css\" rel=\"stylesheet\">
    <link href=\"libraries/aos/aos.css\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">


</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

        <h1 class=\"logo\"><a href=\"index.html\">Esprit</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

        <nav class=\"nav-menu d-none d-lg-block\">
            <ul>
                <li><a href=\"index.html\">Home</a></li>
                <li class=\"active\"><a href=\"about.html\">About</a></li>
                <li><a href=\"resume.html\">Resume</a></li>
                <li><a href=\"services.html\">Services</a></li>
                <li><a href=\"portfolio.html\">Portfolio</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class=\"header-social-links\">
            <a href=\"#\" class=\"twitter\"><i class=\"icofont-twitter\"></i></a>
            <a href=\"#\" class=\"facebook\"><i class=\"icofont-facebook\"></i></a>
            <a href=\"#\" class=\"instagram\"><i class=\"icofont-instagram\"></i></a>
            <a href=\"#\" class=\"linkedin\"><i class=\"icofont-linkedin\"></i></i></a>
        </div>

    </div>

</header><!-- End Header -->

<main id=\"main\" class=\"container\">
    <div class=\"my-5 \"
   {% block body %}

    {% endblock %}
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>Esprit</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>

<!-- Libraries JS Files -->
<script src=\"libraries/jquery/jquery.min.js\"></script>
<script src=\"libraries/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"libraries/jquery.easing/jquery.easing.min.js\"></script>
<script src=\"libraries/php-email-form/validate.js\"></script>
<script src=\"libraries/waypoints/jquery.waypoints.min.js\"></script>
<script src=\"libraries/counterup/counterup.min.js\"></script>
<script src=\"libraries/owl.carousel/owl.carousel.min.js\"></script>
<script src=\"libraries/isotope-layout/isotope.pkgd.min.js\"></script>
<script src=\"libraries/venobox/venobox.min.js\"></script>
<script src=\"libraries/aos/aos.js\"></script>

<!-- Template Main JS File -->
<script src=\"{{ asset('js/main.js')  }}\"></script>

</body>

</html>", "base.html.twig", "C:\\xampp\\htdocs\\Symfony\\25-26\\4SE2\\templates\\base.html.twig");
    }
}
