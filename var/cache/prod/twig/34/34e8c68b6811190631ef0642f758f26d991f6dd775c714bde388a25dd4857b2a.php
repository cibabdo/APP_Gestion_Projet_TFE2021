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
class __TwigTemplate_8fc914157272ac5b1fcc51da51efbe327c723c60e0923c6ba4e6eebe1dac9254 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row align-items-center justify-content-center\">
    <div class=\"col-5\">       
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" autocomplete=\"off\">
            <h1 class=\"text-center\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\" required name=\"_username\" placeholder=\"name@example.com\">
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" required name=\"_password\" >        
            </div>
            ";
        // line 16
        if (($context["error"] ?? null)) {
            // line 17
            echo "                <div id=\"message\" class=\"form-success text-danger\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
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
        return array (  87 => 21,  81 => 18,  78 => 17,  76 => 16,  70 => 13,  64 => 10,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\xampp803\\htdocs\\symfony\\templates\\security\\login.html.twig");
    }
}
