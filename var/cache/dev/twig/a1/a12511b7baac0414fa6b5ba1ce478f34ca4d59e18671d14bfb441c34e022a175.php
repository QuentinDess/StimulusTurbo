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

/* product/_categoriesSidebar.html.twig */
class __TwigTemplate_437cb5ff21e21526100ddf3a2c7e609efb4d2342aa4f120770dae48caed3aca0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_categoriesSidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_categoriesSidebar.html.twig"));

        // line 1
        echo "<div class=\"p-3 mb-5 component-light\">
    <h5 class=\"text-center\">
        Categories
    </h5>
    <ul class=\"nav flex-column mb4\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\" class=\"nav-link ";
        echo (( !((array_key_exists("currentCategory", $context)) ? (_twig_default_filter((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 7, $this->source); })()))) : (""))) ? ("selected") : (""));
        echo "\">
                All Products
            </a>
        </li>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "            <li class=\"nav-item\">
                <a
                    href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\"
                    class=\"nav-link ";
            // line 15
            echo (((((array_key_exists("currentCategory", $context)) ? (_twig_default_filter((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 15, $this->source); })()))) : ("")) === $context["category"])) ? ("selected") : (""));
            echo "\"
                >
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
    <hr>

    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-secondary btn-sm\">
            Collapse
        </button>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_categoriesSidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  77 => 17,  72 => 15,  68 => 14,  64 => 12,  60 => 11,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"p-3 mb-5 component-light\">
    <h5 class=\"text-center\">
        Categories
    </h5>
    <ul class=\"nav flex-column mb4\">
        <li class=\"nav-item\">
            <a href=\"{{ path('app_homepage') }}\" class=\"nav-link {{ not currentCategory|default ? 'selected' }}\">
                All Products
            </a>
        </li>
        {% for category in categories %}
            <li class=\"nav-item\">
                <a
                    href=\"{{ path('app_category', { id: category.id }) }}\"
                    class=\"nav-link {{ currentCategory|default is same as category ? 'selected' }}\"
                >
                    {{ category.name }}
                </a>
            </li>
        {% endfor %}
    </ul>
    <hr>

    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-secondary btn-sm\">
            Collapse
        </button>
    </div>
</div>
", "product/_categoriesSidebar.html.twig", "/Users/quentindessartine/Documents/GitHub/StimulusTurbo/templates/product/_categoriesSidebar.html.twig");
    }
}
