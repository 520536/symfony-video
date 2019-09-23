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

/* admin/my_profile.html.twig */
class __TwigTemplate_68edca2b74c55a33284e8f0daaf14e76cdf9cd802a3d447209f88763e6be12a4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/my_profile.html.twig", 1);
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
<h2>My profile <small><a onclick=\"return confirm('Are you sure?');\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
        echo "\">delete account</a></small></h2>



";
        // line 9
        if ((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 9, $this->source); })())) && twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 9, $this->source); })()), "getPlan", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 9, $this->source); })()), "getPlanDataNames", [], "any", false, false, false, 9)))) {
            // line 10
            echo "
    <p class=\"text-left\">My plan - ";
            // line 11
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 11, $this->source); })()), "getPlan", [], "any", false, false, false, 11)), "html", null, true);
            echo ". <b>valid to:</b> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 11, $this->source); })()), "validTo", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true);
            echo "
    ";
            // line 12
            if (((twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 12, $this->source); })()), "validTo", [], "any", false, false, false, 12) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 12, $this->source); })()), "paymentStatus", [], "any", false, false, false, 12) == null))) {
                // line 13
                echo "    Plan is not active <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
                echo "\">pay for plan</a> |
    ";
            }
            // line 15
            echo "

    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 17, $this->source); })()), "getPlan", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 17, $this->source); })()), "getPlanDataNameByIndex", [0 => 0], "method", false, false, false, 17))) {
                // line 18
                echo "    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
                echo "\">get paid plan</a> | 
    ";
            }
            // line 20
            echo "

    <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel_plan");
            echo "\">cancel plan</a></p>  

";
        } elseif ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "<p class=\"text-left\">You don't have any plan. <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
            echo "\">Get plan</a></p>    
";
        }
        // line 27
        echo "

";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t\t\t\t\t\t\t\t\t\t\t
";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "    <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  

        <label for=\"user_vimeo_api_key\">Vimeo API key</label>
        ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vimeo_api_key", [], "any", false, false, false, 37), 'widget');
            echo " 

    </div>
";
        }
        // line 41
        echo "    <div class=\"form-group\">

        <label for=\"user_name\">Name</label>
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 44, $this->source); })())]]);
        echo "

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
        <div class=\"invalid-feedback\">
 
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'errors');
        echo " 
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_last_name\">Last name</label>
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "last_name", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 57, $this->source); })())]]);
        echo " 


        <div class=\"invalid-feedback\">

            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "last_name", [], "any", false, false, false, 62), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_email\">Email address</label>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 68, $this->source); })())]]);
        echo "

        <div class=\"invalid-feedback\">

            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_first\">Password</label>
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "password", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 78, $this->source); })())]]);
        echo " 

        <div class=\"invalid-feedback\">

            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "password", [], "any", false, false, false, 82), "first", [], "any", false, false, false, 82), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_second\">Confirm password</label>
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "password", [], "any", false, false, false, 88), "second", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 88, $this->source); })())]]);
        echo " 

        <div class=\"invalid-feedback\">

            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "password", [], "any", false, false, false, 92), "second", [], "any", false, false, false, 92), 'errors');
        echo "
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>

";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/my_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 97,  227 => 92,  220 => 88,  211 => 82,  204 => 78,  195 => 72,  188 => 68,  179 => 62,  171 => 57,  162 => 51,  152 => 44,  147 => 41,  140 => 37,  134 => 33,  132 => 32,  126 => 29,  122 => 27,  116 => 25,  110 => 22,  106 => 20,  100 => 18,  98 => 17,  94 => 15,  88 => 13,  86 => 12,  80 => 11,  77 => 10,  75 => 9,  68 => 5,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block mainadmin %}

<h2>My profile <small><a onclick=\"return confirm('Are you sure?');\" href=\"{{path('delete_account')}}\">delete account</a></small></h2>



{% if not is_granted('ROLE_ADMIN') and subscription and subscription.getPlan in subscription.getPlanDataNames %}

    <p class=\"text-left\">My plan - {{subscription.getPlan|upper}}. <b>valid to:</b> {{subscription.validTo|date('Y-m-d')}}
    {% if subscription.validTo == null or subscription.paymentStatus == null %}
    Plan is not active <a href=\"{{path('payment')}}\">pay for plan</a> |
    {% endif %}


    {% if subscription.getPlan == subscription.getPlanDataNameByIndex(0) %}
    <a href=\"{{path('pricing')}}\">get paid plan</a> | 
    {% endif %}


    <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\" href=\"{{path('cancel_plan')}}\">cancel plan</a></p>  

{% elseif not is_granted('ROLE_ADMIN') %}
<p class=\"text-left\">You don't have any plan. <a href=\"{{path('pricing')}}\">Get plan</a></p>    
{% endif %}


{{ form_start(form,{'attr': {'novalidate':'novalidate'}}) }}

\t\t\t\t\t\t\t\t\t\t\t
{% if is_granted('ROLE_ADMIN') %}
    <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  

        <label for=\"user_vimeo_api_key\">Vimeo API key</label>
        {{ form_widget(form.vimeo_api_key) }} 

    </div>
{% endif %}
    <div class=\"form-group\">

        <label for=\"user_name\">Name</label>
        {{ form_widget(form.name, {'attr':{'class': is_invalid}}) }}

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
        <div class=\"invalid-feedback\">
 
            {{form_errors(form.name)}} 
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_last_name\">Last name</label>
        {{ form_widget(form.last_name, {'attr':{'class': is_invalid}}) }} 


        <div class=\"invalid-feedback\">

            {{form_errors(form.last_name)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_email\">Email address</label>
        {{ form_widget(form.email, {'attr':{'class': is_invalid}}) }}

        <div class=\"invalid-feedback\">

            {{form_errors(form.email)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_first\">Password</label>
        {{ form_widget(form.password.first, {'attr':{'class': is_invalid}}) }} 

        <div class=\"invalid-feedback\">

            {{form_errors(form.password.first)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_second\">Confirm password</label>
        {{ form_widget(form.password.second, {'attr':{'class': is_invalid}}) }} 

        <div class=\"invalid-feedback\">

            {{form_errors(form.password.second)}}
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>

{{ form_end(form) }}
{% endblock %}
", "admin/my_profile.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\admin\\my_profile.html.twig");
    }
}
