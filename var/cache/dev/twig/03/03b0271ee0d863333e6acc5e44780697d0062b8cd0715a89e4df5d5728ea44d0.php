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

/* stat/index.html.twig */
class __TwigTemplate_3af70485f8c5592bd53eb73cc7c13a051c88edb81261bf5b93049febde15da04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stat/index.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "stat/index.html.twig", 4)->display($context);
        
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
        echo "<div class=\"row mt-5\">
    <div class=\"col text-center\">
        <h2>Statistiques</h2>                       
        <span id='customer' class='span_choice'>Projets en cours</span>        
    </div>
</div>
<div style=\"height: 1000px; width: 1000px;\">     
    <canvas id=\"myChart\"></canvas>   
</div>
<script>
    const ctx = document.getElementById('myChart');
    let myChart = new Chart(ctx, {
        type: '";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
        echo "',        
        data: ";
        // line 21
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 21, $this->source); })()), "data", [], "any", false, false, false, 21)), "html", null, true);
        echo ",
        options: ";
        // line 22
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 22, $this->source); })()), "options", [], "any", false, false, false, 22)), "html", null, true);
        echo "
    })
    
    \$('#year').on('change', function(e) {
        const id = \$('.span_choice_selected').attr('id')
        \$.get('/stat/search?id='+id+'&year='+\$(this).val(), function(data) {
            const ctx = document.getElementById('myChart');
            myChart.destroy();
            myChart = new Chart(ctx, {
                type: data.type,     
                data: data.data,
                options: data.options
            })
        }, 'json')
    })
    \$('.span_choice').on('click', function(ev) {
        \$('.span_choice_selected').removeClass('span_choice_selected')
        \$(this).addClass('span_choice_selected')
        const id = \$(this).attr('id')
        \$.get('/stat/search?id='+id+'&year='+\$('#year').val(), function(data) {
            const ctx = document.getElementById('myChart');
            myChart.destroy();
            myChart = new Chart(ctx, {
                type: data.type,     
                data: data.data,
                options: data.options
            })
        }, 'json')
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  108 => 21,  104 => 20,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'navbar.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"row mt-5\">
    <div class=\"col text-center\">
        <h2>Statistiques</h2>                       
        <span id='customer' class='span_choice'>Projets en cours</span>        
    </div>
</div>
<div style=\"height: 1000px; width: 1000px;\">     
    <canvas id=\"myChart\"></canvas>   
</div>
<script>
    const ctx = document.getElementById('myChart');
    let myChart = new Chart(ctx, {
        type: '{{stat.type}}',        
        data: {{stat.data|json_encode()}},
        options: {{stat.options|json_encode()}}
    })
    
    \$('#year').on('change', function(e) {
        const id = \$('.span_choice_selected').attr('id')
        \$.get('/stat/search?id='+id+'&year='+\$(this).val(), function(data) {
            const ctx = document.getElementById('myChart');
            myChart.destroy();
            myChart = new Chart(ctx, {
                type: data.type,     
                data: data.data,
                options: data.options
            })
        }, 'json')
    })
    \$('.span_choice').on('click', function(ev) {
        \$('.span_choice_selected').removeClass('span_choice_selected')
        \$(this).addClass('span_choice_selected')
        const id = \$(this).attr('id')
        \$.get('/stat/search?id='+id+'&year='+\$('#year').val(), function(data) {
            const ctx = document.getElementById('myChart');
            myChart.destroy();
            myChart = new Chart(ctx, {
                type: data.type,     
                data: data.data,
                options: data.options
            })
        }, 'json')
    })
</script>
{% endblock %}
", "stat/index.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\stat\\index.html.twig");
    }
}
