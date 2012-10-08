<?php

/* WbnWebinaireBundle:Membre:membre.html.twig */
class __TwigTemplate_f0461405981dac6d09dcbe1283231d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    
<body>
    
    <div id=\"wrapper\">

<header>
    <h1></h1>
    <h2></h2>
        
        
          <br>
          
          
          
          
<div class=\"step\" style=\"background-color: #999; padding-bottom:10px;\"><h3><span>TUTORIAL VIDEO:</span> Learn How To Use The Script!</h3></div>
  <div id=\"subStepTopCorner\"></div>
  <div align=\"center\">
    <br>
    
            <p align=\"center\">
              <object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" width=\"640\" height=\"409\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0\">
                  <param name=\"bgcolor\" value=\"white\">
                  <param name=\"flashvars\" value=\"file=http://www.evergreenbusinesssystem.com/videos/webinar2-installationvideo-intro.mov\">
                  <param name=\"src\" value=\"http://www.evergreenbusinesssystem.com/videos/player.swf\">
                  <param name=\"allowfullscreen\" value=\"false\">
                  <embed type=\"application/x-shockwave-flash\" width=\"640\" height=\"409\" src=\"http://www.evergreenbusinesssystem.com/videos/player.swf\" allowfullscreen=\"false\" flashvars=\"file=http://www.evergreenbusinesssystem.com/videos/webinar2-installationvideo-intro.mov\" bgcolor=\"white\">
              </object>
            </p>
            
     
        
   
            
              <div class=\"clear\"></div>
  <!--end of subStepContainer--></div>
  <div id=\"subStepBottomCorner\"></div>
            
            <br><br>
        
        
    <nav>
      <ul>
        <!--<li id=\"newWebinar\"><a href=\"index.php?page=webinarnew\">New Webinar</a></li>-->
        <li id=\"newWebinar\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_membre"), "html", null, true);
        echo "\"></a></li>
        <li id=\"myWebinars\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_membre"), "html", null, true);
        echo "\"></a></li>
        <li id=\"analytics\"><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_membre"), "html", null, true);
        echo "\"></a></li>
        <li id=\"contactUs\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.evergreenbusinesssystem.com/support.html"), "html", null, true);
        echo "\" target=\"_blank\"></a></li>
      </ul>
    <!--end of nav--></nav>
  <!--end of header--></header>

</div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Member";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/membre.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Membre:membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 8,  109 => 7,  103 => 5,  91 => 58,  87 => 57,  83 => 56,  79 => 55,  32 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }
}
