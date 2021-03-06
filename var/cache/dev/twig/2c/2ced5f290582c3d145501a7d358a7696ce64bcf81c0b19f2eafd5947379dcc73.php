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

/* request/request_list.html.twig */
class __TwigTemplate_3e0cdaa00695ea3ff2b3eb32f1604fca037ef4b7d5d70dabb0b414f52ca729fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "request/request_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "request/request_list.html.twig"));

        // line 1
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 1, $this->source); })())) > 0)) {
            echo "   
    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">D??signation</th>                 
                <th style=\"text-align: center;\">R??f??rence</th>                 
                <th style=\"text-align: center;\">Ann??e</th> 
                <th style=\"text-align: center;\">D??but</th> 
                <th style=\"text-align: center;\">Fin</th> 
                <th style=\"text-align: center;\">Statut</th> 
            </tr>
        </thead>
        <tbody>           
            ";
            // line 14
            $context["state"] = [0 => "Pas commenc??", 1 => "Etude", 2 => "En cours", 3 => "Cl??tur??", 4 => "Stand By", 5 => "Report??"];
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "';\">
                    <td style=\"text-align: center;\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>                    
                    <td style=\"text-align: center;\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "reference", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>  
                    <td style=\"text-align: center;\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "year", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>  
                    <td style=\"text-align: center;\">";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "workStartDate", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
                echo "</td>  
                    <td style=\"text-align: center;\">";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "workEndDate", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td style=\"text-align: center;\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["project"], "state", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "html", null, true);
                echo "</td>  
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </tbody>        
    </table>   
";
        } else {
            // line 28
            echo "    Pas de r??sulat par rapport ?? votre recherche
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "request/request_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  102 => 25,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  62 => 15,  60 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% if projects|length > 0 %}   
    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">D??signation</th>                 
                <th style=\"text-align: center;\">R??f??rence</th>                 
                <th style=\"text-align: center;\">Ann??e</th> 
                <th style=\"text-align: center;\">D??but</th> 
                <th style=\"text-align: center;\">Fin</th> 
                <th style=\"text-align: center;\">Statut</th> 
            </tr>
        </thead>
        <tbody>           
            {% set state = [\"Pas commenc??\", \"Etude\", \"En cours\", \"Cl??tur??\", \"Stand By\", \"Report??\"] %}
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
    </table>   
{% else %}
    Pas de r??sulat par rapport ?? votre recherche
{% endif %}", "request/request_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\request\\request_list.html.twig");
    }
}
