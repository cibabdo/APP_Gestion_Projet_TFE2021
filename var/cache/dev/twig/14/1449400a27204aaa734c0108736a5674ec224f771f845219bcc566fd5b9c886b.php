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

/* project/project_edit.html.twig */
class __TwigTemplate_6b5b8ba8b391bfc4b1d2512d72956ed9a5bde017ffdd29b99c191b5a188da1fc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/project_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "project/project_edit.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
<div class=\"row mt-5\">
    <div class=\"col\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["autocomplete" => "off"]]);
        echo "
            <h1 class=\"text-center\">Projet</h1> 
            
            <ul id=\"tab_project\" class=\"nav nav-tabs justify-content-center mb-3\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" data-id=\"tab_datas\" href=\"#\">Données</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Intervenants</a>
                </li>  
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Travaux</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Planning</a>
                </li> 
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Documents</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Commentaires</a>
                </li>                         
            </ul>

            <div id=\"tab_datas\" class=\"tab_body tab_active\">
                <div class=\"mb-3\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "site", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Site"]);
        echo "
                    ";
        // line 38
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "site", [], "any", false, false, false, 38), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "site", [], "any", false, false, false, 40), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 43
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "site", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "title", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du projet"]);
        echo "
                    ";
        // line 48
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 53
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>  
                
                <div class=\"mb-3\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "reference", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Référence du projet"]);
        echo "
                    ";
        // line 58
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "reference", [], "any", false, false, false, 58), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "reference", [], "any", false, false, false, 60), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 63
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "reference", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>           

                <div class=\"mb-3\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "year", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Année du projet"]);
        echo "
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "year", [], "any", false, false, false, 68), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "year", [], "any", false, false, false, 70), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 73
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "year", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description du projet"]);
        echo "
                    ";
        // line 78
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 83
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "workStartDate", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Début du projet"]);
        echo "
                    ";
        // line 88
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "workStartDate", [], "any", false, false, false, 88), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "workStartDate", [], "any", false, false, false, 90), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 93
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "workStartDate", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    

                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "startSituation", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Etat des lieux"]);
        echo "
                    ";
        // line 96
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "startSituation", [], "any", false, false, false, 96), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "startSituation", [], "any", false, false, false, 98), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 101
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "startSituation", [], "any", false, false, false, 101), 'widget');
        echo "  
                </div>  

                <div class=\"mb-3\">
                    
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "workEndDate", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fin du projet"]);
        echo "
                    ";
        // line 107
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "workEndDate", [], "any", false, false, false, 107), 'errors')) {
            echo "                            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "workEndDate", [], "any", false, false, false, 109), 'errors');
            echo "
                        </div>     
                    ";
        }
        // line 112
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "workEndDate", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "endSituation", [], "any", false, false, false, 114), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Etat des lieux"]);
        echo "
                    ";
        // line 115
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "endSituation", [], "any", false, false, false, 115), 'errors')) {
            echo "                            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "endSituation", [], "any", false, false, false, 117), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 120
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "endSituation", [], "any", false, false, false, 120), 'widget');
        echo "  
                </div>

                <div class=\"mb-3\">
                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "state", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut du projet"]);
        echo "
                    ";
        // line 125
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "state", [], "any", false, false, false, 125), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "state", [], "any", false, false, false, 127), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 130
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "state", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>
            </div>

            <div id=\"tab_persons\" class=\"tab_body\">

                <div class=\"mb-3\">
                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "company", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Entreprises"]);
        echo "
                    ";
        // line 138
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "company", [], "any", false, false, false, 138), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 140
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "company", [], "any", false, false, false, 140), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 143
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "company", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "architect", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte"]);
        echo "
                    ";
        // line 148
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "architect", [], "any", false, false, false, 148), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "architect", [], "any", false, false, false, 150), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 153
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "architect", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "secondArchitect", [], "any", false, false, false, 157), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte en second"]);
        echo "
                    ";
        // line 158
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "secondArchitect", [], "any", false, false, false, 158), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 160
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "secondArchitect", [], "any", false, false, false, 160), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 163
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "secondArchitect", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 167), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte externe"]);
        echo "
                    ";
        // line 168
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 168), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 170
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 170), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 173
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>  

                <div class=\"mb-3\">
                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 177), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Coordinateur sécurité"]);
        echo "
                    ";
        // line 178
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 178), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 180), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 183
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "externalEngineer", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur externe"]);
        echo "
                    ";
        // line 188
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "externalEngineer", [], "any", false, false, false, 188), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "externalEngineer", [], "any", false, false, false, 190), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 193
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "externalEngineer", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>  

                <div class=\"mb-3\">
                    ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 197), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Electricité Faible"]);
        echo "
                    ";
        // line 198
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 198), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 200), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 203
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 207), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Electricité Fort"]);
        echo "
                    ";
        // line 208
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 208), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 210), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 213
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 213), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 217), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur HVAC"]);
        echo "
                    ";
        // line 218
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 218), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 220), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 223
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 227), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Sanitaires"]);
        echo "
                    ";
        // line 228
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 228), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 230
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 230), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 233
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 233), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 237), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Fluides médicaux"]);
        echo "
                    ";
        // line 238
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 238), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 240), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 243
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 243), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "supervisor", [], "any", false, false, false, 247), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Conducteur en charge"]);
        echo "
                    ";
        // line 248
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "supervisor", [], "any", false, false, false, 248), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "supervisor", [], "any", false, false, false, 250), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 253
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "supervisor", [], "any", false, false, false, 253), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>
            </div>           

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "vars", [], "any", false, false, false, 259), "value", [], "any", false, false, false, 259), "id", [], "any", false, false, false, 259)) {
            echo "           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                ";
        }
        // line 262
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>                
            </div>      
                  
        ";
        // line 265
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"project_title\").focus()    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_delete", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 274, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        echo "?message=Projet supprimé'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }

    \$('#tab_project .nav-link').click(function() {        
        const id = \$(this).attr('data-id')

        \$('#tab_project .nav-link').removeClass('active')
        \$('.tab_body').removeClass('tab_active')               
        
        \$(this).addClass('active')
        \$('#'+id).addClass('tab_active')
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "project/project_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 278,  642 => 274,  630 => 265,  623 => 262,  617 => 259,  607 => 253,  601 => 250,  596 => 248,  592 => 247,  584 => 243,  578 => 240,  573 => 238,  569 => 237,  561 => 233,  555 => 230,  550 => 228,  546 => 227,  538 => 223,  532 => 220,  527 => 218,  523 => 217,  515 => 213,  509 => 210,  504 => 208,  500 => 207,  492 => 203,  486 => 200,  481 => 198,  477 => 197,  469 => 193,  463 => 190,  458 => 188,  454 => 187,  446 => 183,  440 => 180,  435 => 178,  431 => 177,  423 => 173,  417 => 170,  412 => 168,  408 => 167,  400 => 163,  394 => 160,  389 => 158,  385 => 157,  377 => 153,  371 => 150,  366 => 148,  362 => 147,  354 => 143,  348 => 140,  343 => 138,  339 => 137,  328 => 130,  322 => 127,  317 => 125,  313 => 124,  305 => 120,  299 => 117,  294 => 115,  290 => 114,  284 => 112,  278 => 109,  273 => 107,  269 => 106,  260 => 101,  254 => 98,  249 => 96,  245 => 95,  239 => 93,  233 => 90,  228 => 88,  224 => 87,  216 => 83,  210 => 80,  205 => 78,  201 => 77,  193 => 73,  187 => 70,  182 => 68,  178 => 67,  170 => 63,  164 => 60,  159 => 58,  155 => 57,  147 => 53,  141 => 50,  136 => 48,  132 => 47,  124 => 43,  118 => 40,  113 => 38,  109 => 37,  80 => 11,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
            <h1 class=\"text-center\">Projet</h1> 
            
            <ul id=\"tab_project\" class=\"nav nav-tabs justify-content-center mb-3\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" data-id=\"tab_datas\" href=\"#\">Données</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Intervenants</a>
                </li>  
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Travaux</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Planning</a>
                </li> 
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Documents</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-id=\"tab_persons\" href=\"#\">Commentaires</a>
                </li>                         
            </ul>

            <div id=\"tab_datas\" class=\"tab_body tab_active\">
                <div class=\"mb-3\">
                    {{ form_label(form.site, 'Site', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.site) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.site) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.site, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.title, 'Nom du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.title) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.title) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}    
                </div>  
                
                <div class=\"mb-3\">
                    {{ form_label(form.reference, 'Référence du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.reference) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.reference) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.reference, {'attr': {'class': 'form-control'}}) }}    
                </div>           

                <div class=\"mb-3\">
                    {{ form_label(form.year, 'Année du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.year) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.year) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.year, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.description, 'Description du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.description) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.description) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.workStartDate, 'Début du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.workStartDate) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.workStartDate) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.workStartDate, {'attr': {'class': 'form-control'}}) }}    

                    {{ form_label(form.startSituation, 'Etat des lieux', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.startSituation) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.startSituation) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.startSituation) }}  
                </div>  

                <div class=\"mb-3\">
                    
                    {{ form_label(form.workEndDate, 'Fin du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.workEndDate) %}                            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.workEndDate) }}
                        </div>     
                    {% endif %}
                    {{ form_widget(form.workEndDate, {'attr': {'class': 'form-control'}}) }}    
                
                    {{ form_label(form.endSituation, 'Etat des lieux', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.endSituation) %}                            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.endSituation) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.endSituation) }}  
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.state, 'Statut du projet', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.state) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.state) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.state, {'attr': {'class': 'form-control'}}) }}    
                </div>
            </div>

            <div id=\"tab_persons\" class=\"tab_body\">

                <div class=\"mb-3\">
                    {{ form_label(form.company, 'Entreprises', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.company) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.company) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.company, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.architect, 'Architecte', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.architect) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.architect) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.architect, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.secondArchitect, 'Architecte en second', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.secondArchitect) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.secondArchitect) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.secondArchitect, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.externalArchitectureOffice, 'Architecte externe', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.externalArchitectureOffice) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.externalArchitectureOffice) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.externalArchitectureOffice, {'attr': {'class': 'form-control'}}) }}    
                </div>  

                <div class=\"mb-3\">
                    {{ form_label(form.safetyCoordinator, 'Coordinateur sécurité', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.safetyCoordinator) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.safetyCoordinator) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.safetyCoordinator, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.externalEngineer, 'Ingénieur externe', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.externalEngineer) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.externalEngineer) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.externalEngineer, {'attr': {'class': 'form-control'}}) }}    
                </div>  

                <div class=\"mb-3\">
                    {{ form_label(form.lowVoltageEngineer, 'Ingénieur Electricité Faible', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.lowVoltageEngineer) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.lowVoltageEngineer) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.lowVoltageEngineer, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.strongVoltageEngineer, 'Ingénieur Electricité Fort', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.strongVoltageEngineer) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.strongVoltageEngineer) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.strongVoltageEngineer, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.hvacEngineer, 'Ingénieur HVAC', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.hvacEngineer) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.hvacEngineer) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.hvacEngineer, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.sanitaryEngineer, 'Ingénieur Sanitaires', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.sanitaryEngineer) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.sanitaryEngineer) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.sanitaryEngineer, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.medicalFluidEngineer, 'Ingénieur Fluides médicaux', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.medicalFluidEngineer) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.medicalFluidEngineer) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.medicalFluidEngineer, {'attr': {'class': 'form-control'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.supervisor, 'Conducteur en charge', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.supervisor) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.supervisor) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.supervisor, {'attr': {'class': 'form-control'}}) }}    
                </div>
            </div>           

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                {% if form.vars.value.id %}           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                {% endif %}
                <a href=\"{{path('project_list')}}\" class=\"btn btn-secondary ml-3\">Retour</a>                
            </div>      
                  
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"project_title\").focus()    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '{{path(\"project_delete\",{id:id})}}',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '{{path(\"project_list\")}}?message=Projet supprimé'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }

    \$('#tab_project .nav-link').click(function() {        
        const id = \$(this).attr('data-id')

        \$('#tab_project .nav-link').removeClass('active')
        \$('.tab_body').removeClass('tab_active')               
        
        \$(this).addClass('active')
        \$('#'+id).addClass('tab_active')
    })
</script>
{% endblock %}
", "project/project_edit.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\project\\project_edit.html.twig");
    }
}
