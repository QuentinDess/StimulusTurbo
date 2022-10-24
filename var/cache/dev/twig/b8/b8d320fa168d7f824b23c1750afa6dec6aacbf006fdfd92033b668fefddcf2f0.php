<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/dashboard.html.twig */
class __TwigTemplate_955f8f53810dc2edc7dde782f03b928e821b698a3da54b64d6767cd692de9fb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <nav class=\"col-2 bg-light sidebar\">
                <div class=\"sidebar-sticky pt-3\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-home\">
                                    <path
                                        d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path>
                                    <polyline
                                        points=\"9 22 9 12 15 12 15 22\"></polyline>
                                </svg>
                                Dashboard <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-file\">
                                    <path
                                        d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path>
                                    <polyline points=\"13 2 13 9 20 9\"></polyline>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-shopping-cart\">
                                    <circle cx=\"9\" cy=\"21\" r=\"1\"></circle>
                                    <circle cx=\"20\" cy=\"21\" r=\"1\"></circle>
                                    <path
                                        d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-users\">
                                    <path
                                        d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
                                    <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
                                    <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
                                    <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
                                </svg>
                                Customers
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-bar-chart-2\">
                                    <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line>
                                    <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line>
                                    <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line>
                                </svg>
                                Reports
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-layers\">
                                    <polygon
                                        points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                                    <polyline points=\"2 17 12 22 22 17\"></polyline>
                                    <polyline points=\"2 12 12 17 22 12\"></polyline>
                                </svg>
                                Integrations
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class=\"col-10 mt-4\">
                <h1>Admin Dashboard</h1>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <nav class=\"col-2 bg-light sidebar\">
                <div class=\"sidebar-sticky pt-3\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-home\">
                                    <path
                                        d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path>
                                    <polyline
                                        points=\"9 22 9 12 15 12 15 22\"></polyline>
                                </svg>
                                Dashboard <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-file\">
                                    <path
                                        d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path>
                                    <polyline points=\"13 2 13 9 20 9\"></polyline>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-shopping-cart\">
                                    <circle cx=\"9\" cy=\"21\" r=\"1\"></circle>
                                    <circle cx=\"20\" cy=\"21\" r=\"1\"></circle>
                                    <path
                                        d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-users\">
                                    <path
                                        d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
                                    <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
                                    <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
                                    <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
                                </svg>
                                Customers
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-bar-chart-2\">
                                    <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line>
                                    <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line>
                                    <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line>
                                </svg>
                                Reports
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                     height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\"
                                     stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                     class=\"feather feather-layers\">
                                    <polygon
                                        points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                                    <polyline points=\"2 17 12 22 22 17\"></polyline>
                                    <polyline points=\"2 12 12 17 22 12\"></polyline>
                                </svg>
                                Integrations
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class=\"col-10 mt-4\">
                <h1>Admin Dashboard</h1>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/dashboard.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/admin/dashboard.html.twig");
    }
}
