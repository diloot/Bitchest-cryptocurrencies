<?php

/* user/edit.html.twig */
class __TwigTemplate_3f91f1a864d5c8d4a7d1957832b201a0559a68fa2b73896345dfbbff3d480864 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

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

        echo "Modification d'un profil utilisateur";
        
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
    <li class=\"list-inline-item\">Modification d'un profil utilisateur</li>
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

        echo "Modification de l'utilisateur ";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        
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
        echo "        <div class=\"container\">
            <div class=\"login-wrap mb-5\">
                <div class=\"login-content\">
                <!--validation access for url hacking-->
                ";
        // line 20
        if ((((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 20, $this->source); })()) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", []), "id", [])) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 21
            echo "
                    <div class=\"login-form\">       
                        ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "username", []), 'row', ["attr" => ["placeholder" => "Nom de l'utilisateur"]]);
            // line 26
            echo "
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "email", []), 'row', ["attr" => ["placeholder" => "Adresse mail de l'utilisateur"]]);
            // line 29
            echo "
                        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "lastname", []), 'row', ["attr" => ["placeholder" => "Nom de famille de l'utilisateur"]]);
            // line 32
            echo "
                        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "firstname", []), 'row', ["attr" => ["placeholder" => "Prénom de l'utilisateur"]]);
            // line 35
            echo "
                        ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "address", []), 'row', ["attr" => ["placeholder" => "Adresse de l'utilisateur"]]);
            // line 38
            echo "
                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "cp", []), 'row', ["attr" => ["placeholder" => "Code postal"]]);
            // line 41
            echo "
                        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "town", []), 'row', ["attr" => ["placeholder" => "Ville"]]);
            // line 44
            echo "
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "phone", []), 'row', ["attr" => ["placeholder" => "Numéro de téléphone de l'utilisateur"]]);
            // line 47
            echo "
                        <p>Réinitialisation du mot de passe utilisateur :</p>
                        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "password", []), 'row', ["attr" => ["placeholder" => "Mot de passe de l'utilisateur"]]);
            // line 51
            echo "
                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "confirm_password", []), 'row', ["attr" => ["placeholder" => "Tapez à nouveau le mot de passe"]]);
            // line 54
            echo "
                        ";
            // line 67
            echo "                        <button type=\"submit\" class=\"au-btn au-btn--block au-btn--green m-b-20\">Enregistrer les modifications</button>
                        ";
            // line 68
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
            echo "
                    </div>
                    ";
            // line 70
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 71
                echo "                    <div>
                        <a href=\"";
                // line 72
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
                echo "\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour au tableau de bord</a>
                    </div>
                    ";
            } else {
                // line 75
                echo "                    <div>
                        <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_transactions_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                echo "\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour au portefeuille</a>
                    </div>
                    ";
            }
            // line 79
            echo "                
                <!--error message for url hacking-->
                ";
        } else {
            // line 82
            echo "                <p class=\"alert alert-warning\">Une erreur s'est produite.</p>
                <a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_home");
            echo "\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour à l'accueil</a>
                ";
        }
        // line 85
        echo "                
                </div>
            </div>
        </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 85,  226 => 83,  223 => 82,  218 => 79,  212 => 76,  209 => 75,  203 => 72,  200 => 71,  198 => 70,  193 => 68,  190 => 67,  187 => 54,  185 => 52,  182 => 51,  180 => 49,  176 => 47,  174 => 45,  171 => 44,  169 => 42,  166 => 41,  164 => 39,  161 => 38,  159 => 36,  156 => 35,  154 => 33,  151 => 32,  149 => 30,  146 => 29,  144 => 27,  141 => 26,  139 => 24,  135 => 23,  131 => 21,  129 => 20,  123 => 16,  114 => 15,  94 => 14,  80 => 9,  77 => 8,  68 => 7,  50 => 5,  40 => 1,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_4_layout.html.twig'%}

{% block title %}Modification d'un profil utilisateur{% endblock %}

{% block breadcrumb %}
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\"><a href=\"{{path('admin_users')}}\">Tableau de bord</a></li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Modification d'un profil utilisateur</li>
{% endblock %}

{% block pageName %}Modification de l'utilisateur {{username}} {% endblock %}
{% block body %}
        <div class=\"container\">
            <div class=\"login-wrap mb-5\">
                <div class=\"login-content\">
                <!--validation access for url hacking-->
                {% if id is same as (app.user.id) or is_granted('ROLE_ADMIN') %}

                    <div class=\"login-form\">       
                        {{ form_start(form) }}
                        {{ form_row(form.username, {
                            'attr': {'placeholder': \"Nom de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.email, {
                            'attr': {'placeholder': \"Adresse mail de l'utilisateur\"}
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
                        <p>Réinitialisation du mot de passe utilisateur :</p>
                        {{ form_row(form.password, {
                            'attr': {'placeholder': \"Mot de passe de l'utilisateur\"}
                            }) }}
                        {{ form_row(form.confirm_password, {
                            'attr': {'placeholder': \"Tapez à nouveau le mot de passe\"}
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
                        <button type=\"submit\" class=\"au-btn au-btn--block au-btn--green m-b-20\">Enregistrer les modifications</button>
                        {{ form_end(form) }}
                    </div>
                    {% if is_granted ('ROLE_ADMIN') %}
                    <div>
                        <a href=\"{{ path('admin_users')}}\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour au tableau de bord</a>
                    </div>
                    {% else %}
                    <div>
                        <a href=\"{{path('user_transactions_show', {'id':app.user.id})}}\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour au portefeuille</a>
                    </div>
                    {% endif %}
                
                <!--error message for url hacking-->
                {% else %}
                <p class=\"alert alert-warning\">Une erreur s'est produite.</p>
                <a href=\"{{ path('crypto_home')}}\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour à l'accueil</a>
                {% endif %}
                
                </div>
            </div>
        </div>
    
{% endblock %}", "user/edit.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\user\\edit.html.twig");
    }
}
