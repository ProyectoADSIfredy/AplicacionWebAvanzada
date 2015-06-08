<?php

//obtener variables 
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//crearemos conexion 
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

//consulta
$resultado = mysql_query("SELECT * FROM usuario;");

while ($fila = mysql_fetch_array($resultado)) {
	$usuariobasedatos = $fila['Usuario'];
	$contrasenabasedatos = $fila['Contrasena'];	
	$permisosenbase = $fila['Permiso'];	

	if ($usuario == $usuariobasedatos & $contrasena == $contrasenabasedatos) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['contrasena'] = $contrasena ;
		$_SESSION['Permisos'] = $permisosenbase;

		echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=inicio.php'/>
			</head>
			</html>
		";
	}else{
		echo "no encontrado en la base de datos";

		echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=index.html'/>
			</head>
			</html>
		";

	}
}
?>
