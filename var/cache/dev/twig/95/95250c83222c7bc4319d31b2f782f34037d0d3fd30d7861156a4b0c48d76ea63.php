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

/* admin/_all_categories.html.twig */
class __TwigTemplate_0a68eca704136e0a5e57ee007028ca9cb38ce969840cd0e631da3f974666094a extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_all_categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_all_categories.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["editedCategory"] ?? null), "parent", [], "any", true, true, false, 1) && (twig_get_attribute($this->env, $this->source, (isset($context["editedCategory"]) || array_key_exists("editedCategory", $context) ? $context["editedCategory"] : (function () { throw new RuntimeError('Variable "editedCategory" does not exist.', 1, $this->source); })()), "parent", [], "any", false, false, false, 1) == null))) {
            // line 2
            echo "<option selected value=\"0\">No parent</option>
";
        } else {
            // line 4
            echo "<option value=\"0\">No parent</option>
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 6, $this->source); })()), "categorylist", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["editedCategory"] ?? null), "parent", [], "any", false, true, false, 7), "getId", [], "method", true, true, false, 7) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editedCategory"]) || array_key_exists("editedCategory", $context) ? $context["editedCategory"] : (function () { throw new RuntimeError('Variable "editedCategory" does not exist.', 7, $this->source); })()), "parent", [], "any", false, false, false, 7), "getId", [], "method", false, false, false, 7) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 7)))) {
                // line 8
                echo "    <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "</option>
    ";
            } else {
                // line 10
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 10), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10), "html", null, true);
                echo "</option>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_all_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  58 => 8,  55 => 7,  51 => 6,  47 => 4,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if editedCategory.parent is defined and editedCategory.parent == null %}
<option selected value=\"0\">No parent</option>
{% else %}
<option value=\"0\">No parent</option>
{% endif %}
{% for category in categories.categorylist %}
    {% if editedCategory.parent.getId() is defined and editedCategory.parent.getId() == category.id %}
    <option selected value=\"{{category.id}}\">{{category.name}}</option>
    {% else %}
    <option value=\"{{category.id}}\">{{category.name}}</option>
    {% endif %}
{% endfor %}
", "admin/_all_categories.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\admin\\_all_categories.html.twig");
    }
}
