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

/* security/signin.html.twig */
class __TwigTemplate_8badde720df0151be81026b8362d959502b121762cbc223d734d23c0d260db26 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/signin.html.twig", 1);
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
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
            <h1 class=\"text-center\">Inscription</h1>
            ";
        // line 8
        echo         // line 9
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), 'row', ["label" => "Nom de l'utilisateur", "attr" => ["class" => "form-control mb-2"]]);
        // line 13
        echo "
            ";
        // line 14
        echo         // line 15
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row', ["label" => "Email", "attr" => ["class" => "form-control mb-2"]]);
        // line 19
        echo "
            ";
        // line 20
        echo         // line 21
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control mb-2"]]);
        // line 25
        echo "
            ";
        // line 26
        echo         // line 27
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "password_confirm", [], "any", false, false, false, 27), 'row', ["label" => "Confirmation du mot de passe", "attr" => ["class" => "form-control mb-2"]]);
        // line 31
        echo "           
            <div class=\"mt-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"signin_username\").focus()
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  89 => 31,  87 => 27,  86 => 26,  83 => 25,  81 => 21,  80 => 20,  77 => 19,  75 => 15,  74 => 14,  71 => 13,  69 => 9,  68 => 8,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<div class=\"row align-items-center justify-content-center\">
    <div class=\"col-4\">
        {{ form_start(form) }}
            <h1 class=\"text-center\">Inscription</h1>
            {{  
                form_row(form.username, {
                    'label': 'Nom de l\\'utilisateur',
                    'attr': {'class': 'form-control mb-2'}
                })
            }}
            {{  
                form_row(form.email, {
                    'label': 'Email',
                    'attr': {'class': 'form-control mb-2'}
                })
            }}
            {{ 
                form_row(form.password, {
                    'label': 'Mot de passe',
                    'attr': {'class': 'form-control mb-2'}
                })
            }}
            {{ 
                form_row(form.password_confirm, {
                    'label': 'Confirmation du mot de passe',
                    'attr': {'class': 'form-control mb-2'}
                })
            }}           
            <div class=\"mt-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"signin_username\").focus()
</script>
{% endblock %}
", "security/signin.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\security\\signin.html.twig");
    }
}
