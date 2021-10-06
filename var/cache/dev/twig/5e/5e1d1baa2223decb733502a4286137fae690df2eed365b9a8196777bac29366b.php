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

/* /security/login.html.twig */
class __TwigTemplate_070427451845d3db0cdf9886aac773f53af70243323d76226397324dbf090f52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "              
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "              
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <div class=\"card card0 border-0\">
        <div class=\"row d-flex\">
            <div class=\"col-lg-6\">
                <div class=\"card1 pb-5\">
                    <div class=\"row\"> <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/chulogo.png"), "html", null, true);
        echo "\" class=\"logo\"> </div>
                    <div class=\"row px-3 justify-content-center mt-4 mb-5 border-line\"> <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/picture_login.png"), "html", null, true);
        echo "\" class=\"image\"> </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card2 card border-0 px-4 py-5\">
                    <div class=\"row mb-4 px-3\">
                        
                        <select class=\"form-select\" name=\"select1\" id=\"select1\" onchange=\"change(this)\">
                            <option value=\"fr\" selected=\"selected\">Français</option>
                            <option value=\"en\">English</option>
                        </select>
                        <span><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/fr.png"), "html", null, true);
        echo "\" id=\"show\" alt=\"\" /></span>
                    </div>
                    <div class=\"row px-3 mb-4\">
                        <h4 class=\"mb-1\">CONNECTEZ-VOUS À VOTRE COMPTE</h4>
                    </div>
                    <form action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" autocomplete=\"off\">
                        <div class=\"row px-3\"> 
                            <label class=\"mb-1\">
                                <h6 class=\"mb-0 text-sm\">Adresse Email</h6>
                            </label>
                            <input class=\"mb-4\" type=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" required name=\"_username\" placeholder=\"Email valide\">
                        </div>
                        <div class=\"row px-3\">
                            <label class=\"mb-1\">
                                <h6 class=\"mb-0 text-sm\">Mot de passe</h6>
                            </label>
                            <input type=\"password\" required name=\"_password\" placeholder=\"Mot de passe\">
                        </div>
                        <div class=\"row px-3 mb-4\">
                            <div class=\"custom-control custom-checkbox custom-control-inline\">
                                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("init_password");
        echo "\" class=\"ml-auto mb-0 text-sm\">Mot de passe oublié ?</a>
                            </div> 
                        </div>
                        <div class=\"row mb-3 px-3\">
                            <button type=\"submit\" class=\"btn btn-blue text-center\" ><strong>CONNEXION</strong></button>
                        </div><!--TODO - SI CHAMP NON VALIDE EN FRONT = GRISE -->
                    </form>
                    
                    
                    <!--<div class=\"row mb-4 px-3\"> <small class=\"font-weight-bold\">Don't have an account? <a class=\"text-danger \">Register</a></small> </div>-->
                </div>
            </div>
        </div>
        <div class=\"bg-blue py-4\">
            <small class=\"ml-4 ml-sm-5 mb-2\">Un problème avec votre compte ? <a href=\"#\" class=\"link-dark\">contactez notre support</a></small>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  144 => 41,  136 => 36,  128 => 31,  114 => 20,  110 => 19,  104 => 15,  95 => 12,  92 => 11,  87 => 10,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<div class=\"container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto\">
    {% for message in app.flashes('message') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            {{ message }}              
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            {{ message }}              
        </div>
    {% endfor %}
    <div class=\"card card0 border-0\">
        <div class=\"row d-flex\">
            <div class=\"col-lg-6\">
                <div class=\"card1 pb-5\">
                    <div class=\"row\"> <img src=\"{{asset('image/chulogo.png')}}\" class=\"logo\"> </div>
                    <div class=\"row px-3 justify-content-center mt-4 mb-5 border-line\"> <img src=\"{{asset('image/picture_login.png')}}\" class=\"image\"> </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card2 card border-0 px-4 py-5\">
                    <div class=\"row mb-4 px-3\">
                        
                        <select class=\"form-select\" name=\"select1\" id=\"select1\" onchange=\"change(this)\">
                            <option value=\"fr\" selected=\"selected\">Français</option>
                            <option value=\"en\">English</option>
                        </select>
                        <span><img src=\"{{asset('image/fr.png')}}\" id=\"show\" alt=\"\" /></span>
                    </div>
                    <div class=\"row px-3 mb-4\">
                        <h4 class=\"mb-1\">CONNECTEZ-VOUS À VOTRE COMPTE</h4>
                    </div>
                    <form action=\"{{path('security_login')}}\" method=\"post\" autocomplete=\"off\">
                        <div class=\"row px-3\"> 
                            <label class=\"mb-1\">
                                <h6 class=\"mb-0 text-sm\">Adresse Email</h6>
                            </label>
                            <input class=\"mb-4\" type=\"email\" value=\"{{username}}\" required name=\"_username\" placeholder=\"Email valide\">
                        </div>
                        <div class=\"row px-3\">
                            <label class=\"mb-1\">
                                <h6 class=\"mb-0 text-sm\">Mot de passe</h6>
                            </label>
                            <input type=\"password\" required name=\"_password\" placeholder=\"Mot de passe\">
                        </div>
                        <div class=\"row px-3 mb-4\">
                            <div class=\"custom-control custom-checkbox custom-control-inline\">
                                <a href=\"{{path('init_password')}}\" class=\"ml-auto mb-0 text-sm\">Mot de passe oublié ?</a>
                            </div> 
                        </div>
                        <div class=\"row mb-3 px-3\">
                            <button type=\"submit\" class=\"btn btn-blue text-center\" ><strong>CONNEXION</strong></button>
                        </div><!--TODO - SI CHAMP NON VALIDE EN FRONT = GRISE -->
                    </form>
                    
                    
                    <!--<div class=\"row mb-4 px-3\"> <small class=\"font-weight-bold\">Don't have an account? <a class=\"text-danger \">Register</a></small> </div>-->
                </div>
            </div>
        </div>
        <div class=\"bg-blue py-4\">
            <small class=\"ml-4 ml-sm-5 mb-2\">Un problème avec votre compte ? <a href=\"#\" class=\"link-dark\">contactez notre support</a></small>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        const tab = document.getElementsByClassName('alert')    
        if (tab.length) tab[0].remove()
    },3000)    
</script>
{% endblock %}
", "/security/login.html.twig", "C:\\Users\\utilisateur\\Videos\\APP_Gestion_Projet\\templates\\security\\login.html.twig");
    }
}
