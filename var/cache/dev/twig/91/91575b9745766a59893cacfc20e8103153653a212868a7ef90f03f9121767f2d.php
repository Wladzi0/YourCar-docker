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

/* car/favourite/list.html.twig */
class __TwigTemplate_08afd04256f7f5de471a3c7a021fd96a392d2299fa16d4c3e166dab6c08fb052 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javasriptsblock' => [$this, 'block_javasriptsblock'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/favourite/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/favourite/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/favourite/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your best cars list"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bests"]) || array_key_exists("bests", $context) ? $context["bests"] : (function () { throw new RuntimeError('Variable "bests" does not exist.', 8, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["best"]) {
            // line 9
            echo "        <div class=\"border m-5 row \" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
$context["best"], "carDetails", [], "any", false, false, false, 12), "engine", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "make" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
$context["best"], "carDetails", [], "any", false, false, false, 13), "subModel", [], "any", false, false, false, 13), "model", [], "any", false, false, false, 13), "make", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "model" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
$context["best"], "carDetails", [], "any", false, false, false, 14), "subModel", [], "any", false, false, false, 14), "model", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "subModel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
$context["best"], "carDetails", [], "any", false, false, false, 15), "subModel", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
            // line 17
            echo "\" class=\"row\">

                <img src=\"
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 20), "subModel", [], "any", false, false, false, 20), "images", [], "any", false, false, false, 20)))), "html", null, true);
            echo "\"
                     width=\"460\" height=\"300\" alt=\"\">
                <h4>
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 23), "subModel", [], "any", false, false, false, 23), "model", [], "any", false, false, false, 23), "make", [], "any", false, false, false, 23), "html", null, true);
            echo "
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 24), "subModel", [], "any", false, false, false, 24), "model", [], "any", false, false, false, 24), "html", null, true);
            echo "
                    (";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 25), "subModel", [], "any", false, false, false, 25), "bodyPlatform", [], "any", false, false, false, 25), "html", null, true);
            echo ")
                </h4>
            </a>
            <div class=\"description col mt-4\">
                <p>
                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 30), "engine", [], "any", false, false, false, 30), "html", null, true);
            echo "
                    (";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 31), "power", [], "any", false, false, false, 31), "html", null, true);
            echo " HP)

                </p>
            </div >
            <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"  id=\"js-compare\"
               class=\"text-white mb-auto p-2 bd-highlight\">

                ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 39), "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)], "method", false, false, false, 39))) {
                // line 40
                echo "                    <i class=\"fas fa-balance-scale-right \"></i>
                ";
            } else {
                // line 42
                echo "                    <i class=\"fas fa-balance-scale\"></i>
                ";
            }
            // line 44
            echo "            </a>

            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"
               id=\"js-favourite\" data-car=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\" like btn-link \">

                ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["best"], "carDetails", [], "any", false, false, false, 49), "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)], "method", false, false, false, 49))) {
                // line 50
                echo "                    <i class=\" fas fa-heart\"></i>
                ";
            } else {
                // line 52
                echo "                    <i class=\"far fa-heart\"></i>
                ";
            }
            // line 54
            echo "            </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['best'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('javasriptsblock', $context, $blocks);
        // line 62
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 60
        echo "        ";
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/favourite/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 60,  235 => 59,  224 => 62,  222 => 59,  219 => 58,  202 => 54,  198 => 52,  194 => 50,  192 => 49,  187 => 47,  183 => 46,  179 => 44,  175 => 42,  171 => 40,  169 => 39,  163 => 36,  155 => 31,  151 => 30,  143 => 25,  139 => 24,  135 => 23,  129 => 20,  124 => 17,  122 => 15,  121 => 14,  120 => 13,  119 => 12,  118 => 10,  113 => 9,  96 => 8,  93 => 7,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Your best cars list'|trans }}
{% endblock %}

{% block body %}

    {% for best in bests %}
        <div class=\"border m-5 row \" id=\"{{ loop.index }}\">
            <a href=\"{{ path('details_by_engine',
                {
                    'engine': best.carDetails.engine.id,
                    'make': best.carDetails.subModel.model.make.id,
                    'model': best.carDetails.subModel.model.id,
                    'subModel': best.carDetails.subModel.id
                }
            ) }}\" class=\"row\">

                <img src=\"
            {{ asset('images/car_details/'~ best.carDetails.subModel.images|first) }}\"
                     width=\"460\" height=\"300\" alt=\"\">
                <h4>
                    {{ best.carDetails.subModel.model.make }}
                    {{ best.carDetails.subModel.model }}
                    ({{ best.carDetails.subModel.bodyPlatform }})
                </h4>
            </a>
            <div class=\"description col mt-4\">
                <p>
                    {{ best.carDetails.engine }}
                    ({{ best.carDetails.power }} HP)

                </p>
            </div >
            <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
            <a href=\"{{ path('comparing',{ 'id': best.carDetails.id }) }}\"  id=\"js-compare\"
               class=\"text-white mb-auto p-2 bd-highlight\">

                {% if app.user and best.carDetails.isScaledByUser(app.user) %}
                    <i class=\"fas fa-balance-scale-right \"></i>
                {% else %}
                    <i class=\"fas fa-balance-scale\"></i>
                {% endif %}
            </a>

            <a href=\"{{ path('add_favourite',{'id':best.carDetails.id }) }}\"
               id=\"js-favourite\" data-car=\"{{ loop.index }}\" class=\" like btn-link \">

                {% if app.user and best.carDetails.isFavouredByUser(app.user) %}
                    <i class=\" fas fa-heart\"></i>
                {% else %}
                    <i class=\"far fa-heart\"></i>
                {% endif %}
            </a>
        </div>
        </div>
    {% endfor %}

    {% block javasriptsblock %}
        {{ include('like_slider_compare.html.twig') }}
    {% endblock %}

{% endblock %}
", "car/favourite/list.html.twig", "/var/www/php/symfony/templates/car/favourite/list.html.twig");
    }
}
