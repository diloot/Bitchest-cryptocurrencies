<?php

/* user/create.html.twig */
class __TwigTemplate_cb721a72df4dbea3cc9e7ba37f1587aa3484d64c0ad69a95dafae7ca65c91665 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'pageName' => [$this, 'block_pageName'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription d'un nouvel utilisateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\">Tableau de bord</a></li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Inscription d'un nouvel utilisateur</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_pageName($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        echo "Inscription d'un nouvel utilisateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    
        <div class=\"container\">
            <div class=\"login-wrap mb-5\">
                <div class=\"login-content\">
                    <div class=\"login-form\">       
                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "username", []), 'row', ["attr" => ["placeholder" => "Nom de l'utilisateur"]]);
        // line 24
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "email", []), 'row', ["attr" => ["placeholder" => "Adresse mail de l'utilisateur"]]);
        // line 27
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "password", []), 'row', ["attr" => ["placeholder" => "Mot de passe de l'utilisateur"]]);
        // line 30
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "confirm_password", []), 'row', ["attr" => ["placeholder" => "Tapez à nouveau le mot de passe"]]);
        // line 33
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "lastname", []), 'row', ["attr" => ["placeholder" => "Nom de famille de l'utilisateur"]]);
        // line 36
        echo "
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "firstname", []), 'row', ["attr" => ["placeholder" => "Prénom de l'utilisateur"]]);
        // line 39
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "address", []), 'row', ["attr" => ["placeholder" => "Adresse de l'utilisateur"]]);
        // line 42
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "cp", []), 'row', ["attr" => ["placeholder" => "Code postal"]]);
        // line 45
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "town", []), 'row', ["attr" => ["placeholder" => "Ville"]]);
        // line 48
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "phone", []), 'row', ["attr" => ["placeholder" => "Numéro de téléphone de l'utilisateur"]]);
        // line 51
        echo "
                        ";
        // line 64
        echo "                        <button type=\"submit\" class=\"au-btn au-btn--block au-btn--green m-b-20\">Enregistrer l'utilisateur</button>
                        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
                    </div>
                    ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 68
            echo "                    <div>
                        <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
            echo "\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour au tableau de bord</a>
                    </div>
                    ";
        }
        // line 72
        echo "                </div>
            </div>
        </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 72,  195 => 69,  192 => 68,  190 => 67,  185 => 65,  182 => 64,  179 => 51,  177 => 49,  174 => 48,  172 => 46,  169 => 45,  167 => 43,  164 => 42,  162 => 40,  159 => 39,  157 => 37,  154 => 36,  152 => 34,  149 => 33,  147 => 31,  144 => 30,  142 => 28,  139 => 27,  137 => 25,  134 => 24,  132 => 22,  128 => 21,  121 => 16,  112 => 15,  94 => 14,  80 => 9,  77 => 8,  68 => 7,  50 => 5,  40 => 1,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_4_layout.html.twig'%}

{% block title %}Inscription d'un nouvel utilisateur{% endblock %}

{% block breadcrumb %}
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\"><a href=\"{{path('admin_users')}}\">Tableau de bord</a></li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Inscription d'un nouvel utilisateur</li>
{% endblock %}

{% block pageName %}Inscription d'un nouvel utilisateur{% endblock %}
{% block body %}
    
        <div class=\"container\">
            <div class=\"login-wrap mb-5\">
                <div class=\"login-content\">
                    <div class=\"login-form\">       
                        {{ form_start(form) }}
                        {{ form_row(form.username, {
                            'attr': {'placeholder': \"Nom de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.email, {
                            'attr': {'placeholder': \"Adresse mail de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.password, {
                            'attr': {'placeholder': \"Mot de passe de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.confirm_password, {
                            'attr': {'placeholder': \"Tapez à nouveau le mot de passe\"}
                            }) }}
                        {{ form_row(form.lastname, {
                            'attr': {'placeholder': \"Nom de famille de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.firstname, {
                            'attr': {'placeholder': \"Prénom de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.address, {
                            'attr': {'placeholder': \"Adresse de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.cp, {
                            'attr': {'placeholder': \"Code postal\"}
                            }) }}
                        {{ form_row(form.town, {
                            'attr': {'placeholder': \"Ville\"}
                            }) }}
                        {{ form_row(form.phone, {
                            'attr': {'placeholder': \"Numéro de téléphone de l'utilisateur\"}
                            }) }}
                        {#{{ form_row(form.salt, {
                            'label': \"Salt :\",
                            'attr': {'value': 'AAAAAAAA'}
                        }) }}
                        {{ form_row(form.solde, {
                            'label': \"Solde en € :\",
                            'attr': {'value': 0}
                        }) }}
                        {{ form_row(form.roles, {
                            'label': \"Rôle :\",
                            'attr': {'value': \"ROLE_USER\"}
                        }) }}#}
                        <button type=\"submit\" class=\"au-btn au-btn--block au-btn--green m-b-20\">Enregistrer l'utilisateur</button>
                        {{ form_end(form) }}
                    </div>
                    {% if is_granted ('ROLE_ADMIN') %}
                    <div>
                        <a href=\"{{ path('admin_users')}}\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour au tableau de bord</a>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    
{% endblock %}", "user/create.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\user\\create.html.twig");
    }
}
