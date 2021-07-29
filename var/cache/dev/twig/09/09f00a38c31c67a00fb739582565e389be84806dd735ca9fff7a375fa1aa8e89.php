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

/* pages/page05.html.twig */
class __TwigTemplate_26701d1bdbecf8beaed710de1a01d079bd785dbaa711b4caa6a119b42189225c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page05.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page05.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/page05.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style-general.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style-retour-cam.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Alignement
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<body>
\t\t<article class=\"row\">
\t\t\t<main class=\"main\">
\t\t\t\t<h3>View</h3>
\t\t\t\t<iframe width=\"1080\" height=\"720\" id=\"iframe\" ";
        // line 15
        echo " src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://images.unsplash.com/photo-1480796927426-f609979314bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"), "html", null, true);
        echo "\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
\t\t\t\t<canvas class=\"canvas\" id=\"canvas\" width=\"1080\" height=\"720\"></canvas>
\t\t\t</main>
\t\t\t<aside class=\"side\">
\t\t\t\t<h3>Controls</h3>
\t\t\t\t<label for=\"thickness\">Épaisseur :
\t\t\t\t\t<span id=\"valueThick\" class=\"value\"></span>
\t\t\t\t\t<input type=\"range\" id=\"alpha\" name=\"alpha\" min=\"1\" max=\"10\" value=\"1\">
\t\t\t\t</label>
\t\t\t\t<label for=\"alpha\">Transparance :
\t\t\t\t\t<span id=\"valueAlpha\" class=\"value\"></span>
\t\t\t\t\t<input type=\"range\" id=\"step\" name=\"step\" min=\"1\" max=\"75\" value=\"5\"></label>
\t\t\t\t<label for=\"step\">Écart:
\t\t\t\t\t<span id=\"valueStep\" class=\"value\"></span>
\t\t\t\t\t<input type=\"range\" id=\"thickness\" name=\"thickness\" min=\".5\" max=\"15\" value=\"5\">
\t\t\t\t</label>
\t\t\t</aside>
\t\t</article>
\t</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/page05.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 15,  114 => 11,  104 => 10,  84 => 8,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style-general.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style-retour-cam.css\">
{% endblock %}
{% block title %}Alignement
{% endblock %}
{% block body %}
\t<body>
\t\t<article class=\"row\">
\t\t\t<main class=\"main\">
\t\t\t\t<h3>View</h3>
\t\t\t\t<iframe width=\"1080\" height=\"720\" id=\"iframe\" {# src=\"{{ asset('http://10.0.0.101/video/videoPlayer.html') }}\" #} src=\"{{ asset('https://images.unsplash.com/photo-1480796927426-f609979314bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') }}\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
\t\t\t\t<canvas class=\"canvas\" id=\"canvas\" width=\"1080\" height=\"720\"></canvas>
\t\t\t</main>
\t\t\t<aside class=\"side\">
\t\t\t\t<h3>Controls</h3>
\t\t\t\t<label for=\"thickness\">Épaisseur :
\t\t\t\t\t<span id=\"valueThick\" class=\"value\"></span>
\t\t\t\t\t<input type=\"range\" id=\"alpha\" name=\"alpha\" min=\"1\" max=\"10\" value=\"1\">
\t\t\t\t</label>
\t\t\t\t<label for=\"alpha\">Transparance :
\t\t\t\t\t<span id=\"valueAlpha\" class=\"value\"></span>
\t\t\t\t\t<input type=\"range\" id=\"step\" name=\"step\" min=\"1\" max=\"75\" value=\"5\"></label>
\t\t\t\t<label for=\"step\">Écart:
\t\t\t\t\t<span id=\"valueStep\" class=\"value\"></span>
\t\t\t\t\t<input type=\"range\" id=\"thickness\" name=\"thickness\" min=\".5\" max=\"15\" value=\"5\">
\t\t\t\t</label>
\t\t\t</aside>
\t\t</article>
\t</body>
{% endblock %}
", "pages/page05.html.twig", "C:\\Users\\bbekoy\\Documents\\Projects\\Symfony\\overlay\\templates\\pages\\page05.html.twig");
    }
}
