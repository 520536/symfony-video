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

/* front/register.html.twig */
class __TwigTemplate_ad139e17a8b86124f64b2e4dc8e227255ee387349df08731a425f6278199da73 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/register.html.twig", 1);
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
        echo "<div class=\"row mt-5\">
    <div class=\"col-md-4 order-md-2 mb-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">1</span>
        </h4>
        <ul class=\"list-group mb-3\">
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", [0 => "planName"], "method", false, false, false, 13)), "html", null, true);
        echo " plan</h6>
                </div>
                <span class=\"text-muted\">\$";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "planPrice"], "method", false, false, false, 15), "html", null, true);
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
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "get", [0 => "planPrice"], "method", false, false, false, 26), "html", null, true);
        echo "</strong>
            </li>
        </ul>
    </div>

    <div class=\"col-md-8 order-md-1\">
        <h4 class=\"mb-3\">Register first (free)</h4>
        ";
        // line 34
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        echo "
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"user_name\">First name</label>
                    ";
        // line 39
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'widget');
        echo " 
                    <div class=\"invalid-feedback\">
                        Valid first name is required.
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"user_last_name\">Last name</label>
                    ";
        // line 48
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "last_name", [], "any", false, false, false, 48), 'widget');
        echo " 
                    <div class=\"invalid-feedback\">
                        Valid last name is required.
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "last_name", [], "any", false, false, false, 51), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"user_email\">Email</label>
                ";
        // line 59
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'widget');
        echo " 
                <div class=\"invalid-feedback\">
                    Please enter a valid email address.
                     ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'errors');
        echo "
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"user_password_first\">Password</label>
                ";
        // line 69
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "password", [], "any", false, false, false, 69), "first", [], "any", false, false, false, 69), 'widget');
        echo " 
                <div class=\"invalid-feedback\">
                     Please enter a valid password.
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), "first", [], "any", false, false, false, 72), 'errors');
        echo "
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"user_password_second\">Confirm Password</label>
                ";
        // line 79
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "password", [], "any", false, false, false, 79), "second", [], "any", false, false, false, 79), 'widget');
        echo "
                <div class=\"invalid-feedback\">
                     Please enter a valid password confirmation.
                     ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "password", [], "any", false, false, false, 82), "second", [], "any", false, false, false, 82), 'errors');
        echo "
                </div>
            </div>

            <hr class=\"mb-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Register</button>
         ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_customjavascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 95
        echo "<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('click', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


    var password = document.getElementById(\"user_password_first\"), confirm_password = document.getElementById(\"user_password_second\");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity(\"Passwords Don't Match\");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 95,  209 => 94,  194 => 88,  185 => 82,  178 => 79,  169 => 72,  162 => 69,  153 => 62,  146 => 59,  136 => 51,  129 => 48,  121 => 42,  114 => 39,  106 => 34,  96 => 26,  82 => 15,  77 => 13,  66 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
<div class=\"row mt-5\">
    <div class=\"col-md-4 order-md-2 mb-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">1</span>
        </h4>
        <ul class=\"list-group mb-3\">
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">{{app.session.get('planName')|capitalize}} plan</h6>
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
        <h4 class=\"mb-3\">Register first (free)</h4>
        {# <form method=\"POST\" action=\"#\" class=\"needs-validation\" novalidate> #}
        {{ form_start(form,{'attr': {'novalidate':'novalidate','class':'needs-validation'}}) }}
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"user_name\">First name</label>
                    {# <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"\" value=\"\" required> #}
                    {{ form_widget(form.name) }} 
                    <div class=\"invalid-feedback\">
                        Valid first name is required.
                        {{form_errors(form.name)}}
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"user_last_name\">Last name</label>
                    {# <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"\" value=\"\" required> #}
                    {{ form_widget(form.last_name) }} 
                    <div class=\"invalid-feedback\">
                        Valid last name is required.
                        {{form_errors(form.last_name)}}
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"user_email\">Email</label>
                {# <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"you@example.com\" required> #}
                {{ form_widget(form.email) }} 
                <div class=\"invalid-feedback\">
                    Please enter a valid email address.
                     {{form_errors(form.email)}}
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"user_password_first\">Password</label>
                {# <input type=\"password\" class=\"form-control\" id=\"password\" required> #}
                {{ form_widget(form.password.first) }} 
                <div class=\"invalid-feedback\">
                     Please enter a valid password.
                    {{form_errors(form.password.first)}}
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"user_password_second\">Confirm Password</label>
                {# <input type=\"password\" class=\"form-control\" id=\"confirm_password\" required> #}
                {{ form_widget(form.password.second) }}
                <div class=\"invalid-feedback\">
                     Please enter a valid password confirmation.
                     {{form_errors(form.password.second)}}
                </div>
            </div>

            <hr class=\"mb-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Register</button>
         {{ form_end(form) }}

    </div>
</div>
{% endblock %}

{% block customjavascripts %}
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('click', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


    var password = document.getElementById(\"user_password_first\"), confirm_password = document.getElementById(\"user_password_second\");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity(\"Passwords Don't Match\");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

{% endblock %}


", "front/register.html.twig", "C:\\xampp\\htdocs\\my-project\\templates\\front\\register.html.twig");
    }
}
