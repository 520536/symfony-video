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

/* front/includes/_likes.html.twig */
class __TwigTemplate_2542bc933f7614887732f74f8c8e4c2a9cae71ea64f37973be24eb9bb2119698 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_likes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_likes.html.twig"));

        // line 1
        if (twig_in_filter((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 1, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "getLikedVideos", [], "any", false, false, false, 1))) {
            // line 2
            $context["userLikesVideo"] = "userLikesVideo";
        } elseif (twig_in_filter(        // line 3
(isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 3, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "getDislikedVideos", [], "any", false, false, false, 3))) {
            // line 4
            $context["userDoesNotLikeVideo"] = "userDoesNotLikeVideo";
        } else {
            // line 6
            $context["noActionYet"] = "noActionYet";
            echo "    <!-- 方法在public\\assets\\js\\likes.js -->
";
        }
        // line 8
        echo "
<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to like the video\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm ml-1 video-id-";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "  click-to-like-video ";
        echo twig_escape_filter($this->env, (((isset($context["noActionYet"]) || array_key_exists("noActionYet", $context))) ? (_twig_default_filter((isset($context["noActionYet"]) || array_key_exists("noActionYet", $context) ? $context["noActionYet"] : (function () { throw new RuntimeError('Variable "noActionYet" does not exist.', 9, $this->source); })()), null)) : (null)), "html", null, true);
        echo "\">
    <i  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_video", ["video" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"fa fa-thumbs-up toogle-likes\"></i>
</button>

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You like the video. Click to unlike\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm mr-2 ml-1 likes-video-id-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo " click-to-unlike-video ";
        echo twig_escape_filter($this->env, (((isset($context["userLikesVideo"]) || array_key_exists("userLikesVideo", $context))) ? (_twig_default_filter((isset($context["userLikesVideo"]) || array_key_exists("userLikesVideo", $context) ? $context["userLikesVideo"] : (function () { throw new RuntimeError('Variable "userLikesVideo" does not exist.', 13, $this->source); })()), null)) : (null)), "html", null, true);
        echo "\">
    <i href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("undo_like_video", ["video" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"fa fa-thumbs-up toogle-likes\"></i>
</button>

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to dislike the video\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm ml-1 mr-1 video-id-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "  click-to-dislike-video ";
        echo twig_escape_filter($this->env, (((isset($context["noActionYet"]) || array_key_exists("noActionYet", $context))) ? (_twig_default_filter((isset($context["noActionYet"]) || array_key_exists("noActionYet", $context) ? $context["noActionYet"] : (function () { throw new RuntimeError('Variable "noActionYet" does not exist.', 17, $this->source); })()), null)) : (null)), "html", null, true);
        echo "\">
    <i href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike_video", ["video" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"fa fa-thumbs-down toogle-likes\"></i>
</button>

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You don't like the video. Click to undo\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm mr-2 ml-1 dislikes-video-id-";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo " click-to-undo-dislike-video ";
        echo twig_escape_filter($this->env, (((isset($context["userDoesNotLikeVideo"]) || array_key_exists("userDoesNotLikeVideo", $context))) ? (_twig_default_filter((isset($context["userDoesNotLikeVideo"]) || array_key_exists("userDoesNotLikeVideo", $context) ? $context["userDoesNotLikeVideo"] : (function () { throw new RuntimeError('Variable "userDoesNotLikeVideo" does not exist.', 21, $this->source); })()), null)) : (null)), "html", null, true);
        echo "\">
   <i href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("undo_dislike_video", ["video" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"fa fa-thumbs-down toogle-likes\"></i>
</button>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_likes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  94 => 21,  88 => 18,  82 => 17,  76 => 14,  70 => 13,  64 => 10,  58 => 9,  55 => 8,  50 => 6,  47 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if video in app.user.getLikedVideos %}
{% set userLikesVideo = 'userLikesVideo' %}
{% elseif video in app.user.getDislikedVideos %}
{% set userDoesNotLikeVideo = 'userDoesNotLikeVideo' %}
{% else %}
{% set noActionYet = 'noActionYet' %}    <!-- 方法在public\\assets\\js\\likes.js -->
{% endif %}

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to like the video\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm ml-1 video-id-{{video.id}}  click-to-like-video {{noActionYet|default(null)}}\">
    <i  href=\"{{path('like_video',{'video':video.id})}}\" class=\"fa fa-thumbs-up toogle-likes\"></i>
</button>

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You like the video. Click to unlike\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm mr-2 ml-1 likes-video-id-{{video.id}} click-to-unlike-video {{userLikesVideo|default(null)}}\">
    <i href=\"{{path('undo_like_video',{'video':video.id})}}\" class=\"fa fa-thumbs-up toogle-likes\"></i>
</button>

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to dislike the video\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm ml-1 mr-1 video-id-{{video.id}}  click-to-dislike-video {{noActionYet|default(null)}}\">
    <i href=\"{{path('dislike_video',{'video':video.id})}}\" class=\"fa fa-thumbs-down toogle-likes\"></i>
</button>

<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You don't like the video. Click to undo\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm mr-2 ml-1 dislikes-video-id-{{video.id}} click-to-undo-dislike-video {{userDoesNotLikeVideo|default(null)}}\">
   <i href=\"{{path('undo_dislike_video',{'video':video.id})}}\" class=\"fa fa-thumbs-down toogle-likes\"></i>
</button>


", "front/includes/_likes.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\includes\\_likes.html.twig");
    }
}
