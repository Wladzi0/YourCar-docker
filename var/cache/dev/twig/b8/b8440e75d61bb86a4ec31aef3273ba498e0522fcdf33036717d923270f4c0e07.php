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
class __TwigTemplate_150a1b5c42b55a267816f51e4e8f9c12a0f32416516b55d4a13e18dbb7d9b26a extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your favourite cars list"), "html", null, true);
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
        echo "    ";
        if ((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"container\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 9, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["favourite"]) {
                // line 10
                echo "        <div class=\"d-flex border m-5 flex-row\"  id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
            <a style=\"overflow: hidden\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 13
$context["favourite"], "carDetails", [], "any", false, false, false, 13), "engine", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "make" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 14
$context["favourite"], "carDetails", [], "any", false, false, false, 14), "subModel", [], "any", false, false, false, 14), "model", [], "any", false, false, false, 14), "make", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "model" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 15
$context["favourite"], "carDetails", [], "any", false, false, false, 15), "subModel", [], "any", false, false, false, 15), "model", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "subModel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 16
$context["favourite"], "carDetails", [], "any", false, false, false, 16), "subModel", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
                // line 18
                echo "\">

                <img src=\"
            ";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 21), "subModel", [], "any", false, false, false, 21), "images", [], "any", false, false, false, 21)))), "html", null, true);
                echo "\"
                     width=\"300\" height=\"300\" alt=\"\" style=\"display: inline-block\">

                <div class=\"description col mt-4\">
                    <h4>
                    ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 26), "subModel", [], "any", false, false, false, 26), "model", [], "any", false, false, false, 26), "make", [], "any", false, false, false, 26), "html", null, true);
                echo "
                    ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 27), "subModel", [], "any", false, false, false, 27), "model", [], "any", false, false, false, 27), "html", null, true);
                echo "
                    (";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 28), "subModel", [], "any", false, false, false, 28), "bodyPlatform", [], "any", false, false, false, 28), "html", null, true);
                echo ")
                </h4>

                <p>
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 32), "engine", [], "any", false, false, false, 32), "html", null, true);
                echo "
                    (";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 33), "power", [], "any", false, false, false, 33), "html", null, true);
                echo " HP)

                </p>
            </div >
            </a>
            <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\"
               id=\"js-compare\" class=\"text-white mb-auto p-2 bd-highlight\">

                ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 42), "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)], "method", false, false, false, 42))) {
                    // line 43
                    echo "                    <i class=\"fas fa-balance-scale-right scale\"></i>
                ";
                } else {
                    // line 45
                    echo "                    <i class=\"fas fa-balance-scale scale\"></i>
                ";
                }
                // line 47
                echo "            </a>

            <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\"
               id=\"js-favourite\" data-car=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
                echo "\" class=\" like btn-link \">
                ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favourite"], "carDetails", [], "any", false, false, false, 51), "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)], "method", false, false, false, 51))) {
                    // line 52
                    echo "                    <i class=\" fas fa-heart heart\"></i>
                ";
                } else {
                    // line 54
                    echo "                    <i class=\"far fa-heart heart\"></i>
                ";
                }
                // line 56
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favourite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    ";
        } else {
            // line 61
            echo "        <h2 class=\"d-flex justify-content-center align-items-center flex-column\"
            style=\"height: 600px;\">
            ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You forgot to add cars to favourite list"), "html", null, true);
            echo "
        </h2>
        </div>
    ";
        }
        // line 67
        echo "    ";
        $this->displayBlock('javasriptsblock', $context, $blocks);
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 68
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
        return array (  261 => 68,  251 => 67,  240 => 70,  237 => 67,  230 => 63,  226 => 61,  223 => 60,  206 => 56,  202 => 54,  198 => 52,  196 => 51,  192 => 50,  188 => 49,  184 => 47,  180 => 45,  176 => 43,  174 => 42,  168 => 39,  159 => 33,  155 => 32,  148 => 28,  144 => 27,  140 => 26,  132 => 21,  127 => 18,  125 => 16,  124 => 15,  123 => 14,  122 => 13,  121 => 11,  116 => 10,  99 => 9,  96 => 8,  93 => 7,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Your favourite cars list'|trans }}
{% endblock %}

{% block body %}
    {% if favorites %}
        <div class=\"container\">
    {% for favourite in favorites %}
        <div class=\"d-flex border m-5 flex-row\"  id=\"{{ loop.index }}\">
            <a style=\"overflow: hidden\" href=\"{{ path('details_by_engine',
                {
                    'engine': favourite.carDetails.engine.id,
                    'make': favourite.carDetails.subModel.model.make.id,
                    'model': favourite.carDetails.subModel.model.id,
                    'subModel': favourite.carDetails.subModel.id
                }
            ) }}\">

                <img src=\"
            {{ asset('images/car_details/'~ favourite.carDetails.subModel.images|first) }}\"
                     width=\"300\" height=\"300\" alt=\"\" style=\"display: inline-block\">

                <div class=\"description col mt-4\">
                    <h4>
                    {{ favourite.carDetails.subModel.model.make }}
                    {{ favourite.carDetails.subModel.model }}
                    ({{ favourite.carDetails.subModel.bodyPlatform }})
                </h4>

                <p>
                    {{ favourite.carDetails.engine }}
                    ({{ favourite.carDetails.power }} HP)

                </p>
            </div >
            </a>
            <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
            <a href=\"{{ path('comparing',{ 'id': favourite.carDetails.id }) }}\"
               id=\"js-compare\" class=\"text-white mb-auto p-2 bd-highlight\">

                {% if app.user and favourite.carDetails.isScaledByUser(app.user) %}
                    <i class=\"fas fa-balance-scale-right scale\"></i>
                {% else %}
                    <i class=\"fas fa-balance-scale scale\"></i>
                {% endif %}
            </a>

            <a href=\"{{ path('add_favourite',{'id':favourite.carDetails.id }) }}\"
               id=\"js-favourite\" data-car=\"{{ loop.index }}\" class=\" like btn-link \">
                {% if app.user and favourite.carDetails.isFavouredByUser(app.user) %}
                    <i class=\" fas fa-heart heart\"></i>
                {% else %}
                    <i class=\"far fa-heart heart\"></i>
                {% endif %}
            </a>
        </div>
        </div>
    {% endfor %}
    {% else %}
        <h2 class=\"d-flex justify-content-center align-items-center flex-column\"
            style=\"height: 600px;\">
            {{ 'You forgot to add cars to favourite list'|trans }}
        </h2>
        </div>
    {% endif %}
    {% block javasriptsblock %}
        {{ include('like_slider_compare.html.twig') }}
    {% endblock %}

{% endblock %}
", "car/favourite/list.html.twig", "/var/www/php/symfony/templates/car/favourite/list.html.twig");
    }
}
