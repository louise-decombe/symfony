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

/* blog/show.html.twig */
class __TwigTemplate_5a43852f266704f3864864fa1cd23dd4203f1f560d2395ef844dc63d4acaf5fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <header class=\"masthead\" style=\"background-image: url('img/post-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"post-heading\">

                        <h1>   ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "
                        </h1>
                        <h2 class=\"subheading\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "subtitle", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
                        <span class=\"meta\">Posted by
                         <a href=\"#\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "author", [], "any", false, false, false, 17), "html", null, true);
        echo "</a> le
                            ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "   </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class=\"container\">
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Retour</a>

            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <p> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "text", [], "any", false, false, false, 32), "html", null, true);
        echo " </p>
                </div>
            </div>

        </div>
        <div class=\"card\">
            <div class=\"container\">
                <div class=\"control-group\">
                    <h1> ";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "comments", [], "any", false, false, false, 40)), "html", null, true);
        echo " commentaire(s)</h1>

                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "comments", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 43
            echo "                    <div class=\"post-preview\">
                        <p class=\"post-title\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 45), "html", null, true);
            echo "                        </p>
                        <h5 class=\"post-subtitle\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 47), "html", null, true);
            echo "                               </h5>
                        <p>    ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "    </p>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "
                        <h2>Ajouter un commentaire</h2>

                        ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 56, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 57, $this->source); })()), "author", [], "any", false, false, false, 57), 'row');
            echo "
                        ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), 'row');
            echo "
                        ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 59, $this->source); })()), 'form_end');
            echo "

                    </div>
                ";
        } else {
            // line 63
            echo "                    <hr>
                    <h4> Vous devez être <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">connecté(e)</a> pour poster un commentaire.
                    </h4>

                    ";
        }
        // line 68
        echo "
                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Retour</a>

                </div>
            </div>

    </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 69,  212 => 68,  205 => 64,  202 => 63,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  178 => 53,  176 => 52,  173 => 51,  164 => 48,  160 => 47,  155 => 45,  151 => 43,  147 => 42,  142 => 40,  131 => 32,  124 => 28,  111 => 18,  107 => 17,  102 => 15,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }}{% endblock %}

{% block body %}
    <header class=\"masthead\" style=\"background-image: url('img/post-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"post-heading\">

                        <h1>   {{ article.title }}
                        </h1>
                        <h2 class=\"subheading\">{{ article.subtitle }}</h2>
                        <span class=\"meta\">Posted by
                         <a href=\"#\"> {{ article.author }}</a> le
                            {{ article.createdAt | date('d/m/Y') }}   </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class=\"container\">
            <a href=\"{{ path('blog') }}\">Retour</a>

            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <p> {{ article.text }} </p>
                </div>
            </div>

        </div>
        <div class=\"card\">
            <div class=\"container\">
                <div class=\"control-group\">
                    <h1> {{ article.comments | length }} commentaire(s)</h1>

                    {% for comment in article.comments %}
                    <div class=\"post-preview\">
                        <p class=\"post-title\">
                            {{ comment.author }}                        </p>
                        <h5 class=\"post-subtitle\">
                            {{ comment.content }}                               </h5>
                        <p>    {{ comment.createdAt | date('d/m/Y') }}    </p>

                        {% endfor %}

                        {% if app.user %}

                        <h2>Ajouter un commentaire</h2>

                        {{ form_start(commentForm) }}
                        {{ form_row(commentForm.author) }}
                        {{ form_row(commentForm.content) }}
                        {{ form_end(commentForm) }}

                    </div>
                {% else %}
                    <hr>
                    <h4> Vous devez être <a href=\"{{ path('app_login') }}\">connecté(e)</a> pour poster un commentaire.
                    </h4>

                    {% endif %}

                    <a href=\"{{ path('blog') }}\">Retour</a>

                </div>
            </div>

    </article>
{% endblock %}
", "blog/show.html.twig", "/Users/acfi-associes-decombe/Documents/projets/blog/templates/blog/show.html.twig");
    }
}
