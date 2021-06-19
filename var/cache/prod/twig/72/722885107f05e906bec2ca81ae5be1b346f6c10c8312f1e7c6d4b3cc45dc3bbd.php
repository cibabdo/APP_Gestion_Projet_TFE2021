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
class __TwigTemplate_017b9d9f41d041f4ec546432893b52f387ec9a6eabbd0826ff1699b27ec88ff5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/signin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row align-items-center justify-content-center\">
    <div class=\"col-5\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["autocomplete" => "off"]]);
        echo "
            <h1 class=\"text-center\">Inscription</h1>
            <div class=\"mb-3\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de l'utilisateur"]);
        echo "
                ";
        // line 10
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 10), 'errors')) {
            echo "            
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 12), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 15
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "    
            </div>            
            <div class=\"mb-3\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email de l'utilisateur"]);
        echo "
                ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 19), 'errors')) {
            echo "           
                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 21), 'errors');
            echo "
                    </div>
                ";
        }
        // line 24
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>            
            <div class=\"mb-3\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        echo "
                ";
        // line 28
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 28), 'errors')) {
            // line 29
            echo "                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 30), 'errors');
            echo "
                    </div>            
                ";
        }
        // line 33
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>            
            <div class=\"mb-3\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password_confirm", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Confirmation du mot de passe"]);
        echo "
                ";
        // line 37
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password_confirm", [], "any", false, false, false, 37), 'errors')) {
            // line 38
            echo "                    <div class=\"form-error text-danger\">
                        <span class=\"span_error bg-danger text-white\">ERREUR</span>&nbsp;";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password_confirm", [], "any", false, false, false, 39), 'errors');
            echo "
                    </div>
                ";
        }
        // line 42
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password_confirm", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "       
            </div>            
            <div class=\"form-success\">
                ";
        // line 45
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
            </div>
            <div class=\"mt-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
            </div>            
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>    
</div>
<script>
    document.getElementById(\"signin_username\").focus()
</script>
";
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
        return array (  156 => 50,  148 => 45,  141 => 42,  135 => 39,  132 => 38,  130 => 37,  126 => 36,  119 => 33,  113 => 30,  110 => 29,  108 => 28,  104 => 27,  97 => 24,  91 => 21,  86 => 19,  82 => 18,  75 => 15,  69 => 12,  64 => 10,  60 => 9,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/signin.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\security\\signin.html.twig");
    }
}
