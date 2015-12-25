<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b93508fd99bc0dbc0e1b19d5637bb983c586a2062a441ece45b004baebdfef97 extends Twig_Template
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
        $__internal_12036c69a5c5242e88b438985a0b2e6e287ce98450534f827c2823ab2a264e20 = $this->env->getExtension("native_profiler");
        $__internal_12036c69a5c5242e88b438985a0b2e6e287ce98450534f827c2823ab2a264e20->enter($__internal_12036c69a5c5242e88b438985a0b2e6e287ce98450534f827c2823ab2a264e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_12036c69a5c5242e88b438985a0b2e6e287ce98450534f827c2823ab2a264e20->leave($__internal_12036c69a5c5242e88b438985a0b2e6e287ce98450534f827c2823ab2a264e20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
