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

/* front/includes/_sort.html.twig */
class __TwigTemplate_b93d4458630fe269949a40171614dd8ee9ec9ac5a269924bd2b5271b1cb06b2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_sort.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_sort.html.twig"));

        // line 1
        echo "<div class=\"form-row align-items-center ml-3\">   <!-- 使用src\\Repository\\VideoRepository.php里\$sort_method方法 -->
    <form id=\"form-sorting\" action=\"\" method=\"GET\">
       <select name=\"sortby\" class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
           <option selected>Sort...</option>
           <option value=\"rating\">Highest rated</option>
           <option value=\"asc\">Title A-Z</option>
           <option value=\"desc\">Title Z-A</option>
       </select>
";
        // line 9
        if ((isset($context["query"]) || array_key_exists("query", $context))) {
            // line 10
            echo "<input type=\"hidden\" name=\"query\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\">
";
        }
        // line 12
        echo "</form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-row align-items-center ml-3\">   <!-- 使用src\\Repository\\VideoRepository.php里\$sort_method方法 -->
    <form id=\"form-sorting\" action=\"\" method=\"GET\">
       <select name=\"sortby\" class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
           <option selected>Sort...</option>
           <option value=\"rating\">Highest rated</option>
           <option value=\"asc\">Title A-Z</option>
           <option value=\"desc\">Title Z-A</option>
       </select>
{% if query is defined %}
<input type=\"hidden\" name=\"query\" value=\"{{query}}\">
{% endif %}
</form>
</div>
", "front/includes/_sort.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\includes\\_sort.html.twig");
    }
}
