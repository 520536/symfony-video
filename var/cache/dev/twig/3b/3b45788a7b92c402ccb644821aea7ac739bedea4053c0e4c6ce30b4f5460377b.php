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

/* front/video_details.html.twig */
class __TwigTemplate_bc71066158a44afec546e86b96bcfa1b2ec7048aeaf803fbc698d4c22ba082e4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_details.html.twig"));

        // line 4
        if ( !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 4, $this->source); })()))) {
            // line 5
            $context["videoid"] = (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 5, $this->source); })());
        } else {
            // line 7
            $context["videoid"] = twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 7, $this->source); })()), "path", [], "any", false, false, false, 7);
        }
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/video_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "<br>
<h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
<div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">

    <iframe class=\"\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["videoid"]) || array_key_exists("videoid", $context) ? $context["videoid"] : (function () { throw new RuntimeError('Variable "videoid" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen></iframe>
    
</div>

<hr>

<div class=\"row m-2\">
    <a id=\"video_comments\"></a>

   ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 25, $this->source); })()), "comments", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 26
            echo "

    <ul class=\"list-unstyled text-left\">
        <li class=\"media\">
            <img class=\"mr-3\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.jpg"), "html", null, true);
            echo "\" alt=\"Generic placeholder image\">
            <div class=\"media-body\">
                <h5 class=\"mt-0 mb-1\"><b>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 32), "lastname", [], "any", false, false, false, 32), "html", null, true);
            echo "</b> <small class=\"text-muted\">added a comment <small><b>";
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdat", [], "any", false, false, false, 32));
            echo "</b></small></small></h5>
                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 33), "html", null, true);
            echo "
            </div>
        </li>
    </ul>
    <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <form method=\"POST\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_comment", ["video" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "#video_comments\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Add a comment</label>
                <textarea name=\"comment\" required class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add</button>

        </form>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/video_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  131 => 40,  118 => 33,  110 => 32,  105 => 30,  99 => 26,  95 => 25,  83 => 16,  77 => 13,  74 => 12,  65 => 11,  54 => 1,  51 => 7,  48 => 5,  46 => 4,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% if video_no_members is not null %}
    {% set videoid = video_no_members %}
{% else %}
    {% set videoid = video.path %}
{% endif %}


{% block main %}
<br>
<h1>{{video.title}}</h1>
<div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">

    <iframe class=\"\" src=\"{{videoid}}\" frameborder=\"0\" allowfullscreen></iframe>
    
</div>

<hr>

<div class=\"row m-2\">
    <a id=\"video_comments\"></a>

   {% for comment in video.comments %}


    <ul class=\"list-unstyled text-left\">
        <li class=\"media\">
            <img class=\"mr-3\" src=\"{{asset('assets/img/user.jpg')}}\" alt=\"Generic placeholder image\">
            <div class=\"media-body\">
                <h5 class=\"mt-0 mb-1\"><b>{{comment.user.name}} {{comment.user.lastname}}</b> <small class=\"text-muted\">added a comment <small><b>{{comment.createdat|ago}}</b></small></small></h5>
                {{comment.content}}
            </div>
        </li>
    </ul>
    <hr>

    {% endfor %}

</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <form method=\"POST\" action=\"{{path('new_comment',{'video':video.id})}}#video_comments\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Add a comment</label>
                <textarea name=\"comment\" required class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add</button>

        </form>
    </div>
</div>

{% endblock %}
", "front/video_details.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\video_details.html.twig");
    }
}
