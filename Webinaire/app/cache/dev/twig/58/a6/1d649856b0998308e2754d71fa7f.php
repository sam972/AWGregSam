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
        echo "\" type=\"text/css\" >
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/membre.css"), "html", null, true);
        echo "\" type=\"text/css\" />
   
    </head>
    
<body>
    
    <div id=\"wrapper\">

<header>";
        // line 17
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
";
        } else {
            // line 20
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
";
        }
        // line 22
        echo "\t\t<h1></h1>
\t\t<h2></h2>
        
        
          <br>
          
          
          
  ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
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

    // line 30
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
        return array (  88 => 30,  82 => 5,  74 => 32,  72 => 30,  62 => 22,  56 => 20,  48 => 18,  46 => 17,  35 => 9,  31 => 8,  25 => 5,  19 => 1,  32 => 5,  26 => 3,  20 => 2,  18 => 1,);
    }
}
