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

/* @SncRedis/Collector/redis.html.twig */
class __TwigTemplate_ef55ee758e2021faa05a521456f83e952b068e790d8a06cc76c36e31347acfec extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SncRedis/Collector/redis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SncRedis/Collector/redis.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SncRedis/Collector/redis.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 4, $this->source); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 6, $this->source); })()) == 1)) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAv5JREFUeNrsVd9L01EUP9/tbm5ubtI2VqAOYpJP0WCYNOilQAiySbICHyp67CXqrf8jqKeejAVJ9GAUmUEMfYjSl5IYexqM1G3Mn1O3uT6fy+4QMV/yoQe/cLi7557zOZ/zOder1Ww25Tg/mxzzdwL4HwKqZDJ51Pkpy7JGtre3r9dqtbMul2vB4XBM4qp9gr962JVTBx0IcsIS+HkL64jP5zuTSqWkXq9LPp+/MDs7e1cp9QuAk4h5iZgfhwIioB8sxvb29m673e7z2Eu1WpVwOCwDAwMSi8VkZmZGcrmcFIvFc7u7u09sNttjgH8B6CvYW8AUrdHR0SvYPETA1Wg06hofH5dQKMQCUqlUZGJiQhYXFyWRSMj8/Lxsbm7KxsZG27q7u3W80+ksAeepWltbe9TZ2XmNLDs6OiQQCEhvb6/Y7Xa2r1uFhjI3Nycej0dQWPtZEJoKutGxOzs7ARRIWWjlPdCHASoQXAd4vV4N1NPTI0NDQxKJRHSR6elpSafTgjbboCxApltbW9JoNL4qv9//HVoNsz1WIksGoIgUCgXJZrPS19cny8vLMjU1pWOQqPUlCJi12fIWKLQRwSR1WwTiykACMolAmUxGF+LeALEDMu3q6tJSsDvkDqqlpaUg26ST4mLSWngmQV/BJDU4pq/P2Cr36EzLQ3aMLZfLZGtXSMgRgMZAApMxE8iGftMWWZIR2yPD9fV1fW7YImdBBYNBDydsWLESmXFINJxrzfi1psl7qKUhaxYhAbJFXL8qlUqnmcjKPDCsWJ3WElsDmiFQBiMTAenjUFHEr4D6e3V1VQ+EiYYV2yCwGQS1o/C8yIwhKP0rKyvmbjbhe8c/vQf48Rn7+wC4BBY2JjKJjM0NMBqyTRYnGIvCX4K9gT0D1jcrHo/vf8oGcXAP4DeQGKZmbI1mWjZsEfcTrhd8IGCF9puwD9A8ElxCSLqJ9Q7Wi3S3jhs4/4D1OewjrHrwtfoboLTeOjvsMmwMVoO9hmWOekCtk//L//z9EWAADA/Sh+MqnZ4AAAAASUVORK5CYII=\"/>

            <span class=\"sf-toolbar-status\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "commandcount", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start(function () { return ''; });
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "commandcount", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "time", [], "any", false, false, false, 21)), "html", null, true);
            echo " ms</span>
            </div>

            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 24) > 0)) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        ";
            // line 32
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@SncRedis/Collector/redis.html.twig", 32)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 32, $this->source); })()), "status" => (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 32) > 0)) ? ("red") : (""))]));
            // line 33
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "commandcount", [], "any", false, false, false, 33) > 0)) {
            // line 34
            echo "        ";
            ob_start(function () { return ''; });
            // line 35
            echo "            ";
            echo twig_include($this->env, $context, "@SncRedis/Collector/icon.svg.twig");
            echo "

            <span class=\"sf-toolbar-value\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "commandCount", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 40
            echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "time", [], "any", false, false, false, 40)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            echo "
        ";
            // line 45
            ob_start(function () { return ''; });
            // line 46
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "commandcount", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 53
            echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "time", [], "any", false, false, false, 53)), "html", null, true);
            echo " ms</span>
            </div>

            ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 56) > 0)) {
                // line 57
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 59), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 62
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            echo "
        ";
            // line 64
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@SncRedis/Collector/redis.html.twig", 64)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 64, $this->source); })()), "status" => (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 64) > 0)) ? ("red") : (""))]));
            // line 65
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 69
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 69, $this->source); })()), 1)) : (1));
        // line 70
        echo "
