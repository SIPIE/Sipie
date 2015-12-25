<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e7f3e8833ddd193991958aa4d00659b0542f304af3f09bb7b1a6cd2601a5f84c extends Twig_Template
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
        $__internal_873a6561aff111c4becc2cc5d29639877c9eeb03d4f0dcbb421b0865835d1290 = $this->env->getExtension("native_profiler");
        $__internal_873a6561aff111c4becc2cc5d29639877c9eeb03d4f0dcbb421b0865835d1290->enter($__internal_873a6561aff111c4becc2cc5d29639877c9eeb03d4f0dcbb421b0865835d1290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_873a6561aff111c4becc2cc5d29639877c9eeb03d4f0dcbb421b0865835d1290->leave($__internal_873a6561aff111c4becc2cc5d29639877c9eeb03d4f0dcbb421b0865835d1290_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
