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

/* car/catalog/model/details.html.twig */
class __TwigTemplate_68c666c6db5dd9337953643e1c9f8b07ba69ce2a13c64501bee8986f3bb7e738 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/model/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/model/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/model/details.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submodels list"), "html", null, true);
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
        echo "    <div class=\"container top\">
        <div class=\"col\">
            <h2>
                <a class=\"\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("makes_list");
        echo "\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog of cars"), "html", null, true);
        echo "
                </a>
                ->
            </h2>
            <h2>
                <a class=\"\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "
                </a>
                ->
                ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "
            </h2>
            <h2>
                <h4 class=\"mt-5\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of models"), "html", null, true);
        echo "
                </h4>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 26, $this->source); })()), "subModels", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["subModel"]) {
            // line 27
            echo "                    <p>
                        <a href=\"
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sub_model_details", ["make" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "subModel" => twig_get_attribute($this->env, $this->source, $context["subModel"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                            <img class=\"img\"
                                 src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "images", [], "any", false, false, false, 32)))), "html", null, true);
            echo "\" alt=\"\" width=\"500px\"
                                 height=\"350px\">
                            <br>
                            ";
            // line 35
            echo twig_escape_filter($this->env, $context["subModel"], "html", null, true);
            echo "
                           (";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "yearStart", [], "any", false, false, false, 36), "html", null, true);
            echo "
                            ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["subModel"], "yearFinish", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                -";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "yearFinish", [], "any", false, false, false, 38), "html", null, true);
                echo " )
                            ";
            } else {
                // line 40
                echo "                                - ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("till now"), "html", null, true);
                echo ")
                            ";
            }
            // line 42
            echo "                        </a>
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
            </h2>
            <h4 class=\"mt-5\">
                ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of engines which were installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 50, $this->source); })()), "engines", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 51
            echo "                <div class=\"col\">
                    ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "capacity", [], "any", false, false, false, 52), "html", null, true);
            echo "
                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "fuel", [], "any", false, false, false, 53), "html", null, true);
            echo "
                    ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "abbreviation", [], "any", false, false, false, 54), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            <h4 class=\"mt-5\">
                ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of transmissions which were installed"), "html", null, true);
        echo "
            </h4>
            <div class=\"mb-5\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 61, $this->source); })()), "transmissions", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["transmission"]) {
            // line 62
            echo "                    <div class=\"col\">
                        ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transmission"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transmission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/model/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 66,  231 => 63,  228 => 62,  224 => 61,  218 => 58,  215 => 57,  206 => 54,  202 => 53,  198 => 52,  195 => 51,  191 => 50,  186 => 48,  181 => 45,  173 => 42,  167 => 40,  161 => 38,  159 => 37,  155 => 36,  151 => 35,  145 => 32,  140 => 30,  139 => 29,  135 => 27,  131 => 26,  126 => 24,  119 => 20,  113 => 17,  109 => 16,  101 => 11,  97 => 10,  92 => 7,  82 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Submodels list'|trans }}
{% endblock %}

{% block body %}
    <div class=\"container top\">
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
                {{ model.name }}
            </h2>
            <h2>
                <h4 class=\"mt-5\">
                    {{ 'List of models'|trans }}
                </h4>
                {% for subModel in model.subModels %}
                    <p>
                        <a href=\"
                        {{ path('sub_model_details',
                            {'make': make.id,'model':model.id,'subModel':subModel.id }) }}\">
                            <img class=\"img\"
                                 src=\"{{ asset('images/car_details/'~ subModel.images|first) }}\" alt=\"\" width=\"500px\"
                                 height=\"350px\">
                            <br>
                            {{ subModel }}
                           ({{ subModel.yearStart }}
                            {% if subModel.yearFinish %}
                                -{{ subModel.yearFinish }} )
                            {% else %}
                                - {{ 'till now'|trans }})
                            {% endif %}
                        </a>
                    </p>
                {% endfor %}

            </h2>
            <h4 class=\"mt-5\">
                {{ 'List of engines which were installed'|trans }}
            </h4>
            {% for engine in model.engines %}
                <div class=\"col\">
                    {{ engine.capacity }}
                    {{ engine.fuel }}
                    {{ engine.abbreviation }}
                </div>
            {% endfor %}
            <h4 class=\"mt-5\">
                {{ 'List of transmissions which were installed'|trans }}
            </h4>
            <div class=\"mb-5\">
                {% for transmission in model.transmissions %}
                    <div class=\"col\">
                        {{ transmission.name }}
                    </div>
                {% endfor %}
            </div>

        </div>
    </div>
{% endblock %}
", "car/catalog/model/details.html.twig", "/var/www/php/symfony/templates/car/catalog/model/details.html.twig");
    }
}
