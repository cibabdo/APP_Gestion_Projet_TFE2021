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

/* project_works/project_works_list.html.twig */
class __TwigTemplate_6e9980ec464aec04b66e1546a2071bd1750bd598574fd5fb14f28cdc671c4684 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Poste</th>                 
                <th style=\"text-align: center;\">Entreprise</th>                 
                <th style=\"text-align: center;\">Date réception provisoire</th> 
                <th style=\"text-align: center;\">Date réception définitive</th> 
                <th style=\"text-align: center;\">Date réception vinçotte</th>                 
            </tr>
        </thead>
        <tbody>                    
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["works"]) || array_key_exists("works", $context) ? $context["works"] : (function () { throw new RuntimeError('Variable "works" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_edit", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 13, $this->source); })()), "workId" => twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "work", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>                    
                    <td style=\"text-align: center;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "company", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>                   
                    <td style=\"text-align: center;\">";
            // line 16
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["work"], "provisionalReceptionDate", [], "any", false, false, false, 16))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "provisionalReceptionDate", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            }
            echo "</td>  
                    <td style=\"text-align: center;\">";
            // line 17
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["work"], "finalDeliveryDate", [], "any", false, false, false, 17))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "finalDeliveryDate", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
            }
            echo "</td>                  
                    <td style=\"text-align: center;\">";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["work"], "vincotteReceptionDate", [], "any", false, false, false, 18))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "vincotteReceptionDate", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>        
    </table>   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "project_works/project_works_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  86 => 18,  80 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Poste</th>                 
                <th style=\"text-align: center;\">Entreprise</th>                 
                <th style=\"text-align: center;\">Date réception provisoire</th> 
                <th style=\"text-align: center;\">Date réception définitive</th> 
                <th style=\"text-align: center;\">Date réception vinçotte</th>                 
            </tr>
        </thead>
        <tbody>                    
            {% for work in works %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"project_works_edit\",{projectId:projectId, workId:work.id})}}';\">
                    <td style=\"text-align: center;\">{{work.work.name}}</td>                    
                    <td style=\"text-align: center;\">{{work.company.name}}</td>                   
                    <td style=\"text-align: center;\">{% if work.provisionalReceptionDate is not empty %}{{work.provisionalReceptionDate|date(\"d/m/Y\")}}{% endif %}</td>  
                    <td style=\"text-align: center;\">{% if work.finalDeliveryDate is not empty %}{{work.finalDeliveryDate|date(\"d/m/Y\")}}{% endif %}</td>                  
                    <td style=\"text-align: center;\">{% if work.vincotteReceptionDate is not empty %}{{work.vincotteReceptionDate|date(\"d/m/Y\")}}{% endif %}</td>
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "project_works/project_works_list.html.twig", "C:\\Users\\AbdO\\Documents\\GitHub\\APP_Gestion_Projet_TFE2021\\templates\\project_works\\project_works_list.html.twig");
    }
}
