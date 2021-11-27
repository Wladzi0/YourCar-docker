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

/* car/catalog/subModel/details_by_engine.html.twig */
class __TwigTemplate_5b65a58f0e1d5644ea09a942c3a2fa855e6c32a9cb3a09b8072aa87b8391616b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/subModel/details_by_engine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/subModel/details_by_engine.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/subModel/details_by_engine.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details by engine"), "html", null, true);
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
        echo "    <div class=\"  container top\">
        <div class=\"col\">
            <h2>
                <a class=\"\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("makes_list");
        echo "\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog of cars"), "html", null, true);
        echo "
                </a>
                ->
            </h2>
            <h2>

                <a class=\"\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "
                </a>
                ->
                <a class=\"\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_details", ["make" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "
                </a>
                ->
                (";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 29, $this->source); })()), "bodyPlatform", [], "any", false, false, false, 29), "html", null, true);
        echo ")
            </h2>
            <div class=\"slider-inner\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 32, $this->source); })()), "images", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            echo "
                    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 34))), "html", null, true);
            echo "\"  alt=\"\">

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
            ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                <div class=\"row justify-content-between mb-3 ml-5 mt-3 w-50\">
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" id=\"js-compare\"
                       class=\"text-white mb-auto p-2 bd-highlight\">

                        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 43, $this->source); })()), 0, [], "array", false, false, false, 43), "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)], "method", false, false, false, 43))) {
                // line 44
                echo "                            <i class=\"fas fa-balance-scale-right scale\"></i>
                        ";
            } else {
                // line 46
                echo "                            <i class=\"fas fa-balance-scale scale\"></i>
                        ";
            }
            // line 48
            echo "                    </a>

                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 50, $this->source); })()), 0, [], "array", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"
                       id=\"js-favourite\" class=\" like btn-link \">

                        ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 53, $this->source); })()), 0, [], "array", false, false, false, 53), "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)], "method", false, false, false, 53))) {
                // line 54
                echo "                            <i class=\" fas fa-heart heart\"></i>
                        ";
            } else {
                // line 56
                echo "                            <i class=\"far fa-heart heart\"></i>
                        ";
            }
            // line 58
            echo "                    </a>
                </div>
            ";
        } else {
            // line 61
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "set", [0 => "url", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "uri", [], "any", false, false, false, 61)], "method", false, false, false, 61), "html", null, true);
            echo "
                <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                    ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For add to favourite or to comparing you need to login"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 66
        echo "
            <div class=\"rating\" data-object=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 67, $this->source); })()), 0, [], "array", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                <span class=\"mr-2\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Average rating"), "html", null, true);
        echo ":
                </span>
                ";
        // line 71
        if (array_key_exists("result", $context)) {
            // line 72
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "                        <i class=\" pointer
                ";
                // line 74
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 74, $this->source); })()), "rating", [], "array", false, false, false, 74))) {
                    // line 75
                    echo "                fas
                    ";
                } else {
                    // line 77
                    echo "                   far
                ";
                }
                // line 79
                echo "                fa-star\" data-value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></i>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    <span id=\"count\" class=\"ml-2\">
                        (";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 82, $this->source); })()), "count", [], "array", false, false, false, 82), "html", null, true);
            echo ")
                    </span>
                ";
        }
        // line 85
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 85, $this->source); })()), "userRated", [], "array", false, false, false, 85)) {
            // line 86
            echo "                    <span class=\"far fa-check-circle text-success \"></span>
                ";
        }
        // line 88
        echo "            </div>
            <h4 class=\"mt-5\">
                ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of parts which frequently wanted"), "html", null, true);
        echo "
            </h4>
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 93
            echo "                <div class=\"row border-bottom\">
                    <p>
                        <img id=\"js-part\"
                             src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/parts/" . twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 96, $this->source); })()), "icon", [], "any", false, false, false, 96))), "html", null, true);
            echo "\" alt=\"\" width=\"210px\" height=\"190px\">
                        <a href=\"https://google.com/search?q=";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "name", [], "any", false, false, false, 97), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "catalogNumber", [], "any", false, false, false, 97), "html", null, true);
            echo "\"
                           target=\"_blank\" rel=\"noopener noreferrer\">
                            ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo " &nbsp;
                            ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "catalogNumber", [], "any", false, false, false, 100), "html", null, true);
            echo "
                        </a>
                    </p>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            <div class=\"col\">
                <h4 class=\"mt-5\">
                    ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Technical data of engine"), "html", null, true);
        echo "
                </h4>
                <p>
                    <a class=\"font-weight-bold\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engine_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 111, $this->source); })()), 0, [], "array", false, false, false, 111), "engine", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)]), "html", null, true);
        echo "\">
                        ";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Engine"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 112, $this->source); })()), 0, [], "array", false, false, false, 112), "engine", [], "any", false, false, false, 112), "html", null, true);
        echo "
                        ( <i class=\"fas fa-exclamation-triangle\"></i>
                        ";
        // line 114
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 114, $this->source); })()), 0, [], "array", false, false, false, 114), "engine", [], "any", false, false, false, 114), "faults", [], "any", false, false, false, 114)), "html", null, true);
        echo ")
                    </a>
                </p>
                <p>
                    ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 118, $this->source); })()), 0, [], "array", false, false, false, 118), "engine", [], "any", false, false, false, 118), "fuel", [], "any", false, false, false, 118), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Power"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 121, $this->source); })()), 0, [], "array", false, false, false, 121), "power", [], "any", false, false, false, 121), "html", null, true);
        echo " (HP)
                </p>
                <p>
                    ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Torque"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 124, $this->source); })()), 0, [], "array", false, false, false, 124), "torque", [], "any", false, false, false, 124), "html", null, true);
        echo " (Nm)
                </p>
                <p>
                    ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Power increase device"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 127, $this->source); })()), 0, [], "array", false, false, false, 127), "engine", [], "any", false, false, false, 127), "powerIncrease", [], "any", false, false, false, 127), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max. speed"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 130, $this->source); })()), 0, [], "array", false, false, false, 130), "speed", [], "any", false, false, false, 130), "html", null, true);
        echo " (km/h)
                </p>
                <p>
                    ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start year of installing"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 133, $this->source); })()), 0, [], "array", false, false, false, 133), "yearStart", [], "any", false, false, false, 133), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finish year of installing"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 136, $this->source); })()), 0, [], "array", false, false, false, 136), "yearFinish", [], "any", false, false, false, 136), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ecology standart"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 139, $this->source); })()), 0, [], "array", false, false, false, 139), "eco", [], "any", false, false, false, 139), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transmission"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 142, $this->source); })()), 0, [], "array", false, false, false, 142), "transmission", [], "any", false, false, false, 142), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drive"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 145, $this->source); })()), 0, [], "array", false, false, false, 145), "drive", [], "any", false, false, false, 145), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tank"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 148, $this->source); })()), 0, [], "array", false, false, false, 148), "subModel", [], "any", false, false, false, 148), "tank", [], "any", false, false, false, 148), "html", null, true);
        echo " (l)
                </p>
                <p>
                    ";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumption"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 151, $this->source); })()), 0, [], "array", false, false, false, 151), "fuelConsumption", [], "any", false, false, false, 151), "html", null, true);
        echo "
                    (l/100km)
                </p>
                <p>
                    ";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion mixed"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 155, $this->source); })()), 0, [], "array", false, false, false, 155), "fuelConsumptionMixed", [], "any", false, false, false, 155), "html", null, true);
        echo "
                    (l/100km)
                </p>
                <p>
                    ";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion extra"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 159, $this->source); })()), 0, [], "array", false, false, false, 159), "fuelConsumptionExtra", [], "any", false, false, false, 159), "html", null, true);
        echo "
                    (l/100km)
                </p>
            </div>
            <div class=\"col\">
                <h4 class=\"mt-5\">
                    ";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parameters"), "html", null, true);
        echo "
                </h4>
                <p>
                    ";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start year of production"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 168, $this->source); })()), "yearStart", [], "any", false, false, false, 168), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finish year of production"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 171, $this->source); })()), "yearFinish", [], "any", false, false, false, 171), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Body type"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 174, $this->source); })()), "bodyType", [], "any", false, false, false, 174), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Length"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 177, $this->source); })()), "length", [], "any", false, false, false, 177), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Width"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 180, $this->source); })()), "width", [], "any", false, false, false, 180), "html", null, true);
        echo "
                </p>
            </div>

            <h4 class=\"mt-5\">
                ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of transmissions which were installed"), "html", null, true);
        echo "
            </h4>
            <h4 class=\"mt-5\">
            ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of faults"), "html", null, true);
        echo "
            ";
        // line 189
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 189, $this->source); })()), "faults", [], "any", false, false, false, 189))) {
            // line 190
            echo "
                ";
            // line 191
            $context["faultCount"] = "";
            // line 192
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 192, $this->source); })()), "faults", [], "any", false, false, false, 192));
            foreach ($context['_seq'] as $context["_key"] => $context["fault"]) {
                // line 193
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["fault"], "published", [], "any", false, false, false, 193) == true)) {
                    // line 194
                    echo "                ";
                    $context["faultCount"] =  +1;
                    // line 195
                    echo "                ";
                }
                // line 196
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fault'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["faultCount"]) || array_key_exists("faultCount", $context) ? $context["faultCount"] : (function () { throw new RuntimeError('Variable "faultCount" does not exist.', 197, $this->source); })())), "html", null, true);
            echo ")
       
                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 199, $this->source); })()), "faults", [], "any", false, false, false, 199));
            foreach ($context['_seq'] as $context["_key"] => $context["fault"]) {
                // line 200
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["fault"], "published", [], "any", false, false, false, 200) == "1")) {
                    // line 201
                    echo "                    <div class=\"col\">
                        <a href=\"";
                    // line 202
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subModel_fault", ["make" => twig_get_attribute($this->env, $this->source,                     // line 203
(isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203), "subModel" => twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203), "fault" => twig_get_attribute($this->env, $this->source, $context["fault"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                    echo "\">
                            ";
                    // line 204
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fault"], "name", [], "any", false, false, false, 204), "html", null, true);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 208
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fault'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                ";
        } else {
            // line 210
            echo "                       (0)
                ";
        }
        // line 212
        echo "
                <a id=\"btnAdd\" href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fault_add", ["subModel" => twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213)]), "html", null, true);
        echo "\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
            </h4>

            ";
        // line 218
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 218, $this->source); })()), "rims", [], "any", false, false, false, 218))) {
            // line 219
            echo "            <h4 class=\"mt-5\">
                ";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of rims which were installed"), "html", null, true);
            echo "
                (";
            // line 221
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 221, $this->source); })()), "rims", [], "any", false, false, false, 221)), "html", null, true);
            echo ")
            </h4>
            <div class=\"\">
                ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 224, $this->source); })()), "rims", [], "any", false, false, false, 224));
            foreach ($context['_seq'] as $context["_key"] => $context["rim"]) {
                // line 225
                echo "                    <div class=\"col\">
                        ";
                // line 226
                echo twig_escape_filter($this->env, $context["rim"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rim'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                ";
        } else {
            // line 230
            echo "                    <h4 class=\"mt-5\">
                        ";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of rims to this model"), "html", null, true);
            echo " (0)
                    </h4>
                ";
        }
        // line 234
        echo "            </div>
        </div>
    </div>

    ";
        // line 238
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

        // line 239
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/clickButton.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 241
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/subModel/details_by_engine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 241,  704 => 240,  699 => 239,  680 => 238,  674 => 234,  668 => 231,  665 => 230,  662 => 229,  653 => 226,  650 => 225,  646 => 224,  640 => 221,  636 => 220,  633 => 219,  631 => 218,  623 => 213,  620 => 212,  616 => 210,  613 => 209,  607 => 208,  600 => 204,  596 => 203,  595 => 202,  592 => 201,  589 => 200,  585 => 199,  579 => 197,  573 => 196,  570 => 195,  567 => 194,  564 => 193,  559 => 192,  557 => 191,  554 => 190,  552 => 189,  548 => 188,  542 => 185,  532 => 180,  524 => 177,  516 => 174,  508 => 171,  500 => 168,  494 => 165,  483 => 159,  474 => 155,  465 => 151,  457 => 148,  449 => 145,  441 => 142,  433 => 139,  425 => 136,  417 => 133,  409 => 130,  401 => 127,  393 => 124,  385 => 121,  377 => 118,  370 => 114,  363 => 112,  359 => 111,  353 => 108,  349 => 106,  337 => 100,  333 => 99,  326 => 97,  322 => 96,  317 => 93,  313 => 92,  308 => 90,  304 => 88,  300 => 86,  297 => 85,  291 => 82,  288 => 81,  279 => 79,  275 => 77,  271 => 75,  269 => 74,  266 => 73,  261 => 72,  259 => 71,  254 => 69,  249 => 67,  246 => 66,  240 => 63,  236 => 62,  231 => 61,  226 => 58,  222 => 56,  218 => 54,  216 => 53,  210 => 50,  206 => 48,  202 => 46,  198 => 44,  196 => 43,  190 => 40,  187 => 39,  185 => 38,  182 => 37,  173 => 34,  170 => 33,  166 => 32,  160 => 29,  154 => 26,  150 => 25,  149 => 24,  143 => 21,  139 => 20,  130 => 14,  126 => 13,  121 => 10,  111 => 9,  99 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Details by engine'|trans }}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"  container top\">
        <div class=\"col\">
            <h2>
                <a class=\"\" href=\"{{ path('makes_list') }}\">
                    {{ 'Catalog of cars'|trans}}
                </a>
                ->
            </h2>
            <h2>

                <a class=\"\" href=\"{{ path('models_list', {'make': make.id}) }}\">
                    {{ make.name }}
                </a>
                ->
                <a class=\"\" href=\"{{ path('model_details',
                    {'make': make.id,'model': model.id}) }}\">
                    {{ model.name }}
                </a>
                ->
                ({{ subModel.bodyPlatform }})
            </h2>
            <div class=\"slider-inner\">
                {% for image in subModel.images %}

                    <img src=\"{{ asset('images/car_details/'~ image.image) }}\"  alt=\"\">

                {% endfor %}
            </div>
            {% if app.user %}
                <div class=\"row justify-content-between mb-3 ml-5 mt-3 w-50\">
                    <a href=\"{{ path('comparing',{ 'id': carDetails[0].id }) }}\" id=\"js-compare\"
                       class=\"text-white mb-auto p-2 bd-highlight\">

                        {% if app.user and carDetails[0].isScaledByUser(app.user) %}
                            <i class=\"fas fa-balance-scale-right scale\"></i>
                        {% else %}
                            <i class=\"fas fa-balance-scale scale\"></i>
                        {% endif %}
                    </a>

                    <a href=\"{{ path('add_favourite',{'id': carDetails[0].id }) }}\"
                       id=\"js-favourite\" class=\" like btn-link \">

                        {% if app.user and carDetails[0].isFavouredByUser(app.user) %}
                            <i class=\" fas fa-heart heart\"></i>
                        {% else %}
                            <i class=\"far fa-heart heart\"></i>
                        {% endif %}
                    </a>
                </div>
            {% else %}
                {{ app.session.set('url',app.request.uri) }}
                <a href=\"{{ path('app_login') }}\">
                    {{'For add to favourite or to comparing you need to login'|trans }}
                </a>
            {% endif %}

            <div class=\"rating\" data-object=\"{{ carDetails[0].id }}\">
                <span class=\"mr-2\">
                    {{ 'Average rating'|trans }}:
                </span>
                {% if result is defined %}
                    {% for i in 1..5 %}
                        <i class=\" pointer
                {% if i <= result['rating'] %}
                fas
                    {% else %}
                   far
                {% endif %}
                fa-star\" data-value=\"{{ i }}\"></i>
                    {% endfor %}
                    <span id=\"count\" class=\"ml-2\">
                        ({{ result['count'] }})
                    </span>
                {% endif %}
                {% if result['userRated'] %}
                    <span class=\"far fa-check-circle text-success \"></span>
                {% endif %}
            </div>
            <h4 class=\"mt-5\">
                {{ 'List of parts which frequently wanted'|trans }}
            </h4>
            {% for part in parts %}
                <div class=\"row border-bottom\">
                    <p>
                        <img id=\"js-part\"
                             src=\"{{ asset('images/parts/'~make.icon)}}\" alt=\"\" width=\"210px\" height=\"190px\">
                        <a href=\"https://google.com/search?q={{ part.name }} {{ part.catalogNumber }}\"
                           target=\"_blank\" rel=\"noopener noreferrer\">
                            {{ part.name }} &nbsp;
                            {{ part.catalogNumber }}
                        </a>
                    </p>

                </div>
            {% endfor %}
            <div class=\"col\">
                <h4 class=\"mt-5\">
                    {{ 'Technical data of engine'|trans }}
                </h4>
                <p>
                    <a class=\"font-weight-bold\" href=\"{{ path('engine_details',{'id': carDetails[0].engine.id}) }}\">
                        {{ 'Engine'|trans }}: {{ carDetails[0].engine }}
                        ( <i class=\"fas fa-exclamation-triangle\"></i>
                        {{ carDetails[0].engine.faults|length }})
                    </a>
                </p>
                <p>
                    {{ 'Fuel'|trans }}: {{ carDetails[0].engine.fuel }}
                </p>
                <p>
                    {{ 'Power'|trans }}: {{ carDetails[0].power }} (HP)
                </p>
                <p>
                    {{ 'Torque'|trans }}: {{ carDetails[0].torque }} (Nm)
                </p>
                <p>
                    {{ 'Power increase device'|trans }}: {{ carDetails[0].engine.powerIncrease }}
                </p>
                <p>
                    {{ 'Max. speed'|trans }}: {{ carDetails[0].speed }} (km/h)
                </p>
                <p>
                    {{ 'Start year of installing'|trans }}: {{ carDetails[0].yearStart }}
                </p>
                <p>
                    {{ 'Finish year of installing'|trans }}: {{ carDetails[0].yearFinish }}
                </p>
                <p>
                    {{ 'Ecology standart'|trans }}: {{ carDetails[0].eco }}
                </p>
                <p>
                    {{ 'Transmission'|trans }}: {{ carDetails[0].transmission }}
                </p>
                <p>
                    {{ 'Drive'|trans }}: {{ carDetails[0].drive }}
                </p>
                <p>
                    {{ 'Tank'|trans }}: {{ carDetails[0].subModel.tank }} (l)
                </p>
                <p>
                    {{ 'Fuel consumption'|trans }}: {{ carDetails[0].fuelConsumption }}
                    (l/100km)
                </p>
                <p>
                    {{ 'Fuel consumprion mixed'|trans }}: {{ carDetails[0].fuelConsumptionMixed }}
                    (l/100km)
                </p>
                <p>
                    {{ 'Fuel consumprion extra'|trans }}: {{ carDetails[0].fuelConsumptionExtra }}
                    (l/100km)
                </p>
            </div>
            <div class=\"col\">
                <h4 class=\"mt-5\">
                    {{ 'Parameters'|trans }}
                </h4>
                <p>
                    {{ 'Start year of production'|trans }}: {{ subModel.yearStart }}
                </p>
                <p>
                    {{ 'Finish year of production'|trans }}: {{ subModel.yearFinish }}
                </p>
                <p>
                    {{ 'Body type'|trans }}: {{ subModel.bodyType }}
                </p>
                <p>
                    {{ 'Length'|trans }}: {{ subModel.length }}
                </p>
                <p>
                    {{ 'Width'|trans }}: {{ subModel.width }}
                </p>
            </div>

            <h4 class=\"mt-5\">
                {{ 'List of transmissions which were installed'|trans }}
            </h4>
            <h4 class=\"mt-5\">
            {{ 'List of faults'|trans }}
            {% if subModel.faults is not empty %}

                {% set faultCount = \"\" %}
                {% for fault in subModel.faults %}
                {% if fault.published == true %}
                {% set faultCount =+ 1 %}
                {% endif %}
                {% endfor %}
                ({{ faultCount|length }})
       
                {% for fault in subModel.faults %}
                    {% if fault.published == '1' %}
                    <div class=\"col\">
                        <a href=\"{{ path('subModel_fault',
                            {'make': make.id, 'model': model.id, 'subModel': subModel.id, 'fault':fault.id}) }}\">
                            {{ fault.name }}
                        </a>
                    </div>
                {% endif %}
                {% endfor %}
                {% else %}
                       (0)
                {% endif %}

                <a id=\"btnAdd\" href=\"{{ path('fault_add', { 'subModel': subModel.id}) }}\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
            </h4>

            {% if subModel.rims is not empty %}
            <h4 class=\"mt-5\">
                {{ 'List of rims which were installed'|trans }}
                ({{ subModel.rims|length }})
            </h4>
            <div class=\"\">
                {% for rim in subModel.rims %}
                    <div class=\"col\">
                        {{ rim }}
                    </div>
                {% endfor %}
                {% else %}
                    <h4 class=\"mt-5\">
                        {{ 'List of rims to this model'|trans }} (0)
                    </h4>
                {% endif %}
            </div>
        </div>
    </div>

    {% block javasriptsblock %}
        <script src=\"{{ asset('js/rating.js') }}\"></script>
        <script src=\"{{ asset('js/clickButton.js') }}\"></script>
        {{ include('like_slider_compare.html.twig') }}
    {% endblock %}
{% endblock %}
", "car/catalog/subModel/details_by_engine.html.twig", "/var/www/php/symfony/templates/car/catalog/subModel/details_by_engine.html.twig");
    }
}
