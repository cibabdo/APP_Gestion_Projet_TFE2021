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

/* planning/planning.html.twig */
class __TwigTemplate_e3f0eb1efbcbed6af76a1dd1495d782760326ac847ab6933932d450d900c64a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning/planning.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    ";
        $this->loadTemplate("navbar.html.twig", "planning/planning.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo "        <h2>Planning</h2>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_new", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm ml-5 add\">Nouvelle tâche</a>
    </div>
</div>
<div id=\"plannings\" class=\"m-5\">
    Chargement...
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    
   
    let tasks
    setTimeout(function() {
        tasks = getTasks();        
        google.charts.load('current', {'packages':['gantt']});
        google.charts.setOnLoadCallback(drawChart);
    },1000)    

    function daysToMilliseconds(days) {
      return days * 24 * 60 * 60 * 1000;
    }
    
    function getTasks() {
        let tasks;
        \$.ajax({
            async: false,
            url: \"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_list_json", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 43, $this->source); })())]), "html", null, true);
        echo "\",
            type: 'GET',
            dataType: 'json',
            success: function (result) {         
                tasks = result;
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
        return tasks;
    }
    
    function drawChart() {                
        var data = new google.visualization.DataTable();

        //console.log(tasks) 

        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('string', 'Resource');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete');
        data.addColumn('string', 'Dependencies');
        
        tasks.forEach(element => {
            data.addRows([
                [element.name, element.name, null, new Date(element.startDate), new Date(element.endDate), null, element.percentDone, element.dependency]
            ]);
        });        

        var options = {
            height: 500,
            gantt: {
                /*trackHeight: 30*/
                criticalPathEnabled: false, // Critical path arrows will be the same as other arrows.
                arrow: {
                    angle: 100,
                    width: 5,
                    color: 'green',
                    radius: 0
                }
            }
        };

        var chart = new google.visualization.Gantt(document.getElementById('plannings'));

        chart.draw(data, options);
    }       
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "planning/planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  98 => 16,  95 => 15,  86 => 12,  83 => 11,  79 => 10,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
        <h2>Planning</h2>
        <a href=\"{{path('planning_new', {id:projectId})}}\" class=\"btn btn-primary btn-sm ml-5 add\">Nouvelle tâche</a>
    </div>
</div>
<div id=\"plannings\" class=\"m-5\">
    Chargement...
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    
   
    let tasks
    setTimeout(function() {
        tasks = getTasks();        
        google.charts.load('current', {'packages':['gantt']});
        google.charts.setOnLoadCallback(drawChart);
    },1000)    

    function daysToMilliseconds(days) {
      return days * 24 * 60 * 60 * 1000;
    }
    
    function getTasks() {
        let tasks;
        \$.ajax({
            async: false,
            url: \"{{path('planning_list_json',{id:projectId})}}\",
            type: 'GET',
            dataType: 'json',
            success: function (result) {         
                tasks = result;
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
        return tasks;
    }
    
    function drawChart() {                
        var data = new google.visualization.DataTable();

        //console.log(tasks) 

        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('string', 'Resource');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete');
        data.addColumn('string', 'Dependencies');
        
        tasks.forEach(element => {
            data.addRows([
                [element.name, element.name, null, new Date(element.startDate), new Date(element.endDate), null, element.percentDone, element.dependency]
            ]);
        });        

        var options = {
            height: 500,
            gantt: {
                /*trackHeight: 30*/
                criticalPathEnabled: false, // Critical path arrows will be the same as other arrows.
                arrow: {
                    angle: 100,
                    width: 5,
                    color: 'green',
                    radius: 0
                }
            }
        };

        var chart = new google.visualization.Gantt(document.getElementById('plannings'));

        chart.draw(data, options);
    }       
</script>
{% endblock %}

", "planning/planning.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\planning\\planning.html.twig");
    }
}
