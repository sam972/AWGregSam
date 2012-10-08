<?php

/* WbnWebinaireBundle:Visiteur:index.html.twig */
class __TwigTemplate_9de51681cd0e097d42e1ecf530794456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body1' => array($this, 'block_body1'),
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body1($context, array $blocks = array())
    {
        echo " 
<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/h1.png"), "html", null, true);
        echo "\" width=\"960\" height=\"48\">
</center>
</div>
<table align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t<tbody>
\t\t<tr>
\t\t\t<td align=\"center\" valign=\"top\">
\t\t\t\t<div id=\"video1\">
\t\t\t\t\t<object width=\"682\" height=\"384\" id=\"evp-09941cf46fe681bcd8d7cc418ea75d35-wrap\" data=\"\">
\t\t\t\t\t\t<param name=\"allowfullscreen\" value=\"true\"><param name=\"allowscriptaccess\" value=\"always\">
\t\t\t\t\t\t<param name=\"quality\" value=\"high\"><param name=\"cachebusting\" value=\"true\"><param name=\"bgcolor\" value=\"#000000\"><param name=\"wmode\" value=\"opaque\">
\t\t\t\t\t\t<param name=\"flashvars\" value=\"\"><param name=\"movie\" value=\"\"><param name=\"wmode\" value=\"opaque\">
\t\t\t\t\t</object>
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td align=\"center\" valign=\"middle\">
\t\t\t\t<div id=\"topRightCont\">     
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/step1b.png"), "html", null, true);
        echo "\" width=\"199\" height=\"113\" border=\"0\">
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/step2c.png"), "html", null, true);
        echo "\" width=\"194\" height=\"116\" border=\"0\" style=\"margin:15px 0px 15px 0px;\"></a>

\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>
<br>
<br>
<br>
";
    }

    // line 35
    public function block_body2($context, array $blocks = array())
    {
        echo "  
<p>
\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/designed-to-work-with2.jpg"), "html", null, true);
        echo "\" width=\"960\" height=\"211\">
</p>
";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Visiteur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  75 => 35,  57 => 23,  52 => 21,  32 => 4,  27 => 3,);
    }
}
