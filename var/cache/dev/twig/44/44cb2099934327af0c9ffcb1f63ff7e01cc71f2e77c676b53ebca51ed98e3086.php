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
class __TwigTemplate_933c779d8a7dc14a9a242bf5c3367a6636808c812e5d6594d5916f2d8263fc03 extends \Twig\Template
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
        echo "    <div class=\"mt-5 container col-3\">

        <div class=\"form\">
          ";
        // line 13
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 13, $this->source); })()) === true)) {
            // line 14
            echo "              <h1>
                  ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit user"), "html", null, true);
            echo "
              </h1>
          ";
        } else {
            // line 18
            echo "              <h1>
                  ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new account"), "html", null, true);
            echo "
              </h1>
          ";
        }
        // line 22
        echo "          ";
        $context["formErrors"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22), "form", [], "any", false, false, false, 22), "getErrors", [0 => true], "method", false, false, false, 22);
        // line 23
        echo "          ";
        if (twig_length_filter($this->env, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "              <ul class=\"alert-danger mt-3 py-2\">
                  ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "                      <li>
                          ";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27)), "html", null, true);
                echo "

                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "              </ul>
          ";
        }
        // line 32
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "firstName", [], "any", false, false, false, 35), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 41
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "lastName", [], "any", false, false, false, 44), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 50
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 59
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "preferLanguage", [], "any", false, false, false, 61), 'label');
        echo "</p>
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "preferLanguage", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control pointer"]]);
        // line 65
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), "first", [], "any", false, false, false, 68), 'label');
        echo "
                <i class=\"fas fa-asterisk \"></i>
            </p>

            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), "first", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 75
        echo "
            <br>
            <p class=\"font-weight-bold label-form\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "plainPassword", [], "any", false, false, false, 78), "second", [], "any", false, false, false, 78), 'label');
        echo "
                <i class=\"fas fa-asterisk\"></i>
            </p>
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "second", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 84
        echo "
            <br>
            ";
        // line 86
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 86, $this->source); })()) === true)) {
            // line 87
            echo "                <button class=\"btn  btn-success\" type=\"submit\">
                    ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
            echo "
                </button>
            ";
        } else {
            // line 91
            echo "                <div class=\"row justify-content-between mx-1 mt-3\">
                    <button class=\"btn btn-info\" onclick=\"window.location.href='/login'\">
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to sign in"), "html", null, true);
            echo "
                    </button>

                    <button class=\"btn btn-success\" type=\"submit\">
                        ";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up"), "html", null, true);
            echo "
                    </button>
                </div>
                ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), 'form_end');
            echo "

            ";
        }
        // line 103
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
        return array (  272 => 103,  266 => 100,  260 => 97,  253 => 93,  249 => 91,  243 => 88,  240 => 87,  238 => 86,  234 => 84,  232 => 81,  226 => 78,  221 => 75,  219 => 72,  212 => 68,  207 => 65,  205 => 62,  201 => 61,  197 => 59,  195 => 56,  189 => 53,  184 => 50,  182 => 47,  176 => 44,  171 => 41,  169 => 38,  163 => 35,  156 => 32,  152 => 30,  143 => 27,  140 => 26,  136 => 25,  133 => 24,  130 => 23,  127 => 22,  121 => 19,  118 => 18,  112 => 15,  109 => 14,  107 => 13,  102 => 10,  92 => 9,  78 => 6,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
    <div class=\"mt-5 container col-3\">

        <div class=\"form\">
          {% if edit is same as (true) %}
              <h1>
                  {{ 'Edit user'|trans }}
              </h1>
          {% else %}
              <h1>
                  {{ 'Create new account'|trans }}
              </h1>
          {% endif %}
          {% set formErrors = registrationForm.vars.errors.form.getErrors(true) %}
          {% if formErrors | length %}
              <ul class=\"alert-danger mt-3 py-2\">
                  {% for error in formErrors %}
                      <li>
                          {{ error.message|trans }}

                  {% endfor %}
              </ul>
          {% endif %}
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

                    <button class=\"btn btn-success\" type=\"submit\">
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
