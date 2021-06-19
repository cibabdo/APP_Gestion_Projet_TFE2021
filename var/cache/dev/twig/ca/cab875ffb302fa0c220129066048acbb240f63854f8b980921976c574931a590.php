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

/* location/location_list.html.twig */
class __TwigTemplate_8922421477fe59a3ccf0f8c4c68ece585af50a9dd1c2c4ec2c0d3ae3e90b9d7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/location_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/location_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Pays</th>                 
                <th style=\"text-align: center;\">Code postal</th>      
                <th style=\"text-align: center;\">Localité</th>      
            </tr>
        </thead>
        <tbody>           
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "country", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "zipcode", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </tbody>        
    </table>   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "location/location_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Pays</th>                 
                <th style=\"text-align: center;\">Code postal</th>      
                <th style=\"text-align: center;\">Localité</th>      
            </tr>
        </thead>
        <tbody>           
            {% for location in locations %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"location_edit\",{id:location.id})}}';\">
                    <td style=\"text-align: center;\">{{location.country}}</td>
                    <td style=\"text-align: center;\">{{location.zipcode}}</td>
                    <td style=\"text-align: center;\">{{location.location}}</td>
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "location/location_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\location\\location_list.html.twig");
    }
}
