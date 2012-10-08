<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_20d3b0d35b4f28f141695585a7aed430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  84 => 39,  47 => 10,  144 => 105,  38 => 6,  233 => 58,  227 => 51,  221 => 49,  215 => 39,  207 => 37,  201 => 34,  197 => 33,  190 => 31,  185 => 29,  166 => 21,  139 => 8,  60 => 52,  51 => 11,  18 => 1,  88 => 41,  21 => 1,  111 => 9,  108 => 8,  95 => 45,  75 => 27,  67 => 24,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 24,  158 => 57,  107 => 5,  101 => 34,  80 => 37,  63 => 23,  36 => 6,  156 => 18,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 79,  85 => 38,  65 => 18,  59 => 22,  45 => 9,  103 => 5,  91 => 40,  74 => 61,  70 => 59,  66 => 24,  25 => 5,  89 => 32,  82 => 39,  92 => 44,  86 => 41,  77 => 23,  57 => 13,  19 => 1,  42 => 17,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 32,  189 => 78,  187 => 77,  184 => 76,  178 => 25,  170 => 22,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 5,  119 => 30,  116 => 29,  112 => 8,  102 => 6,  98 => 73,  76 => 24,  73 => 23,  69 => 19,  56 => 20,  32 => 4,  24 => 11,  22 => 6,  23 => 1,  17 => 1,  68 => 58,  61 => 24,  44 => 8,  20 => 2,  161 => 19,  153 => 17,  150 => 107,  147 => 10,  143 => 9,  137 => 45,  129 => 42,  121 => 33,  118 => 34,  113 => 28,  104 => 76,  99 => 33,  94 => 21,  81 => 37,  78 => 28,  72 => 30,  64 => 15,  53 => 49,  50 => 10,  48 => 18,  41 => 7,  39 => 7,  35 => 5,  33 => 5,  30 => 7,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 7,  131 => 31,  128 => 30,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 47,  96 => 34,  93 => 34,  90 => 43,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 22,  58 => 51,  55 => 12,  52 => 21,  49 => 9,  46 => 9,  43 => 8,  40 => 7,  37 => 7,  34 => 5,  31 => 6,  28 => 3,);
    }
}
