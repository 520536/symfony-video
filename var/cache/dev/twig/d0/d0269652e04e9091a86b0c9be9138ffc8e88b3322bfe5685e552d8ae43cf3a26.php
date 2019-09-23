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

/* front/pricing.html.twig */
class __TwigTemplate_90e6c1044a7daa56f0c5d0e1a4f4b22a59c19f895965779e4e60805f699079af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pricing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/pricing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "\t

<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4\">Pricing</h1>
    <p class=\"lead\">Watch the best videos on the planet. Choose a plan that is right for you. Downgrade or upgrade at
        any time.
    </p>
</div>

<div class=\"container\">
    <div class=\"card-deck mb-3 text-center\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">

                 <h4 class=\"my-0 font-weight-normal\">";
        // line 18
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18)), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"card-body\">

                <h1 class=\"card-title pricing-card-title\">\$";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), [], "array", false, false, false, 22), "html", null, true);
        echo " <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Access for one month</li>
                    <li>Help center access</li>
                </ul>

                <a role=\"button\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["plan" => twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 28, $this->source); })()), 0, [], "array", false, false, false, 28)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
 
                <h4 class=\"my-0 font-weight-normal\">";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()), 1, [], "array", false, false, false, 34)), "html", null, true);
        echo "</h4>  <!--capitalize twig首字母大写 -->
            </div>
            <div class=\"card-body\">

                <h1 class=\"card-title pricing-card-title\">\$";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 38, $this->source); })()), 1, [], "array", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
        echo " <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                </ul>

                <a role=\"button\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["plan" => twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 46, $this->source); })()), 1, [], "array", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-primary\">Get started</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">

                <h4 class=\"my-0 font-weight-normal\">";
        // line 52
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 52, $this->source); })()), 2, [], "array", false, false, false, 52)), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"card-body\">

                 <h1 class=\"card-title pricing-card-title\">\$";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 56, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 56, $this->source); })()), 2, [], "array", false, false, false, 56), [], "array", false, false, false, 56), "html", null, true);
        echo " <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>Ultra HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                    <li>Unlimited live events</li>
                </ul>

                <a role=\"button\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["plan" => twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 65, $this->source); })()), 2, [], "array", false, false, false, 65)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-primary\">Contact us</a>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  140 => 56,  133 => 52,  124 => 46,  113 => 38,  106 => 34,  97 => 28,  88 => 22,  81 => 18,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
\t

<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4\">Pricing</h1>
    <p class=\"lead\">Watch the best videos on the planet. Choose a plan that is right for you. Downgrade or upgrade at
        any time.
    </p>
</div>

<div class=\"container\">
    <div class=\"card-deck mb-3 text-center\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">

                 <h4 class=\"my-0 font-weight-normal\">{{name[0]|capitalize}}</h4>
            </div>
            <div class=\"card-body\">

                <h1 class=\"card-title pricing-card-title\">\${{price[name[0]]}} <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Access for one month</li>
                    <li>Help center access</li>
                </ul>

                <a role=\"button\" href=\"{{path('register',{'plan':name[0]})}}\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
 
                <h4 class=\"my-0 font-weight-normal\">{{name[1]|capitalize}}</h4>  <!--capitalize twig首字母大写 -->
            </div>
            <div class=\"card-body\">

                <h1 class=\"card-title pricing-card-title\">\${{price[name[1]]}} <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                </ul>

                <a role=\"button\" href=\"{{path('register',{'plan':name[1]})}}\" class=\"btn btn-lg btn-block btn-primary\">Get started</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">

                <h4 class=\"my-0 font-weight-normal\">{{name[2]|capitalize}}</h4>
            </div>
            <div class=\"card-body\">

                 <h1 class=\"card-title pricing-card-title\">\${{price[name[2]]}} <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>Ultra HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                    <li>Unlimited live events</li>
                </ul>

                <a role=\"button\" href=\"{{path('register',{'plan':name[2]})}}\" class=\"btn btn-lg btn-block btn-primary\">Contact us</a>
            </div>
        </div>
    </div>

</div>
{% endblock %}

", "front/pricing.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\pricing.html.twig");
    }
}
