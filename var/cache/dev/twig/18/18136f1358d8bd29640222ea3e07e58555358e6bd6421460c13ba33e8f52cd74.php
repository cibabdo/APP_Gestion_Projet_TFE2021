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

/* company/company-list.html.twig */
class __TwigTemplate_b6652994db9ab5854c7b584b7cd0ec2706b3e9b68dee17a0ab47a9a8345c4506 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/company-list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Désignation</th> 
                <th style=\"text-align: center;\">Activité</th> 
                <th style=\"text-align: center;\">Localité</th>   
                <th style=\"text-align: center;\">Téléphone</th>   
                <th style=\"text-align: center;\">Email</th>   
            </tr>
        </thead>
        <tbody>           
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='/company/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "activity", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "location", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>                    
                    <td style=\"text-align: center;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "company/company-list.html.twig";
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
                <th style=\"text-align: center;\">Désignation</th> 
                <th style=\"text-align: center;\">Activité</th> 
                <th style=\"text-align: center;\">Localité</th>   
                <th style=\"text-align: center;\">Téléphone</th>   
                <th style=\"text-align: center;\">Email</th>   
            </tr>
        </thead>
        <tbody>           
            {% for company in companies %}             
                <tr class=\"choice\" onclick=\"document.location.href='/company/{{company.id}}';\">
                    <td style=\"text-align: center;\">{{company.name}}</td>
                    <td style=\"text-align: center;\">{{company.activity.name}}</td>
                    <td style=\"text-align: center;\">{{company.location}}</td>                    
                    <td style=\"text-align: center;\">{{company.phone}}</td>
                    <td style=\"text-align: center;\">{{company.email}}</td>
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "company/company-list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\company\\company-list.html.twig");
    }
}
