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

/* checkout/checkout.html.twig */
class __TwigTemplate_75b7f9372be7e0d8b654485af9ca161a4a023a3af99c1fdf9cb8bd52cdc6372a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <aside class=\"col-xs-12 col-lg-3\">
                ";
        // line 13
        if ((isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                    ";
            echo twig_include($this->env, $context, "cart/_featuredSidebar.html.twig");
            echo "
                ";
        }
        // line 16
        echo "            </aside>

            <div class=\"col-xs-12 col-lg-9 cart\">
                <h1>Checkout</h1>
                <div class=\"component-light p-3\">

                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form-row\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 24, $this->source); })()), "customerName", [], "any", false, false, false, 24), 'row', ["row_attr" => ["class" => "col"]]);
        // line 26
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 27, $this->source); })()), "customerEmail", [], "any", false, false, false, 27), 'row', ["row_attr" => ["class" => "col"]]);
        // line 29
        echo "
                        </div>

                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 32, $this->source); })()), "customerAddress", [], "any", false, false, false, 32), 'row');
        echo "

                        <div class=\"form-row\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 35, $this->source); })()), "customerCity", [], "any", false, false, false, 35), 'row', ["row_attr" => ["class" => "col"]]);
        // line 37
        echo "

                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 39, $this->source); })()), "customerZip", [], "any", false, false, false, 39), 'row', ["row_attr" => ["class" => "col"]]);
        // line 41
        echo "

                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 43, $this->source); })()), "customerPhone", [], "any", false, false, false, 43), 'row', ["row_attr" => ["class" => "col"]]);
        // line 45
        echo "
                        </div>

                        <div class=\"form-row justify-content-end align-items-center\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-info btn-lg\" formnovalidate>
                                    Order!
                                </button>
                            </div>
                        </div>
                    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

                    <div>
                        <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\" class=\"btn btn-primary\">
                            &lt;&lt; Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function macro_renderFormField($__field__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFormField"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFormField"));

            // line 4
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\">

    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "checkout/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 4,  163 => 3,  144 => 58,  138 => 55,  126 => 45,  124 => 43,  120 => 41,  118 => 39,  114 => 37,  112 => 35,  106 => 32,  101 => 29,  99 => 27,  96 => 26,  94 => 24,  89 => 22,  81 => 16,  75 => 14,  73 => 13,  68 => 10,  58 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% macro renderFormField(field, class) %}
    <div class=\"form-group {{ class }}\">

    </div>
{% endmacro %}

{% block body %}
    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <aside class=\"col-xs-12 col-lg-3\">
                {% if featuredProduct %}
                    {{ include('cart/_featuredSidebar.html.twig') }}
                {% endif %}
            </aside>

            <div class=\"col-xs-12 col-lg-9 cart\">
                <h1>Checkout</h1>
                <div class=\"component-light p-3\">

                    {{ form_start(checkoutForm) }}
                        <div class=\"form-row\">
                            {{ form_row(checkoutForm.customerName, {
                                row_attr: { class: 'col' }
                            }) }}
                            {{ form_row(checkoutForm.customerEmail, {
                                row_attr: { class: 'col' }
                            }) }}
                        </div>

                        {{ form_row(checkoutForm.customerAddress) }}

                        <div class=\"form-row\">
                            {{ form_row(checkoutForm.customerCity, {
                                row_attr: { class: 'col' }
                            }) }}

                            {{ form_row(checkoutForm.customerZip, {
                                row_attr: { class: 'col' }
                            }) }}

                            {{ form_row(checkoutForm.customerPhone, {
                                row_attr: { class: 'col' }
                            }) }}
                        </div>

                        <div class=\"form-row justify-content-end align-items-center\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-info btn-lg\" formnovalidate>
                                    Order!
                                </button>
                            </div>
                        </div>
                    {{ form_end(checkoutForm) }}

                    <div>
                        <a href=\"{{ path('app_cart') }}\" class=\"btn btn-primary\">
                            &lt;&lt; Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "checkout/checkout.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/checkout/checkout.html.twig");
    }
}
