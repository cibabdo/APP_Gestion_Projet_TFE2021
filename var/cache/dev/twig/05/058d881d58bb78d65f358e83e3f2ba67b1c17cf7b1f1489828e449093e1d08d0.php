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

/* project/project_list.html.twig */
class __TwigTemplate_f39fd8cdd27a400f7d91285db31098133768345ce0f8a30d925cbea524ab7ccf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Désignation</th>                 
                <th style=\"text-align: center;\">Référence</th>                 
                <th style=\"text-align: center;\">Année</th> 
                <th style=\"text-align: center;\">Début</th> 
                <th style=\"text-align: center;\">Fin</th> 
                <th style=\"text-align: center;\">Statut</th> 
            </tr>
        </thead>
        <tbody>           
            ";
        // line 13
        $context["state"] = [0 => "Pas commencé", 1 => "Etude", 2 => "En cours", 3 => "Clôturé", 4 => "Stand By", 5 => "Reporté"];
        // line 14
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>                    
                    <td style=\"text-align: center;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "reference", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>  
                    <td style=\"text-align: center;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "year", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>  
                    <td style=\"text-align: center;\">";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "workStartDate", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "</td>  
                    <td style=\"text-align: center;\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "workEndDate", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 21, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["project"], "state", [], "any", false, false, false, 21), [], "array", false, false, false, 21), "html", null, true);
            echo "</td>  
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "project/project_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  56 => 14,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Désignation</th>                 
                <th style=\"text-align: center;\">Référence</th>                 
                <th style=\"text-align: center;\">Année</th> 
                <th style=\"text-align: center;\">Début</th> 
                <th style=\"text-align: center;\">Fin</th> 
                <th style=\"text-align: center;\">Statut</th> 
            </tr>
        </thead>
        <tbody>           
            {% set state = [\"Pas commencé\", \"Etude\", \"En cours\", \"Clôturé\", \"Stand By\", \"Reporté\"] %}
            {% for project in projects %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"project_edit\",{id:project.id})}}';\">
                    <td style=\"text-align: center;\">{{project.title}}</td>                    
                    <td style=\"text-align: center;\">{{project.reference}}</td>  
                    <td style=\"text-align: center;\">{{project.year}}</td>  
                    <td style=\"text-align: center;\">{{project.workStartDate|date(\"d/m/Y\")}}</td>  
                    <td style=\"text-align: center;\">{{project.workEndDate|date(\"d/m/Y\")}}</td>
                    <td style=\"text-align: center;\">{{state[project.state]}}</td>  
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "project/project_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\project\\project_list.html.twig");
    }
}
