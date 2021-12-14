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
class __TwigTemplate_a16dea29cdbceb6fe9aa97a0abd64006f921e61bd418c8d2ed2db56d651c9196 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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

    // line 2
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js\"></script>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/countries.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<title>
\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t</title>

\t<div class=\"container  mt-3\">
\t\t<h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search by our form"), "html", null, true);
        echo "</h1>
\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => " form-control p-3"]]);
        // line 20
        echo "
\t\t<div class=\"d-flex flex-row\">
\t\t\t<div class=\" w-50 p-3 \">
\t\t\t\t";
        // line 24
        echo "\t\t\t\t";
        // line 25
        echo "\t\t\t\t<p class=\"font-weight-bold label-form\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 26, $this->source); })()), "purpose", [], "any", false, false, false, 26), 'label');
        echo "
\t\t\t\t\t<i class=\"fas fa-asterisk\"></i>
\t\t\t\t</p>
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 29, $this->source); })()), "purpose", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 32
        echo "
\t\t\t\t<p class=\"font-weight-bold label-form\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 33, $this->source); })()), "country", [], "any", false, false, false, 33), 'label');
        echo "</p>
\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 34, $this->source); })()), "country", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control  mb-3 pointer"]]);
        // line 37
        echo "
\t\t\t\t<p class=\"font-weight-bold label-form\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 38, $this->source); })()), "fuelConsumption", [], "any", false, false, false, 38), 'label');
        echo "</p>
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 39, $this->source); })()), "fuelConsumption", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 42
        echo "
\t\t\t\t<p class=\"font-weight-bold label-form\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 43, $this->source); })()), "size", [], "any", false, false, false, 43), 'label');
        echo "</p>
\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 44, $this->source); })()), "size", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 47
        echo "
\t\t\t\t<p class=\"font-weight-bold label-form\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 48, $this->source); })()), "engineLife", [], "any", false, false, false, 48), 'label');
        echo "</p>
\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 49, $this->source); })()), "engineLife", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control mb-3 pointer"]]);
        // line 51
        echo "
\t\t\t</div>
\t\t\t<div class=\"flex-row flex\">
\t\t\t\t<h3 class=\"font-weight-bold label-form mb-1\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Execude parametr"), "html", null, true);
        echo "</h3>
\t\t\t\t<div class=\"border rounded p-3 border-danger \">
\t\t\t\t\t<p class=\"font-weight-bold label-form\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 56, $this->source); })()), "exclCountry", [], "any", false, false, false, 56), 'label');
        echo "</p>
\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 57, $this->source); })()), "exclCountry", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control pointer"]]);
        // line 59
        echo "
\t\t\t\t\t<p class=\"font-weight-bold label-form\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 60, $this->source); })()), "exclMake", [], "any", false, false, false, 60), 'label');
        echo "</p>

\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 62, $this->source); })()), "exclMake", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control pointer"]]);
        // line 65
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 68, $this->source); })()), "save", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "d-flex mt-4 btn btn-success ml-3"]]);
        // line 71
        echo "
\t\t</div>
\t</div>
\t";
        // line 75
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchByForm"]) || array_key_exists("searchByForm", $context) ? $context["searchByForm"] : (function () { throw new RuntimeError('Variable "searchByForm" does not exist.', 75, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search form"), "html", null, true);
        echo "
\t\t";
        
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
        return array (  231 => 11,  221 => 10,  207 => 75,  202 => 71,  200 => 68,  195 => 65,  193 => 62,  188 => 60,  185 => 59,  183 => 57,  179 => 56,  174 => 54,  169 => 51,  167 => 49,  163 => 48,  160 => 47,  158 => 44,  154 => 43,  151 => 42,  149 => 39,  145 => 38,  142 => 37,  140 => 34,  136 => 33,  133 => 32,  131 => 29,  125 => 26,  122 => 25,  120 => 24,  115 => 20,  113 => 17,  109 => 16,  104 => 13,  102 => 10,  99 => 9,  89 => 8,  77 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block javascripts %}
\t{{ parent() }}
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js\"></script>
\t<script src=\"{{ asset('js/countries.js') }}\"></script>
{% endblock %}
{% block body %}
\t<title>
\t\t{% block title %}
\t\t\t{{ 'Search form'|trans }}
\t\t{% endblock %}
\t</title>

\t<div class=\"container  mt-3\">
\t\t<h1>{{ 'Search by our form'|trans }}</h1>
\t\t{{ form_start(searchByForm,
            {'attr':
                {'class':' form-control p-3'}
            }) }}
\t\t<div class=\"d-flex flex-row\">
\t\t\t<div class=\" w-50 p-3 \">
\t\t\t\t{# <h5 style=\"margin-bottom: -8px; \">{{ form_label(searchByForm.transmission) }}</h5> #}
\t\t\t\t{# {{ form_widget(searchByForm.transmission,{'attr': {'class': 'form-control mb-3'}}) }} #}
\t\t\t\t<p class=\"font-weight-bold label-form\">
\t\t\t\t\t{{ form_label(searchByForm.purpose) }}
\t\t\t\t\t<i class=\"fas fa-asterisk\"></i>
\t\t\t\t</p>
\t\t\t\t{{ form_widget(searchByForm.purpose,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
\t\t\t\t<p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.country) }}</p>
\t\t\t\t{{ form_widget(searchByForm.country ,
                    {'attr':
                        {'class': 'form-control  mb-3 pointer'
                        }}) }}
\t\t\t\t<p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.fuelConsumption) }}</p>
\t\t\t\t{{ form_widget(searchByForm.fuelConsumption,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
\t\t\t\t<p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.size) }}</p>
\t\t\t\t{{ form_widget(searchByForm.size,
                    {'attr':
                        {'class': 'form-control mb-3 pointer'
                        }}) }}
\t\t\t\t<p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.engineLife) }}</p>
\t\t\t\t{{ form_widget(searchByForm.engineLife,
                    {'attr': {'class': 'form-control mb-3 pointer'
                    }}) }}
\t\t\t</div>
\t\t\t<div class=\"flex-row flex\">
\t\t\t\t<h3 class=\"font-weight-bold label-form mb-1\">{{'Execude parametr'|trans}}</h3>
\t\t\t\t<div class=\"border rounded p-3 border-danger \">
\t\t\t\t\t<p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.exclCountry) }}</p>
\t\t\t\t\t{{ form_widget(searchByForm.exclCountry,
                {'attr': {'class': 'form-control pointer'
                }}) }}
\t\t\t\t\t<p class=\"font-weight-bold label-form\">{{ form_label(searchByForm.exclMake) }}</p>

\t\t\t\t\t{{ form_widget(searchByForm.exclMake,
                        {'attr':
                            {'class': 'form-control pointer'
                            }}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_widget(searchByForm.save,
            {'attr':
                {'class': 'd-flex mt-4 btn btn-success ml-3'
                }}) }}
\t\t</div>
\t</div>
\t{# <input type=\"button\" value=\"{{  results.length }}\"> #}
\t{{ form_end(searchByForm) }}

{% endblock %}
", "search_filter/search.html.twig", "/var/www/php/symfony/templates/search_filter/search.html.twig");
    }
}
