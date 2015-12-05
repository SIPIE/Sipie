<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_227c82403f4bc3b7efc2acf8d7546c41192ca9959a5dbafa9288e29d6bf8628f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1bb43e383acd206e15bf8fdac88261b5c09e61a275b9c7c257aac888103e9514 = $this->env->getExtension("native_profiler");
        $__internal_1bb43e383acd206e15bf8fdac88261b5c09e61a275b9c7c257aac888103e9514->enter($__internal_1bb43e383acd206e15bf8fdac88261b5c09e61a275b9c7c257aac888103e9514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb43e383acd206e15bf8fdac88261b5c09e61a275b9c7c257aac888103e9514->leave($__internal_1bb43e383acd206e15bf8fdac88261b5c09e61a275b9c7c257aac888103e9514_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c942c126caf2fb35565ccf0eb057b3d270e029384c1b60b7320fd57e8d443c23 = $this->env->getExtension("native_profiler");
        $__internal_c942c126caf2fb35565ccf0eb057b3d270e029384c1b60b7320fd57e8d443c23->enter($__internal_c942c126caf2fb35565ccf0eb057b3d270e029384c1b60b7320fd57e8d443c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c942c126caf2fb35565ccf0eb057b3d270e029384c1b60b7320fd57e8d443c23->leave($__internal_c942c126caf2fb35565ccf0eb057b3d270e029384c1b60b7320fd57e8d443c23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ffbfb8707767380975c73109ea69f75eb08b33e1ff667866880c6077a0b6dd2 = $this->env->getExtension("native_profiler");
        $__internal_7ffbfb8707767380975c73109ea69f75eb08b33e1ff667866880c6077a0b6dd2->enter($__internal_7ffbfb8707767380975c73109ea69f75eb08b33e1ff667866880c6077a0b6dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ffbfb8707767380975c73109ea69f75eb08b33e1ff667866880c6077a0b6dd2->leave($__internal_7ffbfb8707767380975c73109ea69f75eb08b33e1ff667866880c6077a0b6dd2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7191f1283315d872df06a9775bcf07093da17c0c55b5fdaeb937f1ff13fdfb80 = $this->env->getExtension("native_profiler");
        $__internal_7191f1283315d872df06a9775bcf07093da17c0c55b5fdaeb937f1ff13fdfb80->enter($__internal_7191f1283315d872df06a9775bcf07093da17c0c55b5fdaeb937f1ff13fdfb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7191f1283315d872df06a9775bcf07093da17c0c55b5fdaeb937f1ff13fdfb80->leave($__internal_7191f1283315d872df06a9775bcf07093da17c0c55b5fdaeb937f1ff13fdfb80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
