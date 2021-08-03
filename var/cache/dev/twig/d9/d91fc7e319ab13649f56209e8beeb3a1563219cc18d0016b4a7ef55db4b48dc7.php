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

/* pages/page01.html.twig */
class __TwigTemplate_127e31938347c3e674f33ad64a8e26c4fdfc0e0b70a85da576d3d921c4b6710a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page01.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page01.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/page01.html.twig", 1);
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
        echo "\t<body onload=\"DessinerCanvas()\">
\t\t<article class=\"row\">
\t\t\t<aside class=\"side\">
\t\t\t\t<div class=\"slider-container\">
\t\t\t\t\t<h2>Controls</h2>
\t\t\t\t\t<label for=\"epaisseur\">Épaisseur:
\t\t\t\t\t\t<span id=\"thkValue\">0</span>
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"range\" id=\"thkSlider\" min=\"5\" max=\"25\" value=\"10\">
\t\t\t\t\t<label for=\"alpha\">Alpha:
\t\t\t\t\t\t<span id=\"alpValue\">0</span>
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"range\" id=\"alpSlider\" min=\"20\" max=\"100\" value=\"75\">
\t\t\t\t\t<label for=\"densite\">Densité:
\t\t\t\t\t\t<span id=\"denValue\">0</span>
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"range\" id=\"denSlider\" min=\"3\" max=\"20\" value=\"10\">
\t\t\t\t</div><br>
\t\t\t\t<div class=\"boutons-container\">
\t\t\t\t\t<input type=\"button\" id=\"btn-rouge\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"rouge\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-bleu\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"bleu\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-vert\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"vert\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-orange\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"orange\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-violet\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"violet\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-blanc\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"blanc\"><br>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<main class=\"main\">
\t\t\t\t<h2>View</h2>
\t\t\t\t<canvas id=\"canvas\" width=\"2690\" height=\"1520\"></canvas>
\t\t\t\t<iframe id=\"iframe\" title=\"retourCamera\" src=\"\" scrolling=\"no\" loading=\"eager\"></iframe>
\t\t\t</main>
\t\t</article>
\t</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/page01.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 11,  104 => 10,  84 => 8,  70 => 3,  60 => 2,  37 => 1,);
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
\t<body onload=\"DessinerCanvas()\">
\t\t<article class=\"row\">
\t\t\t<aside class=\"side\">
\t\t\t\t<div class=\"slider-container\">
\t\t\t\t\t<h2>Controls</h2>
\t\t\t\t\t<label for=\"epaisseur\">Épaisseur:
\t\t\t\t\t\t<span id=\"thkValue\">0</span>
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"range\" id=\"thkSlider\" min=\"5\" max=\"25\" value=\"10\">
\t\t\t\t\t<label for=\"alpha\">Alpha:
\t\t\t\t\t\t<span id=\"alpValue\">0</span>
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"range\" id=\"alpSlider\" min=\"20\" max=\"100\" value=\"75\">
\t\t\t\t\t<label for=\"densite\">Densité:
\t\t\t\t\t\t<span id=\"denValue\">0</span>
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"range\" id=\"denSlider\" min=\"3\" max=\"20\" value=\"10\">
\t\t\t\t</div><br>
\t\t\t\t<div class=\"boutons-container\">
\t\t\t\t\t<input type=\"button\" id=\"btn-rouge\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"rouge\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-bleu\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"bleu\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-vert\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"vert\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-orange\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"orange\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-violet\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"violet\"><br>
\t\t\t\t\t<input type=\"button\" id=\"btn-blanc\" class=\"boutons\" onclick=\"ChoisirCouleur(this)\" value=\"blanc\"><br>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<main class=\"main\">
\t\t\t\t<h2>View</h2>
\t\t\t\t<canvas id=\"canvas\" width=\"2690\" height=\"1520\"></canvas>
\t\t\t\t<iframe id=\"iframe\" title=\"retourCamera\" src=\"\" scrolling=\"no\" loading=\"eager\"></iframe>
\t\t\t</main>
\t\t</article>
\t</body>
{% endblock %}
", "pages/page01.html.twig", "C:\\Users\\bbekoy\\Documents\\Projects\\Symfony\\Alignement\\templates\\pages\\page01.html.twig");
    }
}
