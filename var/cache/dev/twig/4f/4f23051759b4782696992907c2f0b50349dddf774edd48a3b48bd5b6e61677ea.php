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

/* project_comments/project_comments_list.html.twig */
class __TwigTemplate_b70e66911d05041ea59ee0592025ec5bbbf00bb86a0ab7a45e9ca7c1aca498b2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_comments/project_comments_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\" width=\"15%\">Date</th>                 
                <th style=\"text-align: center;\" width=\"25%\">Personne</th>                 
                <th style=\"text-align: center;\" width=\"60%\">Commentaire</th>                 
            </tr>
        </thead>
        <tbody>                       
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "project", [], "any", false, false, false, 11), "Id", [], "any", false, false, false, 11), "commentId" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
            echo "</td>                    
                    <td style=\"text-align: center;\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </tbody>        
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "project_comments/project_comments_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\" width=\"15%\">Date</th>                 
                <th style=\"text-align: center;\" width=\"25%\">Personne</th>                 
                <th style=\"text-align: center;\" width=\"60%\">Commentaire</th>                 
            </tr>
        </thead>
        <tbody>                       
            {% for comment in comments %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"project_comment_edit\",{id:comment.project.Id, commentId:comment.id})}}';\">
                    <td style=\"text-align: center;\">{{comment.date|date(\"d/m/Y\")}}</td>                    
                    <td style=\"text-align: center;\">{{comment.user.username}}</td>
                    <td style=\"text-align: center;\">{{comment.comment}}</td>                    
                </tr>
            {% endfor %}
        </tbody>        
    </table>   ", "project_comments/project_comments_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\project_comments\\project_comments_list.html.twig");
    }
}
