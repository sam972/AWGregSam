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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_nouveau"), "html", null, true);
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
        return array (  88 => 35,  60 => 20,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 28,  67 => 25,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 29,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 18,  59 => 23,  45 => 11,  103 => 5,  91 => 58,  74 => 22,  70 => 23,  66 => 12,  25 => 5,  89 => 32,  82 => 19,  92 => 39,  86 => 33,  77 => 23,  57 => 22,  19 => 1,  42 => 17,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 8,  102 => 33,  98 => 33,  76 => 25,  73 => 23,  69 => 19,  56 => 12,  32 => 10,  24 => 2,  22 => 6,  23 => 3,  17 => 1,  68 => 20,  61 => 24,  44 => 9,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 12,  50 => 15,  48 => 8,  41 => 10,  39 => 10,  35 => 8,  33 => 5,  30 => 7,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 5,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 21,  58 => 14,  55 => 14,  52 => 10,  49 => 12,  46 => 11,  43 => 8,  40 => 8,  37 => 9,  34 => 5,  31 => 8,  28 => 1,);
    }
}
