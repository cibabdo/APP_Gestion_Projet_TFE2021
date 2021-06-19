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

/* document/document_list.html.twig */
class __TwigTemplate_8e9782f986d378e36ccb0d7a9fd4eb0e19696024059d1cf55c544dd3d7678281 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/document_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/document_list.html.twig"));

        // line 1
        echo "<div class=\"row justify-content-center mt-5\">
    
        ";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                echo "       
                <div class=\"card m-2\" style=\"width: 18rem;\">
                    <div class=\"card-img-top\"></div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><i class=\"bi bi-file-earmark\"></i> ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "filename", [], "any", false, false, false, 8), "html", null, true);
                echo "</h5>
                        <p class=\"card-text\">";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "comment", [], "any", false, false, false, 9), "html", null, true);
                echo "</p>
                        ";
                // line 10
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["document"], "projectWork", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "                            <p class=\"card-text\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "projectWork", [], "any", false, false, false, 11), "company", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "projectWork", [], "any", false, false, false, 11), "work", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 13
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_view", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 13, $this->source); })()), "documentId" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm view\">Voir</a>
                        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_delete", ["id" => (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 14, $this->source); })()), "documentId" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm delete\">Supprimer</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    
        ";
        } else {
            // line 19
            echo "            Pas de documents
        ";
        }
        // line 21
        echo "   
</div>
<script>   

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
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "document/document_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  96 => 19,  92 => 17,  82 => 14,  77 => 13,  69 => 11,  67 => 10,  63 => 9,  59 => 8,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row justify-content-center mt-5\">
    
        {% if documents|length > 0 %}
            {% for document in documents %}       
                <div class=\"card m-2\" style=\"width: 18rem;\">
                    <div class=\"card-img-top\"></div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><i class=\"bi bi-file-earmark\"></i> {{document.filename}}</h5>
                        <p class=\"card-text\">{{document.comment}}</p>
                        {% if document.projectWork is not null %}
                            <p class=\"card-text\">{{document.projectWork.company.name}} - {{document.projectWork.work.name}}</p>
                        {% endif %}
                        <a href=\"{{path('document_view',{id:projectId, documentId:document.id})}}\" class=\"btn btn-primary btn-sm view\">Voir</a>
                        <a href=\"{{path('document_delete',{id:projectId, documentId:document.id})}}\" class=\"btn btn-danger btn-sm delete\">Supprimer</a>
                    </div>
                </div>
            {% endfor %}    
        {% else %}
            Pas de documents
        {% endif %}
   
</div>
<script>   

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
</script>", "document/document_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\document\\document_list.html.twig");
    }
}
