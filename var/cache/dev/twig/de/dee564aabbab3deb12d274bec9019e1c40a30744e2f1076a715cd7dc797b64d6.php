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

/* comparing/list.html.twig */
class __TwigTemplate_063dad90bec72585777853ef4c4cb1667f1521da0808fbe19d0d52d09c21e1a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comparing/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comparing/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comparing/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comparing list"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        ";
            echo twig_include($this->env, $context, "comparing/filter_form.html.twig");
            echo "
        <div id=\"container\">
            <div class=\"row ml-5 mt-3 \">
                <div class=\"mr-2\" style=\"margin-top: 370px;\" id=\"listParam\">
                    <h5 style=\"background-color: #10be7a\" class=\"p-3\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Technical data of engine "), "html", null, true);
            echo "
                    </h5>
                    <p class=\"mt-3 border-bottom\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Engine"), "html", null, true);
            echo "
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel"), "html", null, true);
            echo "
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Power"), "html", null, true);
            echo " (HP)
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Torque"), "html", null, true);
            echo " (Nm)
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ecology standart"), "html", null, true);
            echo "
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transmission"), "html", null, true);
            echo "
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drive"), "html", null, true);
            echo "
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion"), "html", null, true);
            echo " (l/100km)
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion mixed"), "html", null, true);
            echo " (l/100km)
                    </p>
                    <p class=\"border-bottom\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fuel consumprion extra"), "html", null, true);
            echo " (l/100km)
                    </p>
                    <div class=\"hideContent content\">
                        <p class=\"border-bottom\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tuning"), "html", null, true);
            echo "
                        </p>
                        <p class=\"border-bottom\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Power increase device"), "html", null, true);
            echo "
                        </p>
                        <p class=\"border-bottom\">
                            ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max. speed"), "html", null, true);
            echo " (km/h)
                        </p>
                        <p class=\"border-bottom\">
                            ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start year of installing"), "html", null, true);
            echo "
                        </p>
                        <p class=\"border-bottom\">
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finish year of installing"), "html", null, true);
            echo "
                        </p>

                        <p class=\"border-bottom\">
                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tank"), "html", null, true);
            echo " (l)
                        </p>

                        <h5 class=\"mt-1\">
                            ";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parameters"), "html", null, true);
            echo "
                        </h5>
                        <div>
                            <p class=\"border-bottom\">
                                ";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start year of production"), "html", null, true);
            echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finish year of production"), "html", null, true);
            echo "
                            </p>
                        </div>
                        <p class=\"border-bottom\">
                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Body type "), "html", null, true);
            echo "
                        </p>
                        <p class=\"border-bottom\">
                            ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Length "), "html", null, true);
            echo "
                        </p>
                        <p class=\"border-bottom\">
                            ";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Width "), "html", null, true);
            echo "
                        </p>
                    </div>
                </div>
                ";
            // line 88
            $context["list"] = [];
            // line 89
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 89, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                // line 90
                echo "
                    ";
                // line 91
                $context["list"] = twig_array_merge((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 91, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]);
                // line 92
                echo "
                    <div class=\"border d-flex flex-column mb-5 \" style=\"overflow: hidden\" id=\"";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
                echo "\">
                        <a style=\"text-decoration: none; color: #10be7a\" href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_by_engine", ["engine" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 96
$context["car"], "carDetails", [], "any", false, false, false, 96), "engine", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "make" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 97
$context["car"], "carDetails", [], "any", false, false, false, 97), "subModel", [], "any", false, false, false, 97), "model", [], "any", false, false, false, 97), "make", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "model" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 98
$context["car"], "carDetails", [], "any", false, false, false, 98), "subModel", [], "any", false, false, false, 98), "model", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "subModel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 99
$context["car"], "carDetails", [], "any", false, false, false, 99), "subModel", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99)]), "html", null, true);
                // line 101
                echo "\" >

                            <img style=\"\"
                                 src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/car_details/" . twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 104), "subModel", [], "any", false, false, false, 104), "images", [], "any", false, false, false, 104)))), "html", null, true);
                echo "\"
                                 height=\"300\" width=\"300px;\" alt=\"\" >
                            <h5 style=\"height: 60px; width: 250px; \" class=\"ml-4 mt-3 \">
                                ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 107), "subModel", [], "any", false, false, false, 107), "model", [], "any", false, false, false, 107), "make", [], "any", false, false, false, 107), "html", null, true);
                echo "
                                ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 108), "subModel", [], "any", false, false, false, 108), "model", [], "any", false, false, false, 108), "html", null, true);
                echo "
                                (";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 109), "subModel", [], "any", false, false, false, 109), "bodyPlatform", [], "any", false, false, false, 109), "html", null, true);
                echo ")
                            </h5>
                        </a>
                        <div class=\"d-flex flex-row justify-content-between ml-2 mr-3 align-items-center\">
                            <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comparing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\" id=\"js-compare\"
                               class=\"mb-auto p-2 bd-highlight\" data-car=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 114), "html", null, true);
                echo "\">
                                ";
                // line 115
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 115), "isScaledByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115)], "method", false, false, false, 115))) {
                    // line 116
                    echo "                                    <i class=\"fas fa-balance-scale-right h5 scale\"></i>
                                ";
                } else {
                    // line 118
                    echo "                                    <i class=\"fas fa-balance-scale h5 scale\"></i>
                                ";
                }
                // line 120
                echo "                            </a>

                            <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favourite", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122)]), "html", null, true);
                echo "\"
                               id=\"js-favourite\" class=\" like btn-link \">
                                ";
                // line 124
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 124), "isFavouredByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124)], "method", false, false, false, 124))) {
                    // line 125
                    echo "                                    <i class=\" fas fa-heart h5 heart\"></i>
                                ";
                } else {
                    // line 127
                    echo "                                    <i class=\"far fa-heart h5 heart\"></i>
                                ";
                }
                // line 129
                echo "                            </a>
                        </div>
                        <div>
                            <p class=\"mt-3 border-bottom ml-2\">
                                ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 133), "engine", [], "any", false, false, false, 133), "html", null, true);
                echo "
                            </p>
                            <p class=\" border-bottom ml-2\">
                                ";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 136), "engine", [], "any", false, false, false, 136), "fuel", [], "any", false, false, false, 136)), "html", null, true);
                echo "
                            </p>
                            <p name=\"power\" class=\" border-bottom ml-2\">
                                ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 139), "power", [], "any", false, false, false, 139), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom ml-2\">
                                ";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 142), "torque", [], "any", false, false, false, 142), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom ml-2\">
                                ";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 145), "eco", [], "any", false, false, false, 145), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom ml-2 \">
                                ";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 148), "transmission", [], "any", false, false, false, 148), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom ml-2\">
                                ";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 151), "drive", [], "any", false, false, false, 151), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom ml-2\" name=\"fuelConsumption\">
                                ";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 154), "fuelConsumption", [], "any", false, false, false, 154), "html", null, true);
                echo "

                            </p>
                            <p class=\"border-bottom ml-2\">
                                ";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 158), "fuelConsumptionMixed", [], "any", false, false, false, 158), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom ml-2\">
                                ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 161), "fuelConsumptionExtra", [], "any", false, false, false, 161), "html", null, true);
                echo "
                            </p>
                        </div>

                        <div class=\"hideContent content \">
                            <p name=\"tuning\" class=\"border-bottom\">
                                ";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 167), "tuning", [], "any", false, false, false, 167), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 170), "engine", [], "any", false, false, false, 170), "powerIncrease", [], "any", false, false, false, 170), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 173), "speed", [], "any", false, false, false, 173), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 176), "yearStart", [], "any", false, false, false, 176), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 179), "yearFinish", [], "any", false, false, false, 179), "html", null, true);
                echo "
                            </p>

                            <p class=\"border-bottom\">
                                ";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 183), "subModel", [], "any", false, false, false, 183), "tank", [], "any", false, false, false, 183), "html", null, true);
                echo "
                            </p>

                            <div name=\"age\" class=\"mt-5\">
                                <p class=\"border-bottom\">
                                    ";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 188), "subModel", [], "any", false, false, false, 188), "yearStart", [], "any", false, false, false, 188), "html", null, true);
                echo "
                                </p>
                                <p class=\"border-bottom\">
                                    ";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 191), "subModel", [], "any", false, false, false, 191), "yearFinish", [], "any", false, false, false, 191), "html", null, true);
                echo "
                                </p>
                            </div>

                            <p class=\"border-bottom\">
                                ";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 196), "subModel", [], "any", false, false, false, 196), "bodyType", [], "any", false, false, false, 196), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 199), "subModel", [], "any", false, false, false, 199), "length", [], "any", false, false, false, 199), "html", null, true);
                echo "
                            </p>
                            <p class=\"border-bottom\">
                                ";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "carDetails", [], "any", false, false, false, 202), "subModel", [], "any", false, false, false, 202), "width", [], "any", false, false, false, 202), "html", null, true);
                echo "
                            </p>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "session", [], "any", false, false, false, 207), "set", [0 => "carsList", 1 => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 207, $this->source); })())], "method", false, false, false, 207), "html", null, true);
            echo "

            </div>
            <i id=\"more\" class=\"fas fa-chevron-circle-down btn d-flex justify-content-center mb-5\">
            </i>
        </div>
    ";
        } else {
            // line 214
            echo "        <h2 class=\"d-flex justify-content-center align-items-center flex-column\"
            style=\"height: 600px;\">
            ";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You forgot to add cars to comparing list"), "html", null, true);
            echo "
        </h2>
    ";
        }
        // line 219
        echo "
    ";
        // line 220
        $this->displayBlock('javasriptsblock', $context, $blocks);
        // line 225
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_javasriptsblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javasriptsblock"));

        // line 221
        echo "        ";
        echo twig_include($this->env, $context, "like_slider_compare.html.twig");
        echo "
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/filter1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/more.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comparing/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 223,  558 => 222,  553 => 221,  543 => 220,  532 => 225,  530 => 220,  527 => 219,  521 => 216,  517 => 214,  506 => 207,  487 => 202,  481 => 199,  475 => 196,  467 => 191,  461 => 188,  453 => 183,  446 => 179,  440 => 176,  434 => 173,  428 => 170,  422 => 167,  413 => 161,  407 => 158,  400 => 154,  394 => 151,  388 => 148,  382 => 145,  376 => 142,  370 => 139,  364 => 136,  358 => 133,  352 => 129,  348 => 127,  344 => 125,  342 => 124,  337 => 122,  333 => 120,  329 => 118,  325 => 116,  323 => 115,  319 => 114,  315 => 113,  308 => 109,  304 => 108,  300 => 107,  294 => 104,  289 => 101,  287 => 99,  286 => 98,  285 => 97,  284 => 96,  283 => 94,  277 => 93,  274 => 92,  272 => 91,  269 => 90,  251 => 89,  249 => 88,  242 => 84,  236 => 81,  230 => 78,  223 => 74,  217 => 71,  210 => 67,  203 => 63,  196 => 59,  190 => 56,  184 => 53,  178 => 50,  172 => 47,  165 => 43,  159 => 40,  153 => 37,  147 => 34,  141 => 31,  135 => 28,  129 => 25,  123 => 22,  117 => 19,  111 => 16,  105 => 13,  96 => 8,  93 => 7,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Comparing list'|trans }}
{% endblock %}

