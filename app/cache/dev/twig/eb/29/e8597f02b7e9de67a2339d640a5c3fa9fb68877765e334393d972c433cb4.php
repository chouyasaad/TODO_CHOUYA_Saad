<?php

/* DwmlistBundle:Default:list.html.twig */
class __TwigTemplate_eb29e8597f02b7e9de67a2339d640a5c3fa9fb68877765e334393d972c433cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h1 style=\"color:#565656;text-align: center; text-decoration: underline\">todo.com</h1>
    <table border=\"1\" >
        <tr  bgcolor=\"#6495ed\">A faire</tr></br>
        <tr  bgcolor=\"#6495ed\"><Ranger les courses</tr></br>
        <tr  bgcolor=\"#6495ed\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ajout");
        echo "\"> + </a></tr></br>
        <tr  bgcolor=\"#6495ed\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("affiche");
        echo "\">fiare le ménage </a></tr></br>
        <tr  bgcolor=\"#6495ed\">Dormir </tr></br>


    </table>
";
    }

    public function getTemplateName()
    {
        return "DwmlistBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
