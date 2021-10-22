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

/* comparing/list.html.twig */
class __TwigTemplate_063dad90bec72585777853ef4c4cb1667f1521da0808fbe19d0d52d09c21e1a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comparing/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comparing/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comparing/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comparing list"), "html", null, true);
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
    <div class=\"row\">
        ";
        // line 9
        $context["list"] = [];
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 10, $this->source); })()));
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
            // line 11
            echo "            ";
            $context["list"] = twig_array_merge((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 11, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]);
            // line 12
            echo "            <div class=\"border m-5 col-3 \" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
$context["car"], "carDetails", [], "any", false, false, false, 15), "engine", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "make" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 16
$context["car"], "carDetails", [], "any", false, false, false, 16), "subModel", [], "any", false, false, false, 16), "model", [], "any", false, false, false, 16), "make", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "model" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 17
$context["car"], "carDetails", [], "any", false, false, false, 17), "subModel", [], "any", false, false, false, 17), "model", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "subModel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
$context["car"], "carDetails", [], "any", false, false, false, 18), "subModel", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
            // line 20
            echo "\" class=\"row\">

                    <img src=\"
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 23), "subModel", [], "any", false, false, false, 23), "images", [], "any", false, false, false, 23)))), "html", null, true);
            echo "\"
                         width=\"460\" height=\"300\" alt=\"\">
                    <h4>";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25));
            echo "
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 26), "subModel", [], "any", false, false, false, 26), "model", [], "any", false, false, false, 26), "make", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 27), "subModel", [], "any", false, false, false, 27), "model", [], "any", false, false, false, 27), "html", null, true);
            echo "
                        (";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 28), "subModel", [], "any", false, false, false, 28), "bodyPlatform", [], "any", false, false, false, 28), "html", null, true);
            echo ")
                    </h4>
                </a>
                <div class=\"description col mt-4\">
                    <p>
                        ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 33), "engine", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        (";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 34), "power", [], "any", false, false, false, 34), "html", null, true);
            echo " HP)
                        ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 35), "age", [], "any", false, false, false, 35), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Years"), "html", null, true);
            echo "
                    </p>
                </div>
                <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" id=\"js-compare\"
                       class=\"text-white mb-auto p-2 bd-highlight\" data-car=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo "\" >
                        ";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41));
            echo "
                        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 42), "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)], "method", false, false, false, 42))) {
                // line 43
                echo "                            <i class=\"fas fa-balance-scale-right \"></i>
                        ";
            } else {
                // line 45
                echo "                            <i class=\"fas fa-balance-scale\"></i>
                        ";
            }
            // line 47
            echo "                    </a>

                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"
                       id=\"js-favourite\" class=\" like btn-link \">

                        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 52), "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)], "method", false, false, false, 52))) {
                // line 53
                echo "                            <i class=\" fas fa-heart\"></i>
                        ";
            } else {
                // line 55
                echo "                            <i class=\"far fa-heart\"></i>
                        ";
            }
            // line 57
            echo "                    </a>
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
        // line 62
        echo "        ";
        echo twig_include($this->env, $context, "search_filter/filter_form.html.twig");
        echo "
    </div>
    ";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 64, $this->source); })()));
        echo "

    ";
        // line 66
        $this->displayBlock('javasriptsblock', $context, $blocks);
        // line 69
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 67
        echo "        ";
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comparing/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 67,  262 => 66,  251 => 69,  249 => 66,  244 => 64,  238 => 62,  220 => 57,  216 => 55,  212 => 53,  210 => 52,  204 => 49,  200 => 47,  196 => 45,  192 => 43,  190 => 42,  186 => 41,  182 => 40,  178 => 39,  169 => 35,  165 => 34,  161 => 33,  153 => 28,  149 => 27,  145 => 26,  141 => 25,  136 => 23,  131 => 20,  129 => 18,  128 => 17,  127 => 16,  126 => 15,  125 => 13,  120 => 12,  117 => 11,  99 => 10,  97 => 9,  93 => 7,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Comparing list'|trans }}
{% endblock %}

{% block body %}

    <div class=\"row\">
        {% set list = [] %}
        {% for car in cars %}
            {% set list = list|merge([car.carDetails.id]) %}
            <div class=\"border m-5 col-3 \" id=\"{{ loop.index }}\">
                <a href=\"{{ path('details_by_engine',
                    {
                        'engine': car.carDetails.engine.id,
                        'make': car.carDetails.subModel.model.make.id,
                        'model': car.carDetails.subModel.model.id,
                        'subModel': car.carDetails.subModel.id
                    }
                ) }}\" class=\"row\">

                    <img src=\"
            {{ asset('images/car_details/'~ car.carDetails.subModel.images|first) }}\"
                         width=\"460\" height=\"300\" alt=\"\">
                    <h4>{{ dump(car.carDetails.id) }}
                        {{ car.carDetails.subModel.model.make }}
                        {{ car.carDetails.subModel.model }}
                        ({{ car.carDetails.subModel.bodyPlatform }})
                    </h4>
                </a>
                <div class=\"description col mt-4\">
                    <p>
                        {{ car.carDetails.engine }}
                        ({{ car.carDetails.power }} HP)
                        {{ car.carDetails.age }}&nbsp;{{ 'Years'|trans }}
                    </p>
                </div>
                <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
                    <a href=\"{{ path('comparing',{ 'id': car.carDetails.id }) }}\" id=\"js-compare\"
                       class=\"text-white mb-auto p-2 bd-highlight\" data-car=\"{{ loop.index }}\" >
                        {{ dump(loop.index) }}
                        {% if app.user and car.carDetails.isScaledByUser(app.user) %}
                            <i class=\"fas fa-balance-scale-right \"></i>
                        {% else %}
                            <i class=\"fas fa-balance-scale\"></i>
                        {% endif %}
                    </a>

                    <a href=\"{{ path('add_favourite',{'id':car.carDetails.id }) }}\"
                       id=\"js-favourite\" class=\" like btn-link \">

                        {% if app.user and car.carDetails.isFavouredByUser(app.user) %}
                            <i class=\" fas fa-heart\"></i>
                        {% else %}
                            <i class=\"far fa-heart\"></i>
                        {% endif %}
                    </a>
                </div>
            </div>

        {% endfor %}
        {{ include('search_filter/filter_form.html.twig') }}
    </div>
    {{ dump(list) }}

    {% block javasriptsblock %}
        {{ include('like_slider_compare.html.twig') }}
    {% endblock %}

{% endblock %}

", "comparing/list.html.twig", "/var/www/php/symfony/templates/comparing/list.html.twig");
    }
}
