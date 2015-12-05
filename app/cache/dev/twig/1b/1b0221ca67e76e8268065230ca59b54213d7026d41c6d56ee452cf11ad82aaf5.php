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
        $__internal_f0e581b5af0f9b20dcd421e5920f972affa92a5ae312a2e06555881f0dbce9f7 = $this->env->getExtension("native_profiler");
        $__internal_f0e581b5af0f9b20dcd421e5920f972affa92a5ae312a2e06555881f0dbce9f7->enter($__internal_f0e581b5af0f9b20dcd421e5920f972affa92a5ae312a2e06555881f0dbce9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f0e581b5af0f9b20dcd421e5920f972affa92a5ae312a2e06555881f0dbce9f7->leave($__internal_f0e581b5af0f9b20dcd421e5920f972affa92a5ae312a2e06555881f0dbce9f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_541ded29b226bef42831a3097d771dd0cfe8ca41da837f44c7f56824114ada0c = $this->env->getExtension("native_profiler");
        $__internal_541ded29b226bef42831a3097d771dd0cfe8ca41da837f44c7f56824114ada0c->enter($__internal_541ded29b226bef42831a3097d771dd0cfe8ca41da837f44c7f56824114ada0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_541ded29b226bef42831a3097d771dd0cfe8ca41da837f44c7f56824114ada0c->leave($__internal_541ded29b226bef42831a3097d771dd0cfe8ca41da837f44c7f56824114ada0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_114a5d47829753c136731eeda0afa35ad9aef309ab43783685db25875abe162d = $this->env->getExtension("native_profiler");
        $__internal_114a5d47829753c136731eeda0afa35ad9aef309ab43783685db25875abe162d->enter($__internal_114a5d47829753c136731eeda0afa35ad9aef309ab43783685db25875abe162d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_114a5d47829753c136731eeda0afa35ad9aef309ab43783685db25875abe162d->leave($__internal_114a5d47829753c136731eeda0afa35ad9aef309ab43783685db25875abe162d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fd7ef4fc9cab46ae1d980f97fdb5fb28953fe9024bb53f05096fc0a9e0aeae5 = $this->env->getExtension("native_profiler");
        $__internal_8fd7ef4fc9cab46ae1d980f97fdb5fb28953fe9024bb53f05096fc0a9e0aeae5->enter($__internal_8fd7ef4fc9cab46ae1d980f97fdb5fb28953fe9024bb53f05096fc0a9e0aeae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fd7ef4fc9cab46ae1d980f97fdb5fb28953fe9024bb53f05096fc0a9e0aeae5->leave($__internal_8fd7ef4fc9cab46ae1d980f97fdb5fb28953fe9024bb53f05096fc0a9e0aeae5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0a58d54952444d1b0895ed34068c78e5def78f9da7cf75ef397a650bb3ac66c = $this->env->getExtension("native_profiler");
        $__internal_d0a58d54952444d1b0895ed34068c78e5def78f9da7cf75ef397a650bb3ac66c->enter($__internal_d0a58d54952444d1b0895ed34068c78e5def78f9da7cf75ef397a650bb3ac66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0a58d54952444d1b0895ed34068c78e5def78f9da7cf75ef397a650bb3ac66c->leave($__internal_d0a58d54952444d1b0895ed34068c78e5def78f9da7cf75ef397a650bb3ac66c_prof);

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
