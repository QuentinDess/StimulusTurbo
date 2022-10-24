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
class __TwigTemplate_325b972f640ce2b9f14c160c26353024b447c23e95b0b09f931d8109b7e8894d extends Template
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
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 5, $this->source); })()), "color", [], "any", false, false, false, 5), 'widget');
            echo "
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 8, $this->source); })()), "quantity", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "mx-3"]]);
        // line 10
        echo "

    <button class=\"btn btn-info btn-sm\" formnovalidate>
        +
    </button>
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 15, $this->source); })()), 'form_end');
        echo "

<div>
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 18, $this->source); })()), 'errors');
        echo "
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["addToCartForm"] ?? null), "color", [], "any", true, true, false, 19)) {
            // line 20
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 20, $this->source); })()), "color", [], "any", false, false, false, 20), 'errors');
            echo "
    ";
        }
        // line 22
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 22, $this->source); })()), "quantity", [], "any", false, false, false, 22), 'errors');
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
        return array (  86 => 22,  80 => 20,  78 => 19,  74 => 18,  68 => 15,  61 => 10,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(addToCartForm, {
    attr: { class: 'cart-add-controls d-flex align-items-center justify-content-baseline' }
}) }}
    {% if addToCartForm.color is defined %}
        {{ form_widget(addToCartForm.color) }}
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
