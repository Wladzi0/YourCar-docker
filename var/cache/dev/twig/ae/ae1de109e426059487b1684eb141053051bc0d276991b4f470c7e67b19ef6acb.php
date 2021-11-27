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

/* comparing/filter_form.html.twig */
class __TwigTemplate_6ea58588b670414575f3bd02b972d2f2ab25c4dfd227afced8a8c398a5af3874 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comparing/filter_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comparing/filter_form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div id=\"filterFields\" class=\"mt-3 position-fixed\">
        <h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        echo "</h1>
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-control p-3 ", "id" => "filterForm"]]);
        // line 7
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 8, $this->source); })()), "consumption", [], "any", false, false, false, 8), 'label');
        echo "</p>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 9, $this->source); })()), "consumption", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 10, $this->source); })()), "transmission", [], "any", false, false, false, 10), 'label');
        echo "</p>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 11, $this->source); })()), "transmission", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        // line 14
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 15, $this->source); })()), "power", [], "any", false, false, false, 15), 'label');
        echo "</p>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 16, $this->source); })()), "power", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 17, $this->source); })()), "age", [], "any", false, false, false, 17), 'label');
        echo "</p>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 18, $this->source); })()), "age", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 19, $this->source); })()), "tuning", [], "any", false, false, false, 19), 'label');
        echo "</p>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 20, $this->source); })()), "tuning", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comparing/filter_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  89 => 14,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  72 => 7,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div id=\"filterFields\" class=\"mt-3 position-fixed\">
        <h1>{{ 'Filters'|trans }}</h1>
        {{ form_start(filterForm,
            {'attr':
                {'class':'form-horizontal form-control p-3 ', 'id': 'filterForm'
                }}) }}
        <p class=\"font-weight-bold label-form\">{{ form_label(filterForm.consumption) }}</p>
        {{ form_widget(filterForm.consumption,{'attr': {'class': 'form-control mb-3'}}) }}
        <p class=\"font-weight-bold label-form\">{{ form_label(filterForm.transmission) }}</p>
        {{ form_widget(filterForm.transmission,
            {'attr':
                {'class': 'form-control mb-3'
                }}) }}
        <p class=\"font-weight-bold label-form\">{{ form_label(filterForm.power) }}</p>
        {{ form_widget(filterForm.power,{'attr': {'class': 'form-control mb-3'}}) }}
        <p class=\"font-weight-bold label-form\">{{ form_label(filterForm.age) }}</p>
        {{ form_widget(filterForm.age,{'attr': {'class': 'form-control mb-3'}}) }}
        <p class=\"font-weight-bold label-form\">{{ form_label(filterForm.tuning) }}</p>
        {{ form_widget(filterForm.tuning,{'attr': {'class': 'form-control mb-3'}}) }}
        {{ form_end(filterForm) }}
    </div>
{% endblock %}", "comparing/filter_form.html.twig", "/var/www/php/symfony/templates/comparing/filter_form.html.twig");
    }
}
