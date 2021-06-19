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

/* planning/planning_list.html.twig */
class __TwigTemplate_334adf5abd8eb56b9b24f34905997e11ff9888cf99d29979c6a8333144561f23 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Tâche</th>                                 
                <th style=\"text-align: center;\">Début</th>                                 
                <th style=\"text-align: center;\">Fin</th>                                 
                <th style=\"text-align: center;\">Effecutée %</th>                                 
                <th style=\"text-align: center;\">Couleur</th>                
            </tr>
        </thead>
        <tbody>           
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>                    
                    <td style=\"text-align: center;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "start", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "end", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "percent_done", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "color", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "planning/planning_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Tâche</th>                                 
                <th style=\"text-align: center;\">Début</th>                                 
                <th style=\"text-align: center;\">Fin</th>                                 
                <th style=\"text-align: center;\">Effecutée %</th>                                 
                <th style=\"text-align: center;\">Couleur</th>                
            </tr>
        </thead>
        <tbody>           
            {% for planning in plannings %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"planning_edit\",{id:planning.id})}}';\">
                    <td style=\"text-align: center;\">{{planning.name}}</td>                    
                    <td style=\"text-align: center;\">{{planning.start}}</td>
                    <td style=\"text-align: center;\">{{planning.end}}</td>
                    <td style=\"text-align: center;\">{{planning.percent_done}}</td>
                    <td style=\"text-align: center;\">{{planning.color}}</td>
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "planning/planning_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\planning\\planning_list.html.twig");
    }
}
