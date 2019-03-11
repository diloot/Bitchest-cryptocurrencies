<?php

/* base.html.twig */
class __TwigTemplate_c2ffbe718d4c7bbeed778fe163f7e7140d67058f48b89615f1e8cba23e0d60a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'addUser' => [$this, 'block_addUser'],
            'pageName' => [$this, 'block_pageName'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Site fictif pour acheter des cryptomonnaies.\">
        <meta name=\"keywords\" content=\"Bitchest, cryptomonnaie, achat, vente\">
        <meta name=\"author\" content=\"Diane Superbie 2019\">

        <!-- link to favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/bitchest_favicone.png\">
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "    </head>

    <body class=\"animsition\">
    <div class=\"page-wrapper\">
<!-- MENU MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <!--BRAND MOBILE-->
            <div class=\"header-mobile__bar pt-0 bg-secondary\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"/\">
                            <img src=\"images/bitchest_logo.png\" alt=\"Logo Bitchest.\" />
                        </a>
                        <button class=\"hamburger hamburger--slider bg-secondary\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!--BURGER NAV-->
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li><a href=\"/\"><i class=\"fas fa-home mr-2\"></i>Accueil</a>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\"><i class=\"fas fa-chart-bar mr-2\"></i>Cours cryptomonnaies<span class=\"arrow ml-2\"><i class=\"fas fa-angle-down\"></i></span></a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 1]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin</a></li>
                                <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 2]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin Cash</a></li>
                                <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 3]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Cardano</a></li>
                                <li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 4]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Das</a></li>
                                <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 5]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Ethereum</a></li>
                                <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 6]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>IOTA</a></li>
                                <li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 7]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Litecoin</a></li>
                                <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 8]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>NEM</a></li>
                                <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 9]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Ripple</a></li>
                                <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 10]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Stellar</a></li>
                            </ul>
                        </li>
                        ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->source); })()), "user", [])) {
            // line 93
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_transactions_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-balance-wallet mr-2\"></i>Portefeuille</a></li>
                        ";
        }
        // line 95
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 96
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
            echo "\"><i class=\"fas fa-user-plus mr-2\"></i>Tableau utilisateurs</a></li>
                        <li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transactions_show");
            echo "\"><i class=\"fas fa-book mr-2\"></i>Transactions utilisateurs</a></li>
                        ";
        }
        // line 99
        echo "                    </ul>
                </div>
            </nav>
        </header>
<!-- END MENU MOBILE-->

<!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <!--BRAND LOGO PC-->
            ";
        // line 108
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "            <div class=\"logo\">
                <a href=\"/\"><img src=\"images/bitchest_logo-white.png\" alt=\"Logo Bitchest.\" /></a>
            </div>
            ";
        } else {
            // line 113
            echo "            <div class=\"logo\">
                <a href=\"/\"><img src=\"images/bitchest_logo.png\" alt=\"Logo Bitchest.\" /></a>
            </div>
            ";
        }
        // line 117
        echo "            <!--NAV PC-->
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar2\">
                    <ul class=\"list-unstyled navbar__list\">
                        
                        <li><a href=\"/\"><i class=\"fas fa-home mr-2\"></i>Accueil</a>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\"><i class=\"fas fa-chart-bar mr-2\"></i>Cours cryptomonnaies<span class=\"arrow\"><i class=\"fas fa-angle-down\"></i></span></a>
                            <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                <li><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 1]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin</a></li>
                                <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 2]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin Cash</a></li>
                                <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 3]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Cardano</a></li>
                                <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 4]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Das</a></li>
                                <li><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 5]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Ethereum</a></li>
                                <li><a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 6]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>IOTA</a></li>
                                <li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 7]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Litecoin</a></li>
                                <li><a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 8]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>NEM</a></li>
                                <li><a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 9]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Ripple</a></li>
                                <li><a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_one", ["id" => 10]);
        echo "\"><i class=\"fas fa-arrow-right mr-2\"></i>Stellar</a></li>
                            </ul>
                        </li>
                        ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 138, $this->source); })()), "user", [])) {
            // line 139
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_transactions_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-balance-wallet mr-2\"></i>Portefeuille</a></li>
                        ";
        }
        // line 141
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
            echo "\"><i class=\"fas fa-user-plus mr-2\"></i>Tableau utilisateurs</a></li>
                        <li><a href=\"";
            // line 143
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transactions_show");
            echo "\"><i class=\"fas fa-book mr-2\"></i>Transactions utilisateurs</a></li>
                         ";
        }
        // line 145
        echo "                    </ul>
                </nav>
            </div>
        </aside>
