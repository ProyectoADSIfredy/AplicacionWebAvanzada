<?php 

session_start();

$usuario = $_SESSION['usuario'];

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$icono = $_POST['icono'];
$texto = $_POST['texto'];

$utc = date('U');
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

// mysql_query("INSERT INTO post (uSU) VALUES();
$con = mysql_query("INSERT INTO post (Usuario, Utc, Anio, Mes, Dia, Hora, Minuto, Segundo, Titulo, Subtitulado, Icono, Texto) VALUES ('$usuario','$utc','$anio','$mes','$dia','$hora','$minuto','$segundo','$titulo','$subtitulo','$icono','$texto')");

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=formulariologs.php'/>
</head>
</html>
";

mysql_close($conexion);

?>