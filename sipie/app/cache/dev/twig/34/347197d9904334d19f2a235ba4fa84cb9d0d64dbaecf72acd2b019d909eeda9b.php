<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ee871aeb18267b8c7c27e1e781eeb726031259c74f69acf958d886425805fa61 extends Twig_Template
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
        $__internal_ee8bba078622fed0935b8eb5e04e95eb35114bb761c3af2541c2cf1ae2063778 = $this->env->getExtension("native_profiler");
        $__internal_ee8bba078622fed0935b8eb5e04e95eb35114bb761c3af2541c2cf1ae2063778->enter($__internal_ee8bba078622fed0935b8eb5e04e95eb35114bb761c3af2541c2cf1ae2063778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ee8bba078622fed0935b8eb5e04e95eb35114bb761c3af2541c2cf1ae2063778->leave($__internal_ee8bba078622fed0935b8eb5e04e95eb35114bb761c3af2541c2cf1ae2063778_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
