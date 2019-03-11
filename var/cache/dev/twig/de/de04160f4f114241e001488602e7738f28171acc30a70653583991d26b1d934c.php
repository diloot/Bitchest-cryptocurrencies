<?php

/* crypto/one.html.twig */
class __TwigTemplate_f60b74bf9f65ba77b4df9caf2fb9ebd26e1bbcf7b7094e617318f17e824c6460 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "crypto/one.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crypto/one.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crypto/one.html.twig"));

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
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 3, $this->source); })()), "name", []), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        
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
    <li class=\"list-inline-item\"><a href=\"/\">Cours cryptomonnaies</a></li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 9, $this->source); })()), "name", []), "html", null, true);
        echo "</li>
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

        echo " <img src=\"images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 12, $this->source); })()), "image", []), "html", null, true);
        echo "\" alt=\"Logo cryptomonnaie.\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 12, $this->source); })()), "name", []), "html", null, true);
        echo " - évolution ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <!-- STATISTIC-->
    <section class=\"statistic px-5 mt-0 pt-0\">
            <h3 class=\"text-uppercase\">Valeur : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 17, $this->source); })()), "name", []), "html", null, true);
        echo "</h3>
            <div class=\"row m-t-25\">
                <div class=\"col-lg-3\"><!--col left--> 
                    <!--CRYPTO - WEEK CART-->  
                    <div class=\"overview-item overview-item--c";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 21, $this->source); })()), "id", []), 2, 1), "html", null, true);
        echo " mb-2\">
                        <div class=\"overview__inner\">
                            <div class=\"overview-box clearfix\"> 
                                <div class=\"text text-white\">
                                    <h4>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 25, $this->source); })()), "name", []), "html", null, true);
        echo "</h4>
                                    <p class=\"h2\">
                                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 27, $this->source); })()), "cotations", []));
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
            // line 28
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) === 30)) {
                // line 29
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "value", []), 2, ",", ""), "html", null, true);
                echo " <span>euros</span>
                                            ";
            }
            // line 31
            echo "                                        ";
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
        // line 32
        echo "                                    </p>
                                </div>
                            </div>
                            <div class=\"overview-chart\">
                                <canvas id=\"weekChartColor\"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--END CRYPTO - WEEK CART-->
                    <!--BUYING FORM--> 
                        <form action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crypto_buy");
        echo "\" method=\"post\">

                            <label for=\"amount_crypto\">Quantité de ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 44, $this->source); })()), "name", []), "html", null, true);
        echo " :<br>
                            <small>Veuillez taper un nombre supérieur à 0.</small></label>
                            <input type=\"text\" name=\"amount_crypto\" class=\"form-control\" placeholder=\"Quantité désirée\" onchange=\"javascript:total(this.value, document.getElementById('cours').value);\" onkeyup=\"javascript:total(this.value, document.getElementById('cours').value);\" >
                            <small id=\"error\" class=\"text-danger\"></small>
                            <p>X 
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 49, $this->source); })()), "cotations", []));
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
            // line 50
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) === 30)) {
                // line 51
                echo "                                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "value", []), 2, ",", ""), "html", null, true);
                echo "
                                <input type=\"hidden\" name=\"cours\" id=\"cours\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "value", []), "html", null, true);
                echo "\">
                                ";
            }
            // line 54
            echo "                            ";
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
        // line 55
        echo "                            <small>(Valeur actuelle en euros.)</small></p>
                             
                            <label for=\"amount\">Total en euros : </label><br>
                            <input type=\"number\" name=\"amount\" id=\"amount\" readonly class=\"form-control\">
                            
                            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->source); })()), "user", [])) {
            // line 61
            echo "                                <p class=\"text-success\">Vous disposez de ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->source); })()), "user", []), "solde", []), 2, ",", ""), "html", null, true);
            echo " €.</p>
                                <p> <small>Si la somme est insuffisante : <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("increase_solde", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\">Augmenter mon crédit</a>.</small> </p>
                                <input type=\"hidden\" name=\"type\" id=\"type\" value=\"1\">
                                <input type=\"hidden\" name=\"crypto\" id=\"crypto\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 64, $this->source); })()), "id", []), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"user\" id=\"user\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "user", []), "id", []), "html", null, true);
            echo "\">
                                <button type=\"submit\" class=\"au-btn au-btn-icon au-btn--green my-3\">Acheter</button>
                            ";
        } else {
            // line 68
            echo "
                            <p><small>Veuillez  <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">vous connecter</a> pour acheter. </br>
                            Pas encore inscrit ?  <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">S'enregistrer</a>.</small>
                            </p>
                            <button type=\"button\" class=\"btn btn-outline-success my-3\" disabled>Acheter</button>
                            ";
        }
        // line 74
        echo "                        </form>           
                    
                    <!--END BUYING FORM-->
                </div><!--/col left--> 
                <!-- MONTH CHART-->
                <div class=\"col-lg-9\">
                    <div class=\"au-card recent-report\">
                        <div class=\"au-card-inner\">
                            <h3 class=\"title-2\">progression sur 30 jours</h3>
                            <div class=\"chart-info\">
                                <div class=\"chart-info__left\">
                                    <div class=\"chart-note\">
                                        <span class=\"dot dot--1\"></span>
                                        <span>valeur ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 87, $this->source); })()), "name", []), "html", null, true);
        echo " en euros</span>
                                    </div>
                                </div>
                                    
                                <div class=\"chart-info__right\">
                                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 92, $this->source); })()), "cotations", []));
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
            // line 93
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) === 30)) {
                // line 94
                echo "                                            <div class=\"chart-statis\">
                                                ";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, $context["cotation"], "cours", []) > 0)) {
                    // line 96
                    echo "                                                    <span class=\"index incre\">
                                                    <i class=\"zmdi zmdi-long-arrow-up\"></i>
                                                    + ";
                    // line 98
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "cours", []), 2, ",", ""), "html", null, true);
                    echo " %</span>
                                                    <span class=\"label\">hausse</span>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 100
