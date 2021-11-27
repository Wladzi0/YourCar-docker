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

/* search_filter/index.html.twig */
class __TwigTemplate_2983f481017e5d855955992fe3dc1fb765ff4a4a037820b05d87dca750d080cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_filter/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_filter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search_filter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search results"), "html", null, true);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 7, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 8
            echo "        <div class=\" border col-3 mb-5 \" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 8), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
            <a style=\"text-decoration: none\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
$context["car"], "engine", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), "make" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
$context["car"], "subModel", [], "any", false, false, false, 12), "model", [], "any", false, false, false, 12), "make", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "model" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
$context["car"], "subModel", [], "any", false, false, false, 13), "model", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "subModel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
$context["car"], "subModel", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
            // line 16
            echo "\" class=\"row\">

                <img src=\"
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "subModel", [], "any", false, false, false, 19), "images", [], "any", false, false, false, 19)))), "html", null, true);
            echo "\"
                     width=\"460\" height=\"300\" alt=\"\" style=\"overflow: hidden\">
                <h4 class=\"ml-4 mt-3 \">
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "subModel", [], "any", false, false, false, 22), "model", [], "any", false, false, false, 22), "make", [], "any", false, false, false, 22), "html", null, true);
            echo "
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "subModel", [], "any", false, false, false, 23), "model", [], "any", false, false, false, 23), "html", null, true);
            echo "
                    (";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "subModel", [], "any", false, false, false, 24), "bodyPlatform", [], "any", false, false, false, 24), "html", null, true);
            echo ")
                </h4>
            </a>
            <div class=\"d-flex  flex-row justify-content-between mr-5 ml-2\">
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"  id=\"js-compare\"
                   class=\"text-white mb-auto p-2 bd-highlight\">
                    ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, $context["car"], "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)], "method", false, false, false, 30))) {
                // line 31
                echo "                        <i class=\"fas fa-balance-scale-right \"></i>
                    ";
            } else {
                // line 33
                echo "                        <i class=\"fas fa-balance-scale\"></i>
                    ";
            }
            // line 35
            echo "                </a>

                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"
                   id=\"js-favourite\" class=\" like btn-link \">
                    ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, $context["car"], "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)], "method", false, false, false, 39))) {
                // line 40
                echo "                        <i class=\" fas fa-heart h3\"></i>
                    ";
            } else {
                // line 42
                echo "                        <i class=\"far fa-heart h3\"></i>
                    ";
            }
            // line 44
            echo "                </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
        $this->displayBlock('javasriptsblock', $context, $blocks);
        // line 52
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/filter1.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search_filter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 50,  226 => 49,  216 => 48,  204 => 52,  201 => 48,  184 => 44,  180 => 42,  176 => 40,  174 => 39,  169 => 37,  165 => 35,  161 => 33,  157 => 31,  155 => 30,  150 => 28,  143 => 24,  139 => 23,  135 => 22,  129 => 19,  124 => 16,  122 => 14,  121 => 13,  120 => 12,  119 => 11,  118 => 9,  111 => 8,  93 => 7,  83 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'Search results'|trans }}
{% endblock %}
{% block body %}
    {% for car in cars %}
        <div class=\" border col-3 mb-5 \" id=\"{{ loop.index }}\" name=\"{{ car.id }}\">
            <a style=\"text-decoration: none\" href=\"{{ path('details_by_engine',
                {
                    'engine': car.engine.id,
                    'make': car.subModel.model.make.id,
                    'model': car.subModel.model.id,
                    'subModel': car.subModel.id
                }
            ) }}\" class=\"row\">

                <img src=\"
            {{ asset('images/car_details/'~ car.subModel.images|first) }}\"
                     width=\"460\" height=\"300\" alt=\"\" style=\"overflow: hidden\">
                <h4 class=\"ml-4 mt-3 \">
                    {{ car.subModel.model.make }}
                    {{ car.subModel.model }}
                    ({{ car.subModel.bodyPlatform }})
                </h4>
            </a>
            <div class=\"d-flex  flex-row justify-content-between mr-5 ml-2\">
                <a href=\"{{ path('comparing',{ 'id': car.id }) }}\"  id=\"js-compare\"
                   class=\"text-white mb-auto p-2 bd-highlight\">
                    {% if app.user and car.isScaledByUser(app.user) %}
                        <i class=\"fas fa-balance-scale-right \"></i>
                    {% else %}
                        <i class=\"fas fa-balance-scale\"></i>
                    {% endif %}
                </a>

                <a href=\"{{ path('add_favourite',{'id':car.id }) }}\"
                   id=\"js-favourite\" class=\" like btn-link \">
                    {% if app.user and car.isFavouredByUser(app.user) %}
                        <i class=\" fas fa-heart h3\"></i>
                    {% else %}
                        <i class=\"far fa-heart h3\"></i>
                    {% endif %}
                </a>
            </div>
        </div>
    {% endfor %}
    {% block javasriptsblock %}
        {{ include('like_slider_compare.html.twig') }}
        <script src=\"{{ asset('js/filter1.js') }}\"></script>
    {% endblock %}


{% endblock %}", "search_filter/index.html.twig", "/var/www/php/symfony/templates/search_filter/index.html.twig");
    }
}
