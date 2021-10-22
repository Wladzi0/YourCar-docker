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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "
                </a>
                ->
                ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "
            </h2>
            <h2>
                <h4 class=\"mt-5\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of models"), "html", null, true);
        echo "
                </h4>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 20, $this->source); })()), "subModels", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["subModel"]) {
            // line 21
            echo "                    <p>
                        <a href=\"
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sub_model_details", ["make" => twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "subModel" => twig_get_attribute($this->env, $this->source, $context["subModel"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                            <img style=\"background-color: white; border-radius: 5px;\"
                                 src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "images", [], "any", false, false, false, 26)))), "html", null, true);
            echo "\" alt=\"\" width=\"500px\"
                                 height=\"350px\">
                            <br>
                            ";
            // line 29
            echo twig_escape_filter($this->env, $context["subModel"], "html", null, true);
            echo "
                           (";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "yearStart", [], "any", false, false, false, 30), "html", null, true);
            echo "
                            ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["subModel"], "yearFinish", [], "any", false, false, false, 31)) {
                // line 32
                echo "                                -";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "yearFinish", [], "any", false, false, false, 32), "html", null, true);
                echo " )
                            ";
            } else {
                // line 34
                echo "                                - ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("till now"), "html", null, true);
                echo ")
                            ";
            }
            // line 36
            echo "                        </a>
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            </h2>


            ";
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        // line 49
        echo "            ";
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        // line 52
        echo "            <h4 class=\"mt-5\">
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of engines which were installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 55, $this->source); })()), "engines", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 56
            echo "                <div class=\"col\">
                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "capacity", [], "any", false, false, false, 57), "html", null, true);
            echo "
                    ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "fuel", [], "any", false, false, false, 58), "html", null, true);
            echo "
                    ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "abbreviation", [], "any", false, false, false, 59), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            <h4 class=\"mt-5\">
                ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of transmissions which were installed"), "html", null, true);
        echo "
            </h4>
            <div class=\"mb-5\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 66, $this->source); })()), "transmissions", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["transmission"]) {
            // line 67
            echo "                    <div class=\"col\">
                        ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transmission"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transmission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return array (  248 => 71,  239 => 68,  236 => 67,  232 => 66,  226 => 63,  223 => 62,  214 => 59,  210 => 58,  206 => 57,  203 => 56,  199 => 55,  194 => 53,  191 => 52,  189 => 51,  187 => 50,  185 => 49,  183 => 48,  181 => 47,  179 => 46,  177 => 45,  175 => 44,  169 => 39,  161 => 36,  155 => 34,  149 => 32,  147 => 31,  143 => 30,  139 => 29,  133 => 26,  128 => 24,  127 => 23,  123 => 21,  119 => 20,  114 => 18,  107 => 14,  101 => 11,  97 => 10,  92 => 7,  82 => 6,  69 => 3,  59 => 2,  36 => 1,);
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
                            <img style=\"background-color: white; border-radius: 5px;\"
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


            {# {% if model.icon %} #}
            {# <img style=\"background-color: white; border-radius: 5px;\" #}
            {# src=\"{{ asset('images/models/'~model.icon) }}\" alt=\"\" width=\"500px\" #}
            {# height=\"350px\"> #}
            {# {% else %} #}
            {# <img style=\"background-color: white; border-radius: 5px;\" #}
            {# src=\"{{ asset('images/car_details/default.jpg') }}\" alt=\"\" width=\"500px\" #}
            {# height=\"350px\"> #}
            {# {% endif %} #}
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
