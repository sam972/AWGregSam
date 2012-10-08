<?php

/* WbnWebinaireBundle:Visiteur:apropos.html.twig */
class __TwigTemplate_ae8c51e764868dfc0be79c0dc3398dab extends Twig_Template
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
        echo "A propos - ";
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

        <br>
     <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/h1.png"), "html", null, true);
        echo "\" width=\"960\" height=\"48\"></center>
        </div>
        <div id=\"subPages\">
<div id=\"botCont\">
            <div class=\"botBox\" style=\"margin-top: 15px;\">
                <h2>How Evergreen Business System Came To Be.</h2>
                    <p>Mike Filsaime and Hector Yague developed this project of over 7 months in 2011.
                    </p> 
                    <p>Mike Filsaime, a software developer himself, was looking for the right solution to run an automated webinar. There were about 4 on the market and they all did basic features but non of them had what he wanted. So he decided to create his own version.
                    </p> 
                    <p>Mike found the Version 1.0 (Basic Version) of the Automated Webinar Generator (no longer available) and felt it was the best way to use as a “base” since he could get access to the source code and customize it for his own use. 4 Months later, Mike Filsaime was using this to make hundreds of thousands of dollars every month.
                    </p> 
                    <p>Mike Reach out to Hector to report a bug he found, and told Hector the success he had with the software with major modifications he made that made it the most intelligent software the likes that have never been seen before. Hector asked Mike to show him what would be needed to make an ALL NEW Version 2.0 with all of the new features that would make this the “Killer App.” Mike and Hector started working on a NEW Re-Write and 7 months later the world of marketing would change forever. You now are seeing the most influential software to hit our industry since the Butterfly Marketing Software of 2006. 
                    </p> 
                    <p>This is not the version 1.0. In fact it is nothing like it. Look at all of the features on our home page to see the advanced features not found anywhere.
                    </p>
                    <p>Mike Filsaime also noticed Hector Yague had a a great Word Press Plugin to do Product Launch Sequencing. My also spoke with Hector about adding \"Gate Keeper Technology\" to force option pages and lock down content pages when sharing but also not asking the visitor to re-optin to every squeeze page in the funnel. They also started to work on an Evergreen Launch Funnel as this project was being designed. This allowed Mike and Hector to create the perfect Evergreen Business System. An Evergreen Product Launch with a follow up to non buyers to attend an automated webinar. Mike and Hector also added training to make this Evergreen Business System one of the most completed investments you can make. Not only do you get the strategies and tactics to use, but you get the software to automate the entire process. Get started with us today at our introductory low price and bonsues.
                    </p>
            </div>
    </div>
    </div>
    </div>
  <br>

    

";
    }

    // line 39
    public function block_body2($context, array $blocks = array())
    {
        echo "  
<p>
\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/designed-to-work-with2.jpg"), "html", null, true);
        echo "\" width=\"960\" height=\"211\">
</p>

";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Visiteur:apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  18 => 1,  88 => 41,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 28,  67 => 25,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 29,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 18,  59 => 23,  45 => 9,  103 => 5,  91 => 58,  74 => 32,  70 => 20,  66 => 12,  25 => 5,  89 => 32,  82 => 39,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  19 => 1,  42 => 17,  29 => 3,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 8,  102 => 6,  98 => 33,  76 => 24,  73 => 23,  69 => 19,  56 => 20,  32 => 4,  24 => 2,  22 => 6,  23 => 3,  17 => 1,  68 => 20,  61 => 24,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 30,  64 => 15,  53 => 12,  50 => 15,  48 => 18,  41 => 7,  39 => 7,  35 => 9,  33 => 5,  30 => 7,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 34,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 22,  58 => 14,  55 => 14,  52 => 10,  49 => 11,  46 => 17,  43 => 8,  40 => 8,  37 => 7,  34 => 5,  31 => 8,  28 => 1,);
    }
}
