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
        $__internal_12b128241c0fb8592fc65175e0720c9c9f1b33f5e9377c944707c1b9a6b08107 = $this->env->getExtension("native_profiler");
        $__internal_12b128241c0fb8592fc65175e0720c9c9f1b33f5e9377c944707c1b9a6b08107->enter($__internal_12b128241c0fb8592fc65175e0720c9c9f1b33f5e9377c944707c1b9a6b08107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginLoginBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\">

<title> Sistema de planificación SIPIE </title>
<style>
body {
\tbackground-size: cover;
\tfont-family: Montserrat;
\tbackground-color:#3399CC
}

.logo {
\twidth: 213px;
\theight: auto;
\tmargin: 30px auto;
}

.login-block {
\twidth: 400px;
\tpadding: 20px;
\tbackground: #fff;
\tborder-radius: 5px;
\tborder-top: 5px solid #ff656c;
\tmargin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
   
    background-size: 16px 80px;
}

.login-block input#username:focus {
\tbackground-size: 16px 80px;
}

.login-block input#password {
   
    background-size: 16px 80px;
}

.login-block input#password:focus {
   
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

.logo h1 strong {
\tfont-family: Courier New, Courier, monospace;
}
.logo h1 strong {
\tfont-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
.logo h1 strong {
\tcolor: #E8F5FD;
}

.mensajeError div strong {
\tcolor: #F4F4F4;
}



</style>
</head>

<body>
<form class=\"form-inline\" method=\"POST\" >
       <div class=\"logo\">
         <h1><strong>SIPIE LOGIN</strong></h1>
</div>
<div class=\"login-block\">Usuario
  <input type=\"text\" name=\"username\" placeholder=\"Username\" />
  Contraseña
  <input type=\"password\" value=\"\" placeholder=\"Password\" name=\"password\" />
    <button>eNTRAR</button>
</div>
  </form>
        
        
        
        
</body>
    ";
        // line 130
        if (array_key_exists("name", $context)) {
            echo "    
    <div class=\"alert-info fade in\">
        <div align=\"center\"><strong>";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong></strong></div>
    </div>
        
        
        
        
  </div> 
    ";
        } else {
            // line 139
            echo "    
    <div
    
  </div> 
    ";
        }
        // line 143
        echo "   
    
     
     
    
    
    
    
</html>

";
        
        $__internal_12b128241c0fb8592fc65175e0720c9c9f1b33f5e9377c944707c1b9a6b08107->leave($__internal_12b128241c0fb8592fc65175e0720c9c9f1b33f5e9377c944707c1b9a6b08107_prof);

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
        return array (  176 => 143,  169 => 139,  158 => 132,  153 => 130,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta charset="UTF-8">*/
/* */
/* <title> Sistema de planificación SIPIE </title>*/
/* <style>*/
/* body {*/
/* 	background-size: cover;*/
/* 	font-family: Montserrat;*/
/* 	background-color:#3399CC*/
/* }*/
/* */
/* .logo {*/
/* 	width: 213px;*/
/* 	height: auto;*/
/* 	margin: 30px auto;*/
/* }*/
/* */
/* .login-block {*/
/* 	width: 400px;*/
/* 	padding: 20px;*/
/* 	background: #fff;*/
/* 	border-radius: 5px;*/
/* 	border-top: 5px solid #ff656c;*/
/* 	margin: 0 auto;*/
/* }*/
/* */
/* .login-block h1 {*/
/*     text-align: center;*/
/*     color: #000;*/
/*     font-size: 18px;*/
/*     text-transform: uppercase;*/
/*     margin-top: 0;*/
/*     margin-bottom: 20px;*/
/* }*/
/* */
/* .login-block input {*/
/*     width: 100%;*/
/*     height: 42px;*/
/*     box-sizing: border-box;*/
/*     border-radius: 5px;*/
/*     border: 1px solid #ccc;*/
/*     margin-bottom: 20px;*/
/*     font-size: 14px;*/
/*     font-family: Montserrat;*/
/*     padding: 0 20px 0 50px;*/
/*     outline: none;*/
/* }*/
/* */
/* .login-block input#username {*/
/*    */
/*     background-size: 16px 80px;*/
/* }*/
/* */
/* .login-block input#username:focus {*/
/* 	background-size: 16px 80px;*/
/* }*/
/* */
/* .login-block input#password {*/
/*    */
/*     background-size: 16px 80px;*/
/* }*/
/* */
/* .login-block input#password:focus {*/
/*    */
/*     background-size: 16px 80px;*/
/* }*/
/* */
/* .login-block input:active, .login-block input:focus {*/
/*     border: 1px solid #ff656c;*/
/* }*/
/* */
/* .login-block button {*/
/*     width: 100%;*/
/*     height: 40px;*/
/*     background: #ff656c;*/
/*     box-sizing: border-box;*/
/*     border-radius: 5px;*/
/*     border: 1px solid #e15960;*/
/*     color: #fff;*/
/*     font-weight: bold;*/
/*     text-transform: uppercase;*/
/*     font-size: 14px;*/
/*     font-family: Montserrat;*/
/*     outline: none;*/
/*     cursor: pointer;*/
/* }*/
/* */
/* .login-block button:hover {*/
/*     background: #ff7b81;*/
/* }*/
/* */
/* .logo h1 strong {*/
/* 	font-family: Courier New, Courier, monospace;*/
/* }*/
/* .logo h1 strong {*/
/* 	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;*/
/* }*/
/* .logo h1 strong {*/
/* 	color: #E8F5FD;*/
/* }*/
/* */
/* .mensajeError div strong {*/
/* 	color: #F4F4F4;*/
/* }*/
/* */
/* */
/* */
/* </style>*/
/* </head>*/
/* */
/* <body>*/
/* <form class="form-inline" method="POST" >*/
/*        <div class="logo">*/
/*          <h1><strong>SIPIE LOGIN</strong></h1>*/
/* </div>*/
/* <div class="login-block">Usuario*/
/*   <input type="text" name="username" placeholder="Username" />*/
/*   Contraseña*/
/*   <input type="password" value="" placeholder="Password" name="password" />*/
/*     <button>eNTRAR</button>*/
/* </div>*/
/*   </form>*/
/*         */
/*         */
/*         */
/*         */
/* </body>*/
/*     {%if name is defined%}    */
/*     <div class="alert-info fade in">*/
/*         <div align="center"><strong>{{name}}</strong></strong></div>*/
/*     </div>*/
/*         */
/*         */
/*         */
/*         */
/*   </div> */
/*     {%else%}    */
/*     <div*/
/*     */
/*   </div> */
/*     {%endif%}   */
/*     */
/*      */
/*      */
/*     */
/*     */
/*     */
/*     */
/* </html>*/
/* */
/* */
