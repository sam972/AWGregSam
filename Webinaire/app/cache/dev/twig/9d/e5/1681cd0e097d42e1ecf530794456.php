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
        return array (  144 => 105,  38 => 7,  233 => 58,  227 => 51,  221 => 49,  215 => 39,  207 => 37,  201 => 34,  197 => 33,  190 => 31,  185 => 29,  166 => 21,  139 => 8,  51 => 11,  18 => 1,  88 => 41,  60 => 52,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 35,  67 => 25,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 24,  158 => 57,  107 => 41,  101 => 34,  80 => 64,  63 => 16,  36 => 6,  156 => 18,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 79,  85 => 28,  65 => 18,  59 => 23,  45 => 11,  103 => 5,  91 => 58,  74 => 61,  70 => 59,  66 => 12,  25 => 5,  89 => 32,  82 => 39,  92 => 70,  86 => 67,  77 => 23,  57 => 23,  19 => 1,  42 => 17,  29 => 5,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 32,  189 => 78,  187 => 77,  184 => 76,  178 => 25,  170 => 22,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 5,  119 => 45,  116 => 44,  112 => 8,  102 => 33,  98 => 73,  76 => 25,  73 => 23,  69 => 19,  56 => 12,  32 => 4,  24 => 2,  22 => 6,  23 => 1,  17 => 1,  68 => 58,  61 => 24,  44 => 9,  20 => 2,  161 => 19,  153 => 17,  150 => 107,  147 => 10,  143 => 9,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 76,  99 => 33,  94 => 21,  81 => 37,  78 => 24,  72 => 16,  64 => 15,  53 => 49,  50 => 15,  48 => 8,  41 => 8,  39 => 7,  35 => 12,  33 => 6,  30 => 5,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 7,  131 => 6,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 5,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 21,  58 => 51,  55 => 14,  52 => 21,  49 => 12,  46 => 11,  43 => 8,  40 => 8,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
