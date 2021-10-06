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
        ";
        // line 8
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EXTERNAL") == false)) {
            echo " 
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_new", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 9, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm ml-5 add\">Nouvelle tâche</a>
        ";
        }
        // line 11
        echo "    </div>
</div>
<!-- Ajout d'un popup modal pour le commentaire en cas de modif sur tâche -->
<svg id=\"gantt\" class=\"m-5\"></svg>
<div id=\"showPopup\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Commentaire sur la tâche</h5>          
        </div>
        <div class=\"modal-body\">
          <textarea name=\"comment\" id=\"comment\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
        <div class=\"modal-footer\">
          <!--<button type=\"button\" id=\"showPopup_close\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>-->
          <button type=\"button\" id=\"showPopup_save\" class=\"btn btn-primary\">Enregistrer</button>
        </div>
      </div>
    </div>
</div>
<script>
    const is_external = ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["is_external"]) || array_key_exists("is_external", $context) ? $context["is_external"] : (function () { throw new RuntimeError('Variable "is_external" does not exist.', 32, $this->source); })()), "html", null, true);
        echo ";

    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)         
    
    tasks = getTasks();         
    
    gantt = new Gantt(\"#gantt\", tasks, { 
        is_readonly: is_external ? true : false,
        custom_popup_html: function(task) {            
            const start_date = String(task._start.getDate()).padStart(2, '0') + '/' + String(task._start.getMonth() + 1).padStart(2, '0') + '/' + task._start.getFullYear();
            const end_date = String(task._end.getDate()).padStart(2, '0') + '/' + String(task._end.getMonth() + 1).padStart(2, '0') + '/' + task._end.getFullYear();
            if (is_external) {
                return `
                <div class=\"details-container\">
                <h3>\${task.name}</h3>
                <p>Du \${start_date} au \${end_date}</p>
                <p>Effectué à \${task.progress} %</p>
                <p>Modifié le \${task.updatedAt} par \${task.username}</p>                
                <button class=\"btn btn-sm btn-info text-center\" onclick=\"historique(\${task.id});return false;\">Historique</button>
                </div>
            `;
            }
            else {
                return `
                <div class=\"details-container\">
                <h3>\${task.name}</h3>
                <p>Du \${start_date} au \${end_date}</p>
                <p>Effectué à \${task.progress} %</p>
                <p>Modifié le \${task.updatedAt} par \${task.username}</p>
                <button class=\"btn btn-sm btn-blue text-center\" onclick=\"editTask(\${task.id});return false;\">Editer</button>
                <button class=\"btn btn-sm btn-info text-center\" onclick=\"historique(\${task.id});return false;\">Historique</button>
                </div>
            `;
            }           
        },
        on_date_change: function(task, start, end) {
            if (is_external) return;

            let dd, mm, yyyy;

            dd = String(start.getDate()).padStart(2, '0');
            mm = String(start.getMonth() + 1).padStart(2, '0');
            yyyy = start.getFullYear();
            start = yyyy + '-' + mm + '-' + dd;   

            dd = String(end.getDate()).padStart(2, '0');
            mm = String(end.getMonth() + 1).padStart(2, '0');
            yyyy = end.getFullYear();
            end = yyyy + '-' + mm + '-' + dd;   
          
            updateTaskDates(task.id, start, end);

            if (task.isParent) showComment(task.id);
        },

        on_progress_change: function(task, progress) {         
            if (is_external) return;
            updateTaskProgress(task.id, progress);
        }
       
    });

    gantt.change_view_mode('Week');       
    
    setTimeout(function() {
        scrollToToday();       
    }, 1000);

    /************************************/
   
    // réception des tâches en json du controleur
    function getTasks() {  
        let tasks;       
        \$.ajax({
            async: false,
            url: \"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_list_json", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 110, $this->source); })())]), "html", null, true);
        echo "\",
            type: 'GET',
            dataType: 'text',
            success: function (data) {                  
                tasks = JSON.parse(data); 
                tasks.forEach((element, index) => {
                    element.id =  element.id.toString();
                    tasks[index] = element;                   
                });              
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })               
        return tasks;
    }

    function updateTaskDates(taskId, start, end) {
        if (is_external) return;
        let url = \"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_update_dates", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 130, $this->source); })()), "taskId" => 0]), "html", null, true);
        echo "\";
        url = url.replace('/0', '/'+taskId)
        \$.ajax({            
            async: true,
            url: url,
            type: 'POST', 
            dataType: 'json',
            data: 'start=' + start + '&end='+end,     
            success: function (data) {        
                //console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
    }

    function updateTaskProgress(taskId, progress) {
        if (is_external) return;
        let url = \"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_update_progress", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 150, $this->source); })()), "taskId" => 0]), "html", null, true);
        echo "\";
        url = url.replace('/0', '/'+taskId)
        \$.ajax({
            async: true,
            url: url,
            type: 'POST', 
            data: 'progress=' + progress,
            success: function (data) {        
                //console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
    }

    function addComment(taskId, comment) {       
        let url = \"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_add_comment", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 168, $this->source); })()), "taskId" => 0]), "html", null, true);
        echo "\";
        url = url.replace('/0', '/'+taskId)
        \$.ajax({
            async: true,
            url: url,
            type: 'POST', 
            data: 'comment=' + comment,
            success: function (data) {        
                //console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
    }

    function editTask(taskId) {
        if (is_external) return;
        let url = \"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_edit", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 187, $this->source); })()), "taskId" => 0]), "html", null, true);
        echo "\";
        url = url.replace('/0', '/'+ taskId)
        document.location.href = url;
    }  
    
    function historique(taskId) {
        if (is_external) return;
        let url = \"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_history", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 194, $this->source); })()), "taskId" => 0]), "html", null, true);
        echo "\";
        url = url.replace('/0', '/'+ taskId)
        document.location.href = url;
    }  

    function scrollToToday() {   
        let date = new Date();
        let dd = String(date.getDate()).padStart(2, '0');
        let mm = String(date.getMonth() + 1).padStart(2, '0');
        let date_w = 'date_' + dd + '-' + mm;
        //console.log(date_w);
        let obj = document.getElementById(date_w);
        if (obj === undefined || obj == null) return;\t        
        \$('#'+date_w).addClass('gantt-today');
        let x = obj.getAttribute('x');
        if (x === undefined || x == null) return;\t        
        \$('.gantt-container').scrollLeft(x);
    }

    let taskId = 0;
    function showComment(id) {        
        taskId = id;
        \$('#showPopup').toggle();
        setTimeout(function() {
            \$('#comment').focus();            
        }, 250);
    }

    \$('body').on('click', '#showPopup_close', function(ev) {      
        \$('#showPopup').toggle();
        return true;
    });

    \$('body').on('click', '#showPopup_save', function(ev) {  
        if (\$('#comment').val().trim() == '') {
            \$('#comment').focus();
            return false;            
        }
        addComment(taskId, \$('#comment').val());
        \$('#comment').val('');
        \$('#showPopup').toggle();
        return true;
    });
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
        return array (  278 => 194,  268 => 187,  246 => 168,  225 => 150,  202 => 130,  179 => 110,  98 => 32,  75 => 11,  70 => 9,  66 => 8,  63 => 7,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
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
        {% if (is_granted('ROLE_EXTERNAL') == false) %} 
            <a href=\"{{path('planning_new', {id:projectId})}}\" class=\"btn btn-primary btn-sm ml-5 add\">Nouvelle tâche</a>
        {% endif %}
    </div>
</div>
<!-- Ajout d'un popup modal pour le commentaire en cas de modif sur tâche -->
<svg id=\"gantt\" class=\"m-5\"></svg>
<div id=\"showPopup\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Commentaire sur la tâche</h5>          
        </div>
        <div class=\"modal-body\">
          <textarea name=\"comment\" id=\"comment\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
        <div class=\"modal-footer\">
          <!--<button type=\"button\" id=\"showPopup_close\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>-->
          <button type=\"button\" id=\"showPopup_save\" class=\"btn btn-primary\">Enregistrer</button>
        </div>
      </div>
    </div>
</div>
<script>
    const is_external = {{is_external}};

    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)         
    
    tasks = getTasks();         
    
    gantt = new Gantt(\"#gantt\", tasks, { 
        is_readonly: is_external ? true : false,
        custom_popup_html: function(task) {            
            const start_date = String(task._start.getDate()).padStart(2, '0') + '/' + String(task._start.getMonth() + 1).padStart(2, '0') + '/' + task._start.getFullYear();
            const end_date = String(task._end.getDate()).padStart(2, '0') + '/' + String(task._end.getMonth() + 1).padStart(2, '0') + '/' + task._end.getFullYear();
            if (is_external) {
                return `
                <div class=\"details-container\">
                <h3>\${task.name}</h3>
                <p>Du \${start_date} au \${end_date}</p>
                <p>Effectué à \${task.progress} %</p>
                <p>Modifié le \${task.updatedAt} par \${task.username}</p>                
                <button class=\"btn btn-sm btn-info text-center\" onclick=\"historique(\${task.id});return false;\">Historique</button>
                </div>
            `;
            }
            else {
                return `
                <div class=\"details-container\">
                <h3>\${task.name}</h3>
                <p>Du \${start_date} au \${end_date}</p>
                <p>Effectué à \${task.progress} %</p>
                <p>Modifié le \${task.updatedAt} par \${task.username}</p>
                <button class=\"btn btn-sm btn-blue text-center\" onclick=\"editTask(\${task.id});return false;\">Editer</button>
                <button class=\"btn btn-sm btn-info text-center\" onclick=\"historique(\${task.id});return false;\">Historique</button>
                </div>
            `;
            }           
        },
        on_date_change: function(task, start, end) {
            if (is_external) return;

            let dd, mm, yyyy;

            dd = String(start.getDate()).padStart(2, '0');
            mm = String(start.getMonth() + 1).padStart(2, '0');
            yyyy = start.getFullYear();
            start = yyyy + '-' + mm + '-' + dd;   

            dd = String(end.getDate()).padStart(2, '0');
            mm = String(end.getMonth() + 1).padStart(2, '0');
            yyyy = end.getFullYear();
            end = yyyy + '-' + mm + '-' + dd;   
          
            updateTaskDates(task.id, start, end);

            if (task.isParent) showComment(task.id);
        },

        on_progress_change: function(task, progress) {         
            if (is_external) return;
            updateTaskProgress(task.id, progress);
        }
       
    });

    gantt.change_view_mode('Week');       
    
    setTimeout(function() {
        scrollToToday();       
    }, 1000);

    /************************************/
   
    // réception des tâches en json du controleur
    function getTasks() {  
        let tasks;       
        \$.ajax({
            async: false,
            url: \"{{path('planning_list_json',{id:projectId})}}\",
            type: 'GET',
            dataType: 'text',
            success: function (data) {                  
                tasks = JSON.parse(data); 
                tasks.forEach((element, index) => {
                    element.id =  element.id.toString();
                    tasks[index] = element;                   
                });              
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })               
        return tasks;
    }

    function updateTaskDates(taskId, start, end) {
        if (is_external) return;
        let url = \"{{path('planning_update_dates',{id:projectId, taskId:0})}}\";
        url = url.replace('/0', '/'+taskId)
        \$.ajax({            
            async: true,
            url: url,
            type: 'POST', 
            dataType: 'json',
            data: 'start=' + start + '&end='+end,     
            success: function (data) {        
                //console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
    }

    function updateTaskProgress(taskId, progress) {
        if (is_external) return;
        let url = \"{{path('planning_update_progress',{id:projectId, taskId:0})}}\";
        url = url.replace('/0', '/'+taskId)
        \$.ajax({
            async: true,
            url: url,
            type: 'POST', 
            data: 'progress=' + progress,
            success: function (data) {        
                //console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
    }

    function addComment(taskId, comment) {       
        let url = \"{{path('planning_add_comment',{id:projectId, taskId:0})}}\";
        url = url.replace('/0', '/'+taskId)
        \$.ajax({
            async: true,
            url: url,
            type: 'POST', 
            data: 'comment=' + comment,
            success: function (data) {        
                //console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown ) {
                console.log(jqXHR, textStatus, errorThrown)
                alert('Erreur chargement des tâches')
            }
        })    
    }

    function editTask(taskId) {
        if (is_external) return;
        let url = \"{{path('planning_edit',{id:projectId, taskId:0})}}\";
        url = url.replace('/0', '/'+ taskId)
        document.location.href = url;
    }  
    
    function historique(taskId) {
        if (is_external) return;
        let url = \"{{path('planning_history',{id:projectId, taskId:0})}}\";
        url = url.replace('/0', '/'+ taskId)
        document.location.href = url;
    }  

    function scrollToToday() {   
        let date = new Date();
        let dd = String(date.getDate()).padStart(2, '0');
        let mm = String(date.getMonth() + 1).padStart(2, '0');
        let date_w = 'date_' + dd + '-' + mm;
        //console.log(date_w);
        let obj = document.getElementById(date_w);
        if (obj === undefined || obj == null) return;\t        
        \$('#'+date_w).addClass('gantt-today');
        let x = obj.getAttribute('x');
        if (x === undefined || x == null) return;\t        
        \$('.gantt-container').scrollLeft(x);
    }

    let taskId = 0;
    function showComment(id) {        
        taskId = id;
        \$('#showPopup').toggle();
        setTimeout(function() {
            \$('#comment').focus();            
        }, 250);
    }

    \$('body').on('click', '#showPopup_close', function(ev) {      
        \$('#showPopup').toggle();
        return true;
    });

    \$('body').on('click', '#showPopup_save', function(ev) {  
        if (\$('#comment').val().trim() == '') {
            \$('#comment').focus();
            return false;            
        }
        addComment(taskId, \$('#comment').val());
        \$('#comment').val('');
        \$('#showPopup').toggle();
        return true;
    });
</script>
", "planning/planning.html.twig", "C:\\Users\\utilisateur\\Videos\\APP_Gestion_Projet\\templates\\planning\\planning.html.twig");
    }
}
