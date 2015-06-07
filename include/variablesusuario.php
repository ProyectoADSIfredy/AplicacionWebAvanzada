<?php 

$_SESSION['usuariotemporal'] = "fredy";

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

// mysql_query("SELECT * FROM usuario WHERE usuario='".$_SESSION['usuariotemporal']."';")";
$resul = mysql_query("SELECT * FROM usuario WHERE usuario='".$_SESSION['usuariotemporal']."';");

while ($fila = mysql_fetch_array($resul)) {
	$_SESSION['usuario'] = $fila['Usuario'];
	$_SESSION['nombre'] = $fila['Nombre'];
	$_SESSION['apellidou'] = $fila['ApellidoU'];
	$_SESSION['apellidod'] = $fila['ApellidoD'];
	$_SESSION['titulo'] = $fila['Titulo'];
	$_SESSION['descripcion'] = $fila['Descripcion'];
	$_SESSION['foto'] = $fila['Foto'];
	$_SESSION['webpersonal'] = $fila['WebPersonal'];
	$_SESSION['email'] = $fila['Email'];
	$_SESSION['permiso'] = $fila['Permiso'];
}
mysql_close($conexion);
?>