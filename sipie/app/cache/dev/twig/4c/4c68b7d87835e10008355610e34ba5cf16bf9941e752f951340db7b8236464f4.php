<?php

/* base.html.twig */
class __TwigTemplate_f1ee307d11a85b411c7ee06de0b6dd08e0d57eb6187e10c62a9a8b5967e7e3c5 extends Twig_Template
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
        $__internal_28d82cb5310b76616bd9fb2987b397e9c90120cda5867c6bfdb19c8556e34390 = $this->env->getExtension("native_profiler");
        $__internal_28d82cb5310b76616bd9fb2987b397e9c90120cda5867c6bfdb19c8556e34390->enter($__internal_28d82cb5310b76616bd9fb2987b397e9c90120cda5867c6bfdb19c8556e34390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_28d82cb5310b76616bd9fb2987b397e9c90120cda5867c6bfdb19c8556e34390->leave($__internal_28d82cb5310b76616bd9fb2987b397e9c90120cda5867c6bfdb19c8556e34390_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe1bcc8eebc3784b91a2043d786df459d0c6eb7c1b4f1697f6e7c94bf2514986 = $this->env->getExtension("native_profiler");
        $__internal_fe1bcc8eebc3784b91a2043d786df459d0c6eb7c1b4f1697f6e7c94bf2514986->enter($__internal_fe1bcc8eebc3784b91a2043d786df459d0c6eb7c1b4f1697f6e7c94bf2514986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe1bcc8eebc3784b91a2043d786df459d0c6eb7c1b4f1697f6e7c94bf2514986->leave($__internal_fe1bcc8eebc3784b91a2043d786df459d0c6eb7c1b4f1697f6e7c94bf2514986_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b737bcea132d618403059f6d909a661a3e4daf23604ce68f60616ec23290b841 = $this->env->getExtension("native_profiler");
        $__internal_b737bcea132d618403059f6d909a661a3e4daf23604ce68f60616ec23290b841->enter($__internal_b737bcea132d618403059f6d909a661a3e4daf23604ce68f60616ec23290b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b737bcea132d618403059f6d909a661a3e4daf23604ce68f60616ec23290b841->leave($__internal_b737bcea132d618403059f6d909a661a3e4daf23604ce68f60616ec23290b841_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad15a16cf34539df4f344b55e0e01f6f0d47d2a102757fc789b4bbe1dd7d021 = $this->env->getExtension("native_profiler");
        $__internal_aad15a16cf34539df4f344b55e0e01f6f0d47d2a102757fc789b4bbe1dd7d021->enter($__internal_aad15a16cf34539df4f344b55e0e01f6f0d47d2a102757fc789b4bbe1dd7d021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aad15a16cf34539df4f344b55e0e01f6f0d47d2a102757fc789b4bbe1dd7d021->leave($__internal_aad15a16cf34539df4f344b55e0e01f6f0d47d2a102757fc789b4bbe1dd7d021_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5485720882e56a5d5c67f530673a84f8fa3a3215c114d0a6f4fed9d7bdd0279 = $this->env->getExtension("native_profiler");
        $__internal_c5485720882e56a5d5c67f530673a84f8fa3a3215c114d0a6f4fed9d7bdd0279->enter($__internal_c5485720882e56a5d5c67f530673a84f8fa3a3215c114d0a6f4fed9d7bdd0279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5485720882e56a5d5c67f530673a84f8fa3a3215c114d0a6f4fed9d7bdd0279->leave($__internal_c5485720882e56a5d5c67f530673a84f8fa3a3215c114d0a6f4fed9d7bdd0279_prof);

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