<!-- END MENU SIDEBAR-->               
<!-- END NAV -->

<!-- PAGE CONTAINER-->
        <div class=\"page-container\">
        ";
        // line 154
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 155
            echo "            <header class=\"header-desktop bg-success\">
        ";
        } else {
            // line 157
            echo "            <header class=\"header-desktop bg-dark\">
        ";
        }
        // line 159
        echo "        <!-- HEADER CONNEXION-->
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap\">
                            <h1 class=\"text-secondary\">Achat et vente de cryptomonnaies</h1>
                            
                            <div class=\"header-button\">
                            ";
        // line 166
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 166, $this->source); })()), "user", [])) {
            // line 167
            echo "                                <div class=\"image px-2\">
                                    <i class=\"zmdi zmdi-power\"></i>
                                </div>
                                <div class=\"content\">
                                    <a href=\"";
            // line 171
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                                </div>
                            ";
        } else {
            // line 173
            echo "<!--top solde-->
                                <div class=\"noti-wrap\">
                                    <div class=\"noti__item js-item-menu text-white\">
                                        <i class=\"zmdi zmdi-balance-wallet\"></i>
                                        <p>Solde : ";
            // line 177
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 177, $this->source); })()), "user", []), "solde", []), 2, ",", ""), "html", null, true);
            echo " €</p>
                                        <div class=\"notifi-dropdown js-dropdown\">
                                            <div class=\"notifi__title\">
                                                <p>Votre portefeuille</p>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c1 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-email-open\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>Solde en euros : ";
            // line 187
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 187, $this->source); })()), "user", []), "solde", []), 2, ",", ""), "html", null, true);
            echo " €</p>
                                                    <span class=\"date\">";
            // line 188
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo "</span>
                                                    <a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("increase_solde", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 189, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\">Augmenter mon crédit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end top solde-->
                                <div class=\"account-wrap\">
                                    <div class=\"account-item clearfix js-item-menu\">
                                        <!--user-->
                                        <div class=\"image pl-1\">
                                            <i class=\"zmdi zmdi-account-circle\" style=\"font-size:40px;\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <a class=\"js-acc-btn text-white\" href=\"#\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 202, $this->source); })()), "user", []), "username", []), "html", null, true);
            echo "</a>
                                        </div>

                                        <!--menu user dropdown-->
                                        <nav class=\"account-dropdown js-dropdown\">
                                            <div class=\"info clearfix\">
                                                <div class=\"image\">
                                                    ";
            // line 209
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 210
                echo "                                                    <img src=\"images/avatar-01.jpg\" alt=\"Avatar de profile admin.\" />
                                                    ";
            } else {
                // line 212
                echo "                                                    <img src=\"images/avatar-02.jpg\" alt=\"Avatar de profile utilisateur.\" />
                                                    ";
            }
            // line 214
            echo "                                                </div>
                                                <div class=\"content\">
                                                    <h1 class=\"name h5\">";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 216, $this->source); })()), "user", []), "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 216, $this->source); })()), "user", []), "lastname", []), "html", null, true);
            echo "</h1>
                                                    <span class=\"email\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 217, $this->source); })()), "user", []), "email", []), "html", null, true);
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__body\">
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 222, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\">
                                                        <i class=\"zmdi zmdi-account\"></i>Voir mon compte</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 226, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\">
                                                        <i class=\"zmdi zmdi-settings\"></i>Modifier mon compte</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("increase_solde", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 230, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-long-arrow-up\"></i>Augmenter mon crédit</a>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__footer\">
                                                <a href=\"";
            // line 234
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\"><i class=\"zmdi zmdi-power\"></i>Déconnexion</a>
                                            </div>
                                            <!--end menu user-->
                                        </nav>
                                    </div>
                                </div>
                                <!--end connexion-->
                            ";
        }
        // line 242
        echo "                            </div>
                            <!--end buttons right-->
                        </div>
                    </div>
                </div>
            </header>
        <!-- END HEADER CONNEXION-->

        <!-- BREADCRUMB-->
            <section class=\"au-breadcrumb m-t-75\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"au-breadcrumb-content\">
                                    <div class=\"au-breadcrumb-left\">
                                        <ul class=\"list-unstyled list-inline au-breadcrumb__list\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"/\">Accueil</a>
                                            </li>
                                            ";
        // line 262
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 264
        echo "                                        </ul>
                                    </div>
                                    <div>
                                    <span class=\"date\">";
        // line 267
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span>
                                    </div>
                                    ";
        // line 269
        $this->displayBlock('addUser', $context, $blocks);
        echo "                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- END BREADCRUMB-->
        <!--TITLE PAGE VARIABLE-->           
            <h2 class=\"text-center pt-3\">";
        // line 278
        $this->displayBlock('pageName', $context, $blocks);
        echo "</h2>
        <!--FLASH MESSAGES-->            
            <div class=\"row\"><!--start flash messages-->
                <div class=\"col-md-8 offset-md-2 my-3\">
                    
                ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 283, $this->source); })()), "flashes", [0 => "error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 284
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 286, $this->source); })()), "flashes", [0 => "warning"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 287
            echo "                    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 289, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 290
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 292, $this->source); })()), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 293
            echo "                    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "                
                </div>
            </div><!--end flash messages-->             
        <!--END FLASH MESSAGES-->   

