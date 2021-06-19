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

/* project_works/project_works.html.twig */
class __TwigTemplate_a4d44501fa90aa0040ba89676e906bfca89018b27d7ab123e42467735a862169 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works.html.twig"));

        // line 1
        echo "<div class=\"row mt-2\">
    <div class=\"col text-center\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "              
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        
        <div class=\"form-group inline\">
            <input type=\"text\" class=\"form-control\" id=\"search\" value=\"\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_search", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\" data-target=\"#projects\" placeholder=\"Nom du poste\">        
        </div>   
        &nbsp;<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_new", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 11, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm ml-5 add\">Ajouter</a>
    </div>
</div>
<div class=\"row\">
    <div class=\"col\">
        <div id=\"projects\" class=\"d-flex flex-row  justify-content-center\" style=\"flex-wrap: wrap;\">
            ";
        // line 17
        $this->loadTemplate("project_works/project_works_list.html.twig", "project_works/project_works.html.twig", 17)->display($context);
        // line 18
        echo "        </div> 
    </div>
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)   

    var timer_search
    \$('#search').on('input', function(ev) {
        if (timer_search) clearTimeout(timer_search)
        const url = \$(this).attr('data-url')  
        const target = \$(this).attr('data-target')  
        const val = \$(this).val()        
        timer_search = setTimeout(function() {          
            \$.get(url + '?str='+val, function(data) {              
                \$(target).html(data)
            })
        }, 250)
    })    
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "project_works/project_works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  81 => 17,  72 => 11,  67 => 9,  63 => 7,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mt-2\">
    <div class=\"col text-center\">
        {% for message in app.flashes('message') %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ message }}              
            </div>
        {% endfor %}        
        <div class=\"form-group inline\">
            <input type=\"text\" class=\"form-control\" id=\"search\" value=\"\" data-url=\"{{path('project_works_search', {projectId:projectId})}}\" data-target=\"#projects\" placeholder=\"Nom du poste\">        
        </div>   
        &nbsp;<a href=\"{{path('project_works_new', {projectId:projectId})}}\" class=\"btn btn-primary btn-sm ml-5 add\">Ajouter</a>
    </div>
</div>
<div class=\"row\">
    <div class=\"col\">
        <div id=\"projects\" class=\"d-flex flex-row  justify-content-center\" style=\"flex-wrap: wrap;\">
            {% include ('project_works/project_works_list.html.twig') %}
        </div> 
    </div>
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)   

    var timer_search
    \$('#search').on('input', function(ev) {
        if (timer_search) clearTimeout(timer_search)
        const url = \$(this).attr('data-url')  
        const target = \$(this).attr('data-target')  
        const val = \$(this).val()        
        timer_search = setTimeout(function() {          
            \$.get(url + '?str='+val, function(data) {              
                \$(target).html(data)
            })
        }, 250)
    })    
</script>", "project_works/project_works.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\project_works\\project_works.html.twig");
    }
}
