<?php

/* wallet/userTransactions.html.twig */
class __TwigTemplate_74bee01ab4141a21c7d2536ce3a2aeca2f9ada6da035c2d42177666c991a70d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wallet/userTransactions.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'pageName' => [$this, 'block_pageName'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wallet/userTransactions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wallet/userTransactions.html.twig"));

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
        echo " Portefeuille utilisateur";
        
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
    <li class=\"list-inline-item\">Portefeuille</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_pageName($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "user", []), "username", []), "html", null, true);
        echo " - Historique des transactions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<section class=\"mt-0\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col\">
                <!--validation access for url hacking-->
                ";
        // line 18
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "id", []) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "user", []), "id", [])) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 19
            echo "            
                    <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-balance-wallet\"></i>Portefeuille</h3>
                    <!-- WALLET DATA-->
                        <div class=\"row\">                    
                            <!--DOUGHNUT-->               
                            <div class=\"col-lg-6 mr-0 mb-2\">
                                <div class=\"au-card\">
                                    <h4 class=\"title-2\">quantités de crypto détenues</h3>
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xl-3\">
                                            <div class=\"chart-note-wrap\">
                                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cryptos"]) || array_key_exists("cryptos", $context) ? $context["cryptos"] : (function () { throw new Twig_Error_Runtime('Variable "cryptos" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["crypto"]) {
                // line 31
                echo "                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crypto"], "Id", []), "html", null, true);
                echo "\"></span>
                                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => twig_get_attribute($this->env, $this->source, $context["crypto"], "id", [])]), "html", null, true);
                echo "\">
                                                    <span>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crypto"], "name", []), "html", null, true);
                echo "</span>
                                                    </a><small> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crypto"], "sigle", []), "html", null, true);
                echo "</small>
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crypto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                            </div>
                                        </div>
                                        <div class=\"col-xl-9\">
                                            <div class=\"percent-chart\">
                                                <canvas id=\"percent-chart\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END DOUGHNUT-->
                            <!--WALLET TABLE-->
                            <div class=\"col-lg-6 mr-0 mb-2\">
                                <div class=\"au-card\">
                                    <h4 class=\"title-2 mb-4\">Contenu du portefeuille</h3>
                                    <!--<div class=\"table-responsive table-data\">-->
                                    <div class=\"table-responsive table--no-card m-b-30\">
                                        <table class=\"table table-striped\">
                                            <thead class=\"bg-dark text-white\">
                                                <tr>
                                                    <td>Crypto monnaie</td>
                                                    <td>Quantité</td>
                                                    <td>valeur actuelle euros</td>
                                                    <td>+/- value</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new Twig_Error_Runtime('Variable "wallets" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
                // line 67
                echo "                                                <tr>
                                                    <td><img src=\"images/";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wallet"], "crypto", []), "image", []), "html", null, true);
                echo "\" alt=\"Logo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wallet"], "crypto", []), "name", []), "html", null, true);
                echo ".\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wallet"], "crypto", []), "sigle", []), "html", null, true);
                echo "</td><!--crypto-->

                                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wallet"], "amountCrypto", []), 2, ",", ""), "html", null, true);
                echo "</td><!--quantité-->

                                                    ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wallet"], "crypto", []), "cotations", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["cotation"]) {
                    // line 73
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) === 30)) {
                        // line 74
                        echo "                                                        ";
                        $context["actualValue"] = (twig_get_attribute($this->env, $this->source, $context["cotation"], "value", []) * twig_get_attribute($this->env, $this->source, $context["wallet"], "amountCrypto", []));
                        // line 75
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["actualValue"]) || array_key_exists("actualValue", $context) ? $context["actualValue"] : (function () { throw new Twig_Error_Runtime('Variable "actualValue" does not exist.', 75, $this->source); })()), 2, ",", ""), "html", null, true);
                        echo "</td><!--valeur-->
                                                    <td>";
                        // line 76
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["actualValue"]) || array_key_exists("actualValue", $context) ? $context["actualValue"] : (function () { throw new Twig_Error_Runtime('Variable "actualValue" does not exist.', 76, $this->source); })()) - twig_get_attribute($this->env, $this->source, $context["wallet"], "amount", [])), 2, ",", ""), "html", null, true);
                        echo "</td><!--+/-value-->
                                                    <td>
                                                        <form action=\"";
                        // line 78
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_sell");
                        echo "\" method=\"post\">
                                                            <input type=\"hidden\" name=\"user\" id=\"user\" value=\"";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->source); })()), "user", []), "id", []), "html", null, true);
                        echo "\">
                                                            <input type=\"hidden\" name=\"crypto\" id=\"crypto\" value=\"";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wallet"], "crypto", []), "id", []), "html", null, true);
                        echo "\">
                                                            <input type=\"hidden\" name=\"type\" id=\"type\" value=\"0\">
                                                            <input type=\"hidden\" name='amount' value=\"";
                        // line 82
                        echo twig_escape_filter($this->env, (isset($context["actualValue"]) || array_key_exists("actualValue", $context) ? $context["actualValue"] : (function () { throw new Twig_Error_Runtime('Variable "actualValue" does not exist.', 82, $this->source); })()), "html", null, true);
                        echo "\">
                                                            ";
                        // line 83
                        if ((twig_get_attribute($this->env, $this->source, $context["wallet"], "amountCrypto", []) > 0)) {
                            // line 84
                            echo "                                                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Vendre totalité</button>
                                                            ";
                        } else {
                            // line 86
                            echo "                                                                <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\" disabled>Vendre la totalité</button>
                                                            ";
                        }
                        // line 88
                        echo "                                                        </form>
                                                    </td>
                                                    ";
                    }
                    // line 91
                    echo "                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
                                                </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--END WALLET TABLE-->
                        </div>
                     <!--END WALLET DATA-->

                    <!--TRANSACTIONS TABLE -->
                    <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-balance-wallet\"></i>Historique des transactions</h3>
                    <div class=\"table-responsive table--no-card m-b-30\">
                        <table class=\"table table-borderless table-striped\">
                            <thead class=\"bg-dark text-white\">
                                <tr>
                                    <td>Cryptomonnaie</td>
                                    <td>Quantité achetée / vendue</td>
                                    <td>Date de transaction</td>
                                    <td>Prix d'achat / de vente €</td>
                                    <td>Type</td>  
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 118
                echo "                                <tr>
                                    <td>
                                        <img src=\"images/";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "crypto", []), "image", []), "html", null, true);
                echo "\" alt=\"Logo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "crypto", []), "name", []), "html", null, true);
                echo ".\"> 
                                        ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "crypto", []), "sigle", []), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [])) {
                    // line 125
                    echo "                                        + ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amountCrypto", []), 2, ",", ""), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 127
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amountCrypto", []), 2, ",", ""), "html", null, true);
                    echo "
                                        ";
                }
                // line 129
                echo "                                    </td>
                                    <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", []), "d/m/Y à H:i:s"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 131
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", []), 2, ",", ""), "html", null, true);
                echo " €</td>
                                    <td>
                                        ";
                // line 133
                if (twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [])) {
                    // line 134
                    echo "                                            <span class=\"role user\">Achat</span>
                                        ";
                } else {
                    // line 136
                    echo "                                            <span class=\"role admin\">Vente</span>
                                        ";
                }
                // line 138
                echo "                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                            </tbody>
                        </table>
                    </div>
                    <!--END TRANSACTIONS TABLE -->
                <!--error message for url hacking-->
                ";
        } else {
            // line 147
            echo "                    <p class=\"alert alert-warning\">Une erreur s'est produite.</p>
                    <a href=\"";
            // line 148
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_home");
            echo "\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour à l'accueil</a>
                ";
        }
        // line 150
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "    <script type=\"text/javascript\">
        (function (\$) {
        // USE STRICT
        \"use strict\";
            try {
// Percent Chart DOUGHNUT
                var ctx = document.getElementById(\"percent-chart\");
                if (ctx) {
                ctx.height = 280;
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                    datasets: [
                        {
                        label: \"Crypto\",
                        data: [
                            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new Twig_Error_Runtime('Variable "wallets" does not exist.', 173, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 174
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wallet"], "amountCrypto", []), "html", null, true);
            echo ",
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                        ],
                        backgroundColor: [
                            '#38ef7d',
                            '#b8fc4b',
                            '#dce35b',
                            '#ff6a00',
                            '#fa4251',
                            '#ee0979',
                            '#5a628a',
                            '#3f5efb',
                            '#11998e',
                            '#68ecc4'
                        ],
                        hoverBackgroundColor: [
                            '#38ef7d',
                            '#b8fc4b',
                            '#dce35b',
                            '#ff6a00',
                            '#fa4251',
                            '#ee0979',
                            '#5a628a',
                            '#3f5efb',
                            '#11998e',
                            '#68ecc4'
                        ],
                        borderWidth: [
                        ],
                        hoverBorderColor: [
                            '#38ef7d',
                            '#b8fc4b',
                            '#dce35b',
                            '#ff6a00',
                            '#fa4251',
                            '#ee0979',
                            '#5a628a',
                            '#3f5efb',
                            '#11998e',
                            '#68ecc4'
                        ]
                        }
                    ],
                    labels: [
                        ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cryptos"]) || array_key_exists("cryptos", $context) ? $context["cryptos"] : (function () { throw new Twig_Error_Runtime('Variable "cryptos" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["crypto"]) {
            // line 219
            echo "                        '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crypto"], "name", []), "html", null, true);
            echo "',
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crypto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                    ]
                    },
                    options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    cutoutPercentage: 55,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        titleFontFamily: \"Poppins\",
                        xPadding: 15,
                        yPadding: 10,
                        caretPadding: 0,
                        bodyFontSize: 16
                    }
                    }
                });
                }
            } catch (error) {
                console.log(error);
            }

        })(jQuery);
    </script>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wallet/userTransactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 221,  513 => 219,  509 => 218,  465 => 176,  456 => 174,  452 => 173,  434 => 157,  425 => 156,  410 => 150,  405 => 148,  402 => 147,  394 => 141,  386 => 138,  382 => 136,  378 => 134,  376 => 133,  371 => 131,  367 => 130,  364 => 129,  358 => 127,  352 => 125,  350 => 124,  344 => 121,  338 => 120,  334 => 118,  330 => 117,  305 => 94,  284 => 91,  279 => 88,  275 => 86,  271 => 84,  269 => 83,  265 => 82,  260 => 80,  256 => 79,  252 => 78,  247 => 76,  242 => 75,  239 => 74,  236 => 73,  219 => 72,  214 => 70,  205 => 68,  202 => 67,  198 => 66,  168 => 38,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  144 => 31,  140 => 30,  127 => 19,  125 => 18,  117 => 12,  108 => 11,  89 => 10,  77 => 6,  68 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent() }} Portefeuille utilisateur{% endblock %}

