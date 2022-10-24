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

/* cart/cart.html.twig */
class __TwigTemplate_ba915920c40dfc4b814af37f2bec2f7bbd1c639ac3cd7e4e30102a1000504db2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/cart.html.twig", 1);
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
            <aside class=\"col-xs-12 col-lg-3\">
                ";
        // line 7
        if ((isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "                    ";
            echo twig_include($this->env, $context, "cart/_featuredSidebar.html.twig");
            echo "
                ";
        }
        // line 10
        echo "            </aside>

            <div class=\"col-xs-12 col-lg-9 cart\">
                <h1>Shopping Cart</h1>
                <div class=\"component-light p-3\">
                    <div>
                        <div class=\"row p-3\">
                            <div class=\"col-3\">
                                Item Name
                            </div>
                            <div class=\"col-3\">
                                Quantity
                            </div>
                            <div class=\"col-3\">
                                Price
                            </div>
                            <div class=\"col-3\"></div>
                        </div>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()), "items", [], "any", false, false, false, 28));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                            <div class=\"cart-item row p-3\">
                                <div class=\"col-2\">
                                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "
                                </div>
                                <div class=\"col-1\">
                                    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                        <span class=\"color-square\" style=\"background-color: rgb(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 35), "red", [], "any", false, false, false, 35), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 35), "green", [], "any", false, false, false, 35), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 35), "blue", [], "any", false, false, false, 35), "html", null, true);
                echo ");\"></span>
                                    ";
            }
            // line 37
            echo "                                </div>
                                <div class=\"col-3\">
                                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), "html", null, true);
            echo "
                                </div>
                                <div class=\"col-3\">
                                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "totalString", [], "any", false, false, false, 42), "USD"), "html", null, true);
            echo "
                                </div>
                                <div class=\"col-3\">
                                    <form
                                        action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove_item", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
$context["item"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "colorId" => ((twig_get_attribute($this->env, $this->source,             // line 48
$context["item"], "color", [], "any", false, false, false, 48)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)) : (null))]), "html", null, true);
            // line 49
            echo "\"
                                        method=\"POST\"
                                    >
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("remove_item"), "html", null, true);
            echo "\" />

                                        <button class=\"btn btn-info btn-sm\">
                                            Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                            <div class=\"col-12\">
                                Your cart is empty! Get to shopping!
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                        ";
        // line 66
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 66, $this->source); })()), "items", [], "any", false, false, false, 66)) > 0)) {
            // line 67
            echo "                        <div class=\"p-3\">
                            Total: <strong>";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 68, $this->source); })()), "totalString", [], "any", false, false, false, 68), "USD"), "html", null, true);
            echo "</strong>
                        </div>
                        ";
        }
        // line 71
        echo "                    </div>

                    ";
        // line 73
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 73, $this->source); })()), "items", [], "any", false, false, false, 73)) > 0)) {
            // line 74
            echo "                    <div>
                        <a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
            echo "\" class=\"btn btn-primary\">
                            Check Out &gt;&gt;
                        </a>
                    </div>
                    ";
        }
        // line 80
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 80,  200 => 75,  197 => 74,  195 => 73,  191 => 71,  185 => 68,  182 => 67,  180 => 66,  177 => 65,  168 => 61,  154 => 52,  149 => 49,  147 => 48,  146 => 47,  145 => 46,  138 => 42,  132 => 39,  128 => 37,  118 => 35,  116 => 34,  110 => 31,  106 => 29,  101 => 28,  81 => 10,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <aside class=\"col-xs-12 col-lg-3\">
                {% if featuredProduct %}
                    {{ include('cart/_featuredSidebar.html.twig') }}
                {% endif %}
            </aside>

            <div class=\"col-xs-12 col-lg-9 cart\">
                <h1>Shopping Cart</h1>
                <div class=\"component-light p-3\">
                    <div>
                        <div class=\"row p-3\">
                            <div class=\"col-3\">
                                Item Name
                            </div>
                            <div class=\"col-3\">
                                Quantity
                            </div>
                            <div class=\"col-3\">
                                Price
                            </div>
                            <div class=\"col-3\"></div>
                        </div>
                        {% for item in cart.items %}
                            <div class=\"cart-item row p-3\">
                                <div class=\"col-2\">
                                    {{ item.product.name }}
                                </div>
                                <div class=\"col-1\">
                                    {% if item.color %}
                                        <span class=\"color-square\" style=\"background-color: rgb({{ item.color.red }}, {{ item.color.green }}, {{ item.color.blue }});\"></span>
                                    {% endif %}
                                </div>
                                <div class=\"col-3\">
                                    {{ item.quantity }}
                                </div>
                                <div class=\"col-3\">
                                    {{ item.totalString|format_currency('USD') }}
                                </div>
                                <div class=\"col-3\">
                                    <form
                                        action=\"{{ path('app_cart_remove_item', {
                                            productId: item.product.id,
                                            colorId: item.color ? item.color.id: null,
                                        }) }}\"
                                        method=\"POST\"
                                    >
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('remove_item') }}\" />

                                        <button class=\"btn btn-info btn-sm\">
                                            Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"col-12\">
                                Your cart is empty! Get to shopping!
                            </div>
                        {% endfor %}

                        {% if cart.items|length > 0 %}
                        <div class=\"p-3\">
                            Total: <strong>{{ cart.totalString|format_currency('USD') }}</strong>
                        </div>
                        {% endif %}
                    </div>

                    {% if cart.items|length > 0 %}
                    <div>
                        <a href=\"{{ path('app_checkout') }}\" class=\"btn btn-primary\">
                            Check Out &gt;&gt;
                        </a>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "cart/cart.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/cart/cart.html.twig");
    }
}
