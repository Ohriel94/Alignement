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

/* pages/page02.html.twig */
class __TwigTemplate_03b21f2e5b4362ecc4576622be7a8aa1880b719f50f32cd5b207708d248b8186 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page02.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page02.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/page02.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
    integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style-general.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TS-02 (twig)";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<article class=\"text-center\">
    <h2>Jukebox</h2>
    <p>Cliquer sur <a href=\"#\">Écouter</a> pour entendre une chanson de l'artiste</p>
    <section id=\"carouselExampleIndicators\" class=\"carousel slide\" data-interval=\"false\" data-ride=\"carousel\"
         data-pause=\"hover\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"6\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"7\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"8\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"9\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"10\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"11\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"12\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"13\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"14\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"15\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"../images/artistes/david.jpg\" alt=\"david\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>David Gilmour</h5>
                    <a href=\"https://www.youtube.com/watch?v=fn1qEIgbYe8\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/darryl (1).jpg"), "html", null, true);
        echo "\" alt=\"darryl1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Darryl Reeves</h5>
                    <a href=\"https://www.youtube.com/watch?v=O-mD9ctnwQQ\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/darryl (2).jpg"), "html", null, true);
        echo "\" alt=\"darryl2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Darryl Reeves</h5>
                    <a href=\"https://www.youtube.com/watch?v=u4SgGCCvzCg\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/esperanza.jpg"), "html", null, true);
        echo "\" alt=\"esperanza1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Esperanza Spalding</h5>
                    <a href=\"https://www.youtube.com/watch?v=FebLXwtycjQ\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/esperanza (1).jpg"), "html", null, true);
        echo "\" alt=\"esperanza2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Esperanza Spalding</h5>
                    <a href=\"https://www.youtube.com/watch?v=OgrmWSnklkY\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/esperanza (3).jpg"), "html", null, true);
        echo "\" alt=\"esperanza3\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Esperanza Spading</h5>
                    <a href=\"https://www.youtube.com/watch?v=S13ovac-eBk&list=OLAK5uy_lmxRiAV43KrgGLc01DnjS5hh4r5iv7lqA&index=5\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/meshell (1).jpg"), "html", null, true);
        echo "\" alt=\"meshell1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Meshell Ndegeocello</h5>
                    <a href=\"https://www.youtube.com/watch?v=AvsE6A5B2wQ\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/meshell (2).jpg"), "html", null, true);
        echo "\" alt=\"meshell2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Meshell Ndegeocello</h5>
                    <a href=\"https://www.youtube.com/watch?v=X7BCwekvNbs\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/floacist.jpg"), "html", null, true);
        echo "\" alt=\"floacist1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>The Floacist</h5>
                    <a href=\"https://www.youtube.com/watch?v=WlXFnRGy3gU\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/floacist2.jpg"), "html", null, true);
        echo "\" alt=\"floacist2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>The Floacist</h5>
                    <a href=\"https://www.youtube.com/watch?v=36SAgASZTcE\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/kamasi.jpg"), "html", null, true);
        echo "\" alt=\"kamasi\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Kamasi Washington</h5>
                    <a href=\"https://www.youtube.com/watch?v=YFe5a66BuCw&list=PLULG1QJdgkY5JmS-hu_qNEZfnfgYLsN6v&index=1\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/thundercat.jpg"), "html", null, true);
        echo "\" alt=\"thundercat\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Thundercat</h5>
                    <a href=\"https://www.youtube.com/watch?v=jBuKNkVFaMU\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/kandrace.jpg"), "html", null, true);
        echo "\" alt=\"kandrace\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Kandace Springs</h5>
                    <a href=\"https://www.youtube.com/watch?v=P4orAHaTo5o\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/minnie.jpg"), "html", null, true);
        echo "\" alt=\"minnie\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Minnie Riperton</h5>
                    <a href=\"https://www.youtube.com/watch?v=w_pBpOMJsoM&list=OLAK5uy_lEEv_q6iEGzOEmx5QHcXukDw_o1hUTwF0&index=6\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/roy (1).jpg"), "html", null, true);
        echo "\" alt=\"roy1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Roy Hargrove</h5>
                    <a href=\"https://www.youtube.com/watch?v=GhJsGuvX93k\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artistes/roy (2).jpg"), "html", null, true);
        echo "\" alt=\"roy2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Roy Hargrove</h5>
                    <a href=\"https://www.youtube.com/watch?v=XM83V4BD1Bw\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </section>
