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

/* cart/_featuredSidebar.html.twig */
class __TwigTemplate_97fb17bf61901c1ebf09c85fd938df028a22ff569adab088c24472cd77795454 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_featuredSidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_featuredSidebar.html.twig"));

        // line 1
        echo "<div class=\"component-light product-show p-3 mb-5\">
    <h5 class=\"text-center\">Featured Product!</h5>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\">
        <img
            alt=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
            src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/products/" . twig_get_attribute($this->env, $this->source, (isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 6, $this->source); })()), "imageFilename", [], "any", false, false, false, 6))), "html", null, true);
        echo "\"
            class=\"d-block\"
        >
    </a>
    <div class=\"pt-3\">
        <h6>
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "

            ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["featuredProduct"]) || array_key_exists("featuredProduct", $context) ? $context["featuredProduct"] : (function () { throw new RuntimeError('Variable "featuredProduct" does not exist.', 14, $this->source); })()), "priceString", [], "any", false, false, false, 14), "USD"), "html", null, true);
        echo "
        </h6>

        ";
        // line 17
        echo twig_include($this->env, $context, "product/_cart_add_controls.html.twig");
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/_featuredSidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  70 => 14,  65 => 12,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"component-light product-show p-3 mb-5\">
    <h5 class=\"text-center\">Featured Product!</h5>
    <a href=\"{{ path('app_product', { id: featuredProduct.id }) }}\">
        <img
            alt=\"{{ featuredProduct.name }}\"
            src=\"{{ asset('/uploads/products/'~featuredProduct.imageFilename) }}\"
            class=\"d-block\"
        >
    </a>
    <div class=\"pt-3\">
        <h6>
            {{ featuredProduct.name }}

            {{ featuredProduct.priceString|format_currency('USD') }}
        </h6>

        {{ include('product/_cart_add_controls.html.twig') }}
    </div>
</div>
", "cart/_featuredSidebar.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/cart/_featuredSidebar.html.twig");
    }
}
