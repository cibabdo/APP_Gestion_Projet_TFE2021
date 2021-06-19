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

/* engineering_office/engineeringoffice_edit.html.twig */
class __TwigTemplate_69b9a8a8ca643d94e692e22fa64fe9cd2ce4f56d4d34be7bb5c69a0c8b511a0a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "engineering_office/engineeringoffice_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "engineering_office/engineeringoffice_edit.html.twig", 1);
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
        $this->loadTemplate("navbar.html.twig", "engineering_office/engineeringoffice_edit.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"row mt-5\">
    <div class=\"col\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["autocomplete" => "off"]]);
        echo "
            <h1 class=\"text-center\">Bureau d'ingénieur</h1>
            <div class=\"mb-3\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du bureau"]);
        echo "
                ";
        // line 14
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>    

            <div class=\"mb-3\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "sort", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Activité d'entreprise"]);
        echo "
                ";
        // line 24
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "sort", [], "any", false, false, false, 24), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "sort", [], "any", false, false, false, 26), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 29
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "sort", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>  

            <div class=\"mb-3\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "address", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        echo "
                ";
        // line 34
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "address", [], "any", false, false, false, 34), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "address", [], "any", false, false, false, 36), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 39
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "address", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "zipcode", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Code postal"]);
        echo "
                ";
        // line 44
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "zipcode", [], "any", false, false, false, 44), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "zipcode", [], "any", false, false, false, 46), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 49
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "zipcode", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "location", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Localité"]);
        echo "
                ";
        // line 54
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "location", [], "any", false, false, false, 54), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "location", [], "any", false, false, false, 56), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 59
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "location", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "country", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Pays"]);
        echo "
                ";
        // line 64
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "country", [], "any", false, false, false, 64), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "country", [], "any", false, false, false, 66), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 69
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "country", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "phone", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        echo "
                ";
        // line 74
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "phone", [], "any", false, false, false, 74), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "phone", [], "any", false, false, false, 76), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 79
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "phone", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "fax", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fax"]);
        echo "
                ";
        // line 84
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "fax", [], "any", false, false, false, 84), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "fax", [], "any", false, false, false, 86), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 89
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "fax", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "email", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        echo "
                ";
        // line 94
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "email", [], "any", false, false, false, 96), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 99
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"mb-3\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "website", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Site web"]);
        echo "
                ";
        // line 104
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "website", [], "any", false, false, false, 104), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "website", [], "any", false, false, false, 106), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 109
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "website", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "vars", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114)) {
            echo "           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteEngineeringoffice()\">Supprimer</a>
                ";
        }
        // line 117
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringoffice_list");
        echo "\" class=\"btn btn-secondary ml-3\">Retour</a>
            </div>            
        ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"engineering_office_name\").focus()    

    function deleteEngineeringoffice() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringoffice_delete", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 128, $this->source); })())]), "html", null, true);
        echo "',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engineeringoffice_list");
        echo "?message=Bureau supprimé'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "engineering_office/engineeringoffice_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 132,  340 => 128,  328 => 119,  322 => 117,  316 => 114,  307 => 109,  301 => 106,  296 => 104,  292 => 103,  284 => 99,  278 => 96,  273 => 94,  269 => 93,  261 => 89,  255 => 86,  250 => 84,  246 => 83,  238 => 79,  232 => 76,  227 => 74,  223 => 73,  215 => 69,  209 => 66,  204 => 64,  200 => 63,  192 => 59,  186 => 56,  181 => 54,  177 => 53,  169 => 49,  163 => 46,  158 => 44,  154 => 43,  146 => 39,  140 => 36,  135 => 34,  131 => 33,  123 => 29,  117 => 26,  112 => 24,  108 => 23,  100 => 19,  94 => 16,  89 => 14,  85 => 13,  79 => 10,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
            <h1 class=\"text-center\">Bureau d'ingénieur</h1>
            <div class=\"mb-3\">
                {{ form_label(form.name, 'Nom du bureau', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.name) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.name) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}    
            </div>    

            <div class=\"mb-3\">
                {{ form_label(form.sort, 'Activité d\\'entreprise', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.sort) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.sort) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.sort, {'attr': {'class': 'form-control'}}) }}    
            </div>  

            <div class=\"mb-3\">
                {{ form_label(form.address, 'Adresse', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.address) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.address) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.zipcode, 'Code postal', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.zipcode) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.zipcode) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.zipcode, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.location, 'Localité', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.location) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.location) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.country, 'Pays', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.country) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.country) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.phone, 'Téléphone', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.phone) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.phone) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.fax, 'Fax', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.fax) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.fax) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.fax, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.email, 'Email', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.email) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.email) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.website, 'Site web', {'label_attr': { class: 'form-label' }}) }}
                {% if form_errors(form.website) %}            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;{{ form_errors(form.website) }}
                    </div>            
                {% endif %}
                {{ form_widget(form.website, {'attr': {'class': 'form-control'}}) }}    
            </div>

            <div class=\"my-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>     
                {% if form.vars.value.id %}           
                    <a href=\"#\" class=\"btn btn-danger ml-3\" onClick=\"deleteEngineeringoffice()\">Supprimer</a>
                {% endif %}
                <a href=\"{{path('engineeringoffice_list')}}\" class=\"btn btn-secondary ml-3\">Retour</a>
            </div>            
        {{ form_end(form) }}
    </div>    
</div>
<script>
    document.getElementById(\"engineering_office_name\").focus()    

    function deleteEngineeringoffice() {
        if (confirm('Confirmer la suppression ?')) {                    
            \$.ajax({
                url: '{{path(\"engineeringoffice_delete\",{id:id})}}',
                type: 'DELETE',
                dataType: 'text',
                success: function (result) {                    
                    document.location.href = '{{path(\"engineeringoffice_list\")}}?message=Bureau supprimé'
                },
                error: function(jqXHR, textStatus, errorThrown ) {
                    console.log(jqXHR, textStatus, errorThrown)
                    alert('Erreur lors de la suppression')                    
                }
            })            
        }        
    }
</script>
{% endblock %}
", "engineering_office/engineeringoffice_edit.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\engineering_office\\engineeringoffice_edit.html.twig");
    }
}
