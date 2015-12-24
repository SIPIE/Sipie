<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1ad0aa6191d52671239609e920bc63ba24d6fe52ffbbd92ea82bb2f10b5e615c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdde629e370fca10ad781aa41eab23264c767c26e048baa7a2a5a90cfa667c69 = $this->env->getExtension("native_profiler");
        $__internal_cdde629e370fca10ad781aa41eab23264c767c26e048baa7a2a5a90cfa667c69->enter($__internal_cdde629e370fca10ad781aa41eab23264c767c26e048baa7a2a5a90cfa667c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cdde629e370fca10ad781aa41eab23264c767c26e048baa7a2a5a90cfa667c69->leave($__internal_cdde629e370fca10ad781aa41eab23264c767c26e048baa7a2a5a90cfa667c69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
