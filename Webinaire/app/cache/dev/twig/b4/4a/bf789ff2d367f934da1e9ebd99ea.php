<?php

/* WbnWebinaireBundle:Membre:voir.html.twig */
class __TwigTemplate_b44abf789ff2d367f934da1e9ebd99ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("WbnWebinaireBundle:Membre:layout.html.twig")->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "webi"), "nom"), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Membre:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  88 => 30,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 28,  67 => 25,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 29,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 18,  59 => 23,  45 => 9,  103 => 5,  91 => 58,  74 => 32,  70 => 20,  66 => 12,  25 => 5,  89 => 32,  82 => 5,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  19 => 1,  42 => 17,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 8,  102 => 6,  98 => 33,  76 => 24,  73 => 23,  69 => 19,  56 => 20,  32 => 5,  24 => 2,  22 => 6,  23 => 3,  17 => 1,  68 => 20,  61 => 24,  44 => 9,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 30,  64 => 15,  53 => 12,  50 => 15,  48 => 18,  41 => 7,  39 => 10,  35 => 9,  33 => 5,  30 => 7,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 34,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 22,  58 => 14,  55 => 14,  52 => 10,  49 => 11,  46 => 17,  43 => 8,  40 => 8,  37 => 7,  34 => 5,  31 => 8,  28 => 1,);
    }
}
