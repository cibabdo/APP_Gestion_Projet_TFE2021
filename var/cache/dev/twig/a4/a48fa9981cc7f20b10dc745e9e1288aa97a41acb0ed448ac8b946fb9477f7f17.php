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

/* security/login.html.twig */
class __TwigTemplate_a4a632a6b4804e21b0567ea8c775bcf0c46d4669bd8373f18abd1c5d7f4790d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"row align-items-center justify-content-center\">
    <div class=\"col-5\">       
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" autocomplete=\"off\">
            <h1 class=\"text-center\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" required name=\"_username\" placeholder=\"name@example.com\">
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" required name=\"_password\" >        
            </div>
            ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "                <div id=\"message\" class=\"form-success text-danger\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "
                </div>            
            ";
        }
        // line 21
        echo "            <div>
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>
        </form>      
    </div>    
</div>
<script>
    setTimeout(function() {
        document.getElementById('message').innerHTML = ''
    }, 3000)
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  90 => 18,  87 => 17,  85 => 16,  79 => 13,  73 => 10,  67 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<div class=\"row align-items-center justify-content-center\">
    <div class=\"col-5\">       
        <form action=\"{{path('security_login')}}\" method=\"post\" autocomplete=\"off\">
            <h1 class=\"text-center\">{{title}}</h1>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" value=\"{{username}}\" required name=\"_username\" placeholder=\"name@example.com\">
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">{{password}}</label>
                <input type=\"password\" class=\"form-control\" required name=\"_password\" >        
            </div>
            {% if error %}
                <div id=\"message\" class=\"form-success text-danger\">
                    {{ error }}
                </div>            
            {% endif %}
            <div>
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>
        </form>      
    </div>    
</div>
<script>
    setTimeout(function() {
        document.getElementById('message').innerHTML = ''
    }, 3000)
</script>
{% endblock %}
", "security/login.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\security\\login.html.twig");
    }
}
