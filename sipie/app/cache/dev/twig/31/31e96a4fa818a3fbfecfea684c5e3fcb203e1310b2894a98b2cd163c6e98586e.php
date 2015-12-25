<?php

/* base.html.twig */
class __TwigTemplate_54360bf63202b77b9ee29ab22ec1f295f3395af0a45859682715742dce9b9e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d09f05a007d43859c5bdb3bc67aab32ae6fa8aa5e78046b007937050c3843f5 = $this->env->getExtension("native_profiler");
        $__internal_5d09f05a007d43859c5bdb3bc67aab32ae6fa8aa5e78046b007937050c3843f5->enter($__internal_5d09f05a007d43859c5bdb3bc67aab32ae6fa8aa5e78046b007937050c3843f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5d09f05a007d43859c5bdb3bc67aab32ae6fa8aa5e78046b007937050c3843f5->leave($__internal_5d09f05a007d43859c5bdb3bc67aab32ae6fa8aa5e78046b007937050c3843f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aa1305fc6757c5c461ca98a291ee39a909f2f56decb395f38b02e66de70c056 = $this->env->getExtension("native_profiler");
        $__internal_2aa1305fc6757c5c461ca98a291ee39a909f2f56decb395f38b02e66de70c056->enter($__internal_2aa1305fc6757c5c461ca98a291ee39a909f2f56decb395f38b02e66de70c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2aa1305fc6757c5c461ca98a291ee39a909f2f56decb395f38b02e66de70c056->leave($__internal_2aa1305fc6757c5c461ca98a291ee39a909f2f56decb395f38b02e66de70c056_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_165f345cf6aab620e095272ec3cd80e3122cd970d82a416406d08bd243e12cd0 = $this->env->getExtension("native_profiler");
        $__internal_165f345cf6aab620e095272ec3cd80e3122cd970d82a416406d08bd243e12cd0->enter($__internal_165f345cf6aab620e095272ec3cd80e3122cd970d82a416406d08bd243e12cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_165f345cf6aab620e095272ec3cd80e3122cd970d82a416406d08bd243e12cd0->leave($__internal_165f345cf6aab620e095272ec3cd80e3122cd970d82a416406d08bd243e12cd0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_595cb3a90562531310883f268e1c9c9031d1e282a6796afa42230d7534df42a3 = $this->env->getExtension("native_profiler");
        $__internal_595cb3a90562531310883f268e1c9c9031d1e282a6796afa42230d7534df42a3->enter($__internal_595cb3a90562531310883f268e1c9c9031d1e282a6796afa42230d7534df42a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_595cb3a90562531310883f268e1c9c9031d1e282a6796afa42230d7534df42a3->leave($__internal_595cb3a90562531310883f268e1c9c9031d1e282a6796afa42230d7534df42a3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7603e256f2e7f90bacd7d7648cd076f95ce3a40ba3e26e9dd4e0d824b47508d5 = $this->env->getExtension("native_profiler");
        $__internal_7603e256f2e7f90bacd7d7648cd076f95ce3a40ba3e26e9dd4e0d824b47508d5->enter($__internal_7603e256f2e7f90bacd7d7648cd076f95ce3a40ba3e26e9dd4e0d824b47508d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7603e256f2e7f90bacd7d7648cd076f95ce3a40ba3e26e9dd4e0d824b47508d5->leave($__internal_7603e256f2e7f90bacd7d7648cd076f95ce3a40ba3e26e9dd4e0d824b47508d5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
