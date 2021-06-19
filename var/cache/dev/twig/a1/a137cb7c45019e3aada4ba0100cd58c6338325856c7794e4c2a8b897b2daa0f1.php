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

/* department/department_list.html.twig */
class __TwigTemplate_dba0b827c8c6bb2a3b1aa5903db300531a50436875bb3779e95a3eebbe59ce4f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/department_list.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "department/department_list.html.twig";
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
            {% for department in departments %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"department_edit\",{id:department.id})}}';\">
                    <td style=\"text-align: center;\">{{department.name}}</td>                    
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "department/department_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\department\\department_list.html.twig");
    }
}
