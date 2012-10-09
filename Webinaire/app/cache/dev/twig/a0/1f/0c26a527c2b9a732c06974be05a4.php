<?php

/* ::base.html.twig */
class __TwigTemplate_a01f0c26a527c2b9a732c06974be05a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body1' => array($this, 'block_body1'),
            'body2' => array($this, 'block_body2'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\" />
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
\t<div class=\"site\">
\t\t<div id=\"wrap\">
\t\t\t<div id=\"head\">
\t\t\t\t";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "\t\t\t</div>
\t\t\t<div id=\"topCont\">
\t\t\t
      
\t\t\t\t<br>
\t\t\t\t<div style=\"padding: 10px 0px 15px 0px; text-align:center\">
\t\t\t\t\t<center>
\t\t\t\t\t\t";
        // line 49
        $this->displayBlock('body1', $context, $blocks);
        echo " 
\t\t\t\t\t\t<div id=\"botCont\">
\t\t\t\t\t\t\t";
        // line 51
        $this->displayBlock('body2', $context, $blocks);
        // line 52
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>




\t\t\t\t\t";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "\t\t\t\t\t<div id=\"footWrap\">
\t\t\t\t\t\t<div id=\"foot\">
\t\t\t\t\t\t\t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/footLogo.jpg"), "html", null, true);
        echo "\" class=\"imgLeft\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\">Infos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\">Anti-spam</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\">Déclaration</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\">Partenaires</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_faq"), "html", null, true);
        echo "\" id=\"faq\">FAQ</a>
\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div> 


\t\t\t</body>
\t\t\t</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Action Webinaire";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" >
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css-webinaire.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css-jwbox.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Droid+Sans:400,700"), "html", null, true);
        echo "\" type=\"text/css\" />
\t";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" id=\"logo\" style=\"margin-top:15px;\">
\t\t\t\t</a>
\t\t\t\t<ul id=\"nav\" style=\"float:right;\">";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_MEMBRE")) {
            echo "<li>
    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_membre"), "html", null, true);
            echo "\">Mes Webinaires</a></li>
";
        }
        // line 24
        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_apropos"), "html", null, true);
        echo "\" id=\"about\">À propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_support"), "html", null, true);
        echo "\" id=\"support\">Support</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li> ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 37
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 39
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
    }

    // line 49
    public function block_body1($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 51
    public function block_body2($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 58,  227 => 51,  221 => 49,  215 => 39,  207 => 37,  201 => 34,  197 => 33,  190 => 31,  185 => 29,  166 => 21,  139 => 8,  51 => 11,  18 => 1,  88 => 41,  60 => 52,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 28,  67 => 25,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 24,  158 => 57,  107 => 41,  101 => 34,  80 => 64,  63 => 16,  36 => 6,  156 => 18,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 79,  85 => 28,  65 => 18,  59 => 23,  45 => 11,  103 => 5,  91 => 58,  74 => 61,  70 => 59,  66 => 12,  25 => 5,  89 => 32,  82 => 39,  92 => 70,  86 => 67,  77 => 23,  57 => 22,  19 => 1,  42 => 17,  29 => 5,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 32,  189 => 78,  187 => 77,  184 => 76,  178 => 25,  170 => 22,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 5,  119 => 45,  116 => 44,  112 => 8,  102 => 33,  98 => 73,  76 => 25,  73 => 23,  69 => 19,  56 => 12,  32 => 4,  24 => 2,  22 => 6,  23 => 1,  17 => 1,  68 => 58,  61 => 24,  44 => 42,  20 => 2,  161 => 19,  153 => 17,  150 => 49,  147 => 10,  143 => 9,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 76,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 49,  50 => 15,  48 => 8,  41 => 10,  39 => 7,  35 => 12,  33 => 6,  30 => 5,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 7,  131 => 6,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 5,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 21,  58 => 51,  55 => 14,  52 => 10,  49 => 12,  46 => 11,  43 => 8,  40 => 8,  37 => 9,  34 => 5,  31 => 8,  28 => 1,);
    }
}
