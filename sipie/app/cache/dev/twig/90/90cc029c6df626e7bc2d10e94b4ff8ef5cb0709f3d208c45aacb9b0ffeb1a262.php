<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_a52e4df2231079e647d9b600ebfa1bfddbd12a5d405985581ad282a87d54bcb7 extends Twig_Template
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
        $__internal_445de027da97d7a754d91e9dcd9a16f59c2964e0dcf1f7c438ca5251cc8ec349 = $this->env->getExtension("native_profiler");
        $__internal_445de027da97d7a754d91e9dcd9a16f59c2964e0dcf1f7c438ca5251cc8ec349->enter($__internal_445de027da97d7a754d91e9dcd9a16f59c2964e0dcf1f7c438ca5251cc8ec349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginLoginBundle:Default:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LoginLoginBundle:Default:login"));
        echo "
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
        <button type=\"button\" class=\"btn btn-default\" ><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login_login_addp");
        echo "\">Agregar Participante</a></button>
        <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\">Lista de Usuarios</a></button>
        <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">Salir</a></button>
        <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login_login_update");
        echo "\">Update</a></button>
    </div>
</head>
<body>
    ";
        // line 27
        if (array_key_exists("users", $context)) {
            echo "  
        <table class=\"table table-striped\">
            <tr>
                <td>Rut</td>
                <td>Password</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Telefono</td>
                <td>Email</td>
                <td>Direccion</td>
            </tr>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 39
                echo "                <tr>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "rut", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pass", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nombres", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "apellidos", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telefono", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "direccion", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        }
        // line 50
        echo "
    </table>

    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_445de027da97d7a754d91e9dcd9a16f59c2964e0dcf1f7c438ca5251cc8ec349->leave($__internal_445de027da97d7a754d91e9dcd9a16f59c2964e0dcf1f7c438ca5251cc8ec349_prof);

    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  133 => 53,  128 => 50,  125 => 49,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  89 => 39,  85 => 38,  71 => 27,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  41 => 12,  37 => 11,  25 => 2,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--{{ render(controller('LoginLoginBundle:Default:login')) }}*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <title>Bootstrap 101 Template</title>*/
/*         <!-- Bootstrap -->*/
/*         <link href="{{asset('bundles/loginlogin/css/bootstrap.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/loginlogin/css/bootstrap-responsive.css')}}" rel="stylesheet">*/
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     <div class="btn-group" role="group" aria-label="...">*/
/*         <button type="button" class="btn btn-default" ><a href="{{path('login_login_addp')}}">Agregar Participante</a></button>*/
/*         <button type="button" class="btn btn-default"><a href="{{path('login_login_login')}}">Lista de Usuarios</a></button>*/
/*         <button type="button" class="btn btn-default"><a href="{{path('login_login_homepage')}}">Salir</a></button>*/
/*         <button type="button" class="btn btn-default"><a href="{{path('login_login_update')}}">Update</a></button>*/
/*     </div>*/
/* </head>*/
/* <body>*/
/*     {%if users is defined%}  */
/*         <table class="table table-striped">*/
/*             <tr>*/
/*                 <td>Rut</td>*/
/*                 <td>Password</td>*/
/*                 <td>Nombres</td>*/
/*                 <td>Apellidos</td>*/
/*                 <td>Telefono</td>*/
/*                 <td>Email</td>*/
/*                 <td>Direccion</td>*/
/*             </tr>*/
/*             {% for user in users %}*/
/*                 <tr>*/
/*                     <td>{{user.rut}}</td>*/
/*                     <td>{{user.pass}}</td>*/
/*                     <td>{{user.nombres}}</td>*/
/*                     <td>{{user.apellidos}}</td>*/
/*                     <td>{{user.telefono}}</td>*/
/*                     <td>{{user.email}}</td>*/
/*                     <td>{{user.direccion}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {%endif%}*/
/* */
/*     </table>*/
/* */
/*     <script src="{{asset('bundles/loginlogin/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/loginlogin/js/bootstrap.js')}}"></script>*/
/* </body>*/
/* </html>*/
