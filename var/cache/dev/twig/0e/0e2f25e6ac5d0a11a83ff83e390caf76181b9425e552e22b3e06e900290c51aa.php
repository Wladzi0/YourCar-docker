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

/* search_filter/search.html.twig */
class __TwigTemplate_594fd0a2e5219b51ca33ec6d39ba7e1c594d41b3d7b9dfc8fb0b148d65fc694b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_filter/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_filter/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search_filter/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <div class=\"container col-5 mt-3\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search by our form"), "html", null, true);
        echo "</h1>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => " form-control p-3 ", "id" => "filterForm"]]);
        // line 14
        echo "
        <div class=\"d-flex flex-row\">
            <div class=\" w-50 p-3 \">
                ";
        // line 18
        echo "                ";
        // line 19
        echo "                <p class=\"font-weight-bold label-form\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 20, $this->source); })()), "purpose", [], "any", false, false, false, 20), 'label');
        echo "
                    <i class=\"fas fa-asterisk\"></i>
                </p>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 23, $this->source); })()), "purpose", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 26
        echo "
                <p class=\"font-weight-bold label-form\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 27, $this->source); })()), "country", [], "any", false, false, false, 27), 'label');
        echo "</p>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 28, $this->source); })()), "country", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control  mb-3 pointer"]]);
        // line 31
        echo "
                <p class=\"font-weight-bold label-form\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 32, $this->source); })()), "fuelConsumption", [], "any", false, false, false, 32), 'label');
        echo "</p>
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 33, $this->source); })()), "fuelConsumption", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 36
        echo "
                <p class=\"font-weight-bold label-form\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 37, $this->source); })()), "size", [], "any", false, false, false, 37), 'label');
        echo "</p>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 38, $this->source); })()), "size", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 41
        echo "
                <p class=\"font-weight-bold label-form\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 42, $this->source); })()), "engineLife", [], "any", false, false, false, 42), 'label');
        echo "</p>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 43, $this->source); })()), "engineLife", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 45
        echo "
            </div>
            <div class=\"border rounded p-3 w-50 border-danger \">
                <p class=\"font-weight-bold label-form\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 48, $this->source); })()), "exclCountry", [], "any", false, false, false, 48), 'label');
        echo "</p>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 49, $this->source); })()), "exclCountry", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 52
        echo "
                <p class=\"font-weight-bold label-form\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 53, $this->source); })()), "exclMake", [], "any", false, false, false, 53), 'label');
        echo "</p>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 54, $this->source); })()), "exclMake", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        echo "
            </div>
        </div>
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 57, $this->source); })()), "save", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "d-flex mt-4 btn btn-success ml-3"]]);
        // line 60
        echo "
        ";
        // line 62
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search form"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search_filter/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 6,  182 => 5,  167 => 62,  164 => 60,  162 => 57,  156 => 54,  152 => 53,  149 => 52,  147 => 49,  143 => 48,  138 => 45,  136 => 43,  132 => 42,  129 => 41,  127 => 38,  123 => 37,  120 => 36,  118 => 33,  114 => 32,  111 => 31,  109 => 28,  105 => 27,  102 => 26,  100 => 23,  94 => 20,  91 => 19,  89 => 18,  84 => 14,  82 => 11,  78 => 10,  74 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <title>
        {% block title %}
            {{ 'Search form'|trans }}
        {% endblock %}
    </title>
    <div class=\"container col-5 mt-3\">
        <h1>{{ 'Search by our form'|trans }}</h1>
        {{ form_start(searchByForm,
            {'attr':
                {'class':' form-control p-3 ', 'id': 'filterForm'}
            }) }}
        <div class=\"d-flex flex-row\">
            <div class=\" w-50 p-3 \">
                {# <h5 style=\"margin-bottom: -8px; \">{{ form_label(searchByForm.transmission) }}</h5> #}
                {# {{ form_widget(searchByForm.transmission,{'attr': {'class': 'form-control mb-3'}}) }} #}
                <p class=\"font-weight-bold label-form\">
                    {{ form_label(searchByForm.purpose) }}
                    <i class=\"fas fa-asterisk\"></i>
                </p>
                {{ form_widget(searchByForm.purpose,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
                <p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.country) }}</p>
                {{ form_widget(searchByForm.country ,
                    {'attr':
                        {'class': 'form-control  mb-3 pointer'
                        }}) }}
                <p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.fuelConsumption) }}</p>
                {{ form_widget(searchByForm.fuelConsumption,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
                <p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.size) }}</p>
                {{ form_widget(searchByForm.size,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
                <p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.engineLife) }}</p>
                {{ form_widget(searchByForm.engineLife,
                    {'attr': {'class': 'form-control mb-3 pointer'
                    }}) }}
            </div>
            <div class=\"border rounded p-3 w-50 border-danger \">
                <p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.exclCountry) }}</p>
                {{ form_widget(searchByForm.exclCountry,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
                <p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.exclMake) }}</p>
                {{ form_widget(searchByForm.exclMake,{'attr': {'class': 'form-control mb-3 pointer'}}) }}
            </div>
        </div>
        {{ form_widget(searchByForm.save,
            {'attr':
                {'class': 'd-flex mt-4 btn btn-success ml-3'
                }}) }}
        {# <input type=\"button\" value=\"{{  results.length }}\"> #}
        {{ form_end(searchByForm) }}
    </div>

{% endblock %}", "search_filter/search.html.twig", "/var/www/php/symfony/templates/search_filter/search.html.twig");
    }
}