$context["cotation"], "cours", []) < 0)) {
                    // line 101
                    echo "                                                    <span class=\"index decre\">
                                                    <i class=\"zmdi zmdi-long-arrow-down\"></i>
                                                    ";
                    // line 103
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "cours", []), 2, ",", ""), "html", null, true);
                    echo " %</span>
                                                    <span class=\"label\">baisse</span>
                                                ";
                } else {
                    // line 106
                    echo "                                                    <span class=\"index incre\">0 %</span>
                                                ";
                }
                // line 108
                echo "                                            </div>
                                        ";
            }
            // line 110
            echo "                                    ";
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
        // line 111
        echo "                                </div>
                            </div>
                                <div class=\"recent-report__chart\">
                                    <canvas id=\"monthChart\"></canvas>
                                </div>                                     
                            </div>
                            ";
        // line 125
        echo "                        </div>
                    </div>
                <!--END MONTH CHART-->
            </div>
    </section>
    <!-- END STATISTIC-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "<script type=\"text/javascript\">
//calcul BUYING FORM
    function total(nb1, nb2) { 
        if (isNaN(nb1) || nb1<=0){
            result = 0;
            document.getElementById('error').innerHTML = \"Le nombre doit être de type : 10.02.\"; 
        }else{
            result = (nb1*nb2).toFixed(2);
            document.getElementById('error').innerHTML = \"\";  
        }
        document.getElementById('amount').value = result; 
    }