<!-- PAGE CONTENT -->
        ";
        // line 301
        $this->displayBlock('body', $context, $blocks);
        // line 302
        echo " 
<!-- END PAGE CONTENT -->
<!-- FOOTER-->            
           <footer class=\"d-sm-flex justify-content-sm-around bg-dark text-secondary\">       
                <a href=\"/\"><img src=\"/images/bitchest_logo.png\" alt=\"Logo du site Bitchest.\" class=\"img-fluid\" style=\"max-width:200px;\"></a>
                <div>
                    <address class=\"pt-2\"><i class=\"fas fa-envelope mr-2\"></i>100 rue de la Paix • 75002 Paris <br><a href=\"mailto:contact@bitchest.com\"></i>contact@bitchest.com</a></address> 
                </div>
                <div>
                    <ul class=\"list-unstyled pt-2\">
                        <li><a href=\"#\" class=\"small\">Mentions légales</a></li>
                        <li><a href=\"#\" class=\"small\">Tarifs et conditions</a></li>
                    </ul>  
                    <small class=\"pt-5\"><i class=\"fas fa-key mr-2\"></i>Site sécurisé<br/> © 2019 Bitchest X Diane Superbie </small>
                </div>   
            </footer> <!--END FOOTER-->
        </div> <!-- END PAGE CONTAINER-->
    </div><!-- END PAGE WRAPPER-->      
<!--JAVASCRYPT-->        
            <!-- CDN :
                jQuery
                <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>

                Bootstrap Core JavaScript
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
            -->   
            <!-- JQuery-->
            <script src=\"vendor/jquery-3.2.1.min.js\"></script>
            <!-- Bootstrap JS-->
            <script src=\"vendor/bootstrap-4.1/popper.min.js\"></script>
            <script src=\"vendor/bootstrap-4.1/bootstrap.min.js\"></script>
            <!-- Vendor JS -->

            <script src=\"vendor/animsition/animsition.min.js\"></script>
            <script src=\"vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
            <script src=\"vendor/chartjs/Chart.bundle.min.js\"></script>
            <!--<script src=\"vendor/slick/slick.min.js\"></script>
            <script src=\"vendor/wow/wow.min.js\"></script>
            <script src=\"vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
            <script src=\"vendor/counter-up/jquery.waypoints.min.js\"></script>
            <script src=\"vendor/counter-up/jquery.counterup.min.js\"></script>
            <script src=\"vendor/circle-progress/circle-progress.min.js\"></script>
            <script src=\"vendor/select2/select2.min.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.min.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.sampledata.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.world.js\"></script>-->
            
            <!-- Main JS-->
            <script src=\"js/main.js\"></script>
            <!--ENCORE :
            ";
        // line 355
        echo "            Renders app.js & a webpack runtime.js file
                <script src=\"/build/runtime.js\"></script>
                <script src=\"/build/app.js\"></script> 
            -->
