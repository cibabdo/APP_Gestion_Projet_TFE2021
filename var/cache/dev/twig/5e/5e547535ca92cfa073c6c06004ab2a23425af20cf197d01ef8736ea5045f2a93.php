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

/* navbar.html.twig */
class __TwigTemplate_abf1b08d156505cf96ad67596bc332155fc8a344c8fc863499bf3f9eaa001ecf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">CHU</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">                                  
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        echo "\">Projets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Requêtes</a>
            </li>   
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Statistiques</a>
            </li>                
        </ul>
        <ul class=\"navbar-nav ml-auto\" style=\"padding-right: 20px !important;\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Admin
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        echo "\">Utilisateurs</a></li>
                  <li><hr></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_list");
        echo "\">Sites</a></li>                                    
                  <li><a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_list");
        echo "\">Activités des entreprises</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_list");
        echo "\">Entreprises</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringofficesort_list");
        echo "\">Types de bureaux d'étude</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringoffice_list");
        echo "\">Bureaux d'étude</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personcontact_list");
        echo "\">Personnes de contact</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("work_list");
        echo "\">Travaux</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_list");
        echo "\">Département</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("role_list");
        echo "\">Fonctions</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
        echo "\">Employés</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_list");
        echo "\">Localités</a></li>
                </ul>
            </li> 
        </ul>
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Donato&nbsp;<i class=\"bi bi-door-closed\"></i></a>
            </li>  
        </ul>        
        ";
        }
        // line 48
        echo "    </div>
</nav> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  127 => 44,  123 => 42,  121 => 41,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  69 => 25,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">CHU</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">                                  
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('project_list')}}\">Projets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Requêtes</a>
            </li>   
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Statistiques</a>
            </li>                
        </ul>
        <ul class=\"navbar-nav ml-auto\" style=\"padding-right: 20px !important;\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Admin
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{path('user_list')}}\">Utilisateurs</a></li>
                  <li><hr></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('site_list')}}\">Sites</a></li>                                    
                  <li><a class=\"dropdown-item\" href=\"{{path('activity_list')}}\">Activités des entreprises</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('company_list')}}\">Entreprises</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"{{path('engineeringofficesort_list')}}\">Types de bureaux d'étude</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"{{path('engineeringoffice_list')}}\">Bureaux d'étude</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('personcontact_list')}}\">Personnes de contact</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('work_list')}}\">Travaux</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"{{path('department_list')}}\">Département</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('role_list')}}\">Fonctions</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('employee_list')}}\">Employés</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('location_list')}}\">Localités</a></li>
                </ul>
            </li> 
        </ul>
        {% if app.user %}
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('security_logout')}}\">Donato&nbsp;<i class=\"bi bi-door-closed\"></i></a>
            </li>  
        </ul>        
        {% endif %}
    </div>
</nav> ", "navbar.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\navbar.html.twig");
    }
}
