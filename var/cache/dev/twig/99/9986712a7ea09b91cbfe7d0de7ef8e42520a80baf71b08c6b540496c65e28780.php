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

/* stat/stat.html.twig */
class __TwigTemplate_0adaa6766a17c68dfd24d55fb14e3d3e05b9f5de04ce28186b7b1c0504f2251f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/stat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/stat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stat/stat.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "stat/stat.html.twig", 4)->display($context);
        
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
        echo "<div class=\"row align-items-center justify-content-center mt-5\">
    <div class=\"col text-center \">
        <h2>Statistiques</h2> 
        <div class=\"col\">
            <div class=\"row align-items-center justify-content-center \">
                <div class=\"col col-1\">Année</div>
                <div class=\"col col-2\">                    
                    <select name=\"year\" id=\"year\" class=\"form-control\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 16, $this->source); })()), "years", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            echo "             
                            <option value=\"";
            // line 17
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\" ";
            echo ((($context["year"] == twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 17, $this->source); })()), "year", [], "any", false, false, false, 17))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                
                    </select>
                </div>           
            </div>           
            <div class=\"row lign-items-center justify-content-center mt-2\">
                <div class=\"col col-1\"><div id='1' class='span_choice'>Projets</div></div>
                <div class=\"col col-1\"><div id='2' class='span_choice'>Etat projets</div></div>  
            </div> 
        </div>                
    </div>
</div>
<div>     
    <canvas id=\"myChart\" class=\"hidden\"></canvas>   
</div>
<script>
    const ctx = document.getElementById('myChart');
    let myChart = new Chart(ctx, {
        type: 'bar',        
        data: null,
        options: null
    });   
    
    \$('#year').on('change', function(e) {
        const id = \$('.span_choice_selected').attr('id')
        \$.get('/stat/search?id='+id+'&year='+\$(this).val(), function(data) {
            const ctx = document.getElementById('myChart');
            \$(ctx).removeClass('hidden');
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
            \$(ctx).removeClass('hidden');
            myChart.destroy();
            myChart = new Chart(ctx, {
                type: data.type,     
                data: data.data,
                options: data.options
            })
        }, 'json')
    })

    \$('#1').trigger('click');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stat/stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  106 => 17,  100 => 16,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'navbar.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"row align-items-center justify-content-center mt-5\">
    <div class=\"col text-center \">
        <h2>Statistiques</h2> 
        <div class=\"col\">
            <div class=\"row align-items-center justify-content-center \">
                <div class=\"col col-1\">Année</div>
                <div class=\"col col-2\">                    
                    <select name=\"year\" id=\"year\" class=\"form-control\">
                        {% for year in stat.years %}             
                            <option value=\"{{year}}\" {{ year == stat.year ? 'selected' : ''}}>{{year}}</option>
                        {% endfor %}                
                    </select>
                </div>           
            </div>           
            <div class=\"row lign-items-center justify-content-center mt-2\">
                <div class=\"col col-1\"><div id='1' class='span_choice'>Projets</div></div>
                <div class=\"col col-1\"><div id='2' class='span_choice'>Etat projets</div></div>  
            </div> 
        </div>                
    </div>
</div>
<div>     
    <canvas id=\"myChart\" class=\"hidden\"></canvas>   
</div>
<script>
    const ctx = document.getElementById('myChart');
    let myChart = new Chart(ctx, {
        type: 'bar',        
        data: null,
        options: null
    });   
    
    \$('#year').on('change', function(e) {
        const id = \$('.span_choice_selected').attr('id')
        \$.get('/stat/search?id='+id+'&year='+\$(this).val(), function(data) {
            const ctx = document.getElementById('myChart');
            \$(ctx).removeClass('hidden');
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
            \$(ctx).removeClass('hidden');
            myChart.destroy();
            myChart = new Chart(ctx, {
                type: data.type,     
                data: data.data,
                options: data.options
            })
        }, 'json')
    })

    \$('#1').trigger('click');
</script>
{% endblock %}
", "stat/stat.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\stat\\stat.html.twig");
    }
}
