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

/* car/catalog/fault/details.html.twig */
class __TwigTemplate_5cd8e575fd6effa6f3655617272ef7f4e31996668d8d53f48c841cd451879327 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/fault/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/fault/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/fault/details.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fault details"), "html", null, true);
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
        echo "    <div class=\" border container top pt-4 pl-4\">
        <div class=\"col\">
            ";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 12, $this->source); })()), "subModel", [], "any", false, false, false, 12))) {
            // line 13
            echo "            <h2>
                <a class=\"\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
                </a>
            </h2>
            ";
        }
        // line 19
        echo "            <h3>
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        echo "
            </h3>
            ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "
            </h3>
            ";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 24, $this->source); })()), "images", [], "any", false, false, false, 24))) {
            // line 25
            echo "            <div class=\"slider-inner\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 26, $this->source); })()), "images", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 27))), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
            ";
        }
        // line 31
        echo "            <h3 class=\"m-3\">
                ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "
            </h3>
            <p class=\"mb-5\">
                ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "
            </p>
            <div class=\"comments mt-5\">
                <h3 id=\"commentsCount\">
                    Comments (";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 39, $this->source); })()), "comments", [], "any", false, false, false, 39)), "html", null, true);
        echo ")
                </h3>

                ";
        // line 42
        $this->loadTemplate("comment/form.html.twig", "car/catalog/fault/details.html.twig", 42)->display($context);
        // line 43
        echo "
                <div class=\"comment pt-5 mb-5\" id=\"commentFields\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fault"]) || array_key_exists("fault", $context) ? $context["fault"] : (function () { throw new RuntimeError('Variable "fault" does not exist.', 45, $this->source); })()), "comments", [], "any", false, false, false, 45)));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 46
            echo "                        <p>
                            <b>
                                ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 48), "firstName", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 49), "lastName", [], "any", false, false, false, 49), "html", null, true);
            echo "
                            </b>
                            <small class=\"text-secondary ml-4\">
                                ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 52)), "html", null, true);
            echo "
                            </small>
                            <br>
                            ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 55), "html", null, true);
            echo "
                        </p>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
            </div>

        </div>
    </div>

    ";
        // line 65
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

        // line 66
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/comment.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 67
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/fault/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 67,  265 => 66,  246 => 65,  238 => 59,  228 => 55,  222 => 52,  216 => 49,  212 => 48,  208 => 46,  204 => 45,  200 => 43,  198 => 42,  192 => 39,  185 => 35,  179 => 32,  176 => 31,  172 => 29,  163 => 27,  159 => 26,  156 => 25,  154 => 24,  149 => 22,  144 => 20,  141 => 19,  134 => 15,  130 => 14,  127 => 13,  125 => 12,  121 => 10,  111 => 9,  99 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Fault details'|trans }}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
{% endblock %}
{% block body %}
    <div class=\" border container top pt-4 pl-4\">
        <div class=\"col\">
            {% if fault.subModel is not empty %}
            <h2>
                <a class=\"\" href=\"{{ path('models_list', {'make': make.id}) }}\">
                    {{ make.name }}
                </a>
            </h2>
            {% endif %}
            <h3>
                {{ 'Title'|trans }}
            </h3>
            {{ fault.name }}
            </h3>
            {% if fault.images is not empty %}
            <div class=\"slider-inner\">
                    {% for image in fault.images %}
                        <img src=\"{{ asset('images/car_details/'~ image.image) }}\" alt=\"\">
                    {% endfor %}
            </div>
            {% endif %}
            <h3 class=\"m-3\">
                {{ 'Description'|trans }}
            </h3>
            <p class=\"mb-5\">
                {{ fault.description }}
            </p>
            <div class=\"comments mt-5\">
                <h3 id=\"commentsCount\">
                    Comments ({{ fault.comments|length }})
                </h3>

                {% include 'comment/form.html.twig' %}

                <div class=\"comment pt-5 mb-5\" id=\"commentFields\">
                    {% for comment in fault.comments|reverse %}
                        <p>
                            <b>
                                {{ comment.user.firstName }}
                                {{ comment.user.lastName }}
                            </b>
                            <small class=\"text-secondary ml-4\">
                                {{ comment.createdAt|date }}
                            </small>
                            <br>
                            {{ comment.content }}
                        </p>

                    {% endfor %}
                </div>
            </div>

        </div>
    </div>

    {% block javasriptsblock %}
        <script src=\"{{ asset('js/comment.js') }}\"></script>
        {{ include('like_slider_compare.html.twig') }}
    {% endblock %}
{% endblock %}", "car/catalog/fault/details.html.twig", "/var/www/php/symfony/templates/car/catalog/fault/details.html.twig");
    }
}
