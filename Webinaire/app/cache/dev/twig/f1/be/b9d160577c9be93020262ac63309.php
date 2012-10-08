<?php

/* WbnWebinaireBundle:Visiteur:support.html.twig */
class __TwigTemplate_f1beb9d160577c9be93020262ac63309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Support - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body1($context, array $blocks = array())
    {
        echo " 
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/h1.png"), "html", null, true);
        echo "\" width=\"960\" height=\"48\">
</center>
</div><div id=\"subPages\">
<div id=\"botCont\">
 <div class=\"botBox\" id=\"formBox\">
                <h2>Need Support? We're Here to Help.</h2>
                <p>Whether you have pre-sales questions, technical support issues, billing questions or need a refund, or if you want to report a bug or suggest a feature just let us know and we will get right back to you.
                </p>
                <p>Our live support team works normal business hours (Monday - Firday, 10am to 6pm Eastern Time) and we also have our help desk team working all hours of the day 7 days a week. Just use our easy ticket form and we will get back to you usually in less than 1 business day.
                </p>  
              <p style=\"width:100%; border-top:1px dotted #cccccc;\"></p> 
                <p class=\"bold\" style=\"font-size:18px; color:#069\">Choose your support department below:</p>
              <ul style=\"padding-left:50px; \">
                <li><b>Pre-sale and general questions:</b> contact our Support Staff at support@thecustomerhelpdesk.com</li>
                <li><b>Questions related to your account (billing, password, refunds, etc):</b> contact Nancy at billing@thecustomerhelpdesk.com</li>
                <li><b>Customer Technical Support:</b> contact our programmers <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("webinaire_accueil"), "html", null, true);
        echo "\" style=\"font-weight:bold; text-decoration:underline;\">here</a></li>
                <li><b>Affiliates and JVs:</b> contact Joe at joe@mikefilsaime.com</li>
              </ul>
                <p>&nbsp;</p>
              <p>&nbsp;</p>
                <p style=\"text-align: right; font-size: 12px;\">For \"Non Technical\" quick questions you can call us at 1-631-350-7095<br>
        (Monday - Friday, 10am to 6pm Eastern Time)</p>
            </div>
</div> </div>
        </div>


<br>
";
    }

    // line 38
    public function block_body2($context, array $blocks = array())
    {
        echo "  
<p>
\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/designed-to-work-with2.jpg"), "html", null, true);
        echo "\" width=\"960\" height=\"211\">
</p>

";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Visiteur:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 105,  38 => 7,  233 => 58,  227 => 51,  221 => 49,  215 => 39,  207 => 37,  201 => 34,  197 => 33,  190 => 31,  185 => 29,  166 => 21,  139 => 8,  60 => 52,  51 => 11,  18 => 1,  88 => 41,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 35,  67 => 24,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 24,  158 => 57,  107 => 41,  101 => 34,  80 => 64,  63 => 16,  36 => 6,  156 => 18,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 79,  85 => 38,  65 => 18,  59 => 23,  45 => 9,  103 => 5,  91 => 40,  74 => 61,  70 => 59,  66 => 12,  25 => 5,  89 => 32,  82 => 39,  92 => 70,  86 => 67,  77 => 23,  57 => 23,  19 => 1,  42 => 17,  29 => 3,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 32,  189 => 78,  187 => 77,  184 => 76,  178 => 25,  170 => 22,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 5,  119 => 45,  116 => 44,  112 => 8,  102 => 6,  98 => 73,  76 => 24,  73 => 23,  69 => 19,  56 => 20,  32 => 4,  24 => 2,  22 => 6,  23 => 1,  17 => 1,  68 => 58,  61 => 24,  44 => 8,  20 => 2,  161 => 19,  153 => 17,  150 => 107,  147 => 10,  143 => 9,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 76,  99 => 33,  94 => 21,  81 => 37,  78 => 24,  72 => 30,  64 => 15,  53 => 49,  50 => 15,  48 => 18,  41 => 8,  39 => 7,  35 => 12,  33 => 6,  30 => 7,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 7,  131 => 6,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 34,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 22,  58 => 51,  55 => 14,  52 => 21,  49 => 9,  46 => 17,  43 => 8,  40 => 8,  37 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
