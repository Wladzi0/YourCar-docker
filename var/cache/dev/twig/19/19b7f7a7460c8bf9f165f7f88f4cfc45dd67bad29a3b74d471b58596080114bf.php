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
        <br>
        ";
        // line 12
        $context["formErrors"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12), "form", [], "any", false, false, false, 12), "getErrors", [0 => true], "method", false, false, false, 12);
        // line 13
        echo "        ";
        if (twig_length_filter($this->env, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "            <ul class=\"col-5 alert-danger\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "                    <li>
                        ";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 17)), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </ul>
        ";
        }
        // line 22
        echo "    </div>
    <div class=\"mt-3 container col-3\">
        <div class=\"col\">
            ";
        // line 25
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 25, $this->source); })()) === true)) {
            // line 26
            echo "                <h1>
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit user"), "html", null, true);
            echo "
                </h1>
            ";
        } else {
            // line 30
            echo "                <h1>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new account"), "html", null, true);
            echo "
                </h1>
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "firstName", [], "any", false, false, false, 37), 'label');
        echo "
            <br>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 43
        echo "
            <br>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'label');
        echo "
            <br>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 51
        echo "
            <br>
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'label');
        echo "
            <br>
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 59
        echo "
            <br>
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "preferLanguage", [], "any", false, false, false, 61), 'label');
        echo "
            <br>
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "preferLanguage", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 67
        echo "
            <br>
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "plainPassword", [], "any", false, false, false, 69), "first", [], "any", false, false, false, 69), 'label');
        echo "
            <br>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), "first", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 75
        echo "
            <br>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "plainPassword", [], "any", false, false, false, 77), "second", [], "any", false, false, false, 77), 'label');
        echo "
            <br>
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), "second", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "required" => "true"]]);
        // line 83
        echo "
            <br>
            ";
        // line 85
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 85, $this->source); })()) === true)) {
            // line 86
            echo "                <button class=\"btn  btn-success\" type=\"submit\">
                   ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
            echo "
                </button>
            ";
        } else {
            // line 90
            echo "                <button class=\"btn btn-success \" type=\"submit\">
                   ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up"), "html", null, true);
            echo "
                </button>
                ";
            // line 93
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), 'form_end');
            echo "
                <br>
                <button class=\"btn btn-info mb-5\" onclick=\"window.location.href='/login'\">
                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to sign in"), "html", null, true);
            echo "
                </button>
            ";
        }
        // line 99
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
        return array (  264 => 99,  258 => 96,  252 => 93,  247 => 91,  244 => 90,  238 => 87,  235 => 86,  233 => 85,  229 => 83,  227 => 79,  222 => 77,  218 => 75,  216 => 71,  211 => 69,  207 => 67,  205 => 63,  200 => 61,  196 => 59,  194 => 55,  189 => 53,  185 => 51,  183 => 47,  178 => 45,  174 => 43,  172 => 39,  167 => 37,  163 => 36,  159 => 34,  153 => 31,  150 => 30,  144 => 27,  141 => 26,  139 => 25,  134 => 22,  130 => 20,  121 => 17,  118 => 16,  114 => 15,  111 => 14,  108 => 13,  106 => 12,  102 => 10,  92 => 9,  78 => 6,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
        <br>
        {% set formErrors = registrationForm.vars.errors.form.getErrors(true) %}
        {% if formErrors | length %}
            <ul class=\"col-5 alert-danger\">
                {% for error in formErrors %}
                    <li>
                        {{ error.message|trans }}
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"mt-3 container col-3\">
        <div class=\"col\">
            {% if edit is same as (true) %}
                <h1>
                    {{'Edit user'|trans }}
                </h1>
            {% else %}
                <h1>
                    {{ 'Create new account'|trans }}
                </h1>
            {% endif %}
        </div>
        <div class=\"\">
            {{ form_start(registrationForm, {'attr': {'class': 'form-horizontal'}}) }}
            {{ form_label(registrationForm.firstName) }}
            <br>
            {{ form_widget(registrationForm.firstName,
                {'attr':
                    {'class': 'form-control', 'required': 'true'}
                })
            }}
            <br>
            {{ form_label(registrationForm.lastName) }}
            <br>
            {{ form_widget(registrationForm.lastName,
                {'attr':
                    {'class': 'form-control', 'required': 'true'}
                })
            }}
            <br>
            {{ form_label(registrationForm.email) }}
            <br>
            {{ form_widget(registrationForm.email,
                {'attr':
                {'class': 'form-control', 'required': 'true'}
            })
            }}
            <br>
            {{ form_label(registrationForm.preferLanguage) }}
            <br>
            {{ form_widget(registrationForm.preferLanguage,
                {'attr':
                {'class': 'form-control', 'required': 'true'}
            })
            }}
            <br>
            {{ form_label(registrationForm.plainPassword.first) }}
            <br>
            {{ form_widget(registrationForm.plainPassword.first,
                {'attr':
                    {'class': 'form-control', 'required': 'true'}
                })
            }}
            <br>
            {{ form_label(registrationForm.plainPassword.second) }}
            <br>
            {{ form_widget(registrationForm.plainPassword.second,
                {'attr':
                    {'class': 'form-control', 'required': 'true'}
                })
            }}
            <br>
            {% if edit is same as (true) %}
                <button class=\"btn  btn-success\" type=\"submit\">
                   {{ 'Edit'|trans }}
                </button>
            {% else %}
                <button class=\"btn btn-success \" type=\"submit\">
                   {{ 'Sign up'|trans }}
                </button>
                {{ form_end(registrationForm) }}
                <br>
                <button class=\"btn btn-info mb-5\" onclick=\"window.location.href='/login'\">
                    {{ 'Back to sign in'|trans }}
                </button>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "/var/www/php/symfony/templates/registration/register.html.twig");
    }
}
