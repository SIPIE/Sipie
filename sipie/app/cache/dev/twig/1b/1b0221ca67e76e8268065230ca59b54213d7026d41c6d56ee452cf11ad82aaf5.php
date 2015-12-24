<?php

/* base.html.twig */
class __TwigTemplate_c5b9843d6eaa7de0c3663d8654f60e862a9d24107905b88f668e8c0b7e9e91d1 extends Twig_Template
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
        $__internal_41341d9bd32d0bd97b9e69d54bab86cee7580ca11cf10960ffd62c2c4bd489a4 = $this->env->getExtension("native_profiler");
        $__internal_41341d9bd32d0bd97b9e69d54bab86cee7580ca11cf10960ffd62c2c4bd489a4->enter($__internal_41341d9bd32d0bd97b9e69d54bab86cee7580ca11cf10960ffd62c2c4bd489a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_41341d9bd32d0bd97b9e69d54bab86cee7580ca11cf10960ffd62c2c4bd489a4->leave($__internal_41341d9bd32d0bd97b9e69d54bab86cee7580ca11cf10960ffd62c2c4bd489a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c10923089723b350747b3d3c07dbd09eeec86ce320071dc0feba93b9572acbc4 = $this->env->getExtension("native_profiler");
        $__internal_c10923089723b350747b3d3c07dbd09eeec86ce320071dc0feba93b9572acbc4->enter($__internal_c10923089723b350747b3d3c07dbd09eeec86ce320071dc0feba93b9572acbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c10923089723b350747b3d3c07dbd09eeec86ce320071dc0feba93b9572acbc4->leave($__internal_c10923089723b350747b3d3c07dbd09eeec86ce320071dc0feba93b9572acbc4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c31299d6ead3b34a33dd781d21830c06f39494762b7f924dc78b75af2c9587b9 = $this->env->getExtension("native_profiler");
        $__internal_c31299d6ead3b34a33dd781d21830c06f39494762b7f924dc78b75af2c9587b9->enter($__internal_c31299d6ead3b34a33dd781d21830c06f39494762b7f924dc78b75af2c9587b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c31299d6ead3b34a33dd781d21830c06f39494762b7f924dc78b75af2c9587b9->leave($__internal_c31299d6ead3b34a33dd781d21830c06f39494762b7f924dc78b75af2c9587b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad11b2f4b81fee6b8acff708e7202bb81219af5a577397222d87413b29d6750f = $this->env->getExtension("native_profiler");
        $__internal_ad11b2f4b81fee6b8acff708e7202bb81219af5a577397222d87413b29d6750f->enter($__internal_ad11b2f4b81fee6b8acff708e7202bb81219af5a577397222d87413b29d6750f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad11b2f4b81fee6b8acff708e7202bb81219af5a577397222d87413b29d6750f->leave($__internal_ad11b2f4b81fee6b8acff708e7202bb81219af5a577397222d87413b29d6750f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1081be5708f0266cc281c00284d552146344920b0e13c9307367a6df50ae250d = $this->env->getExtension("native_profiler");
        $__internal_1081be5708f0266cc281c00284d552146344920b0e13c9307367a6df50ae250d->enter($__internal_1081be5708f0266cc281c00284d552146344920b0e13c9307367a6df50ae250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1081be5708f0266cc281c00284d552146344920b0e13c9307367a6df50ae250d->leave($__internal_1081be5708f0266cc281c00284d552146344920b0e13c9307367a6df50ae250d_prof);

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
