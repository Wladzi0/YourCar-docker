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

/* preference/settings.html.twig */
class __TwigTemplate_204c6190d18b61f9b95f761dbed647e15fd5cb537914542545e00fde6bbfb18d extends \Twig\Template
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
            'javasriptsblock' => [$this, 'block_javasriptsblock'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference/settings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "preference/settings.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User`s settings"), "html", null, true);
        
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
        echo "
    <div class=\"container row  mt-4\">
        <div class=\"container col-5\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "id" => "settingsForm"]]);
        echo "
";
        // line 12
        echo "
            <h5>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 13, $this->source); })()), "preferLanguage", [], "any", false, false, false, 13), 'label');
        echo "</h5>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 14, $this->source); })()), "preferLanguage", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "required" => "true", "autocomplete" => "off"]]);
        // line 16
        echo "
";
        // line 18
        echo "            <br>
            <h5> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 19, $this->source); })()), "carType", [], "any", false, false, false, 19), 'label');
        echo "</h5>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 20, $this->source); })()), "carType", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 22
        echo "
            <br>
             <h5>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 24, $this->source); })()), "tuning", [], "any", false, false, false, 24), 'label');
        echo "</h5>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 25, $this->source); })()), "tuning", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 27
        echo "
            <br>
             <h5>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 29, $this->source); })()), "fuelConsumption", [], "any", false, false, false, 29), 'label');
        echo "</h5>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 30, $this->source); })()), "fuelConsumption", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 32
        echo "
            <br>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settingsForm"]) || array_key_exists("settingsForm", $context) ? $context["settingsForm"] : (function () { throw new RuntimeError('Variable "settingsForm" does not exist.', 34, $this->source); })()), 'form_end');
        echo "

            <a  id=\"js-reset\" class=\"btn btn-danger\">
                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset all settings"), "html", null, true);
        echo "

                </a>

        </div>
    </div>
    ";
        // line 43
        $this->displayBlock('javasriptsblock', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 44
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "preference/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  159 => 43,  150 => 37,  144 => 34,  140 => 32,  138 => 30,  134 => 29,  130 => 27,  128 => 25,  124 => 24,  120 => 22,  118 => 20,  114 => 19,  111 => 18,  108 => 16,  106 => 14,  102 => 13,  99 => 12,  95 => 10,  90 => 7,  80 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %} {{ 'User`s settings'|trans }}{% endblock %}

{% block body %}

    <div class=\"container row  mt-4\">
        <div class=\"container col-5\">
            {{ form_start(settingsForm, {'attr': {'class': 'form-horizontal','id': 'settingsForm'}}) }}
{#            {% if included != true %}#}

            <h5>{{ form_label(settingsForm.preferLanguage) }}</h5>
            {{ form_widget(settingsForm.preferLanguage,
                {'attr': {'class': 'form-control','required': 'true', 'autocomplete':'off'}}
            ) }}
{#            {% endif %}#}
            <br>
            <h5> {{ form_label(settingsForm.carType) }}</h5>
            {{ form_widget(settingsForm.carType,
                {'attr': {'class': 'form-control', 'required': 'true'}}
            ) }}
            <br>
             <h5>{{ form_label(settingsForm.tuning) }}</h5>
            {{ form_widget(settingsForm.tuning,
                {'attr': {'class': 'form-control', 'required': 'true'}}
            ) }}
            <br>
             <h5>{{ form_label(settingsForm.fuelConsumption) }}</h5>
            {{ form_widget(settingsForm.fuelConsumption,
                {'attr': {'class': 'form-control', 'required': 'true'}}
            ) }}
            <br>
            {{ form_end(settingsForm) }}

            <a  id=\"js-reset\" class=\"btn btn-danger\">
                    {{ 'Reset all settings'|trans }}

                </a>

        </div>
    </div>
    {% block javasriptsblock %}
        <script src=\"{{ asset('js/settings.js') }}\"></script>
    {% endblock %}
{% endblock %}

", "preference/settings.html.twig", "/var/www/php/symfony/templates/preference/settings.html.twig");
    }
}
