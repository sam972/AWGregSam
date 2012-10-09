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
        return array (  233 => 58,  227 => 51,  221 => 49,  215 => 39,  207 => 37,  201 => 34,  197 => 33,  192 => 32,  190 => 31,  185 => 29,  178 => 25,  175 => 24,  170 => 22,  166 => 21,  161 => 19,  156 => 18,  153 => 17,  147 => 10,  143 => 9,  139 => 8,  134 => 7,  131 => 6,  125 => 5,  110 => 79,  104 => 76,  98 => 73,  92 => 70,  86 => 67,  80 => 64,  74 => 61,  70 => 59,  68 => 58,  60 => 52,  58 => 51,  53 => 49,  44 => 42,  42 => 17,  35 => 12,  33 => 6,  29 => 5,  23 => 1,  81 => 37,  75 => 35,  57 => 23,  52 => 21,  32 => 4,  27 => 3,);
    }
}
