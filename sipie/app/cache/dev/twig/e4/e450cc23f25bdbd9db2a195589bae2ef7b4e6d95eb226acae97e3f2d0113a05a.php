<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b65a003640d249bb89ecc29dafa7c106612a3d59f3afad98eab0bb678df1cf41 extends Twig_Template
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
        $__internal_e1ae2af6523988da63b751b492be1e7bfb4607f89527c8dfa1dbcbee6719d452 = $this->env->getExtension("native_profiler");
        $__internal_e1ae2af6523988da63b751b492be1e7bfb4607f89527c8dfa1dbcbee6719d452->enter($__internal_e1ae2af6523988da63b751b492be1e7bfb4607f89527c8dfa1dbcbee6719d452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e1ae2af6523988da63b751b492be1e7bfb4607f89527c8dfa1dbcbee6719d452->leave($__internal_e1ae2af6523988da63b751b492be1e7bfb4607f89527c8dfa1dbcbee6719d452_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
