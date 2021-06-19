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
class __TwigTemplate_7bf5935f932fd042d083a44e38b148ddffdb24306dc7b86f45883653831841b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project_list.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  99 => 24,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  59 => 14,  57 => 13,  43 => 1,);
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
