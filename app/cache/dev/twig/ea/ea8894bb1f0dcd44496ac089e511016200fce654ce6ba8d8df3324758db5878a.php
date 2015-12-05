<?php

/* LoginLoginBundle:Default:index.html.twig */
class __TwigTemplate_3cc7dbd6b31c96134200c803270cde6ea7c2122d1a72f7237fd630ef108465c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60921614836a98e3d8b9b527e80245344e6681d92f4e18c3d7a533ed0bb6b097 = $this->env->getExtension("native_profiler");
        $__internal_60921614836a98e3d8b9b527e80245344e6681d92f4e18c3d7a533ed0bb6b097->enter($__internal_60921614836a98e3d8b9b527e80245344e6681d92f4e18c3d7a533ed0bb6b097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginLoginBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Sign in &middot; Project</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    
    

    <form class=\"form-inline\" method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\">
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"exampleInputName2\">Email address</label>
            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Usuario\" name=\"username\">
        </div>
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"exampleInputPassword3\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword3\" placeholder=\"Password\" name=\"password\">
        </div>
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\"> Remember me
            </label>
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
    </form>
        
    ";
        // line 33
        if (array_key_exists("name", $context)) {
            echo "    
    <div class=\"alert-info fade in\">
        <strong>";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 38
        echo "    <body>
        



        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_60921614836a98e3d8b9b527e80245344e6681d92f4e18c3d7a533ed0bb6b097->leave($__internal_60921614836a98e3d8b9b527e80245344e6681d92f4e18c3d7a533ed0bb6b097_prof);

    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  83 => 43,  76 => 38,  70 => 35,  65 => 33,  45 => 16,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>Sign in &middot; Project</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <link href="{{asset('bundles/loginlogin/css/bootstrap.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/loginlogin/css/bootstrap-responsive.css')}}" rel="stylesheet">*/
/*     </head>*/
/*     */
/*     */
/* */
/*     <form class="form-inline" method="POST" action="{{path('login_login_login')}}">*/
/*         <div class="form-group">*/
/*             <label class="sr-only" for="exampleInputName2">Email address</label>*/
/*             <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Usuario" name="username">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="sr-only" for="exampleInputPassword3">Password</label>*/
/*             <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="password">*/
/*         </div>*/
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox"> Remember me*/
/*             </label>*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Sign in</button>*/
/*     </form>*/
/*         */
/*     {%if name is defined%}    */
/*     <div class="alert-info fade in">*/
/*         <strong>{{name}}</strong>*/
/*     </div>*/
/*     {%endif%}*/
/*     <body>*/
/*         */
/* */
/* */
/* */
/*         <script src="{{asset('bundles/loginlogin/js/jquery.js')}}"></script>*/
/*         <script src="{{asset('bundles/loginlogin/js/bootstrap.js')}}"></script>*/
/*     </body>*/
/* </html>*/
/* */
