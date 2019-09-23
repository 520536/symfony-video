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

/* front/video_list.html.twig */
class __TwigTemplate_4799e0a70a56e9f3949fb4b1279104cae65fcf365635b5919db231dcb2150cef extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'customstylesheets' => [$this, 'block_customstylesheets'],
            'main' => [$this, 'block_main'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/video_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_customstylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customstylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customstylesheets"));

        // line 4
        $this->displayParentBlock("customstylesheets", $context, $blocks);
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/likes.css"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "
<main role=\"main\">

    <section class=\"jumbotron text-center\">
        <div class=\"container\">

            <h1 class=\"jumbotron-heading\">Category - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 17, $this->source); })()), "currentCategoryName", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
            <div class=\"btn-group\">
                <div class=\"dropdown ml-2\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        Subcategories
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <ul class=\"mr-5\">
                        <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list", ["categoryname" => twig_lower_filter($this->env, $this->extensions['App\Twig\AppExtension']->slugify(twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 26, $this->source); })()), "mainParentName", [], "any", false, false, false, 26))), "id" => twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 26, $this->source); })()), "mainParentId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 26, $this->source); })()), "mainParentName", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></li>
                           ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 27, $this->source); })()), "categorylist", [], "any", false, false, false, 27);
        echo "
                        </ul>
                    </div>
                </div>

            ";
        // line 32
        echo twig_include($this->env, $context, "front/includes/_sort.html.twig");
        echo "
                
            </div>
        </div>
    </section>

    ";
        // line 38
        echo twig_include($this->env, $context, "front/includes/_videos.html.twig", ["videos" => (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 38, $this->source); })())]);
        echo "
    ";
        // line 39
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 39, $this->source); })()));
        echo "
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_customjavascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 43
        $this->displayParentBlock("customjavascripts", $context, $blocks);
        echo "
";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/likes.js"), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/video_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  169 => 44,  165 => 43,  156 => 42,  143 => 39,  139 => 38,  130 => 32,  122 => 27,  116 => 26,  104 => 17,  96 => 11,  87 => 10,  73 => 6,  71 => 5,  67 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block customstylesheets %}
{{parent()}}
{% if app.user %}
<link rel=\"stylesheet\" href=\"{{asset('assets/css/likes.css')}}\">
{% endif %}
{% endblock %}

{% block main %}

<main role=\"main\">

    <section class=\"jumbotron text-center\">
        <div class=\"container\">

            <h1 class=\"jumbotron-heading\">Category - {{subcategories.currentCategoryName}}</h1>
            <div class=\"btn-group\">
                <div class=\"dropdown ml-2\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        Subcategories
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <ul class=\"mr-5\">
                        <li><a href=\"{{path('video_list',{'categoryname':subcategories.mainParentName|slugify|lower, 'id':subcategories.mainParentId})}}\">{{subcategories.mainParentName}}</a></li>
                           {{subcategories.categorylist|raw}}
                        </ul>
                    </div>
                </div>

            {{ include('front/includes/_sort.html.twig') }}
                
            </div>
        </div>
    </section>

    {{ include('front/includes/_videos.html.twig', {'videos' : videos}) }}
    {{ knp_pagination_render(videos) }}
</main>
{% endblock %}
{% block customjavascripts %}
{{parent()}}
{% if app.user %}
<script src=\"{{asset('assets/js/likes.js')}}\"></script>
{% endif %}
{% endblock %}
", "front/video_list.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\video_list.html.twig");
    }
}
