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
class __TwigTemplate_ec5ad6c785586acd20c5ad654b704fabc65b1770e8f62416304b09ae6f9ab73f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning.html.twig"));

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
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_new", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 8, $this->source); })())]), "html", null, true);
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
      
    setTimeout(function() {
        tasks = getTasks();        
        google.charts.load('current', {'packages':['gantt']});
        google.charts.setOnLoadCallback(drawChart);
    },1000)    

    function daysToMilliseconds(days) {
      return days * 24 * 60 * 60 * 1000;
    }
    
    function getTasks() {        
        \$.ajax({
            async: false,
            url: \"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_list_json", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 33, $this->source); })())]), "html", null, true);
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
        
        if (tasks !== undefined) {
            tasks.forEach(element => {
                data.addRows([
                    [element.name, element.name, null, new Date(element.startDate), new Date(element.endDate), null, element.percentDone, element.dependency]
                ]);
            });        
        }

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  94 => 33,  66 => 8,  63 => 7,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
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
      
    setTimeout(function() {
        tasks = getTasks();        
        google.charts.load('current', {'packages':['gantt']});
        google.charts.setOnLoadCallback(drawChart);
    },1000)    

    function daysToMilliseconds(days) {
      return days * 24 * 60 * 60 * 1000;
    }
    
    function getTasks() {        
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
        
        if (tasks !== undefined) {
            tasks.forEach(element => {
                data.addRows([
                    [element.name, element.name, null, new Date(element.startDate), new Date(element.endDate), null, element.percentDone, element.dependency]
                ]);
            });        
        }

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
", "planning/planning.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\planning\\planning.html.twig");
    }
}
