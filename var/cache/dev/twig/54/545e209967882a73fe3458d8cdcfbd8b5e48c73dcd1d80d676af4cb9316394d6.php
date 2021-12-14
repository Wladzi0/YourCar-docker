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

/* security/login.html.twig */
class __TwigTemplate_4c5e4e3a3f8e8fa5d765f5ced6d5ba1d88e3c4cd20ac8f6bfc6b323c87339aa6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in"), "html", null, true);
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
        echo "    <div class=\"mt-3 container col-3\">
        <br>
        <form class=\"form\" method=\"post\">
            <br>
            ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                <div class=\"alert-danger p-3\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 15
        echo "            <h1>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please sign in"), "html", null, true);
        echo "
            </h1>
            <label for=\"inputEmail\" class=\"sr-only\">
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address"), "html", null, true);
        echo "
            </label>
            <input type=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\"
                   name=\"email\" id=\"inputEmail\" class=\"form-control\"
                   placeholder= ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address"), "html", null, true);
        echo "
                   required=\"required\" autofocus=\"autofocus\">
            <br>
            <label for=\"inputPassword\" class=\"sr-only\">
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "
            </label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                   placeholder=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo " required=\"required\">
            <br>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <div class=\"checkbox\">
                <label class=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remember me"), "html", null, true);
        echo "
                </label>
            </div>
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"mb-4\" type=\"submit\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot password?"), "html", null, true);
        echo "
            </a>
            <br>
            <button class=\"mb-3 btn btn-success \" type=\"submit\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in"), "html", null, true);
        echo "
            </button>
        </form>
        <button class=\"btn registration btn-info\" onclick=\"window.location.href='/register'\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new account"), "html", null, true);
        echo "
        </button>
        <hr class=\"bg-info mt-4 form\">
        <a class=\"h3 d-flex justify-content-center\" style=\"text-decoration: none\"
           href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google_start");
        echo "\">
            <i class=\"fab fa-google\"></i>
        </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 52,  177 => 48,  170 => 44,  163 => 40,  159 => 39,  153 => 36,  146 => 32,  141 => 30,  135 => 27,  128 => 23,  123 => 21,  118 => 19,  112 => 16,  109 => 15,  103 => 12,  100 => 11,  98 => 10,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Log in'|trans }}
{% endblock %}
{% block body %}
    <div class=\"mt-3 container col-3\">
        <br>
        <form class=\"form\" method=\"post\">
            <br>
            {% if error %}
                <div class=\"alert-danger p-3\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}
            <h1>
                {{ 'Please sign in'|trans }}
            </h1>
            <label for=\"inputEmail\" class=\"sr-only\">
                {{ 'Email address'|trans }}
            </label>
            <input type=\"email\" value=\"{{ last_username }}\"
                   name=\"email\" id=\"inputEmail\" class=\"form-control\"
                   placeholder= {{ 'Email address'|trans }}
                   required=\"required\" autofocus=\"autofocus\">
            <br>
            <label for=\"inputPassword\" class=\"sr-only\">
                {{ 'Password'|trans }}
            </label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                   placeholder={{ 'Password'|trans }} required=\"required\">
            <br>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <div class=\"checkbox\">
                <label class=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                    {{ 'Remember me'|trans }}
                </label>
            </div>
            <a href=\"{{ path('app_forgot_password_request') }}\" class=\"mb-4\" type=\"submit\">
                {{ 'Forgot password?'|trans }}
            </a>
            <br>
            <button class=\"mb-3 btn btn-success \" type=\"submit\">
                {{ 'Sign in'|trans }}
            </button>
        </form>
        <button class=\"btn registration btn-info\" onclick=\"window.location.href='/register'\">
            {{ 'Create new account'|trans }}
        </button>
        <hr class=\"bg-info mt-4 form\">
        <a class=\"h3 d-flex justify-content-center\" style=\"text-decoration: none\"
           href=\"{{ path('connect_google_start') }}\">
            <i class=\"fab fa-google\"></i>
        </a>
    </div>
{% endblock %}
", "security/login.html.twig", "/var/www/php/symfony/templates/security/login.html.twig");
    }
}
