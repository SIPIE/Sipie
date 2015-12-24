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
        $__internal_2513813f7a2f93a8131d0580fa8dd2eec0d20c3c72842dd7aa6e722ac69fdc6f = $this->env->getExtension("native_profiler");
        $__internal_2513813f7a2f93a8131d0580fa8dd2eec0d20c3c72842dd7aa6e722ac69fdc6f->enter($__internal_2513813f7a2f93a8131d0580fa8dd2eec0d20c3c72842dd7aa6e722ac69fdc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2513813f7a2f93a8131d0580fa8dd2eec0d20c3c72842dd7aa6e722ac69fdc6f->leave($__internal_2513813f7a2f93a8131d0580fa8dd2eec0d20c3c72842dd7aa6e722ac69fdc6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55280f3a6224e733d47ab88b9ec03e95274e78d1627da12ac73fed3b63b77abc = $this->env->getExtension("native_profiler");
        $__internal_55280f3a6224e733d47ab88b9ec03e95274e78d1627da12ac73fed3b63b77abc->enter($__internal_55280f3a6224e733d47ab88b9ec03e95274e78d1627da12ac73fed3b63b77abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_55280f3a6224e733d47ab88b9ec03e95274e78d1627da12ac73fed3b63b77abc->leave($__internal_55280f3a6224e733d47ab88b9ec03e95274e78d1627da12ac73fed3b63b77abc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e742e6c456d7d96deabb68bdf0bff242249466fe76a2771474c6c88d871cf2e7 = $this->env->getExtension("native_profiler");
        $__internal_e742e6c456d7d96deabb68bdf0bff242249466fe76a2771474c6c88d871cf2e7->enter($__internal_e742e6c456d7d96deabb68bdf0bff242249466fe76a2771474c6c88d871cf2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e742e6c456d7d96deabb68bdf0bff242249466fe76a2771474c6c88d871cf2e7->leave($__internal_e742e6c456d7d96deabb68bdf0bff242249466fe76a2771474c6c88d871cf2e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d21193ed35658aa3d500f16e5fc16561d0386aa49b2ae7f7e815d00052618a0 = $this->env->getExtension("native_profiler");
        $__internal_1d21193ed35658aa3d500f16e5fc16561d0386aa49b2ae7f7e815d00052618a0->enter($__internal_1d21193ed35658aa3d500f16e5fc16561d0386aa49b2ae7f7e815d00052618a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1d21193ed35658aa3d500f16e5fc16561d0386aa49b2ae7f7e815d00052618a0->leave($__internal_1d21193ed35658aa3d500f16e5fc16561d0386aa49b2ae7f7e815d00052618a0_prof);

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
