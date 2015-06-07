<?php
//CREACION DE LA BASE DE DATOS 
// $conexion = mysql_connect("localhost","fredy","fredy");
// $bd = mysql_query("CREATE DATABASE blogsonline");
// if (!$bd) {
// 	die(mysql_error());
// }else{
// 	echo "se creo";
// }

//CREAR TABLA USUARIO
// create table Usuario(
//  IdUsuario int PRIMARY KEY AUTO_INCREMENT NOT NULL,
//  Usuario varchar(30),
//  Contraseña varchar(30), 
//  Nombre varchar(50), 
//  ApellidoU varchar(50), 
//  ApellidoD varchar(50), 
//  Titulo varchar(50), 
//  Descripcion varchar(200), 
//  Foto varchar(40), 
//  WebPersonal varchar(100), 
//  Email varchar(50), 
//  Permiso int )

//INSERT TABLA USUARIO
// $conexion = mysql_connect("localhost","fredy","fredy");
// mysql_select_db("blogsonline",$conexion);
// mysql_query("INSERT INTO usuario (Usuario, Contraseña, Nombre, ApellidoU, ApellidoD, Titulo, Descripcion, Foto, WebPersonal, Email, Permiso) VALUES ('Fredy','fredy12345','Fredy','Ramirez','Malaver','Bar Web','Con esta pagina podras saber los eventos a realizar en el bar','fredyR','www.barweb.com','faramirez46@hotmail.com',1)");
// mysql_close($conexion);

//CREAR TABLA CONFIGURACION USUARIOS
// CREATE TABLE configusuarios(
// 	Idconfigusuarios int PRIMARY KEY AUTO_INCREMENT NOT NULL,
// 	Usuario varchar(30), 
// 	Piel varchar(30), 
//  Respuesta varchar(30) )

//INSERT TABLA CONFIGURACION USUARIOS
// $conexion = mysql_connect("localhost","fredy","fredy");
// mysql_select_db("blogsonline",$conexion);
// mysql_query("INSERT INTO configusuarios (Usuario, Piel, Respuesta) VALUES ('Fredy','default','si')");
// mysql_close($conexion);

//CREAR TABLA POSTS
// CREATE TABLE post( 
// 	IdPost int PRIMARY KEY AUTO_INCREMENT NOT NULL, 
// 	Utc int, 
// 	Anio int, 
// 	Mes int, 
// 	Dia int, 
// 	Hora int, 
// 	Minuto int, 
// 	Segundo int, 
// 	Titulo varchar(120), 
// 	Subtitulado varchar(200), 
// 	Icono varchar(100), 
// 	Texto varchar(4000), 
// 	Imagen varchar(200), 
// 	Video varchar(200), 
// 	Sonido varchar(200) )

//INSERT TABLA POSTS
// $conexion = mysql_connect("localhost","fredy","fredy");
// mysql_select_db("blogsonline",$conexion);
// mysql_query("INSERT INTO post (Utc, Anio, Mes, Dia, Hora, Minuto, Segundo, Titulo, Subtitulado, Icono, Texto, Imagen, Video, Sonido) VALUES ('0000000000','2015','06','06','10','17','10','Mi primer posts','Bienvenido a tu post','fredy ramirez','primer post','Imagen','Video','Sonido')");
// mysql_close($conexion);

//CREAR TABLA LOGS
// CREATE TABLE log( 
// 	IdLog int PRIMARY KEY AUTO_INCREMENT NOT NULL, 
// 	Utc int, 
// 	Anio int, 
// 	Mes int, 
// 	Dia int, 
// 	Hora int, 
// 	Minuto int, 
// 	Segundo int, 
// 	Ip varchar(80), 
// 	Navegador varchar(300), 
// 	Usuario varchar(80), 
// 	Operacion varchar(80) )
// INSERT TABLA USUARIO
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);
mysql_query("INSERT INTO log (Utc, Anio, Mes, Dia, Hora, Minuto, Segundo, Ip, Navegador, Usuario, Operacion ) VALUES ('0000000000','2015','06','06','10','17','10','127.0.0.1','Opera','Fredy','Crear')");
mysql_close($conexion);


?>