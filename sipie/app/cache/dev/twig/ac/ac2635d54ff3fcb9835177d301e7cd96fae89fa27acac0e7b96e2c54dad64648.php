<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_62eccc40fe35184868f573050d4f790cdeaf7b6a8940cabe767d735c8984b7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f23b5bf42ba56400a6c27d74bfcbdac56e255ca16459edaa9babd9390b10152 = $this->env->getExtension("native_profiler");
        $__internal_9f23b5bf42ba56400a6c27d74bfcbdac56e255ca16459edaa9babd9390b10152->enter($__internal_9f23b5bf42ba56400a6c27d74bfcbdac56e255ca16459edaa9babd9390b10152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9f23b5bf42ba56400a6c27d74bfcbdac56e255ca16459edaa9babd9390b10152->leave($__internal_9f23b5bf42ba56400a6c27d74bfcbdac56e255ca16459edaa9babd9390b10152_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebe92dad264d31812cc9f51a114709e87e48826beaebf11552063d4b1754c853 = $this->env->getExtension("native_profiler");
        $__internal_ebe92dad264d31812cc9f51a114709e87e48826beaebf11552063d4b1754c853->enter($__internal_ebe92dad264d31812cc9f51a114709e87e48826beaebf11552063d4b1754c853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ebe92dad264d31812cc9f51a114709e87e48826beaebf11552063d4b1754c853->leave($__internal_ebe92dad264d31812cc9f51a114709e87e48826beaebf11552063d4b1754c853_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
