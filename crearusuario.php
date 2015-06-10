<?php

session_start();

$contador=0;

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellidou = $_POST['apellidou'];
$apellidod = $_POST['apellidod'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['foto'];
$webpersonal = $_POST['webpersonal'];
$email = $_POST['email'];
$permiso =3;

//comprobar si el usuario existe conectado a la base de datos
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

//AQUI QUEDE
$resultado = mysql_query("SELECT * FROM usuario ");

while ($fila = mysql_fetch_array($resultado)) {
	if ($fila['Usuario'] == $usuario) {
		$contador++;
	}
}	
 mysql_close($conexion);

if ($contador == 0) {
	
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

// privilegios de usuario:
// 1. administrador
// 2. controlador
// 3. usuario registrado
// 4. usuario invitado

mysql_query("INSERT INTO usuario (Usuario, Contrasena, Nombre, ApellidoU, ApellidoD, Titulo, Descripcion, Foto, WebPersonal, Email, Permiso) VALUES ('".$usuario."','".$contrasena."','".$nombre."','".$apellidou."','".$apellidod."','".$titulo."','".$descripcion."','".$foto."','".$webpersonal."','".$email."','".$permiso."');");

mysql_close($conexion);

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=index.html'/>
</head>
</html>
";
}else{
	echo "El nombre de usuario ya existe";
}
?>