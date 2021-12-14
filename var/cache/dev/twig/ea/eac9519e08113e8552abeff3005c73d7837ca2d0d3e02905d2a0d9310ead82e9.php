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
class __TwigTemplate_ab3d8781a4b7709efc64400a5631142c0d3a2ec9f68e338832cc8b519c7884ab extends \Twig\Template
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
        <div class=\"col ml-3\">
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
                            <div class=\"image-box\">
                            <img class=\"img\"
                                 src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "images", [], "any", false, false, false, 33)))), "html", null, true);
            echo "\" alt=\"\" width=\"500px\"
                                 height=\"350px\">
                               </div>
                            ";
            // line 36
            echo twig_escape_filter($this->env, $context["subModel"], "html", null, true);
            echo "
                           (";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "yearStart", [], "any", false, false, false, 37), "html", null, true);
            echo "
                            ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["subModel"], "yearFinish", [], "any", false, false, false, 38)) {
                // line 39
                echo "                                -";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subModel"], "yearFinish", [], "any", false, false, false, 39), "html", null, true);
                echo " )
                            ";
            } else {
                // line 41
                echo "                                - ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("till now"), "html", null, true);
                echo ")
                            ";
            }
            // line 43
            echo "                        </a>
                    </p>
                      <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
            </h2>
            <h4 class=\"mt-5\">
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of engines which were installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 52, $this->source); })()), "engines", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 53
            echo "                <div class=\"col\">
                    ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "capacity", [], "any", false, false, false, 54), "html", null, true);
            echo "
                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "fuel", [], "any", false, false, false, 55), "html", null, true);
            echo "
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "abbreviation", [], "any", false, false, false, 56), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            <h4 class=\"mt-5 mr-5\">
                ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of transmissions which were installed"), "html", null, true);
        echo "
            </h4>
            <div class=\"mb-5\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 63, $this->source); })()), "transmissions", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["transmission"]) {
            // line 64
            echo "                    <div class=\"col\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transmission"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transmission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        return array (  242 => 68,  233 => 65,  230 => 64,  226 => 63,  220 => 60,  217 => 59,  208 => 56,  204 => 55,  200 => 54,  197 => 53,  193 => 52,  188 => 50,  183 => 47,  174 => 43,  168 => 41,  162 => 39,  160 => 38,  156 => 37,  152 => 36,  146 => 33,  140 => 30,  139 => 29,  135 => 27,  131 => 26,  126 => 24,  119 => 20,  113 => 17,  109 => 16,  101 => 11,  97 => 10,  92 => 7,  82 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Submodels list'|trans }}
{% endblock %}

{% block body %}
    <div class=\"container top\">
        <div class=\"col ml-3\">
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
                            <div class=\"image-box\">
                            <img class=\"img\"
                                 src=\"{{ asset('images/car_details/'~ subModel.images|first) }}\" alt=\"\" width=\"500px\"
                                 height=\"350px\">
                               </div>
                            {{ subModel }}
                           ({{ subModel.yearStart }}
                            {% if subModel.yearFinish %}
                                -{{ subModel.yearFinish }} )
                            {% else %}
                                - {{ 'till now'|trans }})
                            {% endif %}
                        </a>
                    </p>
                      <br>
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
            <h4 class=\"mt-5 mr-5\">
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
