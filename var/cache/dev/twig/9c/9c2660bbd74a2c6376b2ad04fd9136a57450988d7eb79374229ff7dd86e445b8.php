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

/* product/index.html.twig */
class __TwigTemplate_f2d5bae83637006e81bf58be659845ece7b563aec8bcd9ff3d009f018a7e50bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        echo "    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <aside class=\"col-xs-12 col-3\">
                ";
        // line 7
        echo twig_include($this->env, $context, "product/_categoriesSidebar.html.twig");
        echo "
            </aside>

            <div class=\"col-xs-12 col-9\">
                <div data-controller=\"counter\">
                    <button
                        data-action=\"counter#increment\"
                        class=\"btn btn-sm btn-primary\">Click on me!</button>
                    <br>
                    You have click
                    <span data-counter-target=\"count\">0</span>
                    on me !
                </div>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <h1>
                            ";
        // line 23
        if ((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "
                            ";
        } else {
            // line 26
            echo "                                All Products
                            ";
        }
        // line 28
        echo "                        </h1>
                    </div>
                    <div class=\"col-9\">
                        <form>
                            <div
                                class=\"input-group\"
                                ";
        // line 34
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "search-preview", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage")]);
        // line 36
        echo ">
                                <input
                                    name=\"q\"
                                    value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "\"
                                    placeholder=\"Search products...\"
                                    type=\"search\"
                                    class=\"form-control\"
                                    data-action=\"search-preview#onSearchInput\"
                                >
                                <div
                                    class=\"search-preview\"
                                    data-search-preview-target=\"result\"
                                >

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "                        <div class=\"col-xs-12 col-6 mb-2 pb-2\">
                            <div class=\"component-light\">
                                <div class=\"product-image\">
                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">
                                        <img
                                            alt=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "\"
                                            src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 63))), "html", null, true);
            echo "\"
                                            class=\"d-block mb-2\"
                                        >
                                    </a>
                                    <h3 class=\"font-weight-bold mb-2 px-2\">
                                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">
                                            ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "
                                        </a>
                                    </h3>
                                </div>
                                <div
                                    class=\"p-2 my-3 d-md-flex justify-content-between\">
                                    <p class=\"p-0 d-inline\">
                                        <strong>";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["product"], "priceString", [], "any", false, false, false, 76), "USD"), "html", null, true);
            echo "</strong>
                                    </p>
                                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"btn btn-info\">View Product</a>
                                </div>
                            </div>
                            <hr>
                            <div class=\"px-2 pb-2\">
                                <small>brought to you by ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 83), "html", null, true);
            echo "</small>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "                        <div class=\"col-12\">
                            <h5 class=\"ml-4 mt-4\" >
                                Whoopsie Daisy, no products found!
                            </h5>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </div>

                <div class=\"row\">
                    <span class=\"p-3\">
                        Shipping takes 10-13 weeks, and products probably won't work
                    </span>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 93,  202 => 87,  193 => 83,  185 => 78,  180 => 76,  170 => 69,  166 => 68,  158 => 63,  154 => 62,  149 => 60,  144 => 57,  139 => 56,  119 => 39,  114 => 36,  112 => 34,  104 => 28,  100 => 26,  94 => 24,  92 => 23,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <aside class=\"col-xs-12 col-3\">
                {{ include('product/_categoriesSidebar.html.twig') }}
            </aside>

            <div class=\"col-xs-12 col-9\">
                <div data-controller=\"counter\">
                    <button
                        data-action=\"counter#increment\"
                        class=\"btn btn-sm btn-primary\">Click on me!</button>
                    <br>
                    You have click
                    <span data-counter-target=\"count\">0</span>
                    on me !
                </div>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <h1>
                            {% if currentCategory %}
                                {{ currentCategory.name }}
                            {% else %}
                                All Products
                            {% endif %}
                        </h1>
                    </div>
                    <div class=\"col-9\">
                        <form>
                            <div
                                class=\"input-group\"
                                {{ stimulus_controller('search-preview',{
                                    url : path('app_homepage')
                                }) }}>
                                <input
                                    name=\"q\"
                                    value=\"{{ searchTerm }}\"
                                    placeholder=\"Search products...\"
                                    type=\"search\"
                                    class=\"form-control\"
                                    data-action=\"search-preview#onSearchInput\"
                                >
                                <div
                                    class=\"search-preview\"
                                    data-search-preview-target=\"result\"
                                >

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    {% for product in products %}
                        <div class=\"col-xs-12 col-6 mb-2 pb-2\">
                            <div class=\"component-light\">
                                <div class=\"product-image\">
                                    <a href=\"{{ path('app_product', { id: product.id }) }}\">
                                        <img
                                            alt=\"{{ product.name }}\"
                                            src=\"{{ asset('/uploads/products/'~product.imageFilename) }}\"
                                            class=\"d-block mb-2\"
                                        >
                                    </a>
                                    <h3 class=\"font-weight-bold mb-2 px-2\">
                                        <a href=\"{{ path('app_product', { id: product.id }) }}\">
                                            {{ product.name }}
                                        </a>
                                    </h3>
                                </div>
                                <div
                                    class=\"p-2 my-3 d-md-flex justify-content-between\">
                                    <p class=\"p-0 d-inline\">
                                        <strong>{{ product.priceString|format_currency('USD') }}</strong>
                                    </p>
                                    <a href=\"{{ path('app_product', { id: product.id }) }}\" class=\"btn btn-info\">View Product</a>
                                </div>
                            </div>
                            <hr>
                            <div class=\"px-2 pb-2\">
                                <small>brought to you by {{ product.brand }}</small>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"col-12\">
                            <h5 class=\"ml-4 mt-4\" >
                                Whoopsie Daisy, no products found!
                            </h5>
                        </div>
                    {% endfor %}
                </div>

                <div class=\"row\">
                    <span class=\"p-3\">
                        Shipping takes 10-13 weeks, and products probably won't work
                    </span>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "product/index.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/product/index.html.twig");
    }
}
