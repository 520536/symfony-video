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

/* front/payment.html.twig */
class __TwigTemplate_193f12fd63a98483be0838361769fe955fb459678133ecb1e70c6bfab4e575ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/payment.html.twig", 1);
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
        echo "    

<div class=\"row mt-5\">
    <div class=\"col-md-4 order-md-2 mb-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">1</span>
        </h4>
        <ul class=\"list-group mb-3\">
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "planName"], "method", false, false, false, 15)), "html", null, true);
        echo "plan</h6>
                </div>
                <span class=\"text-muted\">\$";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "get", [0 => "planPrice"], "method", false, false, false, 17), "html", null, true);
        echo "</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between bg-light\">
                <div class=\"text-success\">
                    <h6 class=\"my-0\">Promo code</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class=\"text-success\">-\$0</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between\">
                <span>Total (USD)</span>

                <strong>\$";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", [0 => "planPrice"], "method", false, false, false, 29), "html", null, true);
        echo "</strong>
            </li>
        </ul>
    </div>

    <div class=\"col-md-8 order-md-1\">

        <h4 class=\"mb-3\">Pay with PayPal <small>or get other <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        echo "\">plan</a></small></h4>
        <hr class=\"mb-4\">
        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment", ["paypal" => "paypal"]);
        echo "\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Continue to checkout</a>

    </div>
</div>
\t\t\t  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  108 => 36,  98 => 29,  83 => 17,  78 => 15,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main%}
    

<div class=\"row mt-5\">
    <div class=\"col-md-4 order-md-2 mb-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">1</span>
        </h4>
        <ul class=\"list-group mb-3\">
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">{{app.session.get('planName')|capitalize}}plan</h6>
                </div>
                <span class=\"text-muted\">\${{app.session.get('planPrice')}}</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between bg-light\">
                <div class=\"text-success\">
                    <h6 class=\"my-0\">Promo code</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class=\"text-success\">-\$0</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between\">
                <span>Total (USD)</span>

                <strong>\${{app.session.get('planPrice')}}</strong>
            </li>
        </ul>
    </div>

    <div class=\"col-md-8 order-md-1\">

        <h4 class=\"mb-3\">Pay with PayPal <small>or get other <a href=\"{{path('pricing')}}\">plan</a></small></h4>
        <hr class=\"mb-4\">
        <a href=\"{{path('payment',{'paypal':'paypal'})}}\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Continue to checkout</a>

    </div>
</div>
\t\t\t  

{% endblock %}", "front/payment.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\payment.html.twig");
    }
}
