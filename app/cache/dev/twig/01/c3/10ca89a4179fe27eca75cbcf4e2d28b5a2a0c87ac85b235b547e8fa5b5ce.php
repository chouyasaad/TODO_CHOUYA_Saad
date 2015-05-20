<?php

/* DwmlistBundle:Default:afficher.html.twig */
class __TwigTemplate_01c310ca89a4179fe27eca75cbcf4e2d28b5a2a0c87ac85b235b547e8fa5b5ce extends Twig_Template
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
        echo "    <center>TODO.COM
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "<br>
    ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom"), "html", null, true);
            echo "<br>
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "description"), "html", null, true);
            echo "<br>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </center>
";
    }

    public function getTemplateName()
    {
        return "DwmlistBundle:Default:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  47 => 7,  43 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
