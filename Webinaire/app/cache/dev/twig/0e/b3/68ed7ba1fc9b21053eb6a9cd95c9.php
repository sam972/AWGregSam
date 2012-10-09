<?php

/* WbnWebinaireBundle:Membre:nouveau.html.twig */
class __TwigTemplate_0eb368ed7ba1fc9b21053eb6a9cd95c9 extends Twig_Template
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
        echo "<div class=\"site\">
\t\t<div id=\"wrap\">
\t\t<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t
\t<input type=\"submit\" />
</form>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Membre:nouveau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  26 => 3,  20 => 2,  18 => 1,);
    }
}