{% block breadcrumb %}
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">Portefeuille</li>
{% endblock %}

{% block pageName %}{{app.user.username}} - Historique des transactions{% endblock %}
{% block body %}
<section class=\"mt-0\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col\">
                <!--validation access for url hacking-->
                {% if user.id is same as (app.user.id) or is_granted('ROLE_ADMIN') %}
            
                    <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-balance-wallet\"></i>Portefeuille</h3>
                    <!-- WALLET DATA-->
                        <div class=\"row\">                    
                            <!--DOUGHNUT-->               
                            <div class=\"col-lg-6 mr-0 mb-2\">
                                <div class=\"au-card\">
                                    <h4 class=\"title-2\">quantités de crypto détenues</h3>
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xl-3\">
                                            <div class=\"chart-note-wrap\">
                                            {% for crypto in cryptos %}
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--{{crypto.Id}}\"></span>
                                                    <a href=\"{{path('crypto_one', {'id':crypto.id})}}\">
                                                    <span>{{crypto.name}}</span>
                                                    </a><small> {{crypto.sigle}}</small>
                                                </div>
                                            {% endfor %}
                                            </div>
                                        </div>
                                        <div class=\"col-xl-9\">
                                            <div class=\"percent-chart\">
                                                <canvas id=\"percent-chart\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END DOUGHNUT-->
                            <!--WALLET TABLE-->
                            <div class=\"col-lg-6 mr-0 mb-2\">
                                <div class=\"au-card\">
                                    <h4 class=\"title-2 mb-4\">Contenu du portefeuille</h3>
                                    <!--<div class=\"table-responsive table-data\">-->
                                    <div class=\"table-responsive table--no-card m-b-30\">
                                        <table class=\"table table-striped\">
                                            <thead class=\"bg-dark text-white\">
                                                <tr>
                                                    <td>Crypto monnaie</td>
                                                    <td>Quantité</td>
                                                    <td>valeur actuelle euros</td>
                                                    <td>+/- value</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for wallet in wallets %}
                                                <tr>
                                                    <td><img src=\"images/{{wallet.crypto.image}}\" alt=\"Logo {{wallet.crypto.name}}.\"> {{wallet.crypto.sigle}}</td><!--crypto-->

                                                    <td>{{wallet.amountCrypto | number_format(2, ',', '')}}</td><!--quantité-->

                                                    {% for cotation in wallet.crypto.cotations %}
                                                    {% if loop.index is same as (30) %}
                                                        {% set actualValue = (cotation.value * wallet.amountCrypto) %}
                                                    <td>{{actualValue | number_format(2, ',', '')}}</td><!--valeur-->
                                                    <td>{{(actualValue - wallet.amount) | number_format(2, ',', '')}}</td><!--+/-value-->
                                                    <td>
                                                        <form action=\"{{path('crypto_sell')}}\" method=\"post\">
                                                            <input type=\"hidden\" name=\"user\" id=\"user\" value=\"{{app.user.id}}\">
                                                            <input type=\"hidden\" name=\"crypto\" id=\"crypto\" value=\"{{wallet.crypto.id}}\">
                                                            <input type=\"hidden\" name=\"type\" id=\"type\" value=\"0\">
                                                            <input type=\"hidden\" name='amount' value=\"{{actualValue}}\">
                                                            {% if (wallet.amountCrypto > 0) %}
                                                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Vendre totalité</button>
                                                            {% else %}
                                                                <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\" disabled>Vendre la totalité</button>
                                                            {% endif %}
                                                        </form>
                                                    </td>
                                                    {% endif %}
                                                    {% endfor %}{# end cotation #}    
                                                </tr>
                                                {% endfor %}{# end wallet #}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--END WALLET TABLE-->
                        </div>
                     <!--END WALLET DATA-->

                    <!--TRANSACTIONS TABLE -->
                    <h3 class=\"title-3 m-b-30\"><i class=\"zmdi zmdi-balance-wallet\"></i>Historique des transactions</h3>
                    <div class=\"table-responsive table--no-card m-b-30\">
                        <table class=\"table table-borderless table-striped\">
                            <thead class=\"bg-dark text-white\">
                                <tr>
                                    <td>Cryptomonnaie</td>
                                    <td>Quantité achetée / vendue</td>
                                    <td>Date de transaction</td>
                                    <td>Prix d'achat / de vente €</td>
                                    <td>Type</td>  
                                </tr>
                            </thead>
                            <tbody>
                                {% for transaction in transactions %}
                                <tr>
                                    <td>
                                        <img src=\"images/{{transaction.crypto.image}}\" alt=\"Logo {{transaction.crypto.name}}.\"> 
                                        {{transaction.crypto.sigle}}
                                    </td>
                                    <td>
                                        {% if transaction.type %}
                                        + {{transaction.amountCrypto  | number_format(2, ',', '')}}
                                        {% else %}
                                        - {{transaction.amountCrypto  | number_format(2, ',', '')}}
                                        {% endif %}
                                    </td>
                                    <td>{{transaction.date | date('d/m/Y à H:i:s')}}</td>
                                    <td>{{transaction.amount | number_format(2, ',', '')}} €</td>
                                    <td>
                                        {% if transaction.type %}
                                            <span class=\"role user\">Achat</span>
                                        {% else %}
                                            <span class=\"role admin\">Vente</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <!--END TRANSACTIONS TABLE -->
                <!--error message for url hacking-->
                {% else %}
                    <p class=\"alert alert-warning\">Une erreur s'est produite.</p>
                    <a href=\"{{ path('crypto_home')}}\"><i class=\"zmdi zmdi-arrow-left mr-2\" style=\"font-size:1.5em;\"></i> Retour à l'accueil</a>
                {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">
        (function (\$) {
        // USE STRICT
        \"use strict\";
            try {
// Percent Chart DOUGHNUT
                var ctx = document.getElementById(\"percent-chart\");
                if (ctx) {
                ctx.height = 280;
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                    datasets: [
                        {
                        label: \"Crypto\",
                        data: [
                            {% for wallet in wallets %}
                                {{wallet.amountCrypto}},
                            {% endfor %}
                        ],
                        backgroundColor: [
                            '#38ef7d',
                            '#b8fc4b',
                            '#dce35b',
                            '#ff6a00',
                            '#fa4251',
                            '#ee0979',
                            '#5a628a',
                            '#3f5efb',
                            '#11998e',
                            '#68ecc4'
                        ],
                        hoverBackgroundColor: [
                            '#38ef7d',
                            '#b8fc4b',
                            '#dce35b',
                            '#ff6a00',
                            '#fa4251',
                            '#ee0979',
                            '#5a628a',
                            '#3f5efb',
                            '#11998e',
                            '#68ecc4'
                        ],
                        borderWidth: [
                        ],
                        hoverBorderColor: [
                            '#38ef7d',
                            '#b8fc4b',
                            '#dce35b',
                            '#ff6a00',
                            '#fa4251',
                            '#ee0979',
                            '#5a628a',
                            '#3f5efb',
                            '#11998e',
                            '#68ecc4'
                        ]
                        }
                    ],
                    labels: [
                        {% for crypto in cryptos %}
                        '{{crypto.name}}',
                        {% endfor %}
                    ]
                    },
                    options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    cutoutPercentage: 55,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        titleFontFamily: \"Poppins\",
                        xPadding: 15,
                        yPadding: 10,
                        caretPadding: 0,
                        bodyFontSize: 16
                    }
                    }
                });
                }
            } catch (error) {
                console.log(error);
            }

        })(jQuery);
    </script>  
{% endblock %}", "wallet/userTransactions.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\wallet\\userTransactions.html.twig");
    }
}
