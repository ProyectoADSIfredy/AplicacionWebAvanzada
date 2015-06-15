<?php

session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//crearemos conexion 
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

//consulta
$resultado = mysql_query("SELECT * FROM usuario WHERE Usuario='".$usuario."';");


	while ($fila = mysql_fetch_array($resultado)) {
	
	if (($usuario = $fila['Usuario']) & ($contrasena=$fila['Contrasena'])) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['login'] = "yes";

		echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=../index.php'/>
			</head>
			</html>
		";

	}else{
		
		$_SESSION['login'] = "no";
		
		echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=../index.php'/>
			</head>
			</html>
		";
	}
}


?>
