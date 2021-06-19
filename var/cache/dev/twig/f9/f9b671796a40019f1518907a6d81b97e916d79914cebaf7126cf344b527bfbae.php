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
class __TwigTemplate_f929b6256469f2293a9564539806b08b71b32f98fe472dcdab2ea5886ce07907 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_list.html.twig"));

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
        $context["roles"] = ["ROLE_ADMIN" => "Administrateur", "ROLE_USER" => "Utilisateur", "ROLE_INTERNAL" => "Interne", "ROLE_EXTERNAL" => "Externe", "ROLE_ARCHITECT" => "Architecte", "ROLE_SUPERVISOR" => "Conducteur", "ROLE_ENGINEER" => "Ingénieur"];
        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "             
                <tr class=\"choice\" onclick=\"document.location.href='";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "';\">
                    <td style=\"text-align: center;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "language", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                echo "             
                            ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 29, $this->source); })()), $context["role"], [], "array", false, false, false, 29), "html", null, true);
                echo "                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "   
                    </td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>          
    </table>   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  104 => 34,  95 => 30,  87 => 29,  81 => 28,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  57 => 22,  55 => 12,  43 => 1,);
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
                set roles = {
                    \"ROLE_ADMIN\" : \"Administrateur\", 
                    \"ROLE_USER\" : \"Utilisateur\", 
                    \"ROLE_INTERNAL\" : \"Interne\",
                    \"ROLE_EXTERNAL\" : \"Externe\",
                    \"ROLE_ARCHITECT\" : \"Architecte\",
                    \"ROLE_SUPERVISOR\" : \"Conducteur\",
                    \"ROLE_ENGINEER\" : \"Ingénieur\"
                }                
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
