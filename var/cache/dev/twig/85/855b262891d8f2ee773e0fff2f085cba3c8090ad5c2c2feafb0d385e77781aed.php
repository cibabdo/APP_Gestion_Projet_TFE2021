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
class __TwigTemplate_c9be5c3c2e37613cd0ce3880d3ce5c977e1b1514a9260712865893c133755c71 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_works/project_works_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project_works/project_works_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "project_works/project_works_edit.html.twig", 4)->display($context);
        
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
                            <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_delete", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 54, $this->source); })()), "documentId" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm delete\">Supprimer</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    
            ";
        } else {
            // line 59
            echo "                Pas de documents
            ";
        }
        // line 61
        echo "        </div>

        <div class=\"mb-3\">
        <div>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "documents", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Uploader des documents"]);
        echo "</div>
            ";
        // line 65
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "documents", [], "any", false, false, false, 65), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "documents", [], "any", false, false, false, 67), 'errors');
            echo "
                </div>            
            ";
        }
        // line 70
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "documents", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date réception provisoire"]);
        echo "
            ";
        // line 75
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 75), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 77), 'errors');
            echo "
                </div>            
            ";
        }
        // line 80
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "provisionalReceptionDate", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date réception définitive"]);
        echo "
            ";
        // line 85
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 85), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 87), 'errors');
            echo "
                </div>            
            ";
        }
        // line 90
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "finalDeliveryDate", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"mb-3\">
            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date réception vinçotte"]);
        echo "
            ";
        // line 95
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 95), 'errors')) {
            echo "            
                <div class=\"form-error text-danger\">
                    <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 97), 'errors');
            echo "
                </div>            
            ";
        }
        // line 100
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "vincotteReceptionDate", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
        </div>

        <div class=\"my-2\">
            <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
            ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)) {
            echo "           
                <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
            ";
        }
        // line 108
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_list", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 108, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>                
        </div>      
                  
        ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"project_work_comment\").focus()    

    function deleteProject() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_delete", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 120, $this->source); })()), "workId" => (isset($context["workId"]) || array_key_exists("workId", $context) ? $context["workId"] : (function () { throw new RuntimeError('Variable "workId" does not exist.', 120, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_works_list", ["projectId" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 124, $this->source); })())]), "html", null, true);
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
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  332 => 124,  325 => 120,  313 => 111,  306 => 108,  300 => 105,  291 => 100,  285 => 97,  280 => 95,  276 => 94,  268 => 90,  262 => 87,  257 => 85,  253 => 84,  245 => 80,  239 => 77,  234 => 75,  230 => 74,  222 => 70,  216 => 67,  211 => 65,  207 => 64,  202 => 61,  198 => 59,  194 => 57,  184 => 54,  180 => 53,  176 => 52,  172 => 51,  162 => 47,  160 => 46,  151 => 41,  145 => 38,  140 => 36,  136 => 35,  128 => 31,  122 => 28,  117 => 26,  113 => 25,  105 => 21,  99 => 18,  94 => 16,  90 => 15,  84 => 12,  80 => 11,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
                            <a href=\"{{path('document_delete',{id:projectId, documentId:document.id})}}\" class=\"btn btn-danger btn-sm delete\">Supprimer</a>
                        </div>
                    </div>
                {% endfor %}    
            {% else %}
                Pas de documents
            {% endif %}
        </div>

        <div class=\"mb-3\">
        <div>{{ form_label(form.documents, 'Uploader des documents', {'label_attr': { class: 'form-label' }}) }}</div>
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
            <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
            {% if form.vars.value.id %}           
                <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteProject()\">Supprimer</a>                   
            {% endif %}
            <a href=\"{{path('project_works_list',{projectId:projectId})}}\" class=\"btn btn-secondary ml-3\">Retour</a>                
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
                    document.location.href = '{{path(\"project_works_list\",{projectId:projectId})}}?message=Poste supprimé'
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
</script>
{% endblock %}
", "project_works/project_works_edit.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\project_works\\project_works_edit.html.twig");
    }
}
