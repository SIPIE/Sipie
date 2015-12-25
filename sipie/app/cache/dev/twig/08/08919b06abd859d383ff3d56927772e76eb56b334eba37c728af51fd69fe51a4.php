<?php

/* LoginLoginBundle:Default:addp.html.twig */
class __TwigTemplate_f45f666feb4af7f88729358af73ab72db29a95f9e8a5712c002e6eb4991c1959 extends Twig_Template
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
        $__internal_c4393d0d4d31a13075e090c45fb9d599553514058843e5a15d507f6d14edbf81 = $this->env->getExtension("native_profiler");
        $__internal_c4393d0d4d31a13075e090c45fb9d599553514058843e5a15d507f6d14edbf81->enter($__internal_c4393d0d4d31a13075e090c45fb9d599553514058843e5a15d507f6d14edbf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginLoginBundle:Default:addp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
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
        // line 19
        echo $this->env->getExtension('routing')->getPath("login_login_addp");
        echo "\">Agregar Participante</a></button>
        <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\">Lista de Usuarios</a></button>
        <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">Salir</a></button>
        <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login_login_update");
        echo "\">Update</a></button>
    </div>
</head>


<body>
    <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login_login_addp");
        echo "\">
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Rut</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: 123456789-0\" name=\"rut\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Nombres</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: juan perez\" name=\"nombres\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Apellidos</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: Apellidos\" name=\"apellidos\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Telefono</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: +56 9 4214 1500\" name=\"telefono\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">E-Mail</label>
            <div class=\"col-sm-10\">
                <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: email\" name=\"email\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Direccion</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: calle 12 # 1234\" name=\"direccion\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Sexo</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: masculino\" name=\"sexo\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Tipo</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: estudiante\" name=\"tipo\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Fecha de nacimiento</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: 4 de agosto de 1989\" name=\"fechanacimiento\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Lateralidad</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"ejemplo: religion/ateo/blah??\" name=\"lateralidad\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default\">Agregar</button>
            </div>
        </div>
    </form>
    ";
        // line 105
        if (array_key_exists("name", $context)) {
            echo "    
    <div class=\"alert-info fade in\">
        <strong>";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 109
        if (array_key_exists("warning", $context)) {
            echo "    
    <div class=\"alert-info fade in\" background-color=\"#d9534f\">
        <strong>";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : $this->getContext($context, "warning")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 114
        echo "
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_c4393d0d4d31a13075e090c45fb9d599553514058843e5a15d507f6d14edbf81->leave($__internal_c4393d0d4d31a13075e090c45fb9d599553514058843e5a15d507f6d14edbf81_prof);

    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:addp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 116,  174 => 115,  171 => 114,  165 => 111,  160 => 109,  154 => 107,  149 => 105,  69 => 28,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
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
/* */
/* */
/* <body>*/
/*     <form class="form-horizontal" method="POST" action="{{path('login_login_addp')}}">*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Rut</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: 123456789-0" name="rut">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: juan perez" name="nombres">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: Apellidos" name="apellidos">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: +56 9 4214 1500" name="telefono">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="email" class="form-control" id="inputEmail3" placeholder="ejemplo: email" name="email">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: calle 12 # 1234" name="direccion">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: masculino" name="sexo">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: estudiante" name="tipo">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Fecha de nacimiento</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: 4 de agosto de 1989" name="fechanacimiento">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Lateralidad</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo: religion/ateo/blah??" name="lateralidad">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-default">Agregar</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/*     {%if name is defined%}    */
/*     <div class="alert-info fade in">*/
/*         <strong>{{name}}</strong>*/
/*     </div>*/
/*     {%endif%}{%if warning is defined%}    */
/*     <div class="alert-info fade in" background-color="#d9534f">*/
/*         <strong>{{warning}}</strong>*/
/*     </div>*/
/*     {%endif%}*/
/* */
/*     <script src="{{asset('bundles/loginlogin/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/loginlogin/js/bootstrap.js')}}"></script>*/
/* </body>*/
/* </html>*/
