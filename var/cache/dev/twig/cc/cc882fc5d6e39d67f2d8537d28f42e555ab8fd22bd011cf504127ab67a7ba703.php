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

/* person_contact/personcontact_list.html.twig */
class __TwigTemplate_9dc1524d2c45d58f5029f1dc81bb428e188e2df5c61c00593d59998686deb672 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "person_contact/personcontact_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "person_contact/personcontact_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Nom</th> 
                <th style=\"text-align: center;\">Fonction</th> 
                <th style=\"text-align: center;\">Entreprise</th> 
                <th style=\"text-align: center;\">Bureau d'étude</th>                 
                <th style=\"text-align: center;\">Téléphone</th>   
                <th style=\"text-align: center;\">Email</th>   
            </tr>
        </thead>
        <tbody>           
            ";
        // line 13
        $context["role"] = [0 => "", 1 => "Architecte", 2 => "Ingénieur", 3 => "Coordinateur"];
        // line 14
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personcontacts"]) || array_key_exists("personcontacts", $context) ? $context["personcontacts"] : (function () { throw new RuntimeError('Variable "personcontacts" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personcontact"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personcontact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["personcontact"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personcontact"], "firstname", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personcontact"], "lastname", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["personcontact"], "role", [], "any", false, false, false, 17), [], "array", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 18
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personcontact"], "company", [], "any", false, true, false, 18), "name", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personcontact"], "company", [], "any", false, true, false, 18), "name", [], "any", false, false, false, 18), "")) : ("")), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personcontact"], "engineeringoffice", [], "any", false, true, false, 19), "name", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personcontact"], "engineeringoffice", [], "any", false, true, false, 19), "name", [], "any", false, false, false, 19), "")) : ("")), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personcontact"], "phone", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personcontact"], "email", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personcontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>          
    </table>   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "person_contact/personcontact_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  70 => 16,  66 => 15,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Nom</th> 
                <th style=\"text-align: center;\">Fonction</th> 
                <th style=\"text-align: center;\">Entreprise</th> 
                <th style=\"text-align: center;\">Bureau d'étude</th>                 
                <th style=\"text-align: center;\">Téléphone</th>   
                <th style=\"text-align: center;\">Email</th>   
            </tr>
        </thead>
        <tbody>           
            {% set role = [\"\", \"Architecte\", \"Ingénieur\", \"Coordinateur\"] %}
            {% for personcontact in personcontacts %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"personcontact_edit\",{id:personcontact.id})}}';\">
                    <td style=\"text-align: center;\">{{personcontact.firstname}} {{personcontact.lastname}}</td>
                    <td style=\"text-align: center;\">{{role[personcontact.role]}}</td>
                    <td style=\"text-align: center;\">{{personcontact.company.name | default('')}}</td>
                    <td style=\"text-align: center;\">{{personcontact.engineeringoffice.name | default('')}}</td>
                    <td style=\"text-align: center;\">{{personcontact.phone}}</td>
                    <td style=\"text-align: center;\">{{personcontact.email}}</td>
                </tr>
            {% endfor %}
        </tbody>          
    </table>   ", "person_contact/personcontact_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\person_contact\\personcontact_list.html.twig");
    }
}
