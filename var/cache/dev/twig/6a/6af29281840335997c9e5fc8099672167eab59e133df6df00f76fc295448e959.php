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

/* base.html.twig */
class __TwigTemplate_a1bedc12c152235772cfba7b866e5b86f124d02de3920d3eec8c8cea594f1b8b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'navigation' => [$this, 'block_navigation'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <link rel=\"shortcut icon\" href=\"#\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta charset=\"UTF-8\">
    <title>
        ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    </title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</head>

<body>
";
        // line 46
        $this->displayBlock('navigation', $context, $blocks);
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "
</body>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <!-- ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"/>
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
              integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <!-- ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo " -->
        <script src=\"https://kit.fontawesome.com/d29cbc6cc1.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
                integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
                crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dropdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
                integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
                crossorigin=\"anonymous\"></script>
        ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/language.js"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 42
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 47
        echo "    <div class=\"nav justify-content-between bg-dark\">
        <a class=\"h2 ml-4 mt-3 decoration-none-logo mr-3 col-sm-1-12\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">YourCar</a>
        <form id=\"search-box\" class=\"mt-2 ml-3 d-flex\">
            <input type=\"text\" id=\"input-search\" autocomplete=\"off\" placeholder=\"Search a cars...\">
            <button id=\"btn-search\">
                <i class=\"fas fa-search h5 text-white display-5\"></i>
            </button>
            <div class=\"bg-dark \" id=\"searchResult\"></div>
        </form>
        ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", [0 => "_route"], "method", false, false, false, 57) != "main")) {
                // line 58
                echo "                <div class=\"d-flex flex-row mt-3 main mr-3\">
                    <a class=\"mr-5 main-space\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favourite_cars_list");
                echo "\">
                        <i class=\"fas fa-heart h3 heart-color\">
                            <input id=\"like-count\" class=\"text-white h4 p-1 count-label font-weight-bold\" type=\"button\"
                                   value=\"";
                // line 62
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "favourites", [], "any", false, false, false, 62)), "html", null, true);
                echo "\">
                        </i>
                    </a>
                    <a class=\"scale-color\" href=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing_list");
                echo "\">
                        <i class=\"fas fa-balance-scale h3\">
                            <input id=\"compare-count\" class=\"text-white h4 p-1 count-label font-weight-bold\"
                                   type=\"button\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "scales", [], "any", false, false, false, 68)), "html", null, true);
                echo "\">
                        </i>
                    </a>
                </div>
            ";
            }
            // line 73
            echo "            <select class=\"bg-dark text-white ml-4 mr-4 m-3 display-5 h5\" id=\"language\">
                <option value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "preferLanguage", [], "any", false, false, false, 74), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "preferLanguage", [], "any", false, false, false, 74), "html", null, true);
            echo "</option>
            </select>
            <a id=\"account\" class=\"button-link text-light pointer ml-3\">
                ";
            // line 77
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 78
                echo "                    <i class=\"fa fa-user-cog\"></i>
                ";
            } else {
                // line 80
                echo "                    <i class=\"fa fa-user\"></i>
                ";
            }
            // line 82
            echo "            </a>
            <div id=\"dropdown\" class=\"dropdown-content bg-dark \">
                <div class=\"d-flex flex-column m-3 \">
                    ";
            // line 85
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 86
                echo "                        <a class=\"h6 mb-3 d-text\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">
                            ";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin panel"), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 90
            echo "                    <a class=\"h6 mb-3 d-text\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userPreferences");
            echo "\">
                        ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preferences"), "html", null, true);
            echo "
                    </a>
                    <a class=\"h6 d-text\" href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        ";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
            echo "
                    </a>
                </div>
            </div>
        ";
        } else {
            // line 99
            echo "            <a class=\"button-link text-light position-sticky justify-content-end ml-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                <i class=\"fa fa-sign-in\"></i>
            </a>
        ";
        }
        // line 103
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 106
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "session", [], "any", false, false, false, 106), "flashbag", [], "any", false, false, false, 106), "all", [], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 107
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 108
                echo "            <div class=\" alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
                <h5 class=\"ml-4\">";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                echo "</h5>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  393 => 114,  379 => 112,  370 => 109,  365 => 108,  360 => 107,  355 => 106,  345 => 105,  334 => 103,  326 => 99,  318 => 94,  314 => 93,  309 => 91,  304 => 90,  298 => 87,  293 => 86,  291 => 85,  286 => 82,  282 => 80,  278 => 78,  276 => 77,  268 => 74,  265 => 73,  257 => 68,  251 => 65,  245 => 62,  239 => 59,  236 => 58,  233 => 57,  231 => 56,  220 => 48,  217 => 47,  207 => 46,  197 => 42,  191 => 40,  189 => 39,  182 => 35,  178 => 34,  167 => 27,  157 => 26,  145 => 24,  141 => 23,  128 => 14,  118 => 13,  105 => 10,  95 => 9,  80 => 115,  78 => 114,  76 => 105,  74 => 46,  69 => 43,  66 => 26,  64 => 13,  61 => 12,  59 => 9,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <link rel=\"shortcut icon\" href=\"#\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta charset=\"UTF-8\">
    <title>
        {% block title %}
            {{ 'Welcome'|trans }}
        {% endblock %}
    </title>
    {% block stylesheets %}
        <!-- {{ encore_entry_link_tags('app') }} -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"/>
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
              integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    {% endblock %}
    {% block javascripts %}
        <!-- {{ encore_entry_script_tags('app') }} -->
        <script src=\"https://kit.fontawesome.com/d29cbc6cc1.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
                integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
                crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/dropdown.js') }}\"></script>
        <script src=\"{{ asset('js/search.js') }}\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
                integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
                crossorigin=\"anonymous\"></script>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <script src=\"{{ asset('js/language.js') }}\"></script>
        {% endif %}
    {% endblock %}
