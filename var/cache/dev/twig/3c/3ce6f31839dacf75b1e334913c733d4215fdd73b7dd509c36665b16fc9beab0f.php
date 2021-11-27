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

/* comment/form.html.twig */
class __TwigTemplate_26db5e504b57565eba59f81e2a99ce3cfc8f288c1613ed67a7b0e8177323983e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/form.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 2
            echo "    <form method=\"post\" class=\"comment-form\" id=\"comment-form\">
        <input id=\"commentContent\" placeholder=\"Add your comment\" autocomplete=\"off\">
        <input type=\"hidden\" id=\"comObject\" value=\"
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["fault"] ?? null), "id", [], "any", true, true, false, 5)) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
                echo "\" data-fault=\"true\">
            ";
            } else {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
            ";
            }
            // line 10
            echo "        <button class=\"comment-btn\" name=\"submit\" id=\"submit\"
                value=\"Comment\" type=\"button\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comment"), "html", null, true);
            echo "
        </button>
    </form>
";
        } else {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "set", [0 => "url", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "uri", [], "any", false, false, false, 16)], "method", false, false, false, 16), "html", null, true);
            echo "
    <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you want to add comment, please sign in or create account"), "html", null, true);
            echo "
    </a>
";
        }
        // line 21
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comment/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  84 => 18,  80 => 17,  75 => 16,  68 => 12,  64 => 10,  58 => 8,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('ROLE_USER') %}
    <form method=\"post\" class=\"comment-form\" id=\"comment-form\">
        <input id=\"commentContent\" placeholder=\"Add your comment\" autocomplete=\"off\">
        <input type=\"hidden\" id=\"comObject\" value=\"
            {% if fault.id is defined %}
                {{ fault.id }}\" data-fault=\"true\">
            {% else %}
                {{ engine.id }}\">
            {% endif %}
        <button class=\"comment-btn\" name=\"submit\" id=\"submit\"
                value=\"Comment\" type=\"button\">
            {{ 'Comment'|trans }}
        </button>
    </form>
{% else %}
    {{ app.session.set('url',app.request.uri) }}
    <a href=\"{{ path('app_login') }}\">
        {{'If you want to add comment, please sign in or create account'|trans }}
    </a>
{% endif %}

", "comment/form.html.twig", "/var/www/php/symfony/templates/comment/form.html.twig");
    }
}
