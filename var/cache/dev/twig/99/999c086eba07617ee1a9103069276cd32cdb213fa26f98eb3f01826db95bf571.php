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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "company", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "form-control select2", "style" => "width:100%;border-color:rgb(206, 212, 218);color:rgb(206, 212, 218) !important;"]]);
        echo "    
                </div>

                <div class=\"mb-3\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "engineeringOffice", [], "any", false, false, false, 152), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Bureaux d'étude"]);
        echo "
                    ";
        // line 153
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "engineeringOffice", [], "any", false, false, false, 153), 'errors')) {
            echo "            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "engineeringOffice", [], "any", false, false, false, 155), 'errors');
            echo "
                        </div>            
                    ";
        }
        // line 158
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "engineeringOffice", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "form-control select2", "style" => "width:100%;border-color:rgb(206, 212, 218);color:rgb(206, 212, 218) !important;"]]);
        echo "    
                </div>              

                <fieldset class=\"form-group\">
                    <legend>Personnes internes</legend> 

                    <div class=\"mb-3\">
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "architect", [], "any", false, false, false, 165), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte"]);
        echo "
                        ";
        // line 166
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "architect", [], "any", false, false, false, 166), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "architect", [], "any", false, false, false, 168), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 171
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "architect", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "secondArchitect", [], "any", false, false, false, 175), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte en second"]);
        echo "
                        ";
        // line 176
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "secondArchitect", [], "any", false, false, false, 176), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "secondArchitect", [], "any", false, false, false, 178), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 181
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "secondArchitect", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>                

                    <div class=\"mb-3\">
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 185), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Electricité Faible"]);
        echo "
                        ";
        // line 186
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 186), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 188
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 188), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 191
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "lowVoltageEngineer", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 195), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Electricité Fort"]);
        echo "
                        ";
        // line 196
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 196), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 198
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 198), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 201
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "strongVoltageEngineer", [], "any", false, false, false, 201), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur HVAC"]);
        echo "
                        ";
        // line 206
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 206), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 208), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 211
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "hvacEngineer", [], "any", false, false, false, 211), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 215), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Sanitaires"]);
        echo "
                        ";
        // line 216
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 216), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 218
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 218), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 221
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "sanitaryEngineer", [], "any", false, false, false, 221), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 225), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur Fluides médicaux"]);
        echo "
                        ";
        // line 226
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 226), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 228
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 228), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 231
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "medicalFluidEngineer", [], "any", false, false, false, 231), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "supervisor", [], "any", false, false, false, 235), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Conducteur en charge"]);
        echo "
                        ";
        // line 236
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "supervisor", [], "any", false, false, false, 236), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "supervisor", [], "any", false, false, false, 238), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 241
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "supervisor", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                </fieldset>

                <fieldset class=\"form-group\">
                    <legend>Personnes externes</legend>
                    
                    <div class=\"mb-3\">
                        ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 250), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Architecte externe"]);
        echo "
                        ";
        // line 251
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
            // line 252
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "vars", [], "any", false, false, false, 252), "value", [], "any", false, false, false, 252), "externalArchitectureOffice", [], "any", false, false, false, 252))) {
                // line 253
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invitation", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 253, $this->source); })()), "personId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "vars", [], "any", false, false, false, 253), "value", [], "any", false, false, false, 253), "externalArchitectureOffice", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            ";
            }
            // line 255
            echo "                        ";
        }
        echo " 
                        ";
        // line 256
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 256), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 258
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 258), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 261
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "externalArchitectureOffice", [], "any", false, false, false, 261), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>  

                    <div class=\"mb-3\">
                        ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 265), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Coordinateur sécurité externe"]);
        echo "
                        ";
        // line 266
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
            // line 267
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "vars", [], "any", false, false, false, 267), "value", [], "any", false, false, false, 267), "safetyCoordinator", [], "any", false, false, false, 267))) {
                // line 268
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invitation", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 268, $this->source); })()), "personId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "vars", [], "any", false, false, false, 268), "value", [], "any", false, false, false, 268), "safetyCoordinator", [], "any", false, false, false, 268), "id", [], "any", false, false, false, 268)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            ";
            }
            // line 270
            echo "                        ";
        }
        echo " 
                        ";
        // line 271
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 271), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 273
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 273), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 276
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "safetyCoordinator", [], "any", false, false, false, 276), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "externalEngineer", [], "any", false, false, false, 280), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ingénieur externe"]);
        echo "
                        ";
        // line 281
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
            // line 282
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "vars", [], "any", false, false, false, 282), "value", [], "any", false, false, false, 282), "externalEngineer", [], "any", false, false, false, 282))) {
                // line 283
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invitation", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 283, $this->source); })()), "personId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "vars", [], "any", false, false, false, 283), "value", [], "any", false, false, false, 283), "externalEngineer", [], "any", false, false, false, 283), "id", [], "any", false, false, false, 283)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            ";
            }
            // line 285
            echo "                        ";
        }
        echo "    
                        ";
        // line 286
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "externalEngineer", [], "any", false, false, false, 286), 'errors')) {
            echo "            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 288
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "externalEngineer", [], "any", false, false, false, 288), 'errors');
            echo "
                            </div>            
                        ";
        }
        // line 291
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "externalEngineer", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
                    </div>  
                </fieldset>
            </div>   
            
            <div id=\"tab_others\" class=\"tab_body\"></div>

            <div id=\"buttons\" class=\"my-2 show\">
                ";
        // line 299
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EXTERNAL") == false)) {
            // line 300
            echo "                    <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                    ";
            // line 301
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "vars", [], "any", false, false, false, 301), "value", [], "any", false, false, false, 301), "id", [], "any", false, false, false, 301)) {
                echo "           
                        ";
                // line 302
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INTERNAL"))) {
                    // line 303
                    echo "                            <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                        ";
                }
                // line 305
                echo "                    ";
            }
            // line 306
            echo "                ";
        }
        // line 307
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>                
            </div>      
                  
        ";
        // line 310
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"project_title\").focus()    

    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_delete", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 324, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 328
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
        // line 370
        echo twig_escape_filter($this->env, (isset($context["onglet"]) || array_key_exists("onglet", $context) ? $context["onglet"] : (function () { throw new RuntimeError('Variable "onglet" does not exist.', 370, $this->source); })()), "html", null, true);
        echo "';
    if (onglet != '') {      
        const obj = \$('a[data-id=\"'+onglet+'\"]')       
        obj.parent().addClass('active')
        obj.trigger('click')
    }

    \$('.select2').select2()

    \$('form').on('submit', function() {
        // valider cohérence des dates
        const project_workStartDate = parseInt(\$('#project_workStartDate').val().replaceAll('-',''));
        const project_workEndDate = parseInt(\$('#project_workEndDate').val().replaceAll('-',''));
        //console.log(project_workStartDate, project_workEndDate);        
        if (project_workEndDate <= project_workStartDate) {
            \$('#project_workEndDate').focus();
            alert('La date de fin doit être postérieure à la date de début');
            return false;
        }
        return true;
    });

    /*
    const project_externalArchitectureOffice = \$('#project_externalArchitectureOffice').val();  
    \$('#project_externalArchitectureOffice').on('change', function(ev) {
        const id = \$(this).val();    
        const element = \$(this).prev();
        //console.log(element)
        if (element.html() != 'Inviter') return;
        if (id != project_externalArchitectureOffice) {
            //console.log(\$(this).prev());
            element.addClass('disabled-link');
        }
        else {
            element.removeClass('disabled-link')           
        }
    })    

    const project_safetyCoordinator = \$('#project_safetyCoordinator').val();  
    \$('#project_safetyCoordinator').on('change', function(ev) {
        const id = \$(this).val();    
        const element = \$(this).prev();
        //console.log(element)
        if (element.html() != 'Inviter') return;
        if (id != project_safetyCoordinator) {
            //console.log(\$(this).prev());
            element.addClass('disabled-link');
        }
        else {
            element.removeClass('disabled-link')           
        }
    })    

    const project_externalEngineer = \$('#project_externalEngineer').val();  
    \$('#project_externalEngineer').on('change', function(ev) {
        const id = \$(this).val();    
        const element = \$(this).prev();
        //console.log(element)
        if (element.html() != 'Inviter') return;
        if (id != project_externalEngineer) {
            //console.log(\$(this).prev());
            element.addClass('disabled-link');
        }
        else {
            element.removeClass('disabled-link')           
        }
    })    
    */
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
        return array (  863 => 370,  818 => 328,  811 => 324,  794 => 310,  787 => 307,  784 => 306,  781 => 305,  777 => 303,  775 => 302,  771 => 301,  768 => 300,  766 => 299,  754 => 291,  748 => 288,  743 => 286,  738 => 285,  732 => 283,  729 => 282,  727 => 281,  723 => 280,  715 => 276,  709 => 273,  704 => 271,  699 => 270,  693 => 268,  690 => 267,  688 => 266,  684 => 265,  676 => 261,  670 => 258,  665 => 256,  660 => 255,  654 => 253,  651 => 252,  649 => 251,  645 => 250,  632 => 241,  626 => 238,  621 => 236,  617 => 235,  609 => 231,  603 => 228,  598 => 226,  594 => 225,  586 => 221,  580 => 218,  575 => 216,  571 => 215,  563 => 211,  557 => 208,  552 => 206,  548 => 205,  540 => 201,  534 => 198,  529 => 196,  525 => 195,  517 => 191,  511 => 188,  506 => 186,  502 => 185,  494 => 181,  488 => 178,  483 => 176,  479 => 175,  471 => 171,  465 => 168,  460 => 166,  456 => 165,  445 => 158,  439 => 155,  434 => 153,  430 => 152,  422 => 148,  416 => 145,  411 => 143,  407 => 142,  396 => 135,  390 => 132,  385 => 130,  381 => 129,  373 => 125,  367 => 122,  362 => 120,  358 => 119,  352 => 117,  346 => 114,  341 => 112,  337 => 111,  328 => 106,  322 => 103,  317 => 101,  313 => 100,  307 => 98,  301 => 95,  296 => 93,  292 => 92,  284 => 88,  278 => 85,  273 => 83,  269 => 82,  261 => 78,  255 => 75,  250 => 73,  246 => 72,  238 => 68,  232 => 65,  227 => 63,  223 => 62,  215 => 58,  209 => 55,  204 => 53,  200 => 52,  192 => 48,  186 => 45,  181 => 43,  177 => 42,  164 => 36,  154 => 33,  144 => 30,  134 => 27,  126 => 24,  115 => 17,  106 => 14,  103 => 13,  99 => 12,  95 => 11,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
                    {{ form_widget(form.company, {'attr': {'class': 'form-control select2', 'style':'width:100%;border-color:rgb(206, 212, 218);color:rgb(206, 212, 218) !important;'}}) }}    
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.engineeringOffice, 'Bureaux d\\'étude', {'label_attr': { class: 'form-label' }}) }}
                    {% if form_errors(form.engineeringOffice) %}            
                        <div class=\"form-error text-danger\">
                            <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.engineeringOffice) }}
                        </div>            
                    {% endif %}
                    {{ form_widget(form.engineeringOffice, {'attr': {'class': 'form-control select2', 'style':'width:100%;border-color:rgb(206, 212, 218);color:rgb(206, 212, 218) !important;'}}) }}    
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
                        {{ form_widget(form.architect, {'attr': {'class': 'form-control '}}) }}    
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
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                            {% if form.vars.value.externalArchitectureOffice is not null %}
                                <a href=\"{{path('invitation', {id:id,personId:form.vars.value.externalArchitectureOffice.id})}}\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            {% endif %}
                        {% endif %} 
                        {% if form_errors(form.externalArchitectureOffice) %}            
                            <div class=\"form-error text-danger\">
                                <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.externalArchitectureOffice) }}
                            </div>            
                        {% endif %}
                        {{ form_widget(form.externalArchitectureOffice, {'attr': {'class': 'form-control'}}) }}    
                    </div>  

                    <div class=\"mb-3\">
                        {{ form_label(form.safetyCoordinator, 'Coordinateur sécurité externe', {'label_attr': { class: 'form-label' }}) }}
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                            {% if form.vars.value.safetyCoordinator is not null %}
                                <a href=\"{{path('invitation', {id:id,personId:form.vars.value.safetyCoordinator.id})}}\" class=\"btn btn-sm btn-info ml-3\">Inviter</a>
                            {% endif %}
                        {% endif %} 
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
                {% if (is_granted('ROLE_EXTERNAL') == false) %}
                    <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                    {% if form.vars.value.id %}           
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_INTERNAL') %}
                            <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                        {% endif %}
                    {% endif %}
                {% endif %}
                <a href=\"{{path('project_list')}}\" class=\"btn btn-secondary ml-3\">Retour</a>                
            </div>      
                  
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"project_title\").focus()    

    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    

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

    \$('form').on('submit', function() {
        // valider cohérence des dates
        const project_workStartDate = parseInt(\$('#project_workStartDate').val().replaceAll('-',''));
        const project_workEndDate = parseInt(\$('#project_workEndDate').val().replaceAll('-',''));
        //console.log(project_workStartDate, project_workEndDate);        
        if (project_workEndDate <= project_workStartDate) {
            \$('#project_workEndDate').focus();
            alert('La date de fin doit être postérieure à la date de début');
            return false;
        }
        return true;
    });

    /*
    const project_externalArchitectureOffice = \$('#project_externalArchitectureOffice').val();  
    \$('#project_externalArchitectureOffice').on('change', function(ev) {
        const id = \$(this).val();    
        const element = \$(this).prev();
        //console.log(element)
        if (element.html() != 'Inviter') return;
        if (id != project_externalArchitectureOffice) {
            //console.log(\$(this).prev());
            element.addClass('disabled-link');
        }
        else {
            element.removeClass('disabled-link')           
        }
    })    

    const project_safetyCoordinator = \$('#project_safetyCoordinator').val();  
    \$('#project_safetyCoordinator').on('change', function(ev) {
        const id = \$(this).val();    
        const element = \$(this).prev();
        //console.log(element)
        if (element.html() != 'Inviter') return;
        if (id != project_safetyCoordinator) {
            //console.log(\$(this).prev());
            element.addClass('disabled-link');
        }
        else {
            element.removeClass('disabled-link')           
        }
    })    

    const project_externalEngineer = \$('#project_externalEngineer').val();  
    \$('#project_externalEngineer').on('change', function(ev) {
        const id = \$(this).val();    
        const element = \$(this).prev();
        //console.log(element)
        if (element.html() != 'Inviter') return;
        if (id != project_externalEngineer) {
            //console.log(\$(this).prev());
            element.addClass('disabled-link');
        }
        else {
            element.removeClass('disabled-link')           
        }
    })    
    */
</script>
{% endblock %}
", "project/project_edit.html.twig", "C:\\Users\\utilisateur\\Videos\\APP_Gestion_Projet\\templates\\project\\project_edit.html.twig");
    }
}
