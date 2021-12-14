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
class __TwigTemplate_f011eb90f373104d9d8a05543841c20219e5440ce328fb5bf221e7030c3058a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/hideFilterForm.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div style=\"align-items:center\" id=\"filterFields\" class=\"mt-3 d-flex flex-row position-fixed\">
      <i id=\"filter-arrow\" onclick=\"arrowSwitchRight()\" class=\"fas fa-chevron-right mr-3\"></i>
      <i id=\"filter-arrow-left\" onclick=\"arrowSwitchLeft()\" class=\"fas fa-chevron-left mr-3\"></i>
      <div id=\"filter\">
        <h1 id=\"filterText\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        echo "</h1>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-control p-3 ", "id" => "filterForm"]]);
        // line 13
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 14, $this->source); })()), "consumption", [], "any", false, false, false, 14), 'label');
        echo "</p>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 15, $this->source); })()), "consumption", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 16, $this->source); })()), "transmission", [], "any", false, false, false, 16), 'label');
        echo "</p>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 17, $this->source); })()), "transmission", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        // line 20
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 21, $this->source); })()), "power", [], "any", false, false, false, 21), 'label');
        echo "</p>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 22, $this->source); })()), "power", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 23, $this->source); })()), "age", [], "any", false, false, false, 23), 'label');
        echo "</p>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 24, $this->source); })()), "age", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 25, $this->source); })()), "tuning", [], "any", false, false, false, 25), 'label');
        echo "</p>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 26, $this->source); })()), "tuning", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 27, $this->source); })()), 'form_end');
        echo "

      </div>
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
        return array (  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  119 => 20,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  102 => 13,  100 => 10,  96 => 9,  90 => 5,  80 => 4,  67 => 2,  57 => 1,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block javascripts %}
<script src=\"{{ asset('js/hideFilterForm.js') }}\"></script>
{% endblock %}
{% block body %}
    <div style=\"align-items:center\" id=\"filterFields\" class=\"mt-3 d-flex flex-row position-fixed\">
      <i id=\"filter-arrow\" onclick=\"arrowSwitchRight()\" class=\"fas fa-chevron-right mr-3\"></i>
      <i id=\"filter-arrow-left\" onclick=\"arrowSwitchLeft()\" class=\"fas fa-chevron-left mr-3\"></i>
      <div id=\"filter\">
        <h1 id=\"filterText\">{{ 'Filters'|trans }}</h1>
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
    </div>
{% endblock %}
", "comparing/filter_form.html.twig", "/var/www/php/symfony/templates/comparing/filter_form.html.twig");
    }
}
