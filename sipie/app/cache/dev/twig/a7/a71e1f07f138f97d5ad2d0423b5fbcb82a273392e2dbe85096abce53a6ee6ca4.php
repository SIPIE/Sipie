<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_aa1d680c270580643186e68fd17c4844c369798cf3a797434afe98c9eb86ded2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41e7863d8cf39c205ff308d2c4085a88a693775ce447396093d35f4b9412c9b7 = $this->env->getExtension("native_profiler");
        $__internal_41e7863d8cf39c205ff308d2c4085a88a693775ce447396093d35f4b9412c9b7->enter($__internal_41e7863d8cf39c205ff308d2c4085a88a693775ce447396093d35f4b9412c9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e7863d8cf39c205ff308d2c4085a88a693775ce447396093d35f4b9412c9b7->leave($__internal_41e7863d8cf39c205ff308d2c4085a88a693775ce447396093d35f4b9412c9b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_971599cdd45fcb264cd1bc10f7eb11663fd3595d13ffb85f8216bd6bff4995ef = $this->env->getExtension("native_profiler");
        $__internal_971599cdd45fcb264cd1bc10f7eb11663fd3595d13ffb85f8216bd6bff4995ef->enter($__internal_971599cdd45fcb264cd1bc10f7eb11663fd3595d13ffb85f8216bd6bff4995ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_971599cdd45fcb264cd1bc10f7eb11663fd3595d13ffb85f8216bd6bff4995ef->leave($__internal_971599cdd45fcb264cd1bc10f7eb11663fd3595d13ffb85f8216bd6bff4995ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60d05e3c4ae46e4805c9bfbd92de1f3b3378a1d395f6aa9ae26454f5dca21d30 = $this->env->getExtension("native_profiler");
        $__internal_60d05e3c4ae46e4805c9bfbd92de1f3b3378a1d395f6aa9ae26454f5dca21d30->enter($__internal_60d05e3c4ae46e4805c9bfbd92de1f3b3378a1d395f6aa9ae26454f5dca21d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_60d05e3c4ae46e4805c9bfbd92de1f3b3378a1d395f6aa9ae26454f5dca21d30->leave($__internal_60d05e3c4ae46e4805c9bfbd92de1f3b3378a1d395f6aa9ae26454f5dca21d30_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
