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
class __TwigTemplate_1aeb8a41cfa010e1c5b612cd8a932938af8b4295b44952da419ef7fc9b6de044 extends Template
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
                <a class=\"nav-link\" href=\"#\">Projets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Requêtes</a>
            </li>                   
        </ul>
        <ul class=\"navbar-nav ml-auto\" style=\"padding-right: 20px !important;\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Admin
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                  <li><a class=\"dropdown-item\" href=\"#\">Utilisateurs</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Signalétiques</a></li>
                </ul>
            </li> 
        </ul>
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Donato&nbsp;<i class=\"bi bi-door-closed\"></i></a>
            </li>  
        </ul>        
        ";
        }
        // line 34
        echo "    </div>
</nav> ";
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
        return array (  78 => 34,  71 => 30,  67 => 28,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\navbar.html.twig");
    }
}
