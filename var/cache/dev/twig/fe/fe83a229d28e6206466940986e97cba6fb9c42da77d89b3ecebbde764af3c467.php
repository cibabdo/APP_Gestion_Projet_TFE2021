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

/* employee/employee_list.html.twig */
class __TwigTemplate_4b6c54fb922271584555cbe4cf366f845fb464c2daa583d38023ab485f8b3e3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employee_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employee_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Nom</th> 
                <th style=\"text-align: center;\">Département</th> 
                <th style=\"text-align: center;\">Fonction</th>   
                <th style=\"text-align: center;\">Téléphone</th>   
                <th style=\"text-align: center;\">Email</th>   
            </tr>
        </thead>
        <tbody>           
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "firstname", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "lastname", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employee"], "department", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employee"], "role", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>                    
                    <td style=\"text-align: center;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "phone", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>          
    </table>   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employee/employee_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  66 => 14,  62 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Nom</th> 
                <th style=\"text-align: center;\">Département</th> 
                <th style=\"text-align: center;\">Fonction</th>   
                <th style=\"text-align: center;\">Téléphone</th>   
                <th style=\"text-align: center;\">Email</th>   
            </tr>
        </thead>
        <tbody>           
            {% for employee in employees %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"employee_edit\",{id:employee.id})}}';\">
                    <td style=\"text-align: center;\">{{employee.firstname}} {{employee.lastname}}</td>
                    <td style=\"text-align: center;\">{{employee.department.name}}</td>
                    <td style=\"text-align: center;\">{{employee.role.name}}</td>                    
                    <td style=\"text-align: center;\">{{employee.phone}}</td>
                    <td style=\"text-align: center;\">{{employee.email}}</td>
                </tr>
            {% endfor %}
        </tbody>          
    </table>   ", "employee/employee_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\employee\\employee_list.html.twig");
    }
}
