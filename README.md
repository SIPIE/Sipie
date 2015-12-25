# Sipie
Proyecto de desarrollo para la escuela San Andrés de Tegualda. SIPIE: Sistema de planificación de integración escolar.
#######################################################
#Intrucciones para probar el proyecto en desarrollo: ##
#(para windows/linux/os x desktop)					 ##
#######################################################

##
#ambiente 
##
1)descargar xampp del siguiente link https://www.apachefriends.org/es/index.html.
2)instalar almenos las funciones de apache/mysql/php.
3)abrir xampp manager como administrador y iniciar apache, mysql.

##
#copnfiguración de mysql
##
4)abrir xampp como modo administrador y asegurarce que mysql este corriendo en el puerto 3306

##
#creacion de la base de datos sipie
##
5)ir a http://localhost/phpmyadmin/
6)crear nueva base de datos con nombre sipie.
7)seleccionar la bd sipie y ir a la pestaña para SQL para ejecutar las siguientes sentencias:
CREATE TABLE users(name varchar(20) PRIMARY KEY, pass varchar(20));
INSERT INTO users(name,pass) VALUES ("felipe","asd1");
INSERT INTO users(name,pass) VALUES ("felipe2","asd2");
INSERT INTO users(name,pass) VALUES ("alvaro","asd3");

##
#obtner y configurar el proyecto
##
8)ir a la siguiente direccion de GitHub https://github.com/SIPIE/Sipie/
9)clonar el repositorio sipie en un lugar conveniente.
10)copiar la carpeta sipie ubida dentro del repositorio junto las carpetas de documentación.
11)pegar la carpeta sipie en la carpeta (ruta de instalacion)\xampp\htdocs.

##
#ver el proyecto en accion
##
12) abrir navegador y ir a la siguiente direccion: http://localhost/sipie/web/app_dev.php/login