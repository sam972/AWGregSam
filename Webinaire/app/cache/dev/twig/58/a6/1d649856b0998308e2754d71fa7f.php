<?php

/* WbnWebinaireBundle:Membre:layout.html.twig */
class __TwigTemplate_58a61d649856b0998308e2754d71fa7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

      
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" ><link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css-webinaire.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css-jwbox.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Droid+Sans:400,700"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/membre.css"), "html", null, true);
        echo "\" type=\"text/css\" />
   
    </head>
    
<body>
    
    <div id=\"wrapper\">

<header>";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
";
        } else {
            // line 23
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
";
        }
        // line 25
        echo "\t\t<h1></h1>
\t\t<h2></h2>
        
        
          <br>
          
          
          
  ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
</div>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Membre";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        echo "        
";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Membre:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  96 => 5,  88 => 35,  86 => 33,  76 => 25,  70 => 23,  62 => 21,  60 => 20,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  31 => 8,  25 => 5,  19 => 1,  35 => 7,  30 => 5,  26 => 3,  20 => 2,  18 => 1,);
    }
}
