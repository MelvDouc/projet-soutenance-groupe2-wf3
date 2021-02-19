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

/* home/index.html.twig */
class __TwigTemplate_723a967afcb673aa838ead012b74c7157fe7bd896ebe82432c528a5b2684e817 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "accueil";
        
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
        echo "
    <header>
        <h1>SUBL'IMMO</h1>
        <h2>L'agence immobilière 100% en ligne</h2>
    </header>

    <div class=\"container-fluid p-5\">

        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Les logements</h2>
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 22
            echo "                ";
            // line 23
            echo "                    <div class=\"col-4 p-3\">
                        <div class=\"card\">
                            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/logement/" . twig_get_attribute($this->env, $this->source, $context["logement"], "img1", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"photo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["logement"], "description", [], "any", false, false, false, 28)), "truncate", [0 => 75, 1 => "..."], "method", false, false, false, 28), "html", null, true);
            echo "</p>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Surface : ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "surface", [], "any", false, false, false, 31), "html", null, true);
            echo " m<sup>2</sup></li>
                                <li class=\"list-group-item\">Pièces : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "rooms", [], "any", false, false, false, 32), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "bedrooms", [], "any", false, false, false, 32), "html", null, true);
            echo " chambres)</li>
                                <li class=\"list-group-item\">";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "price", [], "any", false, false, false, 33), 2, ",", " "), "html", null, true);
            echo " €</li>
                            </ul>
                            <div class=\"card-body text-center\">
                                <a href=\"#\" class=\"btn btn-outline-primary\">Card link</a>
                                <a href=\"#\" class=\"btn btn-primary\">Voir plus</a>
                            </div>
                        </div>
                    </div>
                ";
            // line 42
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Les propriétaires</h2>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  153 => 42,  142 => 33,  136 => 32,  132 => 31,  126 => 28,  122 => 27,  115 => 25,  111 => 23,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}accueil{% endblock %}

{% block body %}

    <header>
        <h1>SUBL'IMMO</h1>
        <h2>L'agence immobilière 100% en ligne</h2>
    </header>

    <div class=\"container-fluid p-5\">

        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Les logements</h2>
            </div>
        </div>

        <div class=\"row\">
            {% for logement in logements %}
                {# {% if loop.index <= 6 %} enlevé car on a maintenant la méthode findSix() #}
                    <div class=\"col-4 p-3\">
                        <div class=\"card\">
                            <img src=\"{{ asset('img/logement/'~ logement.img1) }}\" class=\"card-img-top\" alt=\"photo {{ logement.title }}\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ logement.title }}</h5>
                                <p class=\"card-text\">{{ logement.description|u.truncate(75, '...') }}</p>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Surface : {{ logement.surface }} m<sup>2</sup></li>
                                <li class=\"list-group-item\">Pièces : {{ logement.rooms }} ({{ logement.bedrooms }} chambres)</li>
                                <li class=\"list-group-item\">{{ logement.price|number_format(2, ',', ' ') }} €</li>
                            </ul>
                            <div class=\"card-body text-center\">
                                <a href=\"#\" class=\"btn btn-outline-primary\">Card link</a>
                                <a href=\"#\" class=\"btn btn-primary\">Voir plus</a>
                            </div>
                        </div>
                    </div>
                {# {% endif %} #}
            {% endfor %}
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Les propriétaires</h2>
            </div>
        </div>

    </div>

{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\Symfony\\immobilier2\\templates\\home\\index.html.twig");
    }
}
