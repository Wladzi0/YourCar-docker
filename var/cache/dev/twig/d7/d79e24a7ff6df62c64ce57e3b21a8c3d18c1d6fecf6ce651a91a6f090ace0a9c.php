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
class __TwigTemplate_7a97ebec18275d0a4c8879b980c53d0c447f03ab1e7e05ea28de5be44acfef50 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "
                </a>
                ->
                <a class=\"\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_details", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "
                </a>
                ->
                (";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 17, $this->source); })()), "bodyPlatform", [], "any", false, false, false, 17), "html", null, true);
        echo ")
            </h2>
            <h4 class=\"mt-5\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of engines which were installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["engines"]) || array_key_exists("engines", $context) ? $context["engines"] : (function () { throw new RuntimeError('Variable "engines" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carDetails"]) {
            // line 23
            echo "
                <div class=\"col\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "subModel" => twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 26), "capacity", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 27), "fuel", [], "any", false, false, false, 27), "html", null, true);
            echo "
                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carDetails"], "engine", [], "any", false, false, false, 28), "abbreviation", [], "any", false, false, false, 28), "html", null, true);
            echo "
                        (";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carDetails"], "power", [], "any", false, false, false, 29), "html", null, true);
            echo " HP)
                        (";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carDetails"], "yearStart", [], "any", false, false, false, 30), "html", null, true);
            echo "-
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carDetails"], "yearFinish", [], "any", false, false, false, 31), "html", null, true);
            echo " )
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carDetails'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
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
        return array (  170 => 35,  160 => 31,  156 => 30,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 23,  128 => 22,  123 => 20,  117 => 17,  111 => 14,  107 => 13,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
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

                <div class=\"col\">
                    <a href=\"{{ path('details_by_engine', {'engine': carDetails.engine.id, 'make':make.id, 'model':model.id,'subModel':subModel.id}) }}\">
                        {{ carDetails.engine.capacity }}
                        {{ carDetails.engine.fuel }}
                        {{ carDetails.engine.abbreviation }}
                        ({{carDetails.power }} HP)
                        ({{carDetails.yearStart }}-
                        {{carDetails.yearFinish }} )
                    </a>
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "car/catalog/subModel/details.html.twig", "/var/www/php/symfony/templates/car/catalog/subModel/details.html.twig");
    }
}
