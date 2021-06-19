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

/* role/role_edit.html.twig */
class __TwigTemplate_81306ed551590f419c13324f7896b0d2a6ed48ac2970d38498f3610f8da6fca3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/role_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "role/role_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "role/role_edit.html.twig", 4)->display($context);
        
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
    <div class=\"col\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["autocomplete" => "off"]]);
        echo "
            <h1 class=\"text-center\">Fonction</h1>
            <div class=\"mb-3\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de la fonction"]);
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

            <div class=\"form-success\">
                ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "
            </div>

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)) {
            echo "           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteRole()\">Supprimer</a>
                ";
        }
        // line 31
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("role_list");
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>
            </div>            
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"role_name\").focus()    

    function deleteRole() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("role_delete", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("role_list");
        echo "?message=Fonction supprimée'
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

    }

    public function getTemplateName()
    {
        return "role/role_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  140 => 42,  128 => 33,  122 => 31,  116 => 28,  108 => 23,  100 => 19,  94 => 16,  89 => 14,  85 => 13,  79 => 10,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
            <h1 class=\"text-center\">Fonction</h1>
            <div class=\"mb-3\">
                {{ form_label(form.name, 'Nom de la fonction', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.name) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.name) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}    
            </div>    

            <div class=\"form-success\">
                {{ message }}
            </div>

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                {% if form.vars.value.id %}           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteRole()\">Supprimer</a>
                {% endif %}
                <a href=\"{{path('role_list')}}\" class=\"btn btn-secondary ml-3\">Retour</a>
            </div>            
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"role_name\").focus()    

    function deleteRole() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '{{path(\"role_delete\",{id:id})}}',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '{{path(\"role_list\")}}?message=Fonction supprimée'
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
", "role/role_edit.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\role\\role_edit.html.twig");
    }
}
