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
class __TwigTemplate_9a8fcb33e186bfcfa3e62bd563cc7e1b08fd2d93d852cf9133a01340f33f98fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/project_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "project/project_edit.html.twig", 4)->display($context);
        
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
        echo "
<div class=\"row mt-5\">
    <div class=\"col\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["autocomplete" => "off"]]);
        echo "
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "              
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <h1 class=\"text-center\">Projet ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h1> 
            
            <ul id=\"tab_project\" class=\"nav nav-tabs justify-content-center mb-3\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" data-id=\"tab_datas\" href=\"#\">Données</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link ";
        // line 24
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24))) {
            echo " disabled ";
        }
        echo "\" data-id=\"tab_persons\" href=\"#\">Intervenants</a>
                </li>  
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 27
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27))) {
            echo " disabled ";
        }
        echo "\" data-id=\"work\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_list", ["projectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 27, $this->source); })())]), "html", null, true);
        echo "\">Travaux</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 30
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30))) {
            echo " disabled ";
        }
        echo "\"  data-id=\"planning\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_list", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "\">Planning</a>
                </li> 
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 33
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
            echo " disabled ";
        }
        echo "\" data-id=\"document\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_list", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })())]), "html", null, true);
        echo "\">Documents</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 36
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36))) {
            echo " disabled ";
        }
        echo "\"  data-id=\"comment\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_comments", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "\">Commentaires</a>
                </li>                         
            </ul>

            <div id=\"tab_datas\" class=\"tab_body tab_active\">
                <div class=\"mb-3\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "site", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Site"]);
        echo "
                    ";
        // line 43
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "site", [], "any", false, false, false, 43), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "site", [], "any", false, false, false, 45), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 48
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "site", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du projet"]);
        echo "
                    ";
        // line 53
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 58
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "title", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>  
                
                <div class=\"mb-3\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "reference", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Référence du projet"]);
        echo "
                    ";
        // line 63
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "reference", [], "any", false, false, false, 63), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "reference", [], "any", false, false, false, 65), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 68
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "reference", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>           

                <div class=\"mb-3\">
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "year", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Année du projet"]);
        echo "
                    ";
        // line 73
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "year", [], "any", false, false, false, 73), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "year", [], "any", false, false, false, 75), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 78
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "year", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description du projet"]);
        echo "
                    ";
        // line 83
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 88
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "workStartDate", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Début du projet"]);
        echo "
                    ";
        // line 93
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "workStartDate", [], "any", false, false, false, 93), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "workStartDate", [], "any", false, false, false, 95), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 98
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "workStartDate", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    

                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "startSituation", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Etat des lieux"]);
        echo "
                    ";
        // line 101
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "startSituation", [], "any", false, false, false, 101), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "startSituation", [], "any", false, false, false, 103), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 106
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "startSituation", [], "any", false, false, false, 106), 'widget');
        echo "  
                </div>  

                <div class=\"mb-3\">
                    
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "workEndDate", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fin du projet"]);
        echo "
                    ";
        // line 112
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "workEndDate", [], "any", false, false, false, 112), 'errors')) {
            echo "                            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "workEndDate", [], "any", false, false, false, 114), 'errors');
            echo "
                        </div>     
                    ";
        }
        // line 117
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "workEndDate", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "endSituation", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Etat des lieux"]);
        echo "
                    ";
        // line 120
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "endSituation", [], "any", false, false, false, 120), 'errors')) {
            echo "                            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "endSituation", [], "any", false, false, false, 122), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 125
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "endSituation", [], "any", false, false, false, 125), 'widget');
        echo "  
                </div>

                <div class=\"mb-3\">
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "state", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut du projet"]);
        echo "
                    ";
        // line 130
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "state", [], "any", false, false, false, 130), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "state", [], "any", false, false, false, 132), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 135
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "state", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                </div>
            </div>

            <div id=\"tab_persons\" class=\"tab_body\">

                <div class=\"mb-3\">
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "company", [], "any", false, false, false, 142), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Entreprises"]);
        echo "
                    ";
        // line 143
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "company", [], "any", false, false, false, 143), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "company", [], "any", false, false, false, 145), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 148
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "company", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "form-control select2", "style" => "width:200px;"]]);
        echo "    
                </div>

                <fieldset class=\"form-group\">
                    <legend>Personnes internes</legend>
                    <div class=\"mb-3\">
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "architect", [], "any", false, false, false, 154), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte"]);
        echo "
                        ";
        // line 155
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "architect", [], "any", false, false, false, 155), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "architect", [], "any", false, false, false, 157), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 160
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "architect", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "secondArchitect", [], "any", false, false, false, 164), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte en second"]);
        echo "
                        ";
        // line 165
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "secondArchitect", [], "any", false, false, false, 165), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "secondArchitect", [], "any", false, false, false, 167), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 170
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "secondArchitect", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>                

                    <div class=\"mb-3\">
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 174), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Electricité Faible"]);
        echo "
                        ";
        // line 175
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 175), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 177
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 177), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 180
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 184), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Electricité Fort"]);
        echo "
                        ";
        // line 185
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 185), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 187
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 187), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 190
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 194), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur HVAC"]);
        echo "
                        ";
        // line 195
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 195), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 197), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 200
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 204), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Sanitaires"]);
        echo "
                        ";
        // line 205
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 205), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 207
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 207), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 210
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 214), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Fluides médicaux"]);
        echo "
                        ";
        // line 215
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 215), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 217
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 217), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 220
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "supervisor", [], "any", false, false, false, 224), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Conducteur en charge"]);
        echo "
                        ";
        // line 225
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "supervisor", [], "any", false, false, false, 225), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 227
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "supervisor", [], "any", false, false, false, 227), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 230
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "supervisor", [], "any", false, false, false, 230), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>
                </fieldset>

                <fieldset class=\"form-group\">
                    <legend>Personnes externes</legend>
                    <div class=\"mb-3\">
                        ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 237), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte externe"]);
        echo "
                        ";
        // line 238
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 238), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 240), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 243
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 243), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>  

                    <div class=\"mb-3\">
                        ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 247), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Coordinateur sécurité externe"]);
        echo "
                        ";
        // line 248
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 248), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 250), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 253
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 253), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "externalEngineer", [], "any", false, false, false, 257), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur externe"]);
        echo "
                        ";
        // line 258
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
            // line 259
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "vars", [], "any", false, false, false, 259), "value", [], "any", false, false, false, 259), "externalEngineer", [], "any", false, false, false, 259))) {
                // line 260
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invitation", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 260, $this->source); })()), "personId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "vars", [], "any", false, false, false, 260), "value", [], "any", false, false, false, 260), "externalEngineer", [], "any", false, false, false, 260), "id", [], "any", false, false, false, 260)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            ";
            }
            // line 262
            echo "                        ";
        }
        echo "    
                        ";
        // line 263
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "externalEngineer", [], "any", false, false, false, 263), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 265
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "externalEngineer", [], "any", false, false, false, 265), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 268
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "externalEngineer", [], "any", false, false, false, 268), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>  
                </fieldset>
            </div>   
            
            <div id=\"tab_others\" class=\"tab_body\"></div>

            <div id=\"buttons\" class=\"my-2 show\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                ";
        // line 277
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "vars", [], "any", false, false, false, 277), "value", [], "any", false, false, false, 277), "id", [], "any", false, false, false, 277)) {
            echo "           
                    ";
            // line 278
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
                // line 279
                echo "                        <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                    ";
            }
            // line 281
            echo "                ";
        }
        // line 282
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>                
            </div>      
                  
        ";
        // line 285
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"project_title\").focus()    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_delete", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 294, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 298
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
        const href = \$(this).attr('href')             
        if (href != '#') {
            \$('#buttons').removeClass('show').addClass('hidden')
            \$.ajax({
                url: href,
                type: 'GET',
                dataType: 'text',
                async: false,
                success: function (result) {                    
                    \$('#tab_others').html(result)
                    \$('.tab_body').removeClass('tab_active')            
                    \$('#tab_others').addClass('tab_active')
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors du chargement')                    
                }
            })            
        }
        else {            
            \$('#buttons').removeClass('hidden').addClass('show')
            \$('.tab_body').removeClass('tab_active')            
            \$('#'+id).addClass('tab_active')
        }
        \$(this).addClass('active')
        \$('#tab_project .nav-link').removeClass('active')    
        return false;    
    })

    const onglet = '";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["onglet"]) || array_key_exists("onglet", $context) ? $context["onglet"] : (function () { throw new RuntimeError('Variable "onglet" does not exist.', 340, $this->source); })()), "html", null, true);
        echo "';
    if (onglet != '') {      
        const obj = \$('a[data-id=\"'+onglet+'\"]')       
        obj.parent().addClass('active')
        obj.trigger('click')
    }

    \$('.select2').select2()
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  793 => 340,  748 => 298,  741 => 294,  729 => 285,  722 => 282,  719 => 281,  715 => 279,  713 => 278,  709 => 277,  696 => 268,  690 => 265,  685 => 263,  680 => 262,  674 => 260,  671 => 259,  669 => 258,  665 => 257,  657 => 253,  651 => 250,  646 => 248,  642 => 247,  634 => 243,  628 => 240,  623 => 238,  619 => 237,  608 => 230,  602 => 227,  597 => 225,  593 => 224,  585 => 220,  579 => 217,  574 => 215,  570 => 214,  562 => 210,  556 => 207,  551 => 205,  547 => 204,  539 => 200,  533 => 197,  528 => 195,  524 => 194,  516 => 190,  510 => 187,  505 => 185,  501 => 184,  493 => 180,  487 => 177,  482 => 175,  478 => 174,  470 => 170,  464 => 167,  459 => 165,  455 => 164,  447 => 160,  441 => 157,  436 => 155,  432 => 154,  422 => 148,  416 => 145,  411 => 143,  407 => 142,  396 => 135,  390 => 132,  385 => 130,  381 => 129,  373 => 125,  367 => 122,  362 => 120,  358 => 119,  352 => 117,  346 => 114,  341 => 112,  337 => 111,  328 => 106,  322 => 103,  317 => 101,  313 => 100,  307 => 98,  301 => 95,  296 => 93,  292 => 92,  284 => 88,  278 => 85,  273 => 83,  269 => 82,  261 => 78,  255 => 75,  250 => 73,  246 => 72,  238 => 68,  232 => 65,  227 => 63,  223 => 62,  215 => 58,  209 => 55,  204 => 53,  200 => 52,  192 => 48,  186 => 45,  181 => 43,  177 => 42,  164 => 36,  154 => 33,  144 => 30,  134 => 27,  126 => 24,  115 => 17,  106 => 14,  103 => 13,  99 => 12,  95 => 11,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
            {% for message in app.flashes('message') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message }}              
                </div>
            {% endfor %}
            <h1 class=\"text-center\">Projet {{name}}</h1> 
            
            <ul id=\"tab_project\" class=\"nav nav-tabs justify-content-center mb-3\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" data-id=\"tab_datas\" href=\"#\">Données</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link {% if form.vars.value.id is null %} disabled {% endif %}\" data-id=\"tab_persons\" href=\"#\">Intervenants</a>
                </li>  
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if form.vars.value.id is null %} disabled {% endif %}\" data-id=\"work\" href=\"{{path('project_works_list',{projectId:id})}}\">Travaux</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if form.vars.value.id is null %} disabled {% endif %}\"  data-id=\"planning\" href=\"{{path('planning_list',{id:id})}}\">Planning</a>
                </li> 
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if form.vars.value.id is null %} disabled {% endif %}\" data-id=\"document\" href=\"{{path('document_list',{id:id})}}\">Documents</a>
                </li>   
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if form.vars.value.id is null %} disabled {% endif %}\"  data-id=\"comment\" href=\"{{path('project_comments',{id:id})}}\">Commentaires</a>
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
                    {{ form_widget(form.company, {'attr': {'class': 'form-control select2', 'style':'width:200px;'}}) }}    
                </div>

                <fieldset class=\"form-group\">
                    <legend>Personnes internes</legend>
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
                </fieldset>

                <fieldset class=\"form-group\">
                    <legend>Personnes externes</legend>
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
                        {{ form_label(form.safetyCoordinator, 'Coordinateur sécurité externe', {'label_attr': { class: 'form-label' }}) }}
                        {% if form_errors(form.safetyCoordinator) %}            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.safetyCoordinator) }}
                            </div>            
                        {% endif %}
                        {{ form_widget(form.safetyCoordinator, {'attr': {'class': 'form-control'}}) }}    
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.externalEngineer, 'Ingénieur externe', {'label_attr': { class: 'form-label' }}) }}
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                            {% if form.vars.value.externalEngineer is not null %}
                                <a href=\"{{path('invitation', {id:id,personId:form.vars.value.externalEngineer.id})}}\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            {% endif %}
                        {% endif %}    
                        {% if form_errors(form.externalEngineer) %}            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.externalEngineer) }}
                            </div>            
                        {% endif %}
                        {{ form_widget(form.externalEngineer, {'attr': {'class': 'form-control'}}) }}    
                    </div>  
                </fieldset>
            </div>   
            
            <div id=\"tab_others\" class=\"tab_body\"></div>

            <div id=\"buttons\" class=\"my-2 show\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                {% if form.vars.value.id %}           
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                        <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                    {% endif %}
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
        const href = \$(this).attr('href')             
        if (href != '#') {
            \$('#buttons').removeClass('show').addClass('hidden')
            \$.ajax({
                url: href,
                type: 'GET',
                dataType: 'text',
                async: false,
                success: function (result) {                    
                    \$('#tab_others').html(result)
                    \$('.tab_body').removeClass('tab_active')            
                    \$('#tab_others').addClass('tab_active')
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors du chargement')                    
                }
            })            
        }
        else {            
            \$('#buttons').removeClass('hidden').addClass('show')
            \$('.tab_body').removeClass('tab_active')            
            \$('#'+id).addClass('tab_active')
        }
        \$(this).addClass('active')
        \$('#tab_project .nav-link').removeClass('active')    
        return false;    
    })

    const onglet = '{{onglet}}';
    if (onglet != '') {      
        const obj = \$('a[data-id=\"'+onglet+'\"]')       
        obj.parent().addClass('active')
        obj.trigger('click')
    }

    \$('.select2').select2()
</script>
{% endblock %}
", "project/project_edit.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\project\\project_edit.html.twig");
    }
}
