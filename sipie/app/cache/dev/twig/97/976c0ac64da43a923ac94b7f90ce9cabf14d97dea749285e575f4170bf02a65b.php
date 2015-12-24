<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4a7100380a87749c752e81137dbf1d9f7e03d1c34ac5a627dd499a04128893f5 extends Twig_Template
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
        $__internal_798da0a5dc5f6b28855cc7426947d740d6fb273fcb2e5682927ec94153709e69 = $this->env->getExtension("native_profiler");
        $__internal_798da0a5dc5f6b28855cc7426947d740d6fb273fcb2e5682927ec94153709e69->enter($__internal_798da0a5dc5f6b28855cc7426947d740d6fb273fcb2e5682927ec94153709e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_798da0a5dc5f6b28855cc7426947d740d6fb273fcb2e5682927ec94153709e69->leave($__internal_798da0a5dc5f6b28855cc7426947d740d6fb273fcb2e5682927ec94153709e69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
