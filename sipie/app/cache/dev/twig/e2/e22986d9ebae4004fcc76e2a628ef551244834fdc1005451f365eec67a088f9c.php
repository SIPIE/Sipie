<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_fe694e03245389f318b7c5c1d0e714a8d83cbaf9b79407f03a1f843fd261e39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5c90d7a91428cdd4a9e0322ae38db568aea1a824cee5f056d3ee9be37696e4f = $this->env->getExtension("native_profiler");
        $__internal_f5c90d7a91428cdd4a9e0322ae38db568aea1a824cee5f056d3ee9be37696e4f->enter($__internal_f5c90d7a91428cdd4a9e0322ae38db568aea1a824cee5f056d3ee9be37696e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c90d7a91428cdd4a9e0322ae38db568aea1a824cee5f056d3ee9be37696e4f->leave($__internal_f5c90d7a91428cdd4a9e0322ae38db568aea1a824cee5f056d3ee9be37696e4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e73fa9561f39eb3d02e1e1e17f351ade32539e57e3d45cb9e98841bc725190a9 = $this->env->getExtension("native_profiler");
        $__internal_e73fa9561f39eb3d02e1e1e17f351ade32539e57e3d45cb9e98841bc725190a9->enter($__internal_e73fa9561f39eb3d02e1e1e17f351ade32539e57e3d45cb9e98841bc725190a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e73fa9561f39eb3d02e1e1e17f351ade32539e57e3d45cb9e98841bc725190a9->leave($__internal_e73fa9561f39eb3d02e1e1e17f351ade32539e57e3d45cb9e98841bc725190a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0740eebf32dd834c1df29dc4e07d089864de2a58b7334f172e8859541ba06014 = $this->env->getExtension("native_profiler");
        $__internal_0740eebf32dd834c1df29dc4e07d089864de2a58b7334f172e8859541ba06014->enter($__internal_0740eebf32dd834c1df29dc4e07d089864de2a58b7334f172e8859541ba06014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0740eebf32dd834c1df29dc4e07d089864de2a58b7334f172e8859541ba06014->leave($__internal_0740eebf32dd834c1df29dc4e07d089864de2a58b7334f172e8859541ba06014_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_56c57641e72b529b9f6ce7a888e79301cf8d0dd9b3e8d9a97607da418d02a234 = $this->env->getExtension("native_profiler");
        $__internal_56c57641e72b529b9f6ce7a888e79301cf8d0dd9b3e8d9a97607da418d02a234->enter($__internal_56c57641e72b529b9f6ce7a888e79301cf8d0dd9b3e8d9a97607da418d02a234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_56c57641e72b529b9f6ce7a888e79301cf8d0dd9b3e8d9a97607da418d02a234->leave($__internal_56c57641e72b529b9f6ce7a888e79301cf8d0dd9b3e8d9a97607da418d02a234_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d84b268f3c99773c6ddbbc032442a332dcbb55535311e068d575f12e5f953a8 = $this->env->getExtension("native_profiler");
        $__internal_7d84b268f3c99773c6ddbbc032442a332dcbb55535311e068d575f12e5f953a8->enter($__internal_7d84b268f3c99773c6ddbbc032442a332dcbb55535311e068d575f12e5f953a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7d84b268f3c99773c6ddbbc032442a332dcbb55535311e068d575f12e5f953a8->leave($__internal_7d84b268f3c99773c6ddbbc032442a332dcbb55535311e068d575f12e5f953a8_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
