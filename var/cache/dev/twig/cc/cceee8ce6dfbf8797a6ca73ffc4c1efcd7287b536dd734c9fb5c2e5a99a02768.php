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

/* contact/index.html.twig */
class __TwigTemplate_dbed8a967fa1b194eb0146f80d37ba8dbd7b5ef23dee47955dc9604363be2011 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Hello ContactController!";
        
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


<body>


<!-- Page Header -->
<header class=\"masthead\" style=\"background-image: url('img/contact-bg.jpg')\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>Contact</h1>
                    <span class=\"subheading\">Vous avez une question ? Ecrivez-nous.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <p>Envoyez nous un message et nous vous répondrons dès que possible</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Name</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Email Address</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">

                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Message</label>
                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <br>
                <div id=\"success\"></div>
                <button type=\"submit\" class=\"btn btn-secondary\" id=\"sendMessageButton\">Envoyer</button>
            </form>
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
        return "contact/index.html.twig";
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

{% block title %}Hello ContactController!{% endblock %}

{% block body %}



<body>


<!-- Page Header -->
<header class=\"masthead\" style=\"background-image: url('img/contact-bg.jpg')\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>Contact</h1>
                    <span class=\"subheading\">Vous avez une question ? Ecrivez-nous.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <p>Envoyez nous un message et nous vous répondrons dès que possible</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Name</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Email Address</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">

                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Message</label>
                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <br>
                <div id=\"success\"></div>
                <button type=\"submit\" class=\"btn btn-secondary\" id=\"sendMessageButton\">Envoyer</button>
            </form>
        </div>
    </div>
</div>

<hr>


{% endblock %}
", "contact/index.html.twig", "/Users/acfi-associes-decombe/Documents/projets/blog/templates/contact/index.html.twig");
    }
}
