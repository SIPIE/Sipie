<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c6edc1b92e6fc68bf1e4716ee9e88867beb4e011054e8a944744c5e3ba62282d extends Twig_Template
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
        $__internal_3f32c7fd8181a7c427c5976ba0d39433f04ac4c9d97820e4bf046dc8c8243638 = $this->env->getExtension("native_profiler");
        $__internal_3f32c7fd8181a7c427c5976ba0d39433f04ac4c9d97820e4bf046dc8c8243638->enter($__internal_3f32c7fd8181a7c427c5976ba0d39433f04ac4c9d97820e4bf046dc8c8243638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3f32c7fd8181a7c427c5976ba0d39433f04ac4c9d97820e4bf046dc8c8243638->leave($__internal_3f32c7fd8181a7c427c5976ba0d39433f04ac4c9d97820e4bf046dc8c8243638_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
