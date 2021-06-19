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

/* planning/planning_edit.html.twig */
class __TwigTemplate_d0f809020276377b15138fc61a856c4baca5f7c46f9885d97198586cdae2dcec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning/planning_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "planning/planning_edit.html.twig", 4)->display($context);
        
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
    <div class=\"col\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["autocomplete" => "off"]]);
        echo "
            <h1 class=\"text-center\">Tâche planning</h1>
            <div class=\"mb-3\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de la tâche"]);
        echo "
                ";
        // line 14
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>  
            
            <div class=\"mb-3\">                    
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dependency", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Dépend de la tâche"]);
        echo "
                ";
        // line 24
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dependency", [], "any", false, false, false, 24), 'errors')) {
            echo "                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dependency", [], "any", false, false, false, 26), 'errors');
            echo "
                    </div>     
                ";
        }
        // line 29
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dependency", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">                    
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "startDate", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Début"]);
        echo "
                ";
        // line 34
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "startDate", [], "any", false, false, false, 34), 'errors')) {
            echo "                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "startDate", [], "any", false, false, false, 36), 'errors');
            echo "
                    </div>     
                ";
        }
        // line 39
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "startDate", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>    

            <div class=\"mb-3\">                    
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "endDate", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fin"]);
        echo "
                ";
        // line 44
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "endDate", [], "any", false, false, false, 44), 'errors')) {
            echo "                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "endDate", [], "any", false, false, false, 46), 'errors');
            echo "
                    </div>     
                ";
        }
        // line 49
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "endDate", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>    

            <div class=\"mb-3\">                    
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "percentDone", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Pourcentage effecutée"]);
        echo " : <span id=\"val\">";
        echo twig_escape_filter($this->env, (isset($context["percentDone"]) || array_key_exists("percentDone", $context) ? $context["percentDone"] : (function () { throw new RuntimeError('Variable "percentDone" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " %</span>
                ";
        // line 54
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "percentDone", [], "any", false, false, false, 54), 'errors')) {
            echo "                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "percentDone", [], "any", false, false, false, 56), 'errors');
            echo "
                    </div>     
                ";
        }
        // line 59
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "percentDone", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>    

            <div class=\"mb-3\">                    
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "color", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Couleur"]);
        echo "
                ";
        // line 64
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "color", [], "any", false, false, false, 64), 'errors')) {
            echo "                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "color", [], "any", false, false, false, 66), 'errors');
            echo "
                    </div>     
                ";
        }
        // line 69
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "color", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>    

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)) {
            echo "           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deletePlanning()\">Supprimer</a>
                ";
        }
        // line 77
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 77, $this->source); })()), "onglet" => "planning"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>
            </div>            
        ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"planning_name\").focus()  
    
    \$('#planning_percentDone').on('input', function () {
        const val = \$(this).val()
        \$('#val').html(val + ' %')
    })

    function deletePlanning() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_delete", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 93, $this->source); })()), "taskId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 93, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_list", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 97, $this->source); })())]), "html", null, true);
        echo "?message=Tâche supprimée'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "planning/planning_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 97,  270 => 93,  253 => 79,  247 => 77,  241 => 74,  232 => 69,  226 => 66,  221 => 64,  217 => 63,  209 => 59,  203 => 56,  198 => 54,  192 => 53,  184 => 49,  178 => 46,  173 => 44,  169 => 43,  161 => 39,  155 => 36,  150 => 34,  146 => 33,  138 => 29,  132 => 26,  127 => 24,  123 => 23,  115 => 19,  109 => 16,  104 => 14,  100 => 13,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'navbar.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"row mt-5\">
    <div class=\"col\">
        {{ form_start(form, {'attr' : {'autocomplete' : 'off'}}) }}
            <h1 class=\"text-center\">Tâche planning</h1>
            <div class=\"mb-3\">
                {{ form_label(form.name, 'Nom de la tâche', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.name) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.name) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}    
            </div>  
            
            <div class=\"mb-3\">                    
                {{ form_label(form.dependency, 'Dépend de la tâche', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.dependency) %}                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.dependency) }}
                    </div>     
                {% endif %}
                {{ form_widget(form.dependency, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">                    
                {{ form_label(form.startDate, 'Début', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.startDate) %}                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.startDate) }}
                    </div>     
                {% endif %}
                {{ form_widget(form.startDate, {'attr': {'class': 'form-control'}}) }}    
            </div>    

            <div class=\"mb-3\">                    
                {{ form_label(form.endDate, 'Fin', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.endDate) %}                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.endDate) }}
                    </div>     
                {% endif %}
                {{ form_widget(form.endDate, {'attr': {'class': 'form-control'}}) }}    
            </div>    

            <div class=\"mb-3\">                    
                {{ form_label(form.percentDone, 'Pourcentage effecutée', {'label_attr': { class: 'form-label' }}) }} : <span id=\"val\">{{percentDone}} %</span>
                {% if form_errors(form.percentDone) %}                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.percentDone) }}
                    </div>     
                {% endif %}
                {{ form_widget(form.percentDone, {'attr': {'class': 'form-control'}}) }}    
            </div>    

            <div class=\"mb-3\">                    
                {{ form_label(form.color, 'Couleur', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.color) %}                            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.color) }}
                    </div>     
                {% endif %}
                {{ form_widget(form.color, {'attr': {'class': 'form-control'}}) }}    
            </div>    

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                {% if form.vars.value.id %}           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deletePlanning()\">Supprimer</a>
                {% endif %}
                <a href=\"{{path('project_edit', {id:projectId, onglet:'planning'})}}\" class=\"btn btn-secondary ml-3\">Retour</a>
            </div>            
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"planning_name\").focus()  
    
    \$('#planning_percentDone').on('input', function () {
        const val = \$(this).val()
        \$('#val').html(val + ' %')
    })

    function deletePlanning() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '{{path(\"planning_delete\",{id:projectId, taskId:id})}}',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '{{path(\"planning_list\", {id:projectId})}}?message=Tâche supprimée'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }
</script>
{% endblock %}
", "planning/planning_edit.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\planning\\planning_edit.html.twig");
    }
}
