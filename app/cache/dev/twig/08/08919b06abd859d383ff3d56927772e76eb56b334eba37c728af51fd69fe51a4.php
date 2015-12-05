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
        $__internal_c6b04db420af49811a4ed0d0de3fb7d84e63e8f724288d4cdc031bbac4211fa2 = $this->env->getExtension("native_profiler");
        $__internal_c6b04db420af49811a4ed0d0de3fb7d84e63e8f724288d4cdc031bbac4211fa2->enter($__internal_c6b04db420af49811a4ed0d0de3fb7d84e63e8f724288d4cdc031bbac4211fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginLoginBundle:Default:addp.html.twig"));

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
    </div>
</head>


<body>
    <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 27
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
                <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
            </div>
        </div>
    </form>

    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_c6b04db420af49811a4ed0d0de3fb7d84e63e8f724288d4cdc031bbac4211fa2->leave($__internal_c6b04db420af49811a4ed0d0de3fb7d84e63e8f724288d4cdc031bbac4211fa2_prof);

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
        return array (  150 => 106,  146 => 105,  65 => 27,  56 => 21,  52 => 20,  48 => 19,  37 => 11,  33 => 10,  22 => 1,);
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
/*                 <button type="submit" class="btn btn-default">Sign in</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* */
/*     <script src="{{asset('bundles/loginlogin/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/loginlogin/js/bootstrap.js')}}"></script>*/
/* </body>*/
/* </html>*/
