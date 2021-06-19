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

/* user/user_list.html.twig */
class __TwigTemplate_982861135c3715e0f5a64f7e35d6566f0390a7b739c070358f6718dcb3e70e43 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_list.html.twig"));

        // line 1
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Nom</th> 
                <th style=\"text-align: center;\">Email</th> 
                <th style=\"text-align: center;\">Language</th>                 
                <th style=\"text-align: center;\">Role</th>                
            </tr>
        </thead>
        <tbody>           
            ";
        // line 12
        $context["roles"] = ["ROLE_ADMIN" => "Administrateur", "ROLE_USER" => "Utilisateur interne"];
        // line 14
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "language", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                echo "             
                            ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 21, $this->source); })()), $context["role"], [], "array", false, false, false, 21), "html", null, true);
                echo "                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "   
                    </td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>          
    </table>   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/user_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  92 => 22,  84 => 21,  78 => 20,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  54 => 14,  52 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table class=\"table\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Nom</th> 
                <th style=\"text-align: center;\">Email</th> 
                <th style=\"text-align: center;\">Language</th>                 
                <th style=\"text-align: center;\">Role</th>                
            </tr>
        </thead>
        <tbody>           
            {% 
                set roles = {\"ROLE_ADMIN\" : \"Administrateur\", \"ROLE_USER\" : \"Utilisateur interne\"}                
            %}
            {% for user in users %}             
                <tr class=\"choice\" onclick=\"document.location.href='{{path(\"user_edit\",{id:user.id})}}';\">
                    <td style=\"text-align: center;\">{{user.username}}</td>
                    <td style=\"text-align: center;\">{{user.email}}</td>
                    <td style=\"text-align: center;\">{{user.language}}</td>
                    <td style=\"text-align: center;\">
                        {% for role in user.roles %}             
                            {{roles[role]}}                            
                        {% endfor %}   
                    </td>                    
                </tr>
            {% endfor %}
        </tbody>          
    </table>   ", "user/user_list.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\user\\user_list.html.twig");
    }
}