<!-- END JAVASCRYPT-->  
        ";
        // line 360
        $this->displayBlock('javascripts', $context, $blocks);
        // line 361
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bitchest - achat et vente de cryptomonnaie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            <!-- CDN :
            Google font 
            <link href=\"https://fonts.googleapis.com/css?family=Alfa+Slab+One|Candal|Fugaz+One|Russo+One|Sigmar+One|Special+Elite|ZCOOL+QingKe+HuangYou\" rel=\"stylesheet\">

            Bootstrap Core CSS 
            <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

            Fontawesome
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
            -->
            <!-- Fontfaces CSS-->
            <link href=\"/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
            <!--<link href=\"/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">-->
            <link href=\"/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">
            <!-- Bootstrap CSS-->
            <link href=\"/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">
            <!-- Vendor CSS-->
            <link href=\"/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
            <!--aside nav-->
            <link href=\"/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">
 <!--       <link href=\"/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/vector-map/jqvmap.min.css\" rel=\"stylesheet\" media=\"all\">-->

            <!-- Main CSS-->
            <link href=\"css/theme.css\" rel=\"stylesheet\" media=\"all\">
            <!-- ENCORE css -->
            ";
        // line 47
        echo "            ";
        // line 48
        echo "            <!-- Renders a link tag (if your module requires any CSS)
            <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 263
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 269
    public function block_addUser($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addUser"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 278
    public function block_pageName($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageName"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 301
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 360
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 360,  727 => 301,  710 => 278,  693 => 269,  683 => 263,  674 => 262,  662 => 48,  660 => 47,  627 => 15,  618 => 14,  600 => 7,  588 => 361,  586 => 360,  579 => 355,  525 => 302,  523 => 301,  515 => 295,  506 => 293,  501 => 292,  492 => 290,  487 => 289,  478 => 287,  473 => 286,  464 => 284,  460 => 283,  452 => 278,  440 => 269,  435 => 267,  430 => 264,  428 => 262,  406 => 242,  395 => 234,  388 => 230,  381 => 226,  374 => 222,  366 => 217,  360 => 216,  356 => 214,  352 => 212,  348 => 210,  346 => 209,  336 => 202,  320 => 189,  316 => 188,  312 => 187,  299 => 177,  293 => 173,  287 => 171,  281 => 167,  279 => 166,  270 => 159,  266 => 157,  262 => 155,  260 => 154,  249 => 145,  244 => 143,  239 => 142,  236 => 141,  230 => 139,  228 => 138,  222 => 135,  218 => 134,  214 => 133,  210 => 132,  206 => 131,  202 => 130,  198 => 129,  194 => 128,  190 => 127,  186 => 126,  175 => 117,  169 => 113,  163 => 109,  161 => 108,  150 => 99,  145 => 97,  140 => 96,  137 => 95,  131 => 93,  129 => 92,  123 => 89,  119 => 88,  115 => 87,  111 => 86,  107 => 85,  103 => 84,  99 => 83,  95 => 82,  91 => 81,  87 => 80,  56 => 51,  54 => 14,  44 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>{% block title %}Bitchest - achat et vente de cryptomonnaie{% endblock %}</title>
        <meta name=\"description\" content=\"Site fictif pour acheter des cryptomonnaies.\">
        <meta name=\"keywords\" content=\"Bitchest, cryptomonnaie, achat, vente\">
        <meta name=\"author\" content=\"Diane Superbie 2019\">

        <!-- link to favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/bitchest_favicone.png\">
        {% block stylesheets %}
            <!-- CDN :
            Google font 
            <link href=\"https://fonts.googleapis.com/css?family=Alfa+Slab+One|Candal|Fugaz+One|Russo+One|Sigmar+One|Special+Elite|ZCOOL+QingKe+HuangYou\" rel=\"stylesheet\">

            Bootstrap Core CSS 
            <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

            Fontawesome
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
            -->
            <!-- Fontfaces CSS-->
            <link href=\"/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
            <!--<link href=\"/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">-->
            <link href=\"/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">
            <!-- Bootstrap CSS-->
            <link href=\"/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">
            <!-- Vendor CSS-->
            <link href=\"/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
            <!--aside nav-->
            <link href=\"/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">
 <!--       <link href=\"/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
            <link href=\"/vendor/vector-map/jqvmap.min.css\" rel=\"stylesheet\" media=\"all\">-->

            <!-- Main CSS-->
            <link href=\"css/theme.css\" rel=\"stylesheet\" media=\"all\">
            <!-- ENCORE css -->
            {# 'app' must match the first argument to addEntry() in webpack.config.js #}
            {# {{ encore_entry_link_tags('app') }} #}
            <!-- Renders a link tag (if your module requires any CSS)
            <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
        {% endblock %}
    </head>

    <body class=\"animsition\">
    <div class=\"page-wrapper\">
<!-- MENU MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <!--BRAND MOBILE-->
            <div class=\"header-mobile__bar pt-0 bg-secondary\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"/\">
                            <img src=\"images/bitchest_logo.png\" alt=\"Logo Bitchest.\" />
                        </a>
                        <button class=\"hamburger hamburger--slider bg-secondary\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!--BURGER NAV-->
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li><a href=\"/\"><i class=\"fas fa-home mr-2\"></i>Accueil</a>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\"><i class=\"fas fa-chart-bar mr-2\"></i>Cours cryptomonnaies<span class=\"arrow ml-2\"><i class=\"fas fa-angle-down\"></i></span></a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li><a href=\"{{path('crypto_one', {'id':1})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':2})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin Cash</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':3})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Cardano</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':4})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Das</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':5})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Ethereum</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':6})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>IOTA</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':7})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Litecoin</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':8})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>NEM</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':9})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Ripple</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':10})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Stellar</a></li>
                            </ul>
                        </li>
                        {% if app.user %}
                        <li><a href=\"{{path('user_transactions_show', {'id':app.user.id, })}}\"><i class=\"zmdi zmdi-balance-wallet mr-2\"></i>Portefeuille</a></li>
                        {% endif %}
                        {% if is_granted ('ROLE_ADMIN') %}
                        <li><a href=\"{{path('admin_users')}}\"><i class=\"fas fa-user-plus mr-2\"></i>Tableau utilisateurs</a></li>
                        <li><a href=\"{{path('admin_transactions_show')}}\"><i class=\"fas fa-book mr-2\"></i>Transactions utilisateurs</a></li>
                        {% endif %}
                    </ul>
                </div>
            </nav>
        </header>
<!-- END MENU MOBILE-->

<!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <!--BRAND LOGO PC-->
            {% if is_granted ('ROLE_ADMIN') %}
            <div class=\"logo\">
                <a href=\"/\"><img src=\"images/bitchest_logo-white.png\" alt=\"Logo Bitchest.\" /></a>
            </div>
            {% else %}
            <div class=\"logo\">
                <a href=\"/\"><img src=\"images/bitchest_logo.png\" alt=\"Logo Bitchest.\" /></a>
            </div>
            {% endif %}
            <!--NAV PC-->
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar2\">
                    <ul class=\"list-unstyled navbar__list\">
                        
                        <li><a href=\"/\"><i class=\"fas fa-home mr-2\"></i>Accueil</a>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\"><i class=\"fas fa-chart-bar mr-2\"></i>Cours cryptomonnaies<span class=\"arrow\"><i class=\"fas fa-angle-down\"></i></span></a>
                            <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                <li><a href=\"{{path('crypto_one', {'id':1})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':2})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Bitcoin Cash</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':3})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Cardano</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':4})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Das</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':5})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Ethereum</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':6})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>IOTA</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':7})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Litecoin</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':8})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>NEM</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':9})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Ripple</a></li>
                                <li><a href=\"{{path('crypto_one', {'id':10})}}\"><i class=\"fas fa-arrow-right mr-2\"></i>Stellar</a></li>
                            </ul>
                        </li>
                        {% if app.user %}
                        <li><a href=\"{{path('user_transactions_show', {'id':app.user.id})}}\"><i class=\"zmdi zmdi-balance-wallet mr-2\"></i>Portefeuille</a></li>
                        {% endif %}
                        {% if is_granted ('ROLE_ADMIN') %}
                        <li><a href=\"{{path('admin_users')}}\"><i class=\"fas fa-user-plus mr-2\"></i>Tableau utilisateurs</a></li>
                        <li><a href=\"{{path('admin_transactions_show')}}\"><i class=\"fas fa-book mr-2\"></i>Transactions utilisateurs</a></li>
                         {% endif %}
                    </ul>
                </nav>
            </div>
        </aside>
<!-- END MENU SIDEBAR-->               
<!-- END NAV -->

<!-- PAGE CONTAINER-->
        <div class=\"page-container\">
        {% if is_granted ('ROLE_ADMIN') %}
            <header class=\"header-desktop bg-success\">
        {% else %}
            <header class=\"header-desktop bg-dark\">
        {% endif %}
        <!-- HEADER CONNEXION-->
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap\">
                            <h1 class=\"text-secondary\">Achat et vente de cryptomonnaies</h1>
                            
                            <div class=\"header-button\">
                            {% if not app.user %}
                                <div class=\"image px-2\">
                                    <i class=\"zmdi zmdi-power\"></i>
                                </div>
                                <div class=\"content\">
                                    <a href=\"{{path('login')}}\">Connexion</a>
                                </div>
                            {% else %}<!--top solde-->
                                <div class=\"noti-wrap\">
                                    <div class=\"noti__item js-item-menu text-white\">
                                        <i class=\"zmdi zmdi-balance-wallet\"></i>
                                        <p>Solde : {{app.user.solde  | number_format(2, ',', '')}} €</p>
                                        <div class=\"notifi-dropdown js-dropdown\">
                                            <div class=\"notifi__title\">
                                                <p>Votre portefeuille</p>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c1 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-email-open\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>Solde en euros : {{app.user.solde | number_format(2, ',', '')}} €</p>
                                                    <span class=\"date\">{{\"now\"| date('d/m/Y')}}</span>
                                                    <a href=\"{{path('increase_solde', {'id': app.user.id})}}\">Augmenter mon crédit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end top solde-->
                                <div class=\"account-wrap\">
                                    <div class=\"account-item clearfix js-item-menu\">
                                        <!--user-->
                                        <div class=\"image pl-1\">
                                            <i class=\"zmdi zmdi-account-circle\" style=\"font-size:40px;\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <a class=\"js-acc-btn text-white\" href=\"#\">{{app.user.username}}</a>
                                        </div>

                                        <!--menu user dropdown-->
                                        <nav class=\"account-dropdown js-dropdown\">
                                            <div class=\"info clearfix\">
                                                <div class=\"image\">
                                                    {% if is_granted ('ROLE_ADMIN') %}
                                                    <img src=\"images/avatar-01.jpg\" alt=\"Avatar de profile admin.\" />
                                                    {% else %}
                                                    <img src=\"images/avatar-02.jpg\" alt=\"Avatar de profile utilisateur.\" />
                                                    {% endif %}
                                                </div>
                                                <div class=\"content\">
                                                    <h1 class=\"name h5\">{{app.user.firstname}} {{app.user.lastname}}</h1>
                                                    <span class=\"email\">{{app.user.email}}</span>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__body\">
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"{{ path('user_show', {'id': app.user.id})}}\">
                                                        <i class=\"zmdi zmdi-account\"></i>Voir mon compte</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"{{ path('user_edit', {'id': app.user.id})}}\">
                                                        <i class=\"zmdi zmdi-settings\"></i>Modifier mon compte</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"{{path('increase_solde', {'id': app.user.id})}}\"><i class=\"zmdi zmdi-long-arrow-up\"></i>Augmenter mon crédit</a>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__footer\">
                                                <a href=\"{{path('security_logout')}}\"><i class=\"zmdi zmdi-power\"></i>Déconnexion</a>
                                            </div>
                                            <!--end menu user-->
                                        </nav>
                                    </div>
                                </div>
                                <!--end connexion-->
                            {% endif %}
                            </div>
                            <!--end buttons right-->
                        </div>
                    </div>
                </div>
            </header>
        <!-- END HEADER CONNEXION-->

        <!-- BREADCRUMB-->
            <section class=\"au-breadcrumb m-t-75\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"au-breadcrumb-content\">
                                    <div class=\"au-breadcrumb-left\">
                                        <ul class=\"list-unstyled list-inline au-breadcrumb__list\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"/\">Accueil</a>
                                            </li>
                                            {% block breadcrumb %}
                                            {% endblock %}
                                        </ul>
                                    </div>
                                    <div>
                                    <span class=\"date\">{{\"now\"| date('d/m/Y')}}</span>
                                    </div>
                                    {% block addUser %}{% endblock %}                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- END BREADCRUMB-->
        <!--TITLE PAGE VARIABLE-->           
            <h2 class=\"text-center pt-3\">{% block pageName %}{% endblock %}</h2>
        <!--FLASH MESSAGES-->            
            <div class=\"row\"><!--start flash messages-->
                <div class=\"col-md-8 offset-md-2 my-3\">
                    
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger\">{{ message }}</div>
                {% endfor %}
                {% for message in app.flashes('warning') %}
                    <div class=\"alert alert-warning\">{{ message }}</div>
                {% endfor %}
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">{{ message }}</div>
                {% endfor %}
                {% for message in app.flashes('info') %}
                    <div class=\"alert alert-info\">{{ message }}</div>
                {% endfor %}
                
                </div>
            </div><!--end flash messages-->             
        <!--END FLASH MESSAGES-->   

<!-- PAGE CONTENT -->
        {% block body %} 
        {% endblock %} 
<!-- END PAGE CONTENT -->
<!-- FOOTER-->            
           <footer class=\"d-sm-flex justify-content-sm-around bg-dark text-secondary\">       
                <a href=\"/\"><img src=\"/images/bitchest_logo.png\" alt=\"Logo du site Bitchest.\" class=\"img-fluid\" style=\"max-width:200px;\"></a>
                <div>
                    <address class=\"pt-2\"><i class=\"fas fa-envelope mr-2\"></i>100 rue de la Paix • 75002 Paris <br><a href=\"mailto:contact@bitchest.com\"></i>contact@bitchest.com</a></address> 
                </div>
                <div>
                    <ul class=\"list-unstyled pt-2\">
                        <li><a href=\"#\" class=\"small\">Mentions légales</a></li>
                        <li><a href=\"#\" class=\"small\">Tarifs et conditions</a></li>
                    </ul>  
                    <small class=\"pt-5\"><i class=\"fas fa-key mr-2\"></i>Site sécurisé<br/> © 2019 Bitchest X Diane Superbie </small>
                </div>   
            </footer> <!--END FOOTER-->
        </div> <!-- END PAGE CONTAINER-->
    </div><!-- END PAGE WRAPPER-->      
<!--JAVASCRYPT-->        
            <!-- CDN :
                jQuery
                <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>

                Bootstrap Core JavaScript
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
            -->   
            <!-- JQuery-->
            <script src=\"vendor/jquery-3.2.1.min.js\"></script>
            <!-- Bootstrap JS-->
            <script src=\"vendor/bootstrap-4.1/popper.min.js\"></script>
            <script src=\"vendor/bootstrap-4.1/bootstrap.min.js\"></script>
            <!-- Vendor JS -->

            <script src=\"vendor/animsition/animsition.min.js\"></script>
            <script src=\"vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
            <script src=\"vendor/chartjs/Chart.bundle.min.js\"></script>
            <!--<script src=\"vendor/slick/slick.min.js\"></script>
            <script src=\"vendor/wow/wow.min.js\"></script>
            <script src=\"vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
            <script src=\"vendor/counter-up/jquery.waypoints.min.js\"></script>
            <script src=\"vendor/counter-up/jquery.counterup.min.js\"></script>
            <script src=\"vendor/circle-progress/circle-progress.min.js\"></script>
            <script src=\"vendor/select2/select2.min.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.min.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.sampledata.js\"></script>
            <script src=\"vendor/vector-map/jquery.vmap.world.js\"></script>-->
            
            <!-- Main JS-->
            <script src=\"js/main.js\"></script>
            <!--ENCORE :
            {#{{ encore_entry_script_tags('app') }}#}
            Renders app.js & a webpack runtime.js file
                <script src=\"/build/runtime.js\"></script>
                <script src=\"/build/app.js\"></script> 
            -->
<!-- END JAVASCRYPT-->  
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\base.html.twig");
    }
}
