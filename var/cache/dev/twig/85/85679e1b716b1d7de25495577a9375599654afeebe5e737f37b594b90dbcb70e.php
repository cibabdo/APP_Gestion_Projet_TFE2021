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

/* company_activity/activity_list.html.twig */
class __TwigTemplate_efedfb60ada5ab3803041c6a2f89688addd7090d3623e196fb7ec14be89e5d30 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company_activity/activity_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Désignation</th>                 
            </tr>
        </thead>
        <tbody>           
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "company_activity/activity_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  59 => 10,  55 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Désignation</th>                 
            </tr>
        </thead>
        <tbody>           
            {% for activity in activities %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"activity_edit\",{id:activity.id})}}';\">
                    <td style=\"text-align: center;\">{{activity.name}}</td>                    
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "company_activity/activity_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\company_activity\\activity_list.html.twig");
    }
}
