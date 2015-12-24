<?php

/* ::base.html.twig */
class __TwigTemplate_693ba6ede5463fea3aeabab7b7c1da3b72c4f1a6ff471b481116050dd2affa0a extends Twig_Template
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
        $__internal_1fbb51fe0e1c10d065782d50143f0e101087679e8029bff4ffc03d080ee1b873 = $this->env->getExtension("native_profiler");
        $__internal_1fbb51fe0e1c10d065782d50143f0e101087679e8029bff4ffc03d080ee1b873->enter($__internal_1fbb51fe0e1c10d065782d50143f0e101087679e8029bff4ffc03d080ee1b873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1fbb51fe0e1c10d065782d50143f0e101087679e8029bff4ffc03d080ee1b873->leave($__internal_1fbb51fe0e1c10d065782d50143f0e101087679e8029bff4ffc03d080ee1b873_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e7017bd42fd2d08aad463c7cd22067b64bc7aa478777d6f8072fab9137cc0d = $this->env->getExtension("native_profiler");
        $__internal_d2e7017bd42fd2d08aad463c7cd22067b64bc7aa478777d6f8072fab9137cc0d->enter($__internal_d2e7017bd42fd2d08aad463c7cd22067b64bc7aa478777d6f8072fab9137cc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2e7017bd42fd2d08aad463c7cd22067b64bc7aa478777d6f8072fab9137cc0d->leave($__internal_d2e7017bd42fd2d08aad463c7cd22067b64bc7aa478777d6f8072fab9137cc0d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2d8e4fb8a4d4905950c89dd06873298f9c0d9ed7187525e6d92505ae7558c1b = $this->env->getExtension("native_profiler");
        $__internal_a2d8e4fb8a4d4905950c89dd06873298f9c0d9ed7187525e6d92505ae7558c1b->enter($__internal_a2d8e4fb8a4d4905950c89dd06873298f9c0d9ed7187525e6d92505ae7558c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2d8e4fb8a4d4905950c89dd06873298f9c0d9ed7187525e6d92505ae7558c1b->leave($__internal_a2d8e4fb8a4d4905950c89dd06873298f9c0d9ed7187525e6d92505ae7558c1b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb486240d4b74242a81fe6221630622e32a955a0fc8dce36f86f8e34012ca92e = $this->env->getExtension("native_profiler");
        $__internal_cb486240d4b74242a81fe6221630622e32a955a0fc8dce36f86f8e34012ca92e->enter($__internal_cb486240d4b74242a81fe6221630622e32a955a0fc8dce36f86f8e34012ca92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb486240d4b74242a81fe6221630622e32a955a0fc8dce36f86f8e34012ca92e->leave($__internal_cb486240d4b74242a81fe6221630622e32a955a0fc8dce36f86f8e34012ca92e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09e737e32d5119e7c238a509e9cc227ea58cc5ea9b8cf6ac23740fce17b14da7 = $this->env->getExtension("native_profiler");
        $__internal_09e737e32d5119e7c238a509e9cc227ea58cc5ea9b8cf6ac23740fce17b14da7->enter($__internal_09e737e32d5119e7c238a509e9cc227ea58cc5ea9b8cf6ac23740fce17b14da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09e737e32d5119e7c238a509e9cc227ea58cc5ea9b8cf6ac23740fce17b14da7->leave($__internal_09e737e32d5119e7c238a509e9cc227ea58cc5ea9b8cf6ac23740fce17b14da7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
