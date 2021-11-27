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

/* car/catalog/model/list.html.twig */
class __TwigTemplate_a2a917c4dc2ef9f8219a662899d06c50a200d215c3bf4d1bc2306803c3d945b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/model/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/model/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/model/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of models"), "html", null, true);
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
        echo "    <div class=\"container\">
        <div class=\"container col-5 top\">
            ";
        // line 8
        if ((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 10
                echo "                    <div class=\" d-flex flex-column mb-5\">
                        <a class=\"link\"
                           href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_details", ["make" => (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 12, $this->source); })()), "model" => twig_get_attribute($this->env, $this->source, $context["model"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">
                            <div class=\"image-box\">
                            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["model"], "icon", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                                <img class=\"img\"
                                     src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/models/" . twig_get_attribute($this->env, $this->source, $context["model"], "icon", [], "any", false, false, false, 16))), "html", null, true);
                    echo "\" alt=\"\"
                            ";
                } else {
                    // line 18
                    echo "                                <img class=\"img\"
                                     src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car_details/default.jpg"), "html", null, true);
                    echo "\" alt=\"\"
                            ";
                }
                // line 21
                echo "                            </div>
                            <p class=\"mt-2\">
                                ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "
                                (";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("years"), "html", null, true);
                echo ":
                                ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "yearStart", [], "any", false, false, false, 25), "html", null, true);
                echo "
                                ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["model"], "yearFinish", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                                    - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "yearFinish", [], "any", false, false, false, 27), "html", null, true);
                    echo ")
                                ";
                } else {
                    // line 29
                    echo "                                    - ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("till now"), "html", null, true);
                    echo ")
                                ";
                }
                // line 31
                echo "                            </p>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        }
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/model/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 36,  169 => 35,  160 => 31,  154 => 29,  148 => 27,  146 => 26,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  125 => 19,  122 => 18,  117 => 16,  114 => 15,  112 => 14,  107 => 12,  103 => 10,  98 => 9,  96 => 8,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'List of models'|trans }}
{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"container col-5 top\">
            {% if models %}
                {% for model in models %}
                    <div class=\" d-flex flex-column mb-5\">
                        <a class=\"link\"
                           href=\"{{ path('model_details', {'make':make,'model': model.id}) }}\">
                            <div class=\"image-box\">
                            {% if model.icon %}
                                <img class=\"img\"
                                     src=\"{{ asset('images/models/'~model.icon) }}\" alt=\"\"
                            {% else %}
                                <img class=\"img\"
                                     src=\"{{ asset('images/car_details/default.jpg') }}\" alt=\"\"
                            {% endif %}
                            </div>
                            <p class=\"mt-2\">
                                {{ model.name }}
                                ({{ 'years'|trans }}:
                                {{ model.yearStart }}
                                {% if model.yearFinish %}
                                    - {{ model.yearFinish }})
                                {% else %}
                                    - {{ 'till now'|trans }})
                                {% endif %}
                            </p>
                        </a>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "car/catalog/model/list.html.twig", "/var/www/php/symfony/templates/car/catalog/model/list.html.twig");
    }
}