//JQUERY
    (function (\$) {
        // USE STRICT
        \"use strict\";
        try {
//weekChartColor
               var ctx = document.getElementById(\"weekChartColor\");
                if (ctx) {
                ctx.height = 130;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                    labels: [";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 158, $this->source); })()), "cotations", []));
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
            // line 159
            echo "                                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) > 23) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) < 31))) {
                // line 160
                echo "                                '";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "date", []), "d-m"), "html", null, true);
                echo "',
                                ";
            }
            // line 162
            echo "                                ";
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
        echo "],
                    type: 'line',
                    datasets: [{
                        data: [";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 165, $this->source); })()), "cotations", []));
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
            // line 166
            echo "                                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) > 23) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) < 31))) {
                // line 167
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "value", []), "html", null, true);
                echo ",
                                ";
            }
            // line 169
            echo "                                ";
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
        echo "],
                        label: 'Valeur',
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(255,255,255,.55)',
                    },]
                    },
                    options: {

                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    scales: {
                        xAxes: [{
                        gridLines: {
                            color: 'transparent',
                            zeroLineColor: 'transparent'
                        },
                        ticks: {
                            fontSize: 2,
                            fontColor: 'transparent'
                        }
                        }],
                        yAxes: [{
                        display: false,
                        ticks: {
                            display: false,
                        }
                        }]
                    },
                    title: {
                        display: false,
                    },
                    elements: {
                        line: {
                        tension: 0.00001,
                        borderWidth: 1
                        },
                        point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                        }
                    }
                    }
                });
                }
        } catch (error) {
            console.log(error);
        }

        try {
// monthChart  
        const bdcrypto = '#38ef7d'
        const bgcrypto = '#38ef7d5c'
        //const bdcrypto2 = 'rgba(0,181,233,0.2)'
        //const bgcrypto2 = 'rgba(0,173,95,0.2)'
        var data = [";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 238, $this->source); })()), "cotations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["cotation"]) {
            // line 239
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "value", []), "html", null, true);
            echo ",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "]
        //var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]
    
        var ctx = document.getElementById(\"monthChart\");
        if (ctx) {
          ctx.height = 230;
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: [";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["crypto"]) || array_key_exists("crypto", $context) ? $context["crypto"] : (function () { throw new Twig_Error_Runtime('Variable "crypto" does not exist.', 249, $this->source); })()), "cotations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["cotation"]) {
            // line 250
            echo "                    '";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cotation"], "date", []), "d/m"), "html", null, true);
            echo "',
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                      ],
              datasets: [
                {
                  label: 'valeur',
                  backgroundColor: bgcrypto,
                  borderColor: bdcrypto,
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 0,
                  data: data
                }/*,
                {
                  label: 'My Second dataset',
                  backgroundColor: bgcrypto2,
                  borderColor: bdcrypto2,
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 0,
                  data: data2
                }*/
              ]
            },
            options: {
              maintainAspectRatio: true,
              legend: {
                display: false
              },
              responsive: true,
              scales: {
                xAxes: [{
                  gridLines: {
                    drawOnChartArea: true,
                    color: '#f2f2f2'
                  },
                  ticks: {
                    fontFamily: \"Poppins\",
                    fontSize: 12
                  }
                }],
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    stepSize: 50,
                    max: 150,
                    fontFamily: \"Poppins\",
                    fontSize: 12
                  },
                  gridLines: {
                    display: true,
                    color: '#f2f2f2'
    
                  }
                }]
              },
              elements: {
                point: {
                  radius: 0,
                  hitRadius: 10,
                  hoverRadius: 4,
                  hoverBorderWidth: 3
                },
                line: {
                  tension: 0
                }
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
        return "crypto/one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 252,  653 => 250,  649 => 249,  638 => 240,  629 => 239,  625 => 238,  541 => 169,  535 => 167,  532 => 166,  515 => 165,  497 => 162,  491 => 160,  488 => 159,  471 => 158,  445 => 134,  436 => 133,  420 => 125,  412 => 111,  398 => 110,  394 => 108,  390 => 106,  384 => 103,  380 => 101,  378 => 100,  373 => 98,  369 => 96,  367 => 95,  364 => 94,  361 => 93,  344 => 92,  336 => 87,  321 => 74,  314 => 70,  310 => 69,  307 => 68,  301 => 65,  297 => 64,  292 => 62,  287 => 61,  285 => 60,  278 => 55,  264 => 54,  259 => 52,  254 => 51,  251 => 50,  234 => 49,  226 => 44,  221 => 42,  209 => 32,  195 => 31,  189 => 29,  186 => 28,  169 => 27,  164 => 25,  157 => 21,  150 => 17,  146 => 15,  137 => 14,  115 => 12,  103 => 9,  98 => 6,  89 => 5,  71 => 4,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent() }} {{crypto.name}} {% endblock %}
{% block stylesheets %}{{parent()}}{% endblock %}
{% block breadcrumb %}
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\"><a href=\"/\">Cours cryptomonnaies</a></li>
    <li class=\"list-inline-item seprate\"><span>/</span></li>
    <li class=\"list-inline-item\">{{crypto.name}}</li>
{% endblock %}

{% block pageName %} <img src=\"images/{{crypto.image}}\" alt=\"Logo cryptomonnaie.\"> {{crypto.name}} - évolution {% endblock %}

{% block body %}
    <!-- STATISTIC-->
    <section class=\"statistic px-5 mt-0 pt-0\">
            <h3 class=\"text-uppercase\">Valeur : {{crypto.name}}</h3>
            <div class=\"row m-t-25\">
                <div class=\"col-lg-3\"><!--col left--> 
                    <!--CRYPTO - WEEK CART-->  
                    <div class=\"overview-item overview-item--c{{crypto.id  | slice(2, 1)}} mb-2\">
                        <div class=\"overview__inner\">
                            <div class=\"overview-box clearfix\"> 
                                <div class=\"text text-white\">
                                    <h4>{{crypto.name}}</h4>
                                    <p class=\"h2\">
                                        {% for cotation in crypto.cotations %}
                                            {% if loop.index is same as (30) %}
                                                {{cotation.value  | number_format(2, ',', '')}} <span>euros</span>
                                            {% endif %}
                                        {% endfor %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"overview-chart\">
                                <canvas id=\"weekChartColor\"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--END CRYPTO - WEEK CART-->
                    <!--BUYING FORM--> 
                        <form action=\"{{path('crypto_buy')}}\" method=\"post\">

                            <label for=\"amount_crypto\">Quantité de {{crypto.name}} :<br>
                            <small>Veuillez taper un nombre supérieur à 0.</small></label>
                            <input type=\"text\" name=\"amount_crypto\" class=\"form-control\" placeholder=\"Quantité désirée\" onchange=\"javascript:total(this.value, document.getElementById('cours').value);\" onkeyup=\"javascript:total(this.value, document.getElementById('cours').value);\" >
                            <small id=\"error\" class=\"text-danger\"></small>
                            <p>X 
                            {% for cotation in crypto.cotations %}
                                {% if loop.index is same as (30) %}
                                {{cotation.value  | number_format(2, ',', '')}}
                                <input type=\"hidden\" name=\"cours\" id=\"cours\" value=\"{{cotation.value}}\">
                                {% endif %}
                            {% endfor %}
                            <small>(Valeur actuelle en euros.)</small></p>
                             
                            <label for=\"amount\">Total en euros : </label><br>
                            <input type=\"number\" name=\"amount\" id=\"amount\" readonly class=\"form-control\">
                            
                            {% if app.user %}
                                <p class=\"text-success\">Vous disposez de {{app.user.solde  | number_format(2, ',', '')}} €.</p>
                                <p> <small>Si la somme est insuffisante : <a href=\"{{path('increase_solde', {'id': app.user.id})}}\">Augmenter mon crédit</a>.</small> </p>
                                <input type=\"hidden\" name=\"type\" id=\"type\" value=\"1\">
                                <input type=\"hidden\" name=\"crypto\" id=\"crypto\" value=\"{{crypto.id}}\">
                                <input type=\"hidden\" name=\"user\" id=\"user\" value=\"{{app.user.id}}\">
                                <button type=\"submit\" class=\"au-btn au-btn-icon au-btn--green my-3\">Acheter</button>
                            {% else %}

                            <p><small>Veuillez  <a href=\"{{path('login')}}\">vous connecter</a> pour acheter. </br>
                            Pas encore inscrit ?  <a href=\"{{path('security_registration')}}\">S'enregistrer</a>.</small>
                            </p>
                            <button type=\"button\" class=\"btn btn-outline-success my-3\" disabled>Acheter</button>
                            {% endif %}
                        </form>           
                    
                    <!--END BUYING FORM-->
                </div><!--/col left--> 
                <!-- MONTH CHART-->
                <div class=\"col-lg-9\">
                    <div class=\"au-card recent-report\">
                        <div class=\"au-card-inner\">
                            <h3 class=\"title-2\">progression sur 30 jours</h3>
                            <div class=\"chart-info\">
                                <div class=\"chart-info__left\">
                                    <div class=\"chart-note\">
                                        <span class=\"dot dot--1\"></span>
                                        <span>valeur {{crypto.name}} en euros</span>
                                    </div>
                                </div>
                                    
                                <div class=\"chart-info__right\">
                                    {% for cotation in crypto.cotations %}
                                        {% if loop.index is same as (30) %}
                                            <div class=\"chart-statis\">
                                                {% if cotation.cours > 0 %}
                                                    <span class=\"index incre\">
                                                    <i class=\"zmdi zmdi-long-arrow-up\"></i>
                                                    + {{cotation.cours  | number_format(2, ',', '')}} %</span>
                                                    <span class=\"label\">hausse</span>
                                                {% elseif  cotation.cours < 0 %}
                                                    <span class=\"index decre\">
                                                    <i class=\"zmdi zmdi-long-arrow-down\"></i>
                                                    {{cotation.cours  | number_format(2, ',', '')}} %</span>
                                                    <span class=\"label\">baisse</span>
                                                {% else %}
                                                    <span class=\"index incre\">0 %</span>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                                <div class=\"recent-report__chart\">
                                    <canvas id=\"monthChart\"></canvas>
                                </div>                                     
                            </div>
                            {# <div> <!--test data -->
                            <table>
                            <tr><td>Cours</td><td>Date</td></tr>
                            {% for cotation in crypto.cotations %}
                            <tr><td>{{ cotation.cours}}</td><td>{{ cotation.date | date('d/m')}}</td></tr>
                            {% endfor %}
                            </table>
                            </div> #}
                        </div>
                    </div>
                <!--END MONTH CHART-->
            </div>
    </section>
    <!-- END STATISTIC-->
{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
//calcul BUYING FORM
    function total(nb1, nb2) { 
        if (isNaN(nb1) || nb1<=0){
            result = 0;
            document.getElementById('error').innerHTML = \"Le nombre doit être de type : 10.02.\"; 
        }else{
            result = (nb1*nb2).toFixed(2);
            document.getElementById('error').innerHTML = \"\";  
        }
        document.getElementById('amount').value = result; 
    }
//JQUERY
    (function (\$) {
        // USE STRICT
        \"use strict\";
        try {
//weekChartColor
               var ctx = document.getElementById(\"weekChartColor\");
                if (ctx) {
                ctx.height = 130;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                    labels: [{% for cotation in crypto.cotations %}
                                {% if (loop.index >23 and loop.index <31 ) %}
                                '{{ cotation.date | date ('d-m')}}',
                                {% endif %}
                                {% endfor %}],
                    type: 'line',
                    datasets: [{
                        data: [{% for cotation in crypto.cotations %}
                                {% if (loop.index >23 and loop.index <31 ) %}
                                {{ cotation.value}},
                                {% endif %}
                                {% endfor %}],
                        label: 'Valeur',
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(255,255,255,.55)',
                    },]
                    },
                    options: {

                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    scales: {
                        xAxes: [{
                        gridLines: {
                            color: 'transparent',
                            zeroLineColor: 'transparent'
                        },
                        ticks: {
                            fontSize: 2,
                            fontColor: 'transparent'
                        }
                        }],
                        yAxes: [{
                        display: false,
                        ticks: {
                            display: false,
                        }
                        }]
                    },
                    title: {
                        display: false,
                    },
                    elements: {
                        line: {
                        tension: 0.00001,
                        borderWidth: 1
                        },
                        point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                        }
                    }
                    }
                });
                }
        } catch (error) {
            console.log(error);
        }

        try {
// monthChart  
        const bdcrypto = '#38ef7d'
        const bgcrypto = '#38ef7d5c'
        //const bdcrypto2 = 'rgba(0,181,233,0.2)'
        //const bgcrypto2 = 'rgba(0,173,95,0.2)'
        var data = [{% for cotation in crypto.cotations %}
                    {{ cotation.value}},
                    {% endfor %}]
        //var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]
    
        var ctx = document.getElementById(\"monthChart\");
        if (ctx) {
          ctx.height = 230;
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: [{% for cotation in crypto.cotations %}
                    '{{ cotation.date | date('d/m')}}',
                    {% endfor %}
                      ],
              datasets: [
                {
                  label: 'valeur',
                  backgroundColor: bgcrypto,
                  borderColor: bdcrypto,
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 0,
                  data: data
                }/*,
                {
                  label: 'My Second dataset',
                  backgroundColor: bgcrypto2,
                  borderColor: bdcrypto2,
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 0,
                  data: data2
                }*/
              ]
            },
            options: {
              maintainAspectRatio: true,
              legend: {
                display: false
              },
              responsive: true,
              scales: {
                xAxes: [{
                  gridLines: {
                    drawOnChartArea: true,
                    color: '#f2f2f2'
                  },
                  ticks: {
                    fontFamily: \"Poppins\",
                    fontSize: 12
                  }
                }],
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    stepSize: 50,
                    max: 150,
                    fontFamily: \"Poppins\",
                    fontSize: 12
                  },
                  gridLines: {
                    display: true,
                    color: '#f2f2f2'
    
                  }
                }]
              },
              elements: {
                point: {
                  radius: 0,
                  hitRadius: 10,
                  hoverRadius: 4,
                  hoverBorderWidth: 3
                },
                line: {
                  tension: 0
                }
              }
            }
          });
        }
      } catch (error) {
        console.log(error);
      }

    })(jQuery);
</script>
{% endblock %}", "crypto/one.html.twig", "C:\\xampp\\htdocs\\Symfony\\bitchest\\templates\\crypto\\one.html.twig");
    }
}
