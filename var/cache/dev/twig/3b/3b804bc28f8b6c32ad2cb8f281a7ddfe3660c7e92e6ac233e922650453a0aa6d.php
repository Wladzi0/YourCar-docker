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
class __TwigTemplate_559a4ec65d21eee1cb9bfcad2d838fd955c267b81787c943788c55d7901d3db3 extends \Twig\Template
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
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_list", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "
                </a>
                ->
                <a class=\"\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_details", ["make" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "
                </a>
                ->
                (";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 23, $this->source); })()), "bodyPlatform", [], "any", false, false, false, 23), "html", null, true);
        echo ")
            </h2>
            <div class=\"slider-inner\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 26, $this->source); })()), "images", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 27
            echo "
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" alt=\"\">

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
            ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" id=\"js-compare\"
                       class=\"text-white mb-auto p-2 bd-highlight\">

                        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)], "method", false, false, false, 37))) {
                // line 38
                echo "                            <i class=\"fas fa-balance-scale-right \"></i>
                        ";
            } else {
                // line 40
                echo "                            <i class=\"fas fa-balance-scale\"></i>
                        ";
            }
            // line 42
            echo "                    </a>

                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 44, $this->source); })()), 0, [], "array", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"
                       id=\"js-favourite\" class=\" like btn-link \">

                        ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 47, $this->source); })()), 0, [], "array", false, false, false, 47), "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)], "method", false, false, false, 47))) {
                // line 48
                echo "                            <i class=\" fas fa-heart\"></i>
                        ";
            } else {
                // line 50
                echo "                            <i class=\"far fa-heart\"></i>
                        ";
            }
            // line 52
            echo "                    </a>
                </div>
            ";
        } else {
            // line 55
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "set", [0 => "url", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "uri", [], "any", false, false, false, 55)], "method", false, false, false, 55), "html", null, true);
            echo "
                <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                    For add to favourite or to comparing you need to login
                </a>
            ";
        }
        // line 60
        echo "
            <div class=\"rating\" data-object=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 61, $this->source); })()), 0, [], "array", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
                <span class=\"mr-2\">
                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Average rating"), "html", null, true);
        echo ":
                </span>
                ";
        // line 65
        if (array_key_exists("result", $context)) {
            // line 66
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 67
                echo "                        <i class=\"
                ";
                // line 68
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 68, $this->source); })()), "rating", [], "array", false, false, false, 68))) {
                    // line 69
                    echo "                fas
                    ";
                } else {
                    // line 71
                    echo "                   far
                ";
                }
                // line 73
                echo "                fa-star\" data-value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></i>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    <span id=\"count\" class=\"ml-2\">
                        (";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 76, $this->source); })()), "count", [], "array", false, false, false, 76), "html", null, true);
            echo ")
                    </span>
                ";
        }
        // line 79
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 79, $this->source); })()), "userRated", [], "array", false, false, false, 79)) {
            // line 80
            echo "                    <span class=\"far fa-check-circle text-success \"></span>
                ";
        }
        // line 82
        echo "            </div>
            <h4 class=\"mt-5\">
                ";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of parts which frequently wanted"), "html", null, true);
        echo "
            </h4>

            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 88
            echo "                <div class=\"row border-bottom\">

                    <p>
                        <a href=\"https://google.com/search?q=";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "catalogNumber", [], "any", false, false, false, 91), "html", null, true);
            echo "\"
                           target=\"_blank\" rel=\"noopener noreferrer\">
                            ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo " &nbsp;
                            ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "catalogNumber", [], "any", false, false, false, 94), "html", null, true);
            echo "
                        </a>
                    </p>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            <div class=\"col\">
                <h4 class=\"mt-5\">
                    ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Technical data of engine "), "html", null, true);
        echo "
                </h4>
                <p>
                    <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engine_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 105, $this->source); })()), 0, [], "array", false, false, false, 105), "engine", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
        echo "\">
                        ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Engine"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 106, $this->source); })()), 0, [], "array", false, false, false, 106), "engine", [], "any", false, false, false, 106), "html", null, true);
        echo "
                        ( <i class=\"fas fa-exclamation-triangle\"></i>
                        ";
        // line 108
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 108, $this->source); })()), 0, [], "array", false, false, false, 108), "engine", [], "any", false, false, false, 108), "faults", [], "any", false, false, false, 108)), "html", null, true);
        echo ")
                    </a>
                </p>
                <p>
                    ";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 112, $this->source); })()), 0, [], "array", false, false, false, 112), "engine", [], "any", false, false, false, 112), "fuel", [], "any", false, false, false, 112), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Power"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 115, $this->source); })()), 0, [], "array", false, false, false, 115), "power", [], "any", false, false, false, 115), "html", null, true);
        echo " (HP)
                </p>
                <p>
                    ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Torque"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 118, $this->source); })()), 0, [], "array", false, false, false, 118), "torque", [], "any", false, false, false, 118), "html", null, true);
        echo " (Nm)
                </p>
                <p>
                    ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Power increase device"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 121, $this->source); })()), 0, [], "array", false, false, false, 121), "engine", [], "any", false, false, false, 121), "powerIncrease", [], "any", false, false, false, 121), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max. speed"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 124, $this->source); })()), 0, [], "array", false, false, false, 124), "speed", [], "any", false, false, false, 124), "html", null, true);
        echo " (km/h)
                </p>
                <p>
                    ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start year of installing"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 127, $this->source); })()), 0, [], "array", false, false, false, 127), "yearStart", [], "any", false, false, false, 127), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finish year of installing"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 130, $this->source); })()), 0, [], "array", false, false, false, 130), "yearFinish", [], "any", false, false, false, 130), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ecology standart"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 133, $this->source); })()), 0, [], "array", false, false, false, 133), "eco", [], "any", false, false, false, 133), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transmission"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 136, $this->source); })()), 0, [], "array", false, false, false, 136), "transmission", [], "any", false, false, false, 136), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drive"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 139, $this->source); })()), 0, [], "array", false, false, false, 139), "drive", [], "any", false, false, false, 139), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tank"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 142, $this->source); })()), 0, [], "array", false, false, false, 142), "subModel", [], "any", false, false, false, 142), "tank", [], "any", false, false, false, 142), "html", null, true);
        echo " (l)
                </p>
                <p>
                    ";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 145, $this->source); })()), 0, [], "array", false, false, false, 145), "fuelConsumption", [], "any", false, false, false, 145), "html", null, true);
        echo "
                    (l/100km)
                </p>
                <p>
                    ";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion mixed"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 149, $this->source); })()), 0, [], "array", false, false, false, 149), "fuelConsumptionMixed", [], "any", false, false, false, 149), "html", null, true);
        echo "
                    (l/100km)
                </p>
                <p>
                    ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion extra"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carDetails"]) || array_key_exists("carDetails", $context) ? $context["carDetails"] : (function () { throw new RuntimeError('Variable "carDetails" does not exist.', 153, $this->source); })()), 0, [], "array", false, false, false, 153), "fuelConsumptionExtra", [], "any", false, false, false, 153), "html", null, true);
        echo "
                    (l/100km)
                </p>
            </div>
            <div class=\"col\">
                <h4 class=\"mt-5\">
                    ";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parameters"), "html", null, true);
        echo "
                </h4>
                <p>
                    ";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start year of production"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 162, $this->source); })()), "yearStart", [], "any", false, false, false, 162), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finish year of production"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 165, $this->source); })()), "yearFinish", [], "any", false, false, false, 165), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Body type "), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 168, $this->source); })()), "bodyType", [], "any", false, false, false, 168), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Length "), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 171, $this->source); })()), "length", [], "any", false, false, false, 171), "html", null, true);
        echo "
                </p>
                <p>
                    ";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Width "), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 174, $this->source); })()), "width", [], "any", false, false, false, 174), "html", null, true);
        echo "
                </p>
            </div>

            <h4 class=\"mt-5\">
                ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of transmissions which were installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 181
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 181, $this->source); })()), "faults", [], "any", false, false, false, 181))) {
            // line 182
            echo "            <h4 class=\"mt-5\">
                ";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of faults"), "html", null, true);
            echo "
                ";
            // line 184
            $context["faultCount"] = "";
            // line 185
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 185, $this->source); })()), "faults", [], "any", false, false, false, 185));
            foreach ($context['_seq'] as $context["_key"] => $context["fault"]) {
                // line 186
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["fault"], "published", [], "any", false, false, false, 186) == true)) {
                    // line 187
                    echo "                ";
                    $context["faultCount"] =  +1;
                    // line 188
                    echo "                ";
                }
                // line 189
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fault'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["faultCount"]) || array_key_exists("faultCount", $context) ? $context["faultCount"] : (function () { throw new RuntimeError('Variable "faultCount" does not exist.', 190, $this->source); })())), "html", null, true);
            echo ")
                <a id=\"btnAdd\" href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fault_add", ["subModel" => twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
            echo "\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
            </h4>
            <div class=\"\">

                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 197, $this->source); })()), "faults", [], "any", false, false, false, 197));
            foreach ($context['_seq'] as $context["_key"] => $context["fault"]) {
                // line 198
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["fault"], "published", [], "any", false, false, false, 198) == true)) {
                    // line 199
                    echo "
                    <div class=\"col\">
                        <a href=\"";
                    // line 201
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subModel_fault", ["make" => twig_get_attribute($this->env, $this->source, (isset($context["make"]) || array_key_exists("make", $context) ? $context["make"] : (function () { throw new RuntimeError('Variable "make" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201), "model" => twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201), "subModel" => twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201), "fault" => twig_get_attribute($this->env, $this->source, $context["fault"], "id", [], "any", false, false, false, 201)]), "html", null, true);
                    echo "\">
                            ";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fault"], "name", [], "any", false, false, false, 202), "html", null, true);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 206
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fault'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                ";
        } else {
            // line 208
            echo "                    <h4 class=\"mt-5\">
                        ";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of faults"), "html", null, true);
            echo " (0)

                    </h4>
                ";
        }
        // line 213
        echo "
            </div>
            ";
        // line 215
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 215, $this->source); })()), "rims", [], "any", false, false, false, 215))) {
            // line 216
            echo "            <h4 class=\"mt-5\">
                ";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of rims which were installed"), "html", null, true);
            echo "
                (";
            // line 218
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 218, $this->source); })()), "rims", [], "any", false, false, false, 218)), "html", null, true);
            echo ")
            </h4>
            <div class=\"\">
                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subModel"]) || array_key_exists("subModel", $context) ? $context["subModel"] : (function () { throw new RuntimeError('Variable "subModel" does not exist.', 221, $this->source); })()), "rims", [], "any", false, false, false, 221));
            foreach ($context['_seq'] as $context["_key"] => $context["rim"]) {
                // line 222
                echo "                    <div class=\"col\">
                        ";
                // line 223
                echo twig_escape_filter($this->env, $context["rim"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rim'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                ";
        } else {
            // line 227
            echo "                    <h4 class=\"mt-5\">
                        ";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of rims to this model"), "html", null, true);
            echo " (0)
                    </h4>
                ";
        }
        // line 231
        echo "            </div>
        </div>
    </div>

    ";
        // line 235
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

        // line 236
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/clickButton.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 238
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
        return array (  696 => 238,  692 => 237,  687 => 236,  668 => 235,  662 => 231,  656 => 228,  653 => 227,  650 => 226,  641 => 223,  638 => 222,  634 => 221,  628 => 218,  624 => 217,  621 => 216,  619 => 215,  615 => 213,  608 => 209,  605 => 208,  602 => 207,  596 => 206,  589 => 202,  585 => 201,  581 => 199,  578 => 198,  574 => 197,  565 => 191,  560 => 190,  554 => 189,  551 => 188,  548 => 187,  545 => 186,  540 => 185,  538 => 184,  534 => 183,  531 => 182,  529 => 181,  524 => 179,  514 => 174,  506 => 171,  498 => 168,  490 => 165,  482 => 162,  476 => 159,  465 => 153,  456 => 149,  447 => 145,  439 => 142,  431 => 139,  423 => 136,  415 => 133,  407 => 130,  399 => 127,  391 => 124,  383 => 121,  375 => 118,  367 => 115,  359 => 112,  352 => 108,  345 => 106,  341 => 105,  335 => 102,  331 => 100,  319 => 94,  315 => 93,  308 => 91,  303 => 88,  299 => 87,  293 => 84,  289 => 82,  285 => 80,  282 => 79,  276 => 76,  273 => 75,  264 => 73,  260 => 71,  256 => 69,  254 => 68,  251 => 67,  246 => 66,  244 => 65,  239 => 63,  234 => 61,  231 => 60,  224 => 56,  219 => 55,  214 => 52,  210 => 50,  206 => 48,  204 => 47,  198 => 44,  194 => 42,  190 => 40,  186 => 38,  184 => 37,  178 => 34,  175 => 33,  173 => 32,  170 => 31,  161 => 28,  158 => 27,  154 => 26,  148 => 23,  142 => 20,  138 => 19,  137 => 18,  131 => 15,  127 => 14,  121 => 10,  111 => 9,  99 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
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

                    <img src=\"{{ asset('images/car_details/'~ image.image) }}\" alt=\"\">

                {% endfor %}
            </div>
            {% if app.user %}
                <div class=\"d-flex align-items-start flex-column bd-highlight mb-3\">
                    <a href=\"{{ path('comparing',{ 'id': carDetails[0].id }) }}\" id=\"js-compare\"
                       class=\"text-white mb-auto p-2 bd-highlight\">

                        {% if app.user and carDetails[0].isScaledByUser(app.user) %}
                            <i class=\"fas fa-balance-scale-right \"></i>
                        {% else %}
                            <i class=\"fas fa-balance-scale\"></i>
                        {% endif %}
                    </a>

                    <a href=\"{{ path('add_favourite',{'id': carDetails[0].id }) }}\"
                       id=\"js-favourite\" class=\" like btn-link \">

                        {% if app.user and carDetails[0].isFavouredByUser(app.user) %}
                            <i class=\" fas fa-heart\"></i>
                        {% else %}
                            <i class=\"far fa-heart\"></i>
                        {% endif %}
                    </a>
                </div>
            {% else %}
                {{ app.session.set('url',app.request.uri) }}
                <a href=\"{{ path('app_login') }}\">
                    For add to favourite or to comparing you need to login
                </a>
            {% endif %}

            <div class=\"rating\" data-object=\"{{ carDetails[0].id }}\">
                <span class=\"mr-2\">
                    {{ 'Average rating'|trans }}:
                </span>
                {% if result is defined %}
                    {% for i in 1..5 %}
                        <i class=\"
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
                    {{ 'Technical data of engine '|trans }}
                </h4>
                <p>
                    <a href=\"{{ path('engine_details',{'id': carDetails[0].engine.id}) }}\">
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
                    {{ 'Fuel consumprion'|trans }}: {{ carDetails[0].fuelConsumption }}
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
                    {{ 'Body type '|trans }}: {{ subModel.bodyType }}
                </p>
                <p>
                    {{ 'Length '|trans }}: {{ subModel.length }}
                </p>
                <p>
                    {{ 'Width '|trans }}: {{ subModel.width }}
                </p>
            </div>

            <h4 class=\"mt-5\">
                {{ 'List of transmissions which were installed'|trans }}
            </h4>
            {% if subModel.faults is not empty %}
            <h4 class=\"mt-5\">
                {{ 'List of faults'|trans }}
                {% set faultCount = \"\" %}
                {% for fault in subModel.faults %}
                {% if fault.published == true %}
                {% set faultCount =+ 1 %}
                {% endif %}
                {% endfor %}
                ({{ faultCount|length }})
                <a id=\"btnAdd\" href=\"{{ path('fault_add', { 'subModel': subModel.id}) }}\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
            </h4>
            <div class=\"\">

                {% for fault in subModel.faults %}
                    {% if fault.published == true %}

                    <div class=\"col\">
                        <a href=\"{{ path('subModel_fault', {'make': make.id, 'model': model.id, 'subModel': subModel.id, 'fault':fault.id}) }}\">
                            {{ fault.name }}
                        </a>
                    </div>
                {% endif %}
                {% endfor %}
                {% else %}
                    <h4 class=\"mt-5\">
                        {{ 'List of faults'|trans }} (0)

                    </h4>
                {% endif %}

            </div>
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
