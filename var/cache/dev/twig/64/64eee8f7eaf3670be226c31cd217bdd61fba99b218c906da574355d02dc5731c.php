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

/* car/catalog/fault/fault_form.html.twig */
class __TwigTemplate_0d763859aa595e5d6afeeb053eca3f4592b87c211ede7727b498626be2c4695a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javasriptsblock' => [$this, 'block_javasriptsblock'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/fault/fault_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/fault/fault_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/fault/fault_form.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fault form"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container col-4\">
        <h1 class=\"mt-5\">";
        // line 11
        echo "Request for addition fault";
        echo "</h1>

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal mt-3"]]);
        echo "
        <p class=\"font-weight-bold label-form\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 15, $this->source); })()), "images", [], "any", false, false, false, 15), 'label');
        echo "
            <i class=\"fas fa-asterisk\"></i>
        </p>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 18, $this->source); })()), "images", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-images", "required" => "true"]]);
        // line 21
        echo "
        <br>

        <div id=\"selectedImage\" class=\" mb-2\"></div>
        <br>
        <p class=\"font-weight-bold label-form\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), 'label');
        echo "
            <i class=\"fas fa-asterisk\"></i>
        </p>

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 34
        echo "
        <br>
        <p class=\"font-weight-bold label-form\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'label');
        echo "
            <i class=\"fas fa-asterisk\"></i>
        </p>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 43
        echo "
        <button class=\"btn btn-success w-25 mt-5 \" type=\"submit\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "
        </button>
        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["faultForm"]) || array_key_exists("faultForm", $context) ? $context["faultForm"] : (function () { throw new RuntimeError('Variable "faultForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
    </div>
    ";
        // line 49
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

        // line 50
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteImage.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/selectedImage.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/fault/fault_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 51,  205 => 50,  186 => 49,  181 => 47,  176 => 45,  172 => 43,  170 => 40,  164 => 37,  159 => 34,  157 => 31,  150 => 27,  142 => 21,  140 => 18,  134 => 15,  129 => 13,  124 => 11,  121 => 10,  111 => 9,  99 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Fault form'|trans }}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container col-4\">
        <h1 class=\"mt-5\">{{ 'Request for addition fault' }}</h1>

        {{ form_start(faultForm, {'attr': {'class': 'form-horizontal mt-3'}}) }}
        <p class=\"font-weight-bold label-form\">
            {{ form_label(faultForm.images) }}
            <i class=\"fas fa-asterisk\"></i>
        </p>
        {{ form_widget(faultForm.images,
            {'attr':
                {'class': 'form-images', 'required': 'true'}
            }) }}
        <br>

        <div id=\"selectedImage\" class=\" mb-2\"></div>
        <br>
        <p class=\"font-weight-bold label-form\">
            {{ form_label(faultForm.name) }}
            <i class=\"fas fa-asterisk\"></i>
        </p>

        {{ form_widget(faultForm.name,
            {'attr':
                {'class': 'form-control', 'required': 'true'}
            }) }}
        <br>
        <p class=\"font-weight-bold label-form\">
            {{ form_label(faultForm.description) }}
            <i class=\"fas fa-asterisk\"></i>
        </p>
        {{ form_widget(faultForm.description,
            {'attr':
                {'class': 'form-control', 'required': 'true'}
            }) }}
        <button class=\"btn btn-success w-25 mt-5 \" type=\"submit\">
            {{ 'Add'|trans }}
        </button>
        {{ form_end(faultForm) }}
    </div>
    {% block javasriptsblock %}
        <script src=\"{{ asset('js/deleteImage.js') }}\"></script>
        <script src=\"{{ asset('js/selectedImage.js') }}\"></script>
    {% endblock %}
{% endblock %}
", "car/catalog/fault/fault_form.html.twig", "/var/www/php/symfony/templates/car/catalog/fault/fault_form.html.twig");
    }
}
