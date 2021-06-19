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

/* company/company.html.twig */
class __TwigTemplate_b6d2d886c47c72623599cc0ab0bee0a77b2c1a5cc4f8268992c4df41c094e2a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/company.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/company.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "company/company.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    ";
        $this->loadTemplate("navbar.html.twig", "company/company.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"row mt-5\">
    <div class=\"col text-center\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "              
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <h2>Entreprises</h2>        
        <div class=\"form-group inline\">
            <input type=\"text\" class=\"form-control\" id=\"search\" value=\"\" data-url=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_search");
        echo "\" data-target=\"#companies\" placeholder=\"Nom de l'entreprise\" autofocus>        
        </div>   
        &nbsp;<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_new");
        echo "\" class=\"btn btn-primary btn-sm ml-5 add\">Ajouter</a>
    </div>
</div>
<div class=\"row\">
    <div class=\"col\">
        <div id=\"companies\" class=\"d-flex flex-row  justify-content-center\" style=\"flex-wrap: wrap;\">
            ";
        // line 25
        $this->loadTemplate("company/company_list.html.twig", "company/company.html.twig", 25)->display($context);
        // line 26
        echo "        </div> 
    </div>
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    

    let timer_search;
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
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "company/company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 26,  128 => 25,  119 => 19,  114 => 17,  110 => 15,  101 => 12,  98 => 11,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'navbar.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"row mt-5\">
    <div class=\"col text-center\">
        {% for message in app.flashes('message') %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ message }}              
            </div>
        {% endfor %}
        <h2>Entreprises</h2>        
        <div class=\"form-group inline\">
            <input type=\"text\" class=\"form-control\" id=\"search\" value=\"\" data-url=\"{{path('company_search')}}\" data-target=\"#companies\" placeholder=\"Nom de l'entreprise\" autofocus>        
        </div>   
        &nbsp;<a href=\"{{path('company_new')}}\" class=\"btn btn-primary btn-sm ml-5 add\">Ajouter</a>
    </div>
</div>
<div class=\"row\">
    <div class=\"col\">
        <div id=\"companies\" class=\"d-flex flex-row  justify-content-center\" style=\"flex-wrap: wrap;\">
            {% include ('company/company_list.html.twig') %}
        </div> 
    </div>
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    

    let timer_search;
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
</script>
{% endblock %}

", "company/company.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\company\\company.html.twig");
    }
}
