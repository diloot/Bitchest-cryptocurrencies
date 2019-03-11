<?php

/* admin/adminUsers.html.twig */
class __TwigTemplate_c761c237e88d5517b3474ccd040ca787cab7b2e770896fc71b917f7231f52dc7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminUsers.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'addUser' => [$this, 'block_addUser'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminUsers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Tableau de bord utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Administration</li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Tableau de bord</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_addUser($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addUser"));

        // line 12
        echo "    <a class=\"au-btn au-btn-icon au-btn--green\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_create");
        echo "\">
    <i class=\"zmdi zmdi-plus\"></i>Ajouter un utilisateur</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_pageName($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        echo " Tableau de bord utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<section class=\"bg-success\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- USER DATA-->
                                <div class=\"user-data m-b-40\">
                                    <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-account-calendar\"></i>Utilisateurs</h3>
                                    <!-- FILTER 
                                    <div class=\"filters m-b-45\">
                                        <div class=\"rs-select2--dark rs-select2--md m-r-10 rs-select2--border\">
                                            <select class=\"js-select2\" name=\"property\">
                                                <option selected=\"selected\">Roles</option>
                                                <option value=\"\">Administrateurs</option>
                                                <option value=\"\">Utilisateurs</option>
                                            </select>
                                            <div class=\"dropDownSelect2\"></div>
                                        </div>
                                    </div>
                                    -->
                                    <div class=\"table-responsive table-data\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>nom</td>
                                                    <td>role</td>
                                                    <td>solde €</td>
                                                    <td>voir</td>
                                                    <td>modifier</td>
                                                    <td>supprimer</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            echo "                                                <tr>
                                                    <td>
                                                        <label class=\"au-checkbox\">
                                                            <input type=\"checkbox\"><span class=\"au-checkmark\"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class=\"table-data__info\">
                                                            <h6>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", []), "html", null, true);
            echo "</h6><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", []), "html", null, true);
            echo "</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", []) === [0 => "ROLE_ADMIN"])) {
                // line 68
                echo "                                                        <span class=\"role admin\">Admin</span>
                                                        ";
            } else {
                // line 70
                echo "                                                        <span class=\"role user\">User</span>
                                                        ";
            }
            // line 72
            echo "                                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_roles", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
            echo "\" class=\"ml-1\">Modifier</a>
                                                    </td>
                                                    <td>
                                                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "solde", []), 2, ",", ""), "html", null, true);
            echo " €
                                                    </td>
                                                    <td>
                                                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-eye\" style=\"font-size:1.5em;\"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-edit\" style=\"font-size:1.5em;\"></i></a>
                                                    </td>
                                                    <td>
                                                    ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", []) === [0 => "ROLE_ADMIN"])) {
                // line 85
                echo "                                                        <a href=\"#\"><i class=\"zmdi zmdi-delete text-secondary disabled\" style=\"font-size:1.5em;\"></i></a>
                                                        ";
            } else {
                // line 87
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                echo "\"><i class=\"zmdi zmdi-delete text-danger\" style=\"font-size:1.5em;\"></i></a>
                                                        ";
            }
            // line 89
            echo "                                                    </td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 92,  250 => 89,  244 => 87,  240 => 85,  238 => 84,  232 => 81,  226 => 78,  220 => 75,  213 => 72,  209 => 70,  205 => 68,  203 => 67,  192 => 63,  182 => 55,  178 => 54,  141 => 19,  132 => 18,  114 => 16,  100 => 12,  91 => 11,  77 => 6,  68 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent() }} Tableau de bord utilisateurs{% endblock %}

{% block breadcrumb %}
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Administration</li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Tableau de bord</li>
{% endblock %}
{% block addUser %}
    <a class=\"au-btn au-btn-icon au-btn--green\" href=\"{{ path('user_create') }}\">
    <i class=\"zmdi zmdi-plus\"></i>Ajouter un utilisateur</a>
{% endblock %} 

{% block pageName %} Tableau de bord utilisateurs{% endblock %}

{% block body %}
<section class=\"bg-success\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- USER DATA-->
                                <div class=\"user-data m-b-40\">
                                    <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-account-calendar\"></i>Utilisateurs</h3>
                                    <!-- FILTER 
                                    <div class=\"filters m-b-45\">
                                        <div class=\"rs-select2--dark rs-select2--md m-r-10 rs-select2--border\">
                                            <select class=\"js-select2\" name=\"property\">
                                                <option selected=\"selected\">Roles</option>
                                                <option value=\"\">Administrateurs</option>
                                                <option value=\"\">Utilisateurs</option>
                                            </select>
                                            <div class=\"dropDownSelect2\"></div>
                                        </div>
                                    </div>
                                    -->
                                    <div class=\"table-responsive table-data\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>nom</td>
                                                    <td>role</td>
                                                    <td>solde €</td>
                                                    <td>voir</td>
                                                    <td>modifier</td>
                                                    <td>supprimer</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for user in users %}
                                                <tr>
                                                    <td>
                                                        <label class=\"au-checkbox\">
                                                            <input type=\"checkbox\"><span class=\"au-checkmark\"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class=\"table-data__info\">
                                                            <h6>{{user.firstname}} {{user.lastname}}</h6><span>{{user.email}}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {% if user.roles is same as(['ROLE_ADMIN']) %}
                                                        <span class=\"role admin\">Admin</span>
                                                        {% else %}
                                                        <span class=\"role user\">User</span>
                                                        {% endif %}
                                                        <a href=\"{{path('admin_roles', {'id': user.id})}}\" class=\"ml-1\">Modifier</a>
                                                    </td>
                                                    <td>
                                                        {{user.solde | number_format(2, ',', '')}} €
                                                    </td>
                                                    <td>
                                                        <a href=\"{{ path('user_show', {'id': user.id})}}\"><i class=\"zmdi zmdi-eye\" style=\"font-size:1.5em;\"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href=\"{{ path('user_edit', {'id': user.id})}}\"><i class=\"zmdi zmdi-edit\" style=\"font-size:1.5em;\"></i></a>
                                                    </td>
                                                    <td>
                                                    {% if user.roles is same as(['ROLE_ADMIN']) %}
                                                        <a href=\"#\"><i class=\"zmdi zmdi-delete text-secondary disabled\" style=\"font-size:1.5em;\"></i></a>
                                                        {% else %}
                                                        <a href=\"{{ path('user_delete', {'id': user.id})}}\"><i class=\"zmdi zmdi-delete text-danger\" style=\"font-size:1.5em;\"></i></a>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
{% endblock %}
", "admin/adminUsers.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\admin\\adminUsers.html.twig");
    }
}
