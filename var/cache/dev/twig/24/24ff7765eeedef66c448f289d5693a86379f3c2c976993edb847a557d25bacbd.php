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

/* admin/videos.html.twig */
class __TwigTemplate_ac1f20e3c4cc73054a81cd08c5b1f7781f973db0b312ff905aa380980ed4eda4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/videos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_mainadmin($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 4
        echo "
";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "<h2>Videos</h2>
";
        } else {
            // line 8
            echo "<h2>My liked videos</h2>
";
        }
        // line 10
        echo "
<div class=\"table-responsive\">
  <table class=\"table table-striped table-sm\">
    <thead>
      <tr>
        <th>#</th>
        <th>Video name</th>
        <th>Link</th>
        ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "        <th>Category</th>
        <th>Delete</th>
         ";
        }
        // line 22
        echo "      </tr>
    </thead>
    <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 25, $this->source); })()));
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
            // line 26
            echo " 
 
      <tr>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
        <td><a target=\"_blank\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">go to video</a></td>
         ";
            // line 32
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "        <td>
            <form action=\"#\" method=\"POST\">
                <select onchange=\"this.form.submit();\">
                <option selected>Parent...</option>
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">----For adults</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
                </select>
            </form>
        </td>
        <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_video", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 45), "path" => twig_get_attribute($this->env, $this->source, $context["video"], "vimeoId", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" onclick=\"delete_video(event);\"><i class=\"fas fa-trash\"></i></a></td>

        ";
            }
            // line 48
            echo "      </tr>
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
        // line 50
        echo "    </tbody>
  </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_customjavascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 55
        $this->displayParentBlock("customjavascripts", $context, $blocks);
        echo "

<script>
    function delete_video(e)
    {
\t\t\t\t\t\t   
    confirm('Are you sure?');
\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
    }
\t 
</script>

\t 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  185 => 54,  172 => 50,  157 => 48,  151 => 45,  137 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 29,  118 => 26,  101 => 25,  96 => 22,  91 => 19,  89 => 18,  79 => 10,  75 => 8,  71 => 6,  69 => 5,  66 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block mainadmin %}

{% if is_granted('ROLE_ADMIN') %}
<h2>Videos</h2>
{% else %}
<h2>My liked videos</h2>
{% endif %}

<div class=\"table-responsive\">
  <table class=\"table table-striped table-sm\">
    <thead>
      <tr>
        <th>#</th>
        <th>Video name</th>
        <th>Link</th>
        {% if is_granted('ROLE_ADMIN') %}
        <th>Category</th>
        <th>Delete</th>
         {% endif %}
      </tr>
    </thead>
    <tbody>
        {% for video in videos %}
 
 
      <tr>
        <td>{{ loop.index }}</td>
        <td>{{video.title}}</td>
        <td><a target=\"_blank\" href=\"{{path('video_details',{'video':video.id})}}\">go to video</a></td>
         {% if is_granted('ROLE_ADMIN') %}
        <td>
            <form action=\"#\" method=\"POST\">
                <select onchange=\"this.form.submit();\">
                <option selected>Parent...</option>
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">----For adults</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
                </select>
            </form>
        </td>
        <td><a href=\"{{path('delete_video',{'video':video.id, 'path':video.vimeoId})}}\" onclick=\"delete_video(event);\"><i class=\"fas fa-trash\"></i></a></td>

        {% endif %}
      </tr>
        {% endfor %}
    </tbody>
  </table>
</div>
{% endblock %}
{% block customjavascripts %}
{{parent()}}

<script>
    function delete_video(e)
    {
\t\t\t\t\t\t   
    confirm('Are you sure?');
\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
    }
\t 
</script>

\t 

{% endblock %}

", "admin/videos.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\admin\\videos.html.twig");
    }
}
