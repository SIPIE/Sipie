<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1b4291c7977f379ae3890c9f6d1528c5fdc110a25a16bc6abfc5d067e3ea8e2b extends Twig_Template
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
        $__internal_8392e6d1416711d60bb8e0dc125dfad9800665876e93a054045b3f3d8bd34cfd = $this->env->getExtension("native_profiler");
        $__internal_8392e6d1416711d60bb8e0dc125dfad9800665876e93a054045b3f3d8bd34cfd->enter($__internal_8392e6d1416711d60bb8e0dc125dfad9800665876e93a054045b3f3d8bd34cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8392e6d1416711d60bb8e0dc125dfad9800665876e93a054045b3f3d8bd34cfd->leave($__internal_8392e6d1416711d60bb8e0dc125dfad9800665876e93a054045b3f3d8bd34cfd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
