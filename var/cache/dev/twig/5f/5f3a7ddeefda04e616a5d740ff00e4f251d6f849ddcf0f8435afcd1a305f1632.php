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
class __TwigTemplate_2abc5806ff2e76af56cc094f01e03c510764dfdad1d3e7e94dccbd45fedaeff7 extends Template
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
    <div class=\"col-4\">
        <form method=\"post\">
            <h1 class=\"text-center\">Authentification</h1>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\">
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"password\">        
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>
        </form>
    </div>    
</div>
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
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<div class=\"row align-items-center justify-content-center\">
    <div class=\"col-4\">
        <form method=\"post\">
            <h1 class=\"text-center\">Authentification</h1>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\">
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"password\">        
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>
        </form>
    </div>    
</div>
{% endblock %}
", "security/login.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\security\\login.html.twig");
    }
}
