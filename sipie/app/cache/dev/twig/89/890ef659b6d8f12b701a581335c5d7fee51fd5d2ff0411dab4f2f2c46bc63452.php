<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_72c47a9f2fa16b4464f7d35b51655f53820146db769f671e1efe549ae2856c61 extends Twig_Template
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
        $__internal_c3182eafcdfd2faa04f5a9b04a7843eeedba53878a7024606a0584899882cd87 = $this->env->getExtension("native_profiler");
        $__internal_c3182eafcdfd2faa04f5a9b04a7843eeedba53878a7024606a0584899882cd87->enter($__internal_c3182eafcdfd2faa04f5a9b04a7843eeedba53878a7024606a0584899882cd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c3182eafcdfd2faa04f5a9b04a7843eeedba53878a7024606a0584899882cd87->leave($__internal_c3182eafcdfd2faa04f5a9b04a7843eeedba53878a7024606a0584899882cd87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
