<?php

$codigoutc = $_GET['Utc'];



$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

$consul = mysql_query("DELETE FROM post WHERE Utc='".$codigoutc."'");


mysql_close($conexion);

echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=../index.php'/>
			</head>
			</html>
		";

?>