</head>

<body>
{% block navigation %}
    <div class=\"nav justify-content-between bg-dark\">
        <a class=\"h2 ml-4 mt-3 decoration-none-logo mr-3 col-sm-1-12\" href=\"{{ path('main') }}\">YourCar</a>
        <form id=\"search-box\" class=\"mt-2 ml-3 d-flex\">
            <input type=\"text\" id=\"input-search\" autocomplete=\"off\" placeholder=\"Search a cars...\">
            <button id=\"btn-search\">
                <i class=\"fas fa-search h5 text-white display-5\"></i>
            </button>
            <div class=\"bg-dark \" id=\"searchResult\"></div>
        </form>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% if app.request.attributes.get('_route') != 'main' %}
                <div class=\"d-flex flex-row mt-3 main mr-3\">
                    <a class=\"mr-5 main-space\" href=\"{{ path('favourite_cars_list') }}\">
                        <i class=\"fas fa-heart h3 heart-color\">
                            <input id=\"like-count\" class=\"text-white h4 p-1 count-label font-weight-bold\" type=\"button\"
                                   value=\"{{ app.user.favourites|length }}\">
                        </i>
                    </a>
                    <a class=\"scale-color\" href=\"{{ path('comparing_list') }}\">
                        <i class=\"fas fa-balance-scale h3\">
                            <input id=\"compare-count\" class=\"text-white h4 p-1 count-label font-weight-bold\"
                                   type=\"button\" value=\"{{ app.user.scales|length }}\">
                        </i>
                    </a>
                </div>
            {% endif %}
            <select class=\"bg-dark text-white ml-4 mr-4 m-3 display-5 h5\" id=\"language\">
                <option value=\"{{ app.user.preferLanguage }}\">{{ app.user.preferLanguage }}</option>
            </select>
            <a id=\"account\" class=\"button-link text-light pointer ml-3\">
                {% if is_granted('ROLE_ADMIN') %}
                    <i class=\"fa fa-user-cog\"></i>
                {% else %}
                    <i class=\"fa fa-user\"></i>
                {% endif %}
            </a>
            <div id=\"dropdown\" class=\"dropdown-content bg-dark \">
                <div class=\"d-flex flex-column m-3 \">
                    {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"h6 mb-3 d-text\" href=\"{{ path('admin') }}\">
                            {{ 'Admin panel'|trans }}
                        </a>
                    {% endif %}
                    <a class=\"h6 mb-3 d-text\" href=\"{{ path('userPreferences') }}\">
                        {{ 'Preferences'|trans }}
                    </a>
                    <a class=\"h6 d-text\" href=\"{{ path('app_logout') }}\">
                        {{ 'Logout'|trans }}
                    </a>
                </div>
            </div>
        {% else %}
            <a class=\"button-link text-light position-sticky justify-content-end ml-3\" href=\"{{ path('app_login') }}\">
                <i class=\"fa fa-sign-in\"></i>
            </a>
        {% endif %}
    </div>
{% endblock %}
{% block messages %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\" alert-{{ type }}\" role=\"alert\">
                <h5 class=\"ml-4\">{{ message|trans }}</h5>
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}
{% block body %}{% endblock %}

</body>


</html>
", "base.html.twig", "/var/www/php/symfony/templates/base.html.twig");
    }
}
