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

/* engineering_office_type/engineeringofficetype_list.html.twig */
class __TwigTemplate_476c2f6ec0d05c5487299aca39233f4e2f26d9348a568306bfcdcf7f3591ebb7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "engineering_office_type/engineeringofficetype_list.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["engineeringofficetypes"]) || array_key_exists("engineeringofficetypes", $context) ? $context["engineeringofficetypes"] : (function () { throw new RuntimeError('Variable "engineeringofficetypes" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["engineeringofficetype"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringofficetype_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["engineeringofficetype"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engineeringofficetype"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engineeringofficetype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "engineering_office_type/engineeringofficetype_list.html.twig";
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
            {% for engineeringofficetype in engineeringofficetypes %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"engineeringofficetype_edit\",{id:engineeringofficetype.id})}}';\">
                    <td style=\"text-align: center;\">{{engineeringofficetype.name}}</td>                    
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "engineering_office_type/engineeringofficetype_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\engineering_office_type\\engineeringofficetype_list.html.twig");
    }
}