";
        // line 71
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 71, $this->source); })()) == 1)) {
            // line 72
            echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=\"32\" height=\"28\" src=\"data:image/png;base64, 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\" alt=\"Redis\" />
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "commandcount", [], "any", false, false, false, 78), "html", null, true);
            echo "</span>
            <span>";
            // line 79
            echo twig_escape_filter($this->env, sprintf("%0.0f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "time", [], "any", false, false, false, 79)), "html", null, true);
            echo " ms</span>
        </span>
    </span>
";
        } else {
            // line 83
            echo "    <span class=\"label ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "commandcount", [], "any", false, false, false, 83) == 0)) ? ("disabled") : (""));
            echo "\">
        <span class=\"icon\">";
            // line 84
            echo twig_include($this->env, $context, "@SncRedis/Collector/icon.svg.twig", ["colors" => ["light" => "#DDD", "dark" => "#999"]]);
            echo "</span>
        <strong>Redis</strong>
        ";
            // line 86
            if ((0 != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 86))) {
                // line 87
                echo "            <span class=\"count\">
                <span>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "erroredCommandsCount", [], "any", false, false, false, 88), "html", null, true);
                echo "</span>
            </span>
        ";
            }
            // line 91
            echo "    </span>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 96
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 96, $this->source); })()), 1)) : (1));
        // line 97
        echo "
    <h2>Commands</h2>

    ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "commandcount", [], "any", false, false, false, 100) == 0)) {
            // line 101
            echo "        <div class=\"empty\">
            <p";
            // line 102
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 102, $this->source); })()) == 1)) {
                echo " style=\"font-style:italic;\"";
            }
            echo ">No commands were executed or the logger is disabled.</p>
        </div>
    ";
        } else {
            // line 105
            echo "        <table class=\"alt\">
            <thead>
                <tr>
                    <th class=\"nowrap\">#</th>
                    <th class=\"nowrap\">Time</th>
                    <th class=\"nowrap\">Connection</th>
                    <th style=\"width:100%\">Command</th>
            </thead>
            <tbody>
                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 114, $this->source); })()), "commands", [], "any", false, false, false, 114));
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
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 115
                echo "                    <tr ";
                echo ((twig_get_attribute($this->env, $this->source, $context["command"], "error", [], "any", false, false, false, 115)) ? ("class=\"status-error\"") : (""));
                echo ">
                        <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
                        <td class=\"nowrap\">";
                // line 117
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["command"], "executionMS", [], "any", false, false, false, 117)), "html", null, true);
                echo " ms</td>
                        <td class=\"font-normal\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "conn", [], "any", false, false, false, 118), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "cmd", [], "any", false, false, false, 120), "html", null, true);
                echo "

                            ";
                // line 122
                if (twig_get_attribute($this->env, $this->source, $context["command"], "error", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "                                <br><strong class=\"font-normal\">An error occured: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "error", [], "any", false, false, false, 123), "html", null, true);
                    echo "</strong>
                            ";
                }
                // line 125
                echo "                        </td>
                    </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SncRedis/Collector/redis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 128,  366 => 125,  360 => 123,  358 => 122,  353 => 120,  348 => 118,  344 => 117,  340 => 116,  335 => 115,  318 => 114,  307 => 105,  299 => 102,  296 => 101,  294 => 100,  289 => 97,  286 => 96,  277 => 95,  265 => 91,  259 => 88,  256 => 87,  254 => 86,  249 => 84,  244 => 83,  237 => 79,  233 => 78,  225 => 72,  223 => 71,  220 => 70,  218 => 69,  209 => 68,  198 => 65,  196 => 64,  193 => 63,  190 => 62,  184 => 59,  180 => 57,  178 => 56,  172 => 53,  164 => 48,  160 => 46,  158 => 45,  155 => 44,  148 => 40,  142 => 37,  136 => 35,  133 => 34,  130 => 33,  128 => 32,  125 => 31,  122 => 30,  116 => 27,  112 => 25,  110 => 24,  104 => 21,  96 => 16,  92 => 14,  90 => 13,  87 => 12,  82 => 10,  78 => 8,  75 => 7,  73 => 6,  70 => 5,  67 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        {% set icon %}
            <img width=\"20\" height=\"28\" alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAv5JREFUeNrsVd9L01EUP9/tbm5ubtI2VqAOYpJP0WCYNOilQAiySbICHyp67CXqrf8jqKeejAVJ9GAUmUEMfYjSl5IYexqM1G3Mn1O3uT6fy+4QMV/yoQe/cLi7557zOZ/zOder1Ww25Tg/mxzzdwL4HwKqZDJ51Pkpy7JGtre3r9dqtbMul2vB4XBM4qp9gr962JVTBx0IcsIS+HkL64jP5zuTSqWkXq9LPp+/MDs7e1cp9QuAk4h5iZgfhwIioB8sxvb29m673e7z2Eu1WpVwOCwDAwMSi8VkZmZGcrmcFIvFc7u7u09sNttjgH8B6CvYW8AUrdHR0SvYPETA1Wg06hofH5dQKMQCUqlUZGJiQhYXFyWRSMj8/Lxsbm7KxsZG27q7u3W80+ksAeepWltbe9TZ2XmNLDs6OiQQCEhvb6/Y7Xa2r1uFhjI3Nycej0dQWPtZEJoKutGxOzs7ARRIWWjlPdCHASoQXAd4vV4N1NPTI0NDQxKJRHSR6elpSafTgjbboCxApltbW9JoNL4qv9//HVoNsz1WIksGoIgUCgXJZrPS19cny8vLMjU1pWOQqPUlCJi12fIWKLQRwSR1WwTiykACMolAmUxGF+LeALEDMu3q6tJSsDvkDqqlpaUg26ST4mLSWngmQV/BJDU4pq/P2Cr36EzLQ3aMLZfLZGtXSMgRgMZAApMxE8iGftMWWZIR2yPD9fV1fW7YImdBBYNBDydsWLESmXFINJxrzfi1psl7qKUhaxYhAbJFXL8qlUqnmcjKPDCsWJ3WElsDmiFQBiMTAenjUFHEr4D6e3V1VQ+EiYYV2yCwGQS1o/C8yIwhKP0rKyvmbjbhe8c/vQf48Rn7+wC4BBY2JjKJjM0NMBqyTRYnGIvCX4K9gT0D1jcrHo/vf8oGcXAP4DeQGKZmbI1mWjZsEfcTrhd8IGCF9puwD9A8ElxCSLqJ9Q7Wi3S3jhs4/4D1OewjrHrwtfoboLTeOjvsMmwMVoO9hmWOekCtk//L//z9EWAADA/Sh+MqnZ4AAAAASUVORK5CYII=\"/>

            <span class=\"sf-toolbar-status\">{{ collector.commandcount }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.commandcount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time) }} ms</span>
            </div>

            {% if collector.erroredCommandsCount > 0 %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ collector.erroredCommandsCount }}</span>
                </div>
            {% endif %}
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, status: collector.erroredCommandsCount > 0 ? 'red' : '' } %}
    {% elseif collector.commandcount > 0 %}
        {% set icon %}
            {{ include('@SncRedis/Collector/icon.svg.twig') }}

            <span class=\"sf-toolbar-value\">{{ collector.commandCount }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.commandcount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time) }} ms</span>
            </div>

            {% if collector.erroredCommandsCount > 0 %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ collector.erroredCommandsCount }}</span>
                </div>
            {% endif %}
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, status: collector.erroredCommandsCount > 0 ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block menu %}
{% set profiler_markup_version = profiler_markup_version|default(1) %}

