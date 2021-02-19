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

/* admin/logement.html.twig */
class __TwigTemplate_5177ea4813f4486e096c876dbed83a1046dc063301f2537ca6dae5a02375260d extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/logement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/logement.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/logement.html.twig", 1);
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

        echo "logements";
        
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
";
        // line 8
        echo "
    <h2>Liste de maisons</h2>
    
    <table class=\"table table-bordered table-hover table-sm table-dark table-striped text-center\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Surface</th>
                <th>Pièces</th>
                <th>Chambres</th>
                <th>Prix</th>
                <th>Image 1</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 26, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 27
            echo "            <tr>
                <td class=\"align-middle\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "surface", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "rooms", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "bedrooms", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "price", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td class=\"align-middle\"><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logement/") . twig_get_attribute($this->env, $this->source, $context["logement"], "img1", [], "any", false, false, false, 35)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "\"></td>
                <td class=\"align-middle\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class='fas fa-pen square'></i></a> |
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a>
                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>


    <div class=\"text-right\">
        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logement_create");
        echo "\" class=\"btn btn-outline-dark mb-4\">Ajouter une maison</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/logement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 47,  188 => 42,  170 => 38,  166 => 37,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  128 => 27,  111 => 26,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}logements{% endblock %}

{% block body %}

{# {{ parent() }}#}

    <h2>Liste de maisons</h2>
    
    <table class=\"table table-bordered table-hover table-sm table-dark table-striped text-center\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Surface</th>
                <th>Pièces</th>
                <th>Chambres</th>
                <th>Prix</th>
                <th>Image 1</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for logement in logements %}
            <tr>
                <td class=\"align-middle\">{{ loop.index }}</td>
                <td class=\"align-middle\">{{ logement.title }}</td>
                <td class=\"align-middle\">{{ logement.description }}</td>
                <td class=\"align-middle\">{{ logement.surface }}</td>
                <td class=\"align-middle\">{{ logement.rooms }}</td>
                <td class=\"align-middle\">{{ logement.bedrooms }}</td>
                <td class=\"align-middle\">{{ logement.price }}</td>
                <td class=\"align-middle\"><img src=\"{{ asset('img/logement/') ~ logement.img1 }}\" alt=\"{{ logement.title }}\"></td>
                <td class=\"align-middle\">
                    <a href=\"{{ path('logement_update', {'id':logement.id}) }}\"><i class='fas fa-pen square'></i></a> |
                    <a href=\"{{ path('logement_delete', {'id':logement.id}) }}\"><i class=\"fas fa-trash-alt\"></i></a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>


    <div class=\"text-right\">
        <a href=\"{{path('logement_create')}}\" class=\"btn btn-outline-dark mb-4\">Ajouter une maison</a>
    </div>

{% endblock %}", "admin/logement.html.twig", "C:\\wamp64\\www\\Symfony\\immobilier2\\templates\\admin\\logement.html.twig");
    }
}
