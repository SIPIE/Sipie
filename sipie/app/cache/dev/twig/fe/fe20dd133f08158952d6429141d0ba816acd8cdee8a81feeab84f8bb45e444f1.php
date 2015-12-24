<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_58ac35d71739baa1a06487f02a5c5c0b906554a547675c4afb7d10b6b920e546 extends Twig_Template
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
        $__internal_007588a3334385f4b7316106e8bf8c53f1126745a50594881aed5850722c97e9 = $this->env->getExtension("native_profiler");
        $__internal_007588a3334385f4b7316106e8bf8c53f1126745a50594881aed5850722c97e9->enter($__internal_007588a3334385f4b7316106e8bf8c53f1126745a50594881aed5850722c97e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_007588a3334385f4b7316106e8bf8c53f1126745a50594881aed5850722c97e9->leave($__internal_007588a3334385f4b7316106e8bf8c53f1126745a50594881aed5850722c97e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
