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

/* product/_cart_add_controls.html.twig */
class __TwigTemplate_0a6dbc79d597b81fe16e5ef5e5a940864a3703bd2d772a318883ad06ce0c3d65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_cart_add_controls.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_cart_add_controls.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "cart-add-controls d-flex align-items-center justify-content-baseline"]]);
        // line 3
        echo "
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["addToCartForm"] ?? null), "color", [], "any", true, true, false, 4)) {
            // line 5
            echo "        <div data-controller=\"color-square\">
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 6, $this->source); })()), "color", [], "any", false, false, false, 6), 'widget', ["attr" => ["data-color-square-target" => "select"]]);
            // line 8
            echo "

            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "data", [], "any", false, false, false, 10), "product", [], "any", false, false, false, 10), "colors", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 11
                echo "
                <button class=\"color-square\"
                        aria-label=\"Choose the color ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "\"
                        type=\"button\"
                        data-color-id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\"
                        data-color-square-target=\"colorSquare\"
                        data-action=\"color-square#selectColor\"
                        style=\"background-color: rgb(";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "red", [], "any", false, false, false, 18), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "green", [], "any", false, false, false, 18), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "blue", [], "any", false, false, false, 18), "html", null, true);
                echo ")\"></button>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>

    ";
        }
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 24, $this->source); })()), "quantity", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "mx-3"]]);
        // line 26
        echo "

    <button class=\"btn btn-info btn-sm\" formnovalidate>
        +
    </button>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 31, $this->source); })()), 'form_end');
        echo "

<div>
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 34, $this->source); })()), 'errors');
        echo "
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["addToCartForm"] ?? null), "color", [], "any", true, true, false, 35)) {
            // line 36
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 36, $this->source); })()), "color", [], "any", false, false, false, 36), 'errors');
            echo "
    ";
        }
        // line 38
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 38, $this->source); })()), "quantity", [], "any", false, false, false, 38), 'errors');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_cart_add_controls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  119 => 36,  117 => 35,  113 => 34,  107 => 31,  100 => 26,  98 => 24,  95 => 23,  90 => 20,  78 => 18,  72 => 15,  67 => 13,  63 => 11,  59 => 10,  55 => 8,  53 => 6,  50 => 5,  48 => 4,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(addToCartForm, {
    attr: { class: 'cart-add-controls d-flex align-items-center justify-content-baseline' }
}) }}
    {% if addToCartForm.color is defined %}
        <div data-controller=\"color-square\">
            {{ form_widget(addToCartForm.color, {
                attr: {'data-color-square-target': 'select'}
            }) }}

            {% for color in addToCartForm.vars.data.product.colors %}

                <button class=\"color-square\"
                        aria-label=\"Choose the color {{ color.name }}\"
                        type=\"button\"
                        data-color-id=\"{{ color.id }}\"
                        data-color-square-target=\"colorSquare\"
                        data-action=\"color-square#selectColor\"
                        style=\"background-color: rgb({{ color.red }}, {{ color.green }},{{ color.blue }})\"></button>
            {% endfor %}
        </div>

    {% endif %}

    {{ form_widget(addToCartForm.quantity, {
        attr: { class: 'mx-3' }
    }) }}

    <button class=\"btn btn-info btn-sm\" formnovalidate>
        +
    </button>
{{ form_end(addToCartForm) }}

<div>
    {{ form_errors(addToCartForm) }}
    {% if addToCartForm.color is defined %}
        {{ form_errors(addToCartForm.color) }}
    {% endif %}
    {{ form_errors(addToCartForm.quantity) }}
</div>
", "product/_cart_add_controls.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/product/_cart_add_controls.html.twig");
    }
}