{% if profiler_markup_version == 1 %}
    <span class=\"label\">
        <span class=\"icon\">
            <img width=\"32\" height=\"28\" src=\"data:image/png;base64, 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\" alt=\"Redis\" />
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>{{ collector.commandcount }}</span>
            <span>{{ '%0.0f'|format(collector.time) }} ms</span>
        </span>
    </span>
{% else %}
    <span class=\"label {{ collector.commandcount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@SncRedis/Collector/icon.svg.twig', {colors: {light: '#DDD', dark: '#999'}}) }}</span>
        <strong>Redis</strong>
        {% if 0 != collector.erroredCommandsCount %}
            <span class=\"count\">
                <span>{{ collector.erroredCommandsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>Commands</h2>

    {% if collector.commandcount == 0 %}
        <div class=\"empty\">
            <p{% if profiler_markup_version == 1 %} style=\"font-style:italic;\"{% endif %}>No commands were executed or the logger is disabled.</p>
        </div>
    {% else %}
        <table class=\"alt\">
            <thead>
                <tr>
                    <th class=\"nowrap\">#</th>
                    <th class=\"nowrap\">Time</th>
                    <th class=\"nowrap\">Connection</th>
                    <th style=\"width:100%\">Command</th>
            </thead>
            <tbody>
                {% for command in collector.commands %}
                    <tr {{ command.error ? 'class=\"status-error\"' }}>
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(command.executionMS) }} ms</td>
                        <td class=\"font-normal\">{{ command.conn }}</td>
                        <td>
                            {{ command.cmd }}

                            {% if command.error %}
                                <br><strong class=\"font-normal\">An error occured: {{ command.error }}</strong>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@SncRedis/Collector/redis.html.twig", "C:\\xampp\\htdocs\\my-project\\vendor\\snc\\redis-bundle\\Resources\\views\\Collector\\redis.html.twig");
    }
}
