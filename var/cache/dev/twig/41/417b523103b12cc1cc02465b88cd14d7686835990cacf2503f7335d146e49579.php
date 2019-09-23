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

/* front/includes/_videos.html.twig */
class __TwigTemplate_495671c43b92f8e65f9ff3ff34c005232eb8589acf40b758024a6287e98a6219 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_videos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_videos.html.twig"));

        // line 1
        echo "<div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 5, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 6
            echo "
                ";
            // line 7
            if ( !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 7, $this->source); })()))) {
                // line 8
                echo "
                    ";
                // line 9
                $context["videoid"] = (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 9, $this->source); })());
                // line 10
                echo "                ";
            } else {
                // line 11
                echo "                     ";
                $context["videoid"] = twig_get_attribute($this->env, $this->source, $context["video"], "path", [], "any", false, false, false, 11);
                // line 12
                echo "                ";
            }
            // line 13
            echo "
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            
                                <iframe class=\"\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["videoid"]) || array_key_exists("videoid", $context) ? $context["videoid"] : (function () { throw new RuntimeError('Variable "videoid" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" frameborder=\"0\"
                                 allowfullscreen></iframe> 

                        </div>
                        <div class=\"card-body\">
                            <h3>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getTitle", [], "method", false, false, false, 23), "html", null, true);
            echo "</h3>
                            
                            ";
            // line 25
            if (( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25) ||  !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 25, $this->source); })())))) {
                echo " 

                            <p class=\"card-text text-danger\">Video for <b>MEMBERS</b> only. <a href=\"";
                // line 27
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
                echo "\">Sign
                                    up</a> for one month for free.</p>
                            ";
            }
            // line 30
            echo "                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up\"><small class=\"text-muted number-of-likes-";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "usersthatlike", [], "any", false, false, false, 33), "count", [], "any", false, false, false, 33), "html", null, true);
            echo ")</small></i>&nbsp;
                                    <i class=\"fa fa-thumbs-down\"><small class=\"text-muted number-of-dislikes-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "usersthatdontlike", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34), "html", null, true);
            echo ")</small></i>
                                    ";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 36
                echo "                                    ";
                echo twig_include($this->env, $context, "front/includes/_likes.html.twig", ["video" => $context["video"]]);
                echo "
                                    ";
            }
            // line 38
            echo "                                    <a class=\"ml-1\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "#video_comments\">Comments (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "comments", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38), "html", null, true);
            echo ")</a>
                                </div>
                                <small class=\"text-muted\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getDuration", [], "method", false, false, false, 40), "html", null, true);
            echo " mins</small>
                            </div>
                        </div>
                    </div>
                </div>
               ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 46,  147 => 40,  139 => 38,  133 => 36,  131 => 35,  125 => 34,  119 => 33,  114 => 30,  108 => 27,  103 => 25,  98 => 23,  90 => 18,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  72 => 9,  69 => 8,  67 => 7,  64 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                {% for video in videos %}

                {% if video_no_members is not null %}

                    {% set videoid = video_no_members %}
                {% else %}
                     {% set videoid = video.path %}
                {% endif %}

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            
                                <iframe class=\"\" src=\"{{videoid}}\" frameborder=\"0\"
                                 allowfullscreen></iframe> 

                        </div>
                        <div class=\"card-body\">
                            <h3>{{video.getTitle()}}</h3>
                            
                            {% if not app.user or video_no_members is not null   %} 

                            <p class=\"card-text text-danger\">Video for <b>MEMBERS</b> only. <a href=\"{{path('pricing')}}\">Sign
                                    up</a> for one month for free.</p>
                            {% endif  %}
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up\"><small class=\"text-muted number-of-likes-{{video.id}}\">({{video.usersthatlike.count}})</small></i>&nbsp;
                                    <i class=\"fa fa-thumbs-down\"><small class=\"text-muted number-of-dislikes-{{video.id}}\">({{video.usersthatdontlike.count}})</small></i>
                                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED')  %}
                                    {{ include('front/includes/_likes.html.twig', {'video' : video}) }}
                                    {% endif  %}
                                    <a class=\"ml-1\" href=\"{{path('video_details',{'video':video.id})}}#video_comments\">Comments ({{video.comments.count}})</a>
                                </div>
                                <small class=\"text-muted\">{{video.getDuration()}} mins</small>
                            </div>
                        </div>
                    </div>
                </div>
               {% endfor %}

            </div>
        </div>
    </div>
", "front/includes/_videos.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\includes\\_videos.html.twig");
    }
}
