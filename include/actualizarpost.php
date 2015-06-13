<?php 

$utc = $_POST['utc'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

mysql_query("UPDATE post SET Titulo='".$titulo."', Subtitulado='".$subtitulo."', Texto='".$texto."' WHERE Utc='".$utc."'");

mysql_close($conexion);

echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=../index.php'/>
			</head>
			</html>
		";

?>