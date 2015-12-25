<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_44aaeaf8456517ce8fa453a9cff6301759d00153824580fabd8bc2f68c1f0120 extends Twig_Template
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
        $__internal_687d7783cc25307c1b3d491baf7ba056d7b136a8fd3818e4911fcf9b1e4206fe = $this->env->getExtension("native_profiler");
        $__internal_687d7783cc25307c1b3d491baf7ba056d7b136a8fd3818e4911fcf9b1e4206fe->enter($__internal_687d7783cc25307c1b3d491baf7ba056d7b136a8fd3818e4911fcf9b1e4206fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_687d7783cc25307c1b3d491baf7ba056d7b136a8fd3818e4911fcf9b1e4206fe->leave($__internal_687d7783cc25307c1b3d491baf7ba056d7b136a8fd3818e4911fcf9b1e4206fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
