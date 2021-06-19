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
class __TwigTemplate_280df301afbdcc75468cdeb3597c4b773c7018f63eb8519a33805d06280cee24 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

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
            ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
            // line 13
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request");
            echo "\">Requêtes</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
            echo "\">Statistiques</a>
                </li>    
            ";
        }
        // line 19
        echo "            
        </ul>
        ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "        <ul class=\"navbar-nav ml-auto\" style=\"padding-right: 20px !important;\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Admin
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
            echo "\">Utilisateurs</a></li>
                  <li><hr></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_list");
            echo "\">Sites</a></li>                                    
                  <li><a class=\"dropdown-item\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_list");
            echo "\">Activités des entreprises</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_list");
            echo "\">Entreprises</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringofficesort_list");
            echo "\">Types de bureaux d'étude</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringoffice_list");
            echo "\">Bureaux d'étude</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personcontact_list");
            echo "\">Personnes externes</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("work_list");
            echo "\">Travaux</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_list");
            echo "\">Département</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("role_list");
            echo "\">Fonctions</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
            echo "\">Employés</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_list");
            echo "\">Localités</a></li>
                </ul>
            </li> 
        </ul>
        ";
        }
        // line 45
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            echo "&nbsp;<i class=\"bi bi-door-closed\"></i></a>
            </li>  
        </ul>        
        ";
        }
        // line 52
        echo "    </div>
</nav> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  159 => 52,  150 => 48,  146 => 46,  143 => 45,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  90 => 28,  82 => 22,  80 => 21,  76 => 19,  70 => 17,  64 => 14,  61 => 13,  59 => 12,  54 => 10,  43 => 1,);
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
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{path('request')}}\">Requêtes</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{path('stat')}}\">Statistiques</a>
                </li>    
            {% endif %}            
        </ul>
        {% if is_granted('ROLE_ADMIN') %}
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
                  <li><a class=\"dropdown-item\" href=\"{{path('personcontact_list')}}\">Personnes externes</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('work_list')}}\">Travaux</a></li>                  
                  <li><a class=\"dropdown-item\" href=\"{{path('department_list')}}\">Département</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('role_list')}}\">Fonctions</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('employee_list')}}\">Employés</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{path('location_list')}}\">Localités</a></li>
                </ul>
            </li> 
        </ul>
        {% endif %}
        {% if app.user %}
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('security_logout')}}\">{{app.user.username}}&nbsp;<i class=\"bi bi-door-closed\"></i></a>
            </li>  
        </ul>        
        {% endif %}
    </div>
</nav> ", "navbar.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\navbar.html.twig");
    }
}
