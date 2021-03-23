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

/* blog/index.html.twig */
class __TwigTemplate_031e8ef0b0e3f61c974ee6ae38493644f0eb139ea86aa7789af2b4b98df95801 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('assets/picture/home-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1> Blog</h1>
                        <span class=\"subheading\">Mon blog avec Symfony5</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">

                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["articles"]);
        foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
            // line 28
            echo "                <div class=\"post-preview\">

                    <a href=\"blog/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "subtitle", [], "any", false, false, false, 35), "html", null, true);
            echo "
                        </h3>
                    </a>
                    <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "image", [], "any", false, false, false, 38), "html", null, true);
            echo "\"/>
                    <p class=\"post-meta\">Posted by ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "author", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        <a href=\"#\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["articles"], "category", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "createdAt", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
            echo "    </p>

                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_like", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn js-like\">

                        ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45) && twig_get_attribute($this->env, $this->source, $context["articles"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)], "method", false, false, false, 45))) {
                // line 46
                echo "                            <i class=\"fa fa-thumbs-up\"></i>
                        ";
            } else {
                // line 48
                echo "                            <i class=\"far fa-thumbs-up\"></i>
                        ";
            }
            // line 50
            echo "
                        <span class=\"js-likes\">";
            // line 51
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "likes", [], "any", false, false, false, 51)), "html", null, true);
            echo "</span>
                        <span class=\"js-label\">J'aime</span>
                    </a>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>
                <hr>
                <!-- Pager -->
                <div class=\"clearfix\">
                    
                    <a class=\"btn btn-primary float-right\" href=\"#\">Plus d'articles &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  171 => 51,  168 => 50,  164 => 48,  160 => 46,  158 => 45,  153 => 43,  148 => 41,  144 => 40,  140 => 39,  136 => 38,  130 => 35,  124 => 32,  119 => 30,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('assets/picture/home-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1> Blog</h1>
                        <span class=\"subheading\">Mon blog avec Symfony5</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">

                {% for articles in articles %}
                <div class=\"post-preview\">

                    <a href=\"blog/{{ articles.id }}\">
                        <h2 class=\"post-title\">
                            {{ articles.title }}
                        </h2>
                        <h3 class=\"post-subtitle\">
                            {{ articles.subtitle }}
                        </h3>
                    </a>
                    <img src=\"{{ articles.image }}\"/>
                    <p class=\"post-meta\">Posted by {{ articles.author }}
                        <a href=\"#\">{{ articles.category.title }}</a>
                        {{ articles.createdAt | date('d/m/Y') }}    </p>

                    <a href=\"{{ path('blog_like', { 'id': articles.id }) }}\" class=\"btn js-like\">

                        {% if app.user and articles.isLikedByUser(app.user) %}
                            <i class=\"fa fa-thumbs-up\"></i>
                        {% else %}
                            <i class=\"far fa-thumbs-up\"></i>
                        {% endif %}

                        <span class=\"js-likes\">{{ articles.likes | length }}</span>
                        <span class=\"js-label\">J'aime</span>
                    </a>

                    {% endfor %}
                </div>
                <hr>
                <!-- Pager -->
                <div class=\"clearfix\">
                    
                    <a class=\"btn btn-primary float-right\" href=\"#\">Plus d'articles &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

{% endblock %}

", "blog/index.html.twig", "/Users/acfi-associes-decombe/Documents/projets/blog/templates/blog/index.html.twig");
    }
}
