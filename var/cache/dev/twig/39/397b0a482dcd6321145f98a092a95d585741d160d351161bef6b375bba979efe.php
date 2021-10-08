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

/* project_works/project_works_edit.html.twig */
class __TwigTemplate_402144b27e810dd5940c1785c4c6ea32ade8736cb014d80d1f00d692bdd5e60d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project_works/project_works_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "project_works/project_works_edit.html.twig", 4)->display($context);
        
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
        <h2 class=\"text-center\">Projet ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h2> 

        <div class=\"mb-3\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "company", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Entreprise"]);
        echo "
            ";
        // line 16
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "company", [], "any", false, false, false, 16), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "company", [], "any", false, false, false, 18), 'errors');
            echo "
                </div>            
            ";
        }
        // line 21
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "company", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "work", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Poste"]);
        echo "
            ";
        // line 26
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "work", [], "any", false, false, false, 26), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "work", [], "any", false, false, false, 28), 'errors');
            echo "
                </div>            
            ";
        }
        // line 31
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "work", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>
        
        <div class=\"mb-3\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "comment", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Commentaire"]);
        echo "
            ";
        // line 36
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "comment", [], "any", false, false, false, 36), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "comment", [], "any", false, false, false, 38), 'errors');
            echo "
                </div>            
            ";
        }
        // line 41
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "comment", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            <label class=\"form-label\">Documents</label>
            ";
        // line 46
        if ((twig_length_filter($this->env, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 46, $this->source); })())) > 0)) {
            // line 47
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                echo "       
                    <div class=\"card m-2\" style=\"width: 18rem;\">
                        <div class=\"card-img-top\"></div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"><i class=\"bi bi-file-earmark\"></i> ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "filename", [], "any", false, false, false, 51), "html", null, true);
                echo "</h5>
                            <p class=\"card-text\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "comment", [], "any", false, false, false, 52), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_view", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 53, $this->source); })()), "documentId" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm view\">Voir</a>
                            ";
                // line 54
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EXTERNAL") == false)) {
                    // line 55
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_delete", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 55, $this->source); })()), "documentId" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-sm delete\">Supprimer</a>
                            ";
                }
                // line 57
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    
            ";
        } else {
            // line 61
            echo "                <p><i>Pas de documents...</i></p>
            ";
        }
        // line 63
        echo "        </div>

        <div class=\"mb-3\">
            <!--<div>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "documents", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Uploader des documents"]);
        echo "</div>-->
            ";
        // line 67
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "documents", [], "any", false, false, false, 67), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "documents", [], "any", false, false, false, 69), 'errors');
            echo "
                </div>            
            ";
        }
        // line 72
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "documents", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date réception provisoire"]);
        echo "
            ";
        // line 77
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 77), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 79), 'errors');
            echo "
                </div>            
            ";
        }
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date réception définitive"]);
        echo "
            ";
        // line 87
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 87), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 89), 'errors');
            echo "
                </div>            
            ";
        }
        // line 92
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date réception vinçotte"]);
        echo "
            ";
        // line 97
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 97), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 99), 'errors');
            echo "
                </div>            
            ";
        }
        // line 102
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"my-2\">
            ";
        // line 106
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EXTERNAL") == false)) {
            // line 107
            echo "                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)) {
                echo "           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                ";
            }
            // line 111
            echo "            ";
        }
        // line 112
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 112, $this->source); })()), "onglet" => "work"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>                
        </div>      
                  
        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"project_work_comment\").focus()    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_delete", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 124, $this->source); })()), "workId" => (isset($context["workId"]) || array_key_exists("workId", $context) ? $context["workId"] : (function () { throw new RuntimeError('Variable "workId" does not exist.', 124, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 128, $this->source); })()), "onglet" => "work"]), "html", null, true);
        echo "?message=Poste supprimé'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }  

    \$('.view').on('click', function() {
        window.open(\$(this).attr('href'));
        return false;
    })

    \$('.delete').on('click', function() {
        const url = \$(this).attr('href');
        const \$obj = \$(this);
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {         
                    console.log('ici', \$(this).parent().parent());
                    \$obj.parent().parent().remove();
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }  
        return false;
    })

    \$('form').on('submit', function() {
        // valider cohérence des dates       
        let project_work_provisionalReceptionDate = \$('#project_work_provisionalReceptionDate').val().replaceAll('-','');
        if (project_work_provisionalReceptionDate != '') 
            project_work_provisionalReceptionDate = parseInt(project_work_provisionalReceptionDate);
        else 
            project_work_provisionalReceptionDate = 0;

        let project_work_finalDeliveryDate = \$('#project_work_finalDeliveryDate').val().replaceAll('-','');
        if (project_work_finalDeliveryDate != '') 
            project_work_finalDeliveryDate = parseInt(project_work_finalDeliveryDate);
        else 
            project_work_finalDeliveryDate = 0;

        let project_work_vincotteReceptionDate = \$('#project_work_vincotteReceptionDate').val().replaceAll('-','');
        if (project_work_vincotteReceptionDate != '') 
            project_work_vincotteReceptionDate = parseInt(project_work_vincotteReceptionDate);
        else 
            project_work_vincotteReceptionDate = 0;

        //console.log(project_work_provisionalReceptionDate, project_work_finalDeliveryDate, project_work_vincotteReceptionDate);        

        if (project_work_finalDeliveryDate != 0 && project_work_finalDeliveryDate <= project_work_provisionalReceptionDate) {
            \$('#project_work_finalDeliveryDate').focus();
            alert('La date doit être postérieure à la date provisoire');
            return false;
        }
        if (project_work_vincotteReceptionDate != 0 && project_work_vincotteReceptionDate <= project_work_finalDeliveryDate) {
            \$('#project_work_vincotteReceptionDate').focus();
            alert('La date doit être postérieure à la date définitive');
            return false;
        }
        return true;
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project_works/project_works_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 128,  353 => 124,  341 => 115,  334 => 112,  331 => 111,  325 => 108,  322 => 107,  320 => 106,  312 => 102,  306 => 99,  301 => 97,  297 => 96,  289 => 92,  283 => 89,  278 => 87,  274 => 86,  266 => 82,  260 => 79,  255 => 77,  251 => 76,  243 => 72,  237 => 69,  232 => 67,  228 => 66,  223 => 63,  219 => 61,  215 => 59,  207 => 57,  201 => 55,  199 => 54,  195 => 53,  191 => 52,  187 => 51,  177 => 47,  175 => 46,  166 => 41,  160 => 38,  155 => 36,  151 => 35,  143 => 31,  137 => 28,  132 => 26,  128 => 25,  120 => 21,  114 => 18,  109 => 16,  105 => 15,  99 => 12,  95 => 11,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
        <h2 class=\"text-center\">Projet {{name}}</h2> 

        <div class=\"mb-3\">
            {{ form_label(form.company, 'Entreprise', {'label_attr': { class: 'form-label' }}) }}
            {% if form_errors(form.company) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.company) }}
                </div>            
            {% endif %}
            {{ form_widget(form.company, {'attr': {'class': 'form-control'}}) }}    
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.work, 'Poste', {'label_attr': { class: 'form-label' }}) }}
            {% if form_errors(form.work) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.work) }}
                </div>            
            {% endif %}
            {{ form_widget(form.work, {'attr': {'class': 'form-control'}}) }}    
        </div>
        
        <div class=\"mb-3\">
            {{ form_label(form.comment, 'Commentaire', {'label_attr': { class: 'form-label' }}) }}
            {% if form_errors(form.comment) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.comment) }}
                </div>            
            {% endif %}
            {{ form_widget(form.comment, {'attr': {'class': 'form-control'}}) }}    
        </div>

        <div class=\"mb-3\">
            <label class=\"form-label\">Documents</label>
            {% if documents|length > 0 %}
                {% for document in documents %}       
                    <div class=\"card m-2\" style=\"width: 18rem;\">
                        <div class=\"card-img-top\"></div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"><i class=\"bi bi-file-earmark\"></i> {{document.filename}}</h5>
                            <p class=\"card-text\">{{document.comment}}</p>
                            <a href=\"{{path('document_view',{id:projectId, documentId:document.id})}}\" class=\"btn btn-primary btn-sm view\">Voir</a>
                            {% if is_granted('ROLE_EXTERNAL') == false %}
                                <a href=\"{{path('document_delete',{id:projectId, documentId:document.id})}}\" class=\"btn btn-danger btn-sm delete\">Supprimer</a>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}    
            {% else %}
                <p><i>Pas de documents...</i></p>
            {% endif %}
        </div>

        <div class=\"mb-3\">
            <!--<div>{{ form_label(form.documents, 'Uploader des documents', {'label_attr': { class: 'form-label' }}) }}</div>-->
            {% if form_errors(form.documents) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.documents) }}
                </div>            
            {% endif %}
            {{ form_widget(form.documents, {'attr': {'class': 'form-control-file'}}) }}    
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.provisionalReceptionDate, 'Date réception provisoire', {'label_attr': { class: 'form-label' }}) }}
            {% if form_errors(form.provisionalReceptionDate) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.provisionalReceptionDate) }}
                </div>            
            {% endif %}
            {{ form_widget(form.provisionalReceptionDate, {'attr': {'class': 'form-control'}}) }}    
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.finalDeliveryDate, 'Date réception définitive', {'label_attr': { class: 'form-label' }}) }}
            {% if form_errors(form.finalDeliveryDate) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.finalDeliveryDate) }}
                </div>            
            {% endif %}
            {{ form_widget(form.finalDeliveryDate, {'attr': {'class': 'form-control'}}) }}    
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.vincotteReceptionDate, 'Date réception vinçotte', {'label_attr': { class: 'form-label' }}) }}
            {% if form_errors(form.vincotteReceptionDate) %}            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.vincotteReceptionDate) }}
                </div>            
            {% endif %}
            {{ form_widget(form.vincotteReceptionDate, {'attr': {'class': 'form-control'}}) }}    
        </div>

        <div class=\"my-2\">
            {% if is_granted('ROLE_EXTERNAL') == false %}
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                {% if form.vars.value.id %}           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
                {% endif %}
            {% endif %}
            <a href=\"{{path('project_edit',{id:projectId,onglet:'work'})}}\" class=\"btn btn-secondary ml-3\">Retour</a>                
        </div>      
                  
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"project_work_comment\").focus()    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '{{path(\"project_works_delete\",{projectId:projectId, workId:workId})}}',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '{{path(\"project_edit\",{id:projectId, onglet:\"work\"})}}?message=Poste supprimé'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }  

    \$('.view').on('click', function() {
        window.open(\$(this).attr('href'));
        return false;
    })

    \$('.delete').on('click', function() {
        const url = \$(this).attr('href');
        const \$obj = \$(this);
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {         
                    console.log('ici', \$(this).parent().parent());
                    \$obj.parent().parent().remove();
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }  
        return false;
    })

    \$('form').on('submit', function() {
        // valider cohérence des dates       
        let project_work_provisionalReceptionDate = \$('#project_work_provisionalReceptionDate').val().replaceAll('-','');
        if (project_work_provisionalReceptionDate != '') 
            project_work_provisionalReceptionDate = parseInt(project_work_provisionalReceptionDate);
        else 
            project_work_provisionalReceptionDate = 0;

        let project_work_finalDeliveryDate = \$('#project_work_finalDeliveryDate').val().replaceAll('-','');
        if (project_work_finalDeliveryDate != '') 
            project_work_finalDeliveryDate = parseInt(project_work_finalDeliveryDate);
        else 
            project_work_finalDeliveryDate = 0;

        let project_work_vincotteReceptionDate = \$('#project_work_vincotteReceptionDate').val().replaceAll('-','');
        if (project_work_vincotteReceptionDate != '') 
            project_work_vincotteReceptionDate = parseInt(project_work_vincotteReceptionDate);
        else 
            project_work_vincotteReceptionDate = 0;

        //console.log(project_work_provisionalReceptionDate, project_work_finalDeliveryDate, project_work_vincotteReceptionDate);        

        if (project_work_finalDeliveryDate != 0 && project_work_finalDeliveryDate <= project_work_provisionalReceptionDate) {
            \$('#project_work_finalDeliveryDate').focus();
            alert('La date doit être postérieure à la date provisoire');
            return false;
        }
        if (project_work_vincotteReceptionDate != 0 && project_work_vincotteReceptionDate <= project_work_finalDeliveryDate) {
            \$('#project_work_vincotteReceptionDate').focus();
            alert('La date doit être postérieure à la date définitive');
            return false;
        }
        return true;
    });
</script>
{% endblock %}
", "project_works/project_works_edit.html.twig", "C:\\Users\\AbdO\\Documents\\GitHub\\APP_Gestion_Projet_TFE2021\\templates\\project_works\\project_works_edit.html.twig");
    }
}
