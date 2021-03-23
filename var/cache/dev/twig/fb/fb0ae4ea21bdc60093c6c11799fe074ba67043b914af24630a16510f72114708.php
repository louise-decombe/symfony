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

/* blog/home.html.twig */
class __TwigTemplate_8e114f3f0be1f35fd101b345babdfa7b2b27223aa027f1a7a1eb02a7bd842f1d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
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

        echo "Hello BlogController!";
        
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

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"post-preview\">

                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class=\"post-subtitle\">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Blog</a>
                        on September 24, 2019</p>
                </div>
                <hr>
                <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on September 18, 2019</p>
                </div>
                <hr>
                <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class=\"post-subtitle\">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on August 24, 2019</p>
                </div>
                <hr>
                <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            Failure is not an option
                        </h2>
                        <h3 class=\"post-subtitle\">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on July 8, 2019</p>
                </div>
                <hr>
                <!-- Pager -->
                <div class=\"clearfix\">
                    <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
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
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlogController!{% endblock %}

{% block body %}


    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"post-preview\">

                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class=\"post-subtitle\">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Blog</a>
                        on September 24, 2019</p>
                </div>
                <hr>
                <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on September 18, 2019</p>
                </div>
                <hr>
                <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class=\"post-subtitle\">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on August 24, 2019</p>
                </div>
                <hr>
                <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                            Failure is not an option
                        </h2>
                        <h3 class=\"post-subtitle\">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on July 8, 2019</p>
                </div>
                <hr>
                <!-- Pager -->
                <div class=\"clearfix\">
                    <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

{% endblock %}
", "blog/home.html.twig", "/Users/acfi-associes-decombe/Documents/projets/blog/templates/blog/home.html.twig");
    }
}
