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

/* registration/register.html.twig */
class __TwigTemplate_ed4f9fc3a576e24eb72fd65869702248ca829bf49f0e4711ab1c250e42060e29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 3, $this->source); })()) === true)) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit user"), "html", null, true);
            echo "
    ";
        } else {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration"), "html", null, true);
            echo "
    ";
        }
        
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
        echo "    <div class=\"container\">
        ";
        // line 11
        $context["formErrors"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11), "form", [], "any", false, false, false, 11), "getErrors", [0 => true], "method", false, false, false, 11);
        // line 12
        echo "        ";
        if (twig_length_filter($this->env, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "            <ul class=\"col-5 alert-danger mt-3\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "                    <li>
                        ";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 16)), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </ul>
        ";
        }
        // line 21
        echo "    </div>
    <div class=\"mt-5 container col-3\">
        <div class=\"col\">
            ";
        // line 24
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 24, $this->source); })()) === true)) {
            // line 25
            echo "                <h1>
                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit user"), "html", null, true);
            echo "
                </h1>
            ";
        } else {
            // line 29
            echo "                <h1>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new account"), "html", null, true);
            echo "
                </h1>
            ";
        }
        // line 33
        echo "        </div>
        <div class=\"\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 44
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "lastName", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 53
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 62
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "preferLanguage", [], "any", false, false, false, 64), 'label');
        echo "</p>
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "preferLanguage", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control pointer"]]);
        // line 68
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), "first", [], "any", false, false, false, 71), 'label');
        echo "
                <i class=\"fas fa-asterisk \"></i>
            </p>

            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "plainPassword", [], "any", false, false, false, 75), "first", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 78
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "second", [], "any", false, false, false, 81), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), "second", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 87
        echo "
            <br>
            ";
        // line 89
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 89, $this->source); })()) === true)) {
            // line 90
            echo "                <button class=\"btn  btn-success\" type=\"submit\">
                    ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
            echo "
                </button>
            ";
        } else {
            // line 94
            echo "                <div class=\"row justify-content-between mx-1 mt-3\">
                    <button class=\"btn btn-info\" onclick=\"window.location.href='/login'\">
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to sign in"), "html", null, true);
            echo "
                    </button>

                    <button class=\"btn btn-success \" type=\"submit\">
                        ";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up"), "html", null, true);
            echo "
                    </button>
                </div>
                ";
            // line 103
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), 'form_end');
            echo "

            ";
        }
        // line 106
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 106,  271 => 103,  265 => 100,  258 => 96,  254 => 94,  248 => 91,  245 => 90,  243 => 89,  239 => 87,  237 => 84,  231 => 81,  226 => 78,  224 => 75,  217 => 71,  212 => 68,  210 => 65,  206 => 64,  202 => 62,  200 => 59,  194 => 56,  189 => 53,  187 => 50,  181 => 47,  176 => 44,  174 => 41,  168 => 38,  162 => 35,  158 => 33,  152 => 30,  149 => 29,  143 => 26,  140 => 25,  138 => 24,  133 => 21,  129 => 19,  120 => 16,  117 => 15,  113 => 14,  110 => 13,  107 => 12,  105 => 11,  102 => 10,  92 => 9,  78 => 6,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {% if edit is same as (true) %}
        {{ 'Edit user'|trans }}
    {% else %}
        {{ 'Registration'|trans }}
    {% endif %}
{% endblock %}
{% block body %}
    <div class=\"container\">
        {% set formErrors = registrationForm.vars.errors.form.getErrors(true) %}
        {% if formErrors | length %}
            <ul class=\"col-5 alert-danger mt-3\">
                {% for error in formErrors %}
                    <li>
                        {{ error.message|trans }}
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"mt-5 container col-3\">
        <div class=\"col\">
            {% if edit is same as (true) %}
                <h1>
                    {{ 'Edit user'|trans }}
                </h1>
            {% else %}
                <h1>
                    {{ 'Create new account'|trans }}
                </h1>
            {% endif %}
        </div>
        <div class=\"\">
            {{ form_start(registrationForm, {'attr': {'class': 'form-horizontal'}}) }}
            <br>
            <p class=\"font-weight-bold label-form\">
                {{ form_label(registrationForm.firstName) }}
                <i class=\"fas fa-asterisk\"></i>
            </p>
            {{ form_widget(registrationForm.firstName,
                {'attr':
                    {'class': 'form-control'}}
            ) }}
            <br>
            <p class=\"font-weight-bold label-form\">
                {{ form_label(registrationForm.lastName) }}
                <i class=\"fas fa-asterisk\"></i>
            </p>
            {{ form_widget(registrationForm.lastName,
                {'attr':
                    {'class': 'form-control'}
                }) }}
            <br>
            <p class=\"font-weight-bold label-form\">
                {{ form_label(registrationForm.email) }}
                <i class=\"fas fa-asterisk\"></i>
            </p>
            {{ form_widget(registrationForm.email,
                {'attr':
                    {'class': 'form-control'}
                }) }}
            <br>
            <p class=\"font-weight-bold label-form\">{{ form_label(registrationForm.preferLanguage) }}</p>
            {{ form_widget(registrationForm.preferLanguage,
                {'attr':
                    {'class': 'form-control pointer'}
                }) }}
            <br>
            <p class=\"font-weight-bold label-form\">
                {{ form_label(registrationForm.plainPassword.first) }}
                <i class=\"fas fa-asterisk \"></i>
            </p>

            {{ form_widget(registrationForm.plainPassword.first,
                {'attr':
                    {'class': 'form-control'}
                }) }}
            <br>
            <p class=\"font-weight-bold label-form\">
                {{ form_label(registrationForm.plainPassword.second) }}
                <i class=\"fas fa-asterisk\"></i>
            </p>
            {{ form_widget(registrationForm.plainPassword.second,
                {'attr':
                    {'class': 'form-control'}
                }) }}
            <br>
            {% if edit is same as (true) %}
                <button class=\"btn  btn-success\" type=\"submit\">
                    {{ 'Edit'|trans }}
                </button>
            {% else %}
                <div class=\"row justify-content-between mx-1 mt-3\">
                    <button class=\"btn btn-info\" onclick=\"window.location.href='/login'\">
                        {{ 'Back to sign in'|trans }}
                    </button>

                    <button class=\"btn btn-success \" type=\"submit\">
                        {{ 'Sign up'|trans }}
                    </button>
                </div>
                {{ form_end(registrationForm) }}

            {% endif %}
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "/var/www/php/symfony/templates/registration/register.html.twig");
    }
}
