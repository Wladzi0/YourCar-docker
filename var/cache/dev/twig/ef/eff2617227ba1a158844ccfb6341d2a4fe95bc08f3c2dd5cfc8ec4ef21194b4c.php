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

/* car/catalog/subModel/details.html.twig */
class __TwigTemplate_0d2925ef5922fb84f4db1d00631351cbd374c62a9d6dfa9e60d7c0b8bcf33781 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/subModel/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/subModel/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/subModel/details.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SubModel details"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"  container top\">
        <div class=\"col\">
            <h2>
                <a class=\"\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("makes_list");
        echo "\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog of cars"), "html", null, true);
        echo "
                </a>
                ->
            </h2>
            <h2>
                <a class=\"\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "
                </a>
                ->
                <a class=\"\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_details", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "
                </a>
                ->
                (";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 23, $this->source); })()), "bodyPlatform", [], "any", false, false, false, 23), "html", null, true);
        echo ")
            </h2>
            <h4 class=\"mt-5\">
                ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of engines which were installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["engines"]) || array_key_exists("engines", $context) ? $context["engines"] : (function () { throw new RuntimeError('Variable "engines" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carDetails"]) {
            // line 29
            echo "
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "subModel" => twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 31), "capacity", [], "any", false, false, false, 31), "html", null, true);
            echo "
                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 32), "fuel", [], "any", false, false, false, 32)), "html", null, true);
            echo "
                        ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 33), "abbreviation", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        (";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carDetails"], "power", [], "any", false, false, false, 34), "html", null, true);
            echo " HP)
                        (";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carDetails"], "yearStart", [], "any", false, false, false, 35), "html", null, true);
            echo "-
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carDetails"], "yearFinish", [], "any", false, false, false, 36), "html", null, true);
            echo " )
                    </a>
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carDetails'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/subModel/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 40,  171 => 36,  167 => 35,  163 => 34,  159 => 33,  155 => 32,  151 => 31,  147 => 30,  144 => 29,  140 => 28,  135 => 26,  129 => 23,  123 => 20,  119 => 19,  113 => 16,  109 => 15,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'SubModel details'|trans }}
{% endblock %}
{% block body %}
    <div class=\"  container top\">
        <div class=\"col\">
            <h2>
                <a class=\"\" href=\"{{ path('makes_list') }}\">
                    {{ 'Catalog of cars'|trans }}
                </a>
                ->
            </h2>
            <h2>
                <a class=\"\" href=\"{{ path('models_list', {'make': make.id}) }}\">
                    {{ make.name }}
                </a>
                ->
                <a class=\"\" href=\"{{ path('model_details', {'make': make.id,'model': model.id}) }}\">
                    {{ model.name }}
                </a>
                ->
                ({{ subModel.bodyPlatform }})
            </h2>
            <h4 class=\"mt-5\">
                {{ 'List of engines which were installed'|trans }}
            </h4>
            {% for carDetails in engines %}

                    <a href=\"{{ path('details_by_engine', {'engine': carDetails.engine.id, 'make':make.id, 'model':model.id,'subModel':subModel.id}) }}\">
                        {{ carDetails.engine.capacity }}
                        {{ carDetails.engine.fuel|trans }}
                        {{ carDetails.engine.abbreviation }}
                        ({{carDetails.power }} HP)
                        ({{carDetails.yearStart }}-
                        {{carDetails.yearFinish }} )
                    </a>
              
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "car/catalog/subModel/details.html.twig", "/var/www/php/symfony/templates/car/catalog/subModel/details.html.twig");
    }
}
