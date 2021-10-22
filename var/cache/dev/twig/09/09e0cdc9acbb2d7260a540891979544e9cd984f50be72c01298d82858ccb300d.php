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

/* car/catalog/engine/details.html.twig */
class __TwigTemplate_a076fd455ba6b5fb3e49fda45043d09acf351de650d6b3396abfa7f164117b64 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/engine/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/catalog/engine/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/catalog/engine/details.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SubModel details"), "html", null, true);
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
        echo "    <div class=\"container top\">
        <div class=\"col\">
            <div class=\"slider-inner\">
                ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 13, $this->source); })()), "images", [], "any", false, false, false, 13))) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 14, $this->source); })()), "images", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                echo "
                    <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 16))), "html", null, true);
                echo "\" alt=\"\">

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        } else {
            // line 20
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car_details/default.jpg"), "html", null, true);
            echo "\" alt=\"\">
                ";
        }
        // line 22
        echo "            </div>
            <div class=\"rating\" data-object=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\" data-engine=\"true\">
                <span class=\"mr-2\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Average rating"), "html", null, true);
        echo ":
                </span>
                ";
        // line 27
        if (array_key_exists("result", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                        <i class=\"
                ";
                // line 30
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 30, $this->source); })()), "rating", [], "array", false, false, false, 30))) {
                    // line 31
                    echo "                fas
                    ";
                } else {
                    // line 33
                    echo "                   far
                ";
                }
                // line 35
                echo "                fa-star\" data-value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></i>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                <span class=\"mr-2\">

                    (";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 39, $this->source); })()), "count", [], "array", false, false, false, 39), "html", null, true);
            echo ")
                </span>
                ";
        }
        // line 42
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 42, $this->source); })()), "userRated", [], "array", false, false, false, 42)) {
            // line 43
            echo "                    <a class=\"far fa-check-circle text-success\"></a>
                ";
        }
        // line 45
        echo "            </div>
            <h4 class=\"mt-5\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of cars which it was installed"), "html", null, true);
        echo "
            </h4>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 49, $this->source); })()), "subModels", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["subModel"]) {
            // line 50
            echo "                <div class=\"col\">
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sub_model_details", ["make" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
$context["subModel"], "model", [], "any", false, false, false, 52), "make", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "model" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 53
$context["subModel"], "model", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "subModel" => twig_get_attribute($this->env, $this->source,             // line 54
$context["subModel"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            // line 55
            echo "\">
                        ";
            // line 56
            echo twig_escape_filter($this->env, $context["subModel"], "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            <h4 class=\"mt-5\">
                ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of parts which frequently wanted"), "html", null, true);
        echo "
            </h4>

            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 65
            echo "                <div class=\"row border-bottom\">
                    <p>
                        <a href=\"https://google.com/search?q=";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "catalogNumber", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
                           target=\"_blank\" rel=\"noopener noreferrer\">
                            ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo " &nbsp;
                            ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part"], "catalogNumber", [], "any", false, false, false, 70), "html", null, true);
            echo "
                        </a>
                    </p>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            <h4 class=\"mt-5\">
                ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of faults which were detected"), "html", null, true);
        echo "
                <a  id=\"btnAdd\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fault_add", ["engine" => twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
            </h4>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 82, $this->source); })()), "faults", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["fault"]) {
            // line 83
            echo "                <div class=\"col\">
                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engine_fault", ["fault" => twig_get_attribute($this->env, $this->source, $context["fault"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">
                    ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fault"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fault'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            <div class=\"comments mt-5\">
                <h3 id=\"commentsCount\">
                    Comments (";
        // line 91
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 91, $this->source); })()), "comments", [], "any", false, false, false, 91)), "html", null, true);
        echo ")
                </h3>
                ";
        // line 93
        $this->loadTemplate("comment/form.html.twig", "car/catalog/engine/details.html.twig", 93)->display($context);
        // line 94
        echo "                <div class=\"comment pt-5 mb-5\" id=\"commentFields\">
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 95, $this->source); })()), "comments", [], "any", false, false, false, 95)));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 96
            echo "                        <p>
                            <b>
                                ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 98), "firstName", [], "any", false, false, false, 98), "html", null, true);
            echo "
                                ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 99), "lastName", [], "any", false, false, false, 99), "html", null, true);
            echo "
                            </b>
                            <small class=\"text-secondary ml-4\">
                                ";
            // line 102
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 102)), "html", null, true);
            echo "
                            </small>
                            <br>
                            ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 105), "html", null, true);
            echo "
                        </p>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                </div>
            </div>
        </div>
        ";
        // line 112
        $this->displayBlock('javasriptsblock', $context, $blocks);
        // line 118
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 113
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/clickButton.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/comment.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 116
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/catalog/engine/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 116,  408 => 115,  404 => 114,  399 => 113,  389 => 112,  377 => 118,  375 => 112,  370 => 109,  360 => 105,  354 => 102,  348 => 99,  344 => 98,  340 => 96,  336 => 95,  333 => 94,  331 => 93,  326 => 91,  322 => 89,  312 => 85,  308 => 84,  305 => 83,  301 => 82,  294 => 78,  290 => 77,  287 => 76,  275 => 70,  271 => 69,  264 => 67,  260 => 65,  256 => 64,  250 => 61,  247 => 60,  237 => 56,  234 => 55,  232 => 54,  231 => 53,  230 => 52,  229 => 51,  226 => 50,  222 => 49,  217 => 47,  213 => 45,  209 => 43,  206 => 42,  200 => 39,  196 => 37,  187 => 35,  183 => 33,  179 => 31,  177 => 30,  174 => 29,  169 => 28,  167 => 27,  162 => 25,  157 => 23,  154 => 22,  148 => 20,  145 => 19,  136 => 16,  133 => 15,  128 => 14,  126 => 13,  121 => 10,  111 => 9,  99 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'SubModel details'|trans }}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container top\">
        <div class=\"col\">
            <div class=\"slider-inner\">
                {% if engine.images is not empty %}
                {% for image in engine.images %}

                    <img src=\"{{ asset('images/car_details/'~ image.image) }}\" alt=\"\">

                {% endfor %}
                {% else %}
                    <img src=\"{{ asset('images/car_details/default.jpg') }}\" alt=\"\">
                {% endif %}
            </div>
            <div class=\"rating\" data-object=\"{{ engine.id }}\" data-engine=\"true\">
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
                <span class=\"mr-2\">

                    ({{ result['count'] }})
                </span>
                {% endif %}
                {% if result['userRated'] %}
                    <a class=\"far fa-check-circle text-success\"></a>
                {% endif %}
            </div>
            <h4 class=\"mt-5\">
                {{ 'List of cars which it was installed'|trans }}
            </h4>
            {% for subModel in engine.subModels %}
                <div class=\"col\">
                    <a href=\"{{ path('sub_model_details',{
                        'make': subModel.model.make.id,
                        'model':subModel.model.id,
                        'subModel':subModel.id
                    }) }}\">
                        {{ subModel }}
                    </a>
                </div>
            {% endfor %}
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
            <h4 class=\"mt-5\">
                {{ 'List of faults which were detected'|trans }}
                <a  id=\"btnAdd\" href=\"{{ path('fault_add', { 'engine': engine.id}) }}\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
            </h4>
            {% for fault in engine.faults %}
                <div class=\"col\">
                    <a href=\"{{ path('engine_fault',{ 'fault': fault.id}) }}\">
                    {{ fault.name }}
                    </a>
                </div>
            {% endfor %}
            <div class=\"comments mt-5\">
                <h3 id=\"commentsCount\">
                    Comments ({{ engine.comments|length }})
                </h3>
                {% include 'comment/form.html.twig' %}
                <div class=\"comment pt-5 mb-5\" id=\"commentFields\">
                    {% for comment in engine.comments|reverse %}
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
        {% block javasriptsblock %}
            <script src=\"{{ asset('js/rating.js') }}\"></script>
            <script src=\"{{ asset('js/clickButton.js') }}\"></script>
            <script src=\"{{ asset('js/comment.js') }}\"></script>
            {{ include('like_slider_compare.html.twig') }}
        {% endblock %}
    </div>

{% endblock %}
", "car/catalog/engine/details.html.twig", "/var/www/php/symfony/templates/car/catalog/engine/details.html.twig");
    }
}
