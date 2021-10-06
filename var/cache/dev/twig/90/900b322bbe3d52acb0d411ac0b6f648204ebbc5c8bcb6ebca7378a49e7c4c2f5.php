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
        echo "<header class=\"bg-dark text-white\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"container\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
            <a href=\"/\" class=\"d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/chulogo.png"), "html", null, true);
        echo "\" alt=\"Logo chu\" height=10% width=10%/>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small\">
                    <li>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        echo "\" class=\"nav-link text-white\"><!--text-secondary si selection-->
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dossier.svg"), "html", null, true);
        echo "\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#projets\"></use></img>
                        Projets
                    </a>
                    </li>
                    ";
        // line 19
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
            // line 20
            echo "                        <li>
                            <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request");
            echo "\" class=\"nav-link text-white\">
                                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/chercher.svg"), "html", null, true);
            echo "\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#requetes\"></use></img>
                                Requêtes
                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
            echo "\" class=\"nav-link text-white\">
                                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/graphique.png"), "html", null, true);
            echo "\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#statistiques\"></use></img>
                                Statistiques
                            </a>
                        </li>
                    ";
        }
        // line 33
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                        <li class=\"dropdown text-end\">
                            <a href=\"#\" class=\"nav-link text-white d-block link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/administrateur.png"), "html", null, true);
            echo "\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#Administration\"></use></img>
                                Admin
                            </a>
                            <ul class=\"dropdown-menu text-small\" aria-labelledby=\"dropdownUser1\" style=\"\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
            echo "\"><i class=\"bi bi-person-bounding-box\"></i> Utilisateurs</a></li>                                
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_list");
            echo "\"></i><i class=\"bi bi-house-door\"></i> Sites</a></li>                                    
                                <li><a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_list");
            echo "\">Département</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("role_list");
            echo "\">Fonctions</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
            echo "\"><i class=\"bi bi-people-fill\"></i> Employés</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_list");
            echo "\"><i class=\"bi bi-tools\"></i> Secteur des entreprises</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_list");
            echo "\"><i class=\"bi bi-building\"></i> Entreprises</a></li>        
                                <li><a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personcontact_list");
            echo "\"><i class=\"bi bi-person-lines-fill\"></i> Personnes de contact</a></li>                                          
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringofficesort_list");
            echo "\">Types de bureaux d'études</a></li>                  
                                <li><a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringoffice_list");
            echo "\">Bureaux d'études</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personengineering_list");
            echo "\"><i class=\"bi bi-person-lines-fill\"></i> Ingénieurs</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("work_list");
            echo "\">Travaux</a></li>
                                <li><hr class=\"dropdown-divider\"></li>       
                                <li><a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_list");
            echo "\"><i class=\"bi bi-geo-alt\"></i>Localités</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 61
        echo "                        <li class=\"dropdown text-end\">
                            <a href=\"#\" class=\"nav-link d-block link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/compte-test.png"), "html", null, true);
        echo "\" alt=\"mdo\" class=\"rounded-circle\" width=\"50\" height=\"50\"><!--mettre photos si géré en db-->
                            </a>
                            <ul class=\"dropdown-menu text-small\" aria-labelledby=\"dropdownUser1\" style=\"\">
                                <li class=\"dropdown-item\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66), "html", null, true);
        echo "</li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 67
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/user.png"), "html", null, true);
        echo "\" class=\"bi mx-auto mb-1\" width=\"20\" height=\"20\"><span>Profile</span></a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/deconnexion.png"), "html", null, true);
        echo "\" class=\"bi mx-auto mb-1\" width=\"20\" height=\"20\"><span>Déconnexion<span></a></li>
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
      </div>
    </nav>
  </header>";
        
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
        return array (  195 => 69,  189 => 67,  185 => 66,  179 => 63,  175 => 61,  168 => 57,  163 => 55,  158 => 53,  154 => 52,  150 => 51,  145 => 49,  141 => 48,  137 => 47,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  115 => 40,  108 => 36,  104 => 34,  101 => 33,  93 => 28,  89 => 27,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  65 => 15,  61 => 14,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"bg-dark text-white\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"container\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
            <a href=\"/\" class=\"d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none\">
                <img src=\"{{asset('image/chulogo.png')}}\" alt=\"Logo chu\" height=10% width=10%/>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small\">
                    <li>
                    <a href=\"{{path('project_list')}}\" class=\"nav-link text-white\"><!--text-secondary si selection-->
                        <img src=\"{{asset('image/dossier.svg')}}\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#projets\"></use></img>
                        Projets
                    </a>
                    </li>
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                        <li>
                            <a href=\"{{path('request')}}\" class=\"nav-link text-white\">
                                <img src=\"{{asset('image/chercher.svg')}}\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#requetes\"></use></img>
                                Requêtes
                            </a>
                        </li>
                        <li>
                            <a href=\"{{path('stat')}}\" class=\"nav-link text-white\">
                                <img src=\"{{asset('image/graphique.png')}}\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#statistiques\"></use></img>
                                Statistiques
                            </a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"dropdown text-end\">
                            <a href=\"#\" class=\"nav-link text-white d-block link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"{{asset('image/administrateur.png')}}\" class=\"bi d-block mx-auto mb-1\" width=\"24\" height=\"24\"><use xlink:href=\"#Administration\"></use></img>
                                Admin
                            </a>
                            <ul class=\"dropdown-menu text-small\" aria-labelledby=\"dropdownUser1\" style=\"\">
                                <li><a class=\"dropdown-item\" href=\"{{path('user_list')}}\"><i class=\"bi bi-person-bounding-box\"></i> Utilisateurs</a></li>                                
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('site_list')}}\"></i><i class=\"bi bi-house-door\"></i> Sites</a></li>                                    
                                <li><a class=\"dropdown-item\" href=\"{{path('department_list')}}\">Département</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('role_list')}}\">Fonctions</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('employee_list')}}\"><i class=\"bi bi-people-fill\"></i> Employés</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('activity_list')}}\"><i class=\"bi bi-tools\"></i> Secteur des entreprises</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('company_list')}}\"><i class=\"bi bi-building\"></i> Entreprises</a></li>        
                                <li><a class=\"dropdown-item\" href=\"{{path('personcontact_list')}}\"><i class=\"bi bi-person-lines-fill\"></i> Personnes de contact</a></li>                                          
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('engineeringofficesort_list')}}\">Types de bureaux d'études</a></li>                  
                                <li><a class=\"dropdown-item\" href=\"{{path('engineeringoffice_list')}}\">Bureaux d'études</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('personengineering_list')}}\"><i class=\"bi bi-person-lines-fill\"></i> Ingénieurs</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('work_list')}}\">Travaux</a></li>
                                <li><hr class=\"dropdown-divider\"></li>       
                                <li><a class=\"dropdown-item\" href=\"{{path('location_list')}}\"><i class=\"bi bi-geo-alt\"></i>Localités</a></li>
                            </ul>
                        </li>
                    {% endif %}
                        <li class=\"dropdown text-end\">
                            <a href=\"#\" class=\"nav-link d-block link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"{{asset('image/compte-test.png')}}\" alt=\"mdo\" class=\"rounded-circle\" width=\"50\" height=\"50\"><!--mettre photos si géré en db-->
                            </a>
                            <ul class=\"dropdown-menu text-small\" aria-labelledby=\"dropdownUser1\" style=\"\">
                                <li class=\"dropdown-item\">{{app.user.username}}</li>
                                <li><a class=\"dropdown-item\" href=\"{#{{path(\"user_edit\",{id:user.id})}}#}\"><img src=\"{{asset('image/user.png')}}\" class=\"bi mx-auto mb-1\" width=\"20\" height=\"20\"><span>Profile</span></a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('security_logout')}}\"><img src=\"{{asset('image/deconnexion.png')}}\" class=\"bi mx-auto mb-1\" width=\"20\" height=\"20\"><span>Déconnexion<span></a></li>
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
      </div>
    </nav>
  </header>", "navbar.html.twig", "C:\\Users\\utilisateur\\Videos\\APP_Gestion_Projet\\templates\\navbar.html.twig");
    }
}
