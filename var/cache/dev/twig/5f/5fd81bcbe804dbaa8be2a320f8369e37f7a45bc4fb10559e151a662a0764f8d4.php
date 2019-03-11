<?php

/* admin/adminTransactions.html.twig */
class __TwigTemplate_40d08f34edf029e5796fb5358fc361403a100daa0ea84fd593700ca6f5f6732a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminTransactions.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTransactions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTransactions.html.twig"));

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
        echo "Transactions effectuées";
        
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
    <li class=\"list-inline-item\">Transactions utilisateurs</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_pageName($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        echo "Historique des transactions de tous les utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<section class=\"mt-2 bg-success\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col\">
                    <!-- WALLET DATA-->
                     <div class=\"user-data m-b-40\">
                            <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-balance-wallet\"></i>transactions</h3>
                            <div class=\"table-responsive table-data\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <td>Date de transaction</td>
                                            <td>Cryptomonnaie</td>
                                            <td>Quantité achetée / vendue</td>
                                            <td>Prix d'achat / de vente €</td>
                                            <td>Type</td>
                                            <td>Utilisateur</td>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 36
            echo "                                        <tr>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", []), "d/m/Y"), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <img src=\"images/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "crypto", []), "image", []), "html", null, true);
            echo "\" alt=\"Logo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "crypto", []), "name", []), "html", null, true);
            echo ".\">
                                                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "crypto", []), "sigle", []), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <td class=\"table-data__info\">
                                                ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [])) {
                // line 50
                echo "                                                + ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "AmountCrypto", []), "html", null, true);
                echo "
                                                ";
            } else {
                // line 52
                echo "                                                - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "AmountCrypto", []), "html", null, true);
                echo "
                                                ";
            }
            // line 54
            echo "                                            </td>
                                            <td class=\"table-data__info\">
                                                ";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", []), 2, ",", ""), "html", null, true);
            echo " €
                                            </td>
                                            <td>
                                                ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [])) {
                // line 60
                echo "                                                <span class=\"role user\">Achat</span>
                                                ";
            } else {
                // line 62
                echo "                                                <span class=\"role admin\">Vente</span>
                                                ";
            }
            // line 64
            echo "                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["transaction"], "user", [])) {
                // line 68
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "user", []), "username", []), "html", null, true);
                echo "
                                                ";
            } else {
                // line 70
                echo "                                                    Utilisateur effacé
                                                ";
            }
            // line 72
            echo "                                                </div>
                                            </td>
                                            <td>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- END WALLET DATA-->
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
        return "admin/adminTransactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 76,  221 => 72,  217 => 70,  211 => 68,  209 => 67,  204 => 64,  200 => 62,  196 => 60,  194 => 59,  188 => 56,  184 => 54,  178 => 52,  172 => 50,  170 => 49,  163 => 45,  157 => 44,  149 => 39,  144 => 36,  140 => 35,  117 => 14,  108 => 13,  90 => 12,  76 => 6,  67 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent() }}Transactions effectuées{% endblock %}

{% block breadcrumb %}
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Administration</li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Transactions utilisateurs</li>
{% endblock %}

{% block pageName %}Historique des transactions de tous les utilisateurs{% endblock %}
{% block body %}
<section class=\"mt-2 bg-success\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col\">
                    <!-- WALLET DATA-->
                     <div class=\"user-data m-b-40\">
                            <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-balance-wallet\"></i>transactions</h3>
                            <div class=\"table-responsive table-data\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <td>Date de transaction</td>
                                            <td>Cryptomonnaie</td>
                                            <td>Quantité achetée / vendue</td>
                                            <td>Prix d'achat / de vente €</td>
                                            <td>Type</td>
                                            <td>Utilisateur</td>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                       {% for transaction in transactions %}
                                        <tr>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    {{transaction.date | date('d/m/Y')}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <img src=\"images/{{transaction.crypto.image}}\" alt=\"Logo {{transaction.crypto.name}}.\">
                                                    {{transaction.crypto.sigle}}
                                                </div>
                                            </td>
                                            <td class=\"table-data__info\">
                                                {% if transaction.type %}
                                                + {{transaction.AmountCrypto}}
                                                {% else %}
                                                - {{transaction.AmountCrypto}}
                                                {% endif %}
                                            </td>
                                            <td class=\"table-data__info\">
                                                {{transaction.amount | number_format(2, ',', '')}} €
                                            </td>
                                            <td>
                                                {% if transaction.type %}
                                                <span class=\"role user\">Achat</span>
                                                {% else %}
                                                <span class=\"role admin\">Vente</span>
                                                {% endif %}
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                {% if transaction.user %}
                                                    {{transaction.user.username}}
                                                {% else %}
                                                    Utilisateur effacé
                                                {% endif %}
                                                </div>
                                            </td>
                                            <td>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- END WALLET DATA-->
                   </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "admin/adminTransactions.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\admin\\adminTransactions.html.twig");
    }
}