</article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        echo "    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\"
        crossorigin=\"anonymous\"></script>
    <script src=\"../js/script.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/page02.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 161,  315 => 160,  287 => 142,  277 => 135,  267 => 128,  257 => 121,  247 => 114,  237 => 107,  227 => 100,  217 => 93,  207 => 86,  197 => 79,  187 => 72,  177 => 65,  167 => 58,  157 => 51,  147 => 44,  113 => 12,  103 => 11,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
    integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style-general.css\">
{% endblock %}

{% block title %}TS-02 (twig){% endblock %}

{% block body %}
<article class=\"text-center\">
    <h2>Jukebox</h2>
    <p>Cliquer sur <a href=\"#\">Écouter</a> pour entendre une chanson de l'artiste</p>
    <section id=\"carouselExampleIndicators\" class=\"carousel slide\" data-interval=\"false\" data-ride=\"carousel\"
         data-pause=\"hover\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"6\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"7\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"8\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"9\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"10\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"11\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"12\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"13\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"14\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"15\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"../images/artistes/david.jpg\" alt=\"david\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>David Gilmour</h5>
                    <a href=\"https://www.youtube.com/watch?v=fn1qEIgbYe8\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/darryl (1).jpg') }}\" alt=\"darryl1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Darryl Reeves</h5>
                    <a href=\"https://www.youtube.com/watch?v=O-mD9ctnwQQ\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/darryl (2).jpg') }}\" alt=\"darryl2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Darryl Reeves</h5>
                    <a href=\"https://www.youtube.com/watch?v=u4SgGCCvzCg\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/esperanza.jpg') }}\" alt=\"esperanza1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Esperanza Spalding</h5>
                    <a href=\"https://www.youtube.com/watch?v=FebLXwtycjQ\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/esperanza (1).jpg') }}\" alt=\"esperanza2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Esperanza Spalding</h5>
                    <a href=\"https://www.youtube.com/watch?v=OgrmWSnklkY\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/esperanza (3).jpg') }}\" alt=\"esperanza3\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Esperanza Spading</h5>
                    <a href=\"https://www.youtube.com/watch?v=S13ovac-eBk&list=OLAK5uy_lmxRiAV43KrgGLc01DnjS5hh4r5iv7lqA&index=5\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/meshell (1).jpg') }}\" alt=\"meshell1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Meshell Ndegeocello</h5>
                    <a href=\"https://www.youtube.com/watch?v=AvsE6A5B2wQ\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/meshell (2).jpg') }}\" alt=\"meshell2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Meshell Ndegeocello</h5>
                    <a href=\"https://www.youtube.com/watch?v=X7BCwekvNbs\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/floacist.jpg') }}\" alt=\"floacist1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>The Floacist</h5>
                    <a href=\"https://www.youtube.com/watch?v=WlXFnRGy3gU\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/floacist2.jpg') }}\" alt=\"floacist2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>The Floacist</h5>
                    <a href=\"https://www.youtube.com/watch?v=36SAgASZTcE\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/kamasi.jpg') }}\" alt=\"kamasi\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Kamasi Washington</h5>
                    <a href=\"https://www.youtube.com/watch?v=YFe5a66BuCw&list=PLULG1QJdgkY5JmS-hu_qNEZfnfgYLsN6v&index=1\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/thundercat.jpg') }}\" alt=\"thundercat\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Thundercat</h5>
                    <a href=\"https://www.youtube.com/watch?v=jBuKNkVFaMU\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/kandrace.jpg') }}\" alt=\"kandrace\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Kandace Springs</h5>
                    <a href=\"https://www.youtube.com/watch?v=P4orAHaTo5o\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/minnie.jpg') }}\" alt=\"minnie\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Minnie Riperton</h5>
                    <a href=\"https://www.youtube.com/watch?v=w_pBpOMJsoM&list=OLAK5uy_lEEv_q6iEGzOEmx5QHcXukDw_o1hUTwF0&index=6\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/roy (1).jpg') }}\" alt=\"roy1\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Roy Hargrove</h5>
                    <a href=\"https://www.youtube.com/watch?v=GhJsGuvX93k\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/artistes/roy (2).jpg') }}\" alt=\"roy2\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Roy Hargrove</h5>
                    <a href=\"https://www.youtube.com/watch?v=XM83V4BD1Bw\" target=\"_blank\" class=\"liensArtistes\">Écouter</a>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </section>
</article>
{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\"
        crossorigin=\"anonymous\"></script>
    <script src=\"../js/script.js\"></script>
{% endblock %}
", "pages/page02.html.twig", "C:\\Users\\bbekoy\\Documents\\Projects\\Symfony\\overlay\\templates\\pages\\page02.html.twig");
    }
}
