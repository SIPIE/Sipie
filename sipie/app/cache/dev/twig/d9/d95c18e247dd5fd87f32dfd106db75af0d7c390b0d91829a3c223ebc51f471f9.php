<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6e77b82ce50b0a32496ffbce8f27b66151f26bbd0f53a6c88174ecd6f9295cb5 extends Twig_Template
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
        $__internal_faa1a983316448c5ab25a990d055ca33c6d18d35c46512ed852ba9be4b7b4e0b = $this->env->getExtension("native_profiler");
        $__internal_faa1a983316448c5ab25a990d055ca33c6d18d35c46512ed852ba9be4b7b4e0b->enter($__internal_faa1a983316448c5ab25a990d055ca33c6d18d35c46512ed852ba9be4b7b4e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_faa1a983316448c5ab25a990d055ca33c6d18d35c46512ed852ba9be4b7b4e0b->leave($__internal_faa1a983316448c5ab25a990d055ca33c6d18d35c46512ed852ba9be4b7b4e0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