{% block body %}
    {% if cars %}
        {{ include('comparing/filter_form.html.twig') }}
        <div id=\"container\">
            <div class=\"row ml-5 mt-3 \">
                <div class=\"mr-2\" style=\"margin-top: 370px;\" id=\"listParam\">
                    <h5 style=\"background-color: #10be7a\" class=\"p-3\">
                        {{ 'Technical data of engine '|trans }}
                    </h5>
                    <p class=\"mt-3 border-bottom\">
                        {{ 'Engine'|trans }}
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Fuel'|trans }}
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Power'|trans }} (HP)
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Torque'|trans }} (Nm)
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Ecology standart'|trans }}
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Transmission'|trans }}
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Drive'|trans }}
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Fuel consumprion'|trans }} (l/100km)
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Fuel consumprion mixed'|trans }} (l/100km)
                    </p>
                    <p class=\"border-bottom\">
                        {{ 'Fuel consumprion extra'|trans }} (l/100km)
                    </p>
                    <div class=\"hideContent content\">
                        <p class=\"border-bottom\">
                            {{ 'Tuning'|trans }}
                        </p>
                        <p class=\"border-bottom\">
                            {{ 'Power increase device'|trans }}
                        </p>
                        <p class=\"border-bottom\">
                            {{ 'Max. speed'|trans }} (km/h)
                        </p>
                        <p class=\"border-bottom\">
                            {{ 'Start year of installing'|trans }}
                        </p>
                        <p class=\"border-bottom\">
                            {{ 'Finish year of installing'|trans }}
                        </p>

                        <p class=\"border-bottom\">
                            {{ 'Tank'|trans }} (l)
                        </p>

                        <h5 class=\"mt-1\">
                            {{ 'Parameters'|trans }}
                        </h5>
                        <div>
                            <p class=\"border-bottom\">
                                {{ 'Start year of production'|trans }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ 'Finish year of production'|trans }}
                            </p>
                        </div>
                        <p class=\"border-bottom\">
                            {{ 'Body type '|trans }}
                        </p>
                        <p class=\"border-bottom\">
                            {{ 'Length '|trans }}
                        </p>
                        <p class=\"border-bottom\">
                            {{ 'Width '|trans }}
                        </p>
                    </div>
                </div>
                {% set list = [] %}
                {% for car in cars %}

                    {% set list = list|merge([car.carDetails.id]) %}

                    <div class=\"border d-flex flex-column mb-5 \" style=\"overflow: hidden\" id=\"{{ loop.index }}\" name=\"{{ car.carDetails.id }}\">
                        <a style=\"text-decoration: none; color: #10be7a\" href=\"{{ path('details_by_engine',
                            {
                                'engine': car.carDetails.engine.id,
                                'make': car.carDetails.subModel.model.make.id,
                                'model': car.carDetails.subModel.model.id,
                                'subModel': car.carDetails.subModel.id
                            }
                        ) }}\" >

                            <img style=\"\"
                                 src=\"{{ asset('images/car_details/'~ car.carDetails.subModel.images|first) }}\"
                                 height=\"300\" width=\"300px;\" alt=\"\" >
                            <h5 style=\"height: 60px; width: 250px; \" class=\"ml-4 mt-3 \">
                                {{ car.carDetails.subModel.model.make }}
                                {{ car.carDetails.subModel.model }}
                                ({{ car.carDetails.subModel.bodyPlatform }})
                            </h5>
                        </a>
                        <div class=\"d-flex flex-row justify-content-between ml-2 mr-3 align-items-center\">
                            <a href=\"{{ path('comparing',{ 'id': car.carDetails.id }) }}\" id=\"js-compare\"
                               class=\"mb-auto p-2 bd-highlight\" data-car=\"{{ loop.index }}\">
                                {% if app.user and car.carDetails.isScaledByUser(app.user) %}
                                    <i class=\"fas fa-balance-scale-right h5 scale\"></i>
                                {% else %}
                                    <i class=\"fas fa-balance-scale h5 scale\"></i>
                                {% endif %}
                            </a>

                            <a href=\"{{ path('add_favourite',{'id':car.carDetails.id }) }}\"
                               id=\"js-favourite\" class=\" like btn-link \">
                                {% if app.user and car.carDetails.isFavouredByUser(app.user) %}
                                    <i class=\" fas fa-heart h5 heart\"></i>
                                {% else %}
                                    <i class=\"far fa-heart h5 heart\"></i>
                                {% endif %}
                            </a>
                        </div>
                        <div>
                            <p class=\"mt-3 border-bottom ml-2\">
                                {{ car.carDetails.engine }}
                            </p>
                            <p class=\" border-bottom ml-2\">
                                {{ car.carDetails.engine.fuel|trans }}
                            </p>
                            <p name=\"power\" class=\" border-bottom ml-2\">
                                {{ car.carDetails.power }}
                            </p>
                            <p class=\"border-bottom ml-2\">
                                {{ car.carDetails.torque }}
                            </p>
                            <p class=\"border-bottom ml-2\">
                                {{ car.carDetails.eco }}
                            </p>
                            <p class=\"border-bottom ml-2 \">
                                {{ car.carDetails.transmission }}
                            </p>
                            <p class=\"border-bottom ml-2\">
                                {{ car.carDetails.drive }}
                            </p>
                            <p class=\"border-bottom ml-2\" name=\"fuelConsumption\">
                                {{ car.carDetails.fuelConsumption }}

                            </p>
                            <p class=\"border-bottom ml-2\">
                                {{ car.carDetails.fuelConsumptionMixed }}
                            </p>
                            <p class=\"border-bottom ml-2\">
                                {{ car.carDetails.fuelConsumptionExtra }}
                            </p>
                        </div>

                        <div class=\"hideContent content \">
                            <p name=\"tuning\" class=\"border-bottom\">
                                {{ car.carDetails.tuning }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ car.carDetails.engine.powerIncrease }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ car.carDetails.speed }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ car.carDetails.yearStart }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ car.carDetails.yearFinish }}
                            </p>

                            <p class=\"border-bottom\">
                                {{ car.carDetails.subModel.tank }}
                            </p>

                            <div name=\"age\" class=\"mt-5\">
                                <p class=\"border-bottom\">
                                    {{ car.carDetails.subModel.yearStart }}
                                </p>
                                <p class=\"border-bottom\">
                                    {{ car.carDetails.subModel.yearFinish }}
                                </p>
                            </div>

                            <p class=\"border-bottom\">
                                {{ car.carDetails.subModel.bodyType }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ car.carDetails.subModel.length }}
                            </p>
                            <p class=\"border-bottom\">
                                {{ car.carDetails.subModel.width }}
                            </p>
                        </div>
                    </div>
                {% endfor %}
                {{ app.session.set('carsList', list) }}

            </div>
            <i id=\"more\" class=\"fas fa-chevron-circle-down btn d-flex justify-content-center mb-5\">
            </i>
        </div>
    {% else %}
        <h2 class=\"d-flex justify-content-center align-items-center flex-column\"
            style=\"height: 600px;\">
            {{ 'You forgot to add cars to comparing list'|trans }}
        </h2>
    {% endif %}

    {% block javasriptsblock %}
        {{ include('like_slider_compare.html.twig') }}
        <script src=\"{{ asset('js/filter1.js') }}\"></script>
        <script src=\"{{ asset('js/more.js') }}\"></script>
    {% endblock %}

{% endblock %}

", "comparing/list.html.twig", "/var/www/php/symfony/templates/comparing/list.html.twig");
    }
}
