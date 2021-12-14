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

/* main/index.html.twig */
class __TwigTemplate_7e35f737eecf753377c6ec373b82feae59fe60056f6db3c50adb2b9d001b9e10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome to YourCar"), "html", null, true);
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
        echo "    <div class=\"container col-md-6 col-xl-4 col-9 top flex-column\">

      <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_by_form");
        echo "\" class=\"w-100 btn btn-1 mt-4 main-scale d-inline-flex p-3\">
        <h2 class=\"m-text text-white\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search car with us"), "html", null, true);
        echo "</h2>
          <i class=\"icon text-white display-3 fas fa-car\">
            <i class=\"db-icon text-secondary display-2 search-icon fas fa-search shift\"></i>
          </i>

      </a>
         <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("makes_list");
        echo "\" class=\"w-100 btn btn-2 mt-4 main-scale d-inline-flex p-3\">
            <div class=\" m-text flex-column\">
            <h2 class=\"text-white\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog of cars"), "html", null, true);
        echo "</h2>
            <h3 class=\"text-white\">";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 18, $this->source); })())), "html", null, true);
        echo "</h3>
            </div>
            <i class=\"icon text-white display-3 fas fa-book-open\"></i>
        </a>
       <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing_list");
        echo "\" class=\"w-100 btn btn-3 mt-4 main-scale d-inline-flex p-3\">
          <div class=\" m-text flex-column\">
            <h2 class=\"text-white\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comparing of cars"), "html", null, true);
        echo "</h2>
            \t";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "            <h3 class=\"text-white\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "scales", [], "any", false, false, false, 26)), "html", null, true);
            echo "</h3>
            ";
        }
        // line 28
        echo "          </div>
           <i class=\"icon text-white display-3 fas fa-balance-scale\"></i>
        </a>
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favourite_cars_list");
        echo "\" class=\"w-100 btn btn-4 mt-4 main-scale d-inline-flex p-3\">
          <div class=\"m-text flex-column\">
            <h2 class=\"text-white\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your favourite cars"), "html", null, true);
        echo "</h2>
            \t";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "            <h3 class=\"text-white\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "favourites", [], "any", false, false, false, 35)), "html", null, true);
            echo "</h3>
            ";
        }
        // line 37
        echo "          </div>

            <i class=\"icon text-white display-3 fas fa-heart \"></i>
        </a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 37,  158 => 35,  156 => 34,  152 => 33,  147 => 31,  142 => 28,  136 => 26,  134 => 25,  130 => 24,  125 => 22,  118 => 18,  114 => 17,  109 => 15,  100 => 9,  96 => 8,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Welcome to YourCar'|trans }}
{% endblock %}
{% block body %}
    <div class=\"container col-md-6 col-xl-4 col-9 top flex-column\">

      <a href=\"{{ path('search_by_form') }}\" class=\"w-100 btn btn-1 mt-4 main-scale d-inline-flex p-3\">
        <h2 class=\"m-text text-white\">{{ 'Search car with us'|trans }}</h2>
          <i class=\"icon text-white display-3 fas fa-car\">
            <i class=\"db-icon text-secondary display-2 search-icon fas fa-search shift\"></i>
          </i>

      </a>
         <a href=\"{{ path('makes_list') }}\" class=\"w-100 btn btn-2 mt-4 main-scale d-inline-flex p-3\">
            <div class=\" m-text flex-column\">
            <h2 class=\"text-white\">{{ 'Catalog of cars'|trans }}</h2>
            <h3 class=\"text-white\">{{models|length}}</h3>
            </div>
            <i class=\"icon text-white display-3 fas fa-book-open\"></i>
        </a>
       <a href=\"{{ path('comparing_list') }}\" class=\"w-100 btn btn-3 mt-4 main-scale d-inline-flex p-3\">
          <div class=\" m-text flex-column\">
            <h2 class=\"text-white\"> {{ 'Comparing of cars'|trans }}</h2>
            \t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <h3 class=\"text-white\">{{ app.user.scales|length }}</h3>
            {% endif %}
          </div>
           <i class=\"icon text-white display-3 fas fa-balance-scale\"></i>
        </a>
        <a href=\"{{ path('favourite_cars_list') }}\" class=\"w-100 btn btn-4 mt-4 main-scale d-inline-flex p-3\">
          <div class=\"m-text flex-column\">
            <h2 class=\"text-white\">{{ 'Your favourite cars'|trans }}</h2>
            \t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <h3 class=\"text-white\">{{ app.user.favourites|length }}</h3>
            {% endif %}
          </div>

            <i class=\"icon text-white display-3 fas fa-heart \"></i>
        </a>
    </div>

{% endblock %}
", "main/index.html.twig", "/var/www/php/symfony/templates/main/index.html.twig");
    }
}
