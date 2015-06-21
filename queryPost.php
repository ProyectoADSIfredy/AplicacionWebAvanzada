<?php

session_start();
require_once ("instalacion.php");

	if (!empty($_REQUEST['action'])) {
		$action=$_REQUEST['action'];
		if ($action=='crear') {
			CrearPost();
		}else if ($action=='ver') {
			VerPost();
		}else if ($action=='update') {
			UpdatePost();
		}else if ($action=='delete') {
			UpdatePost();
		}
	}

	function CrearPost(){

		$usuario = $_SESSION['usuario'];

		$params = array(

			':usuario' =>$usuario,
			':utc' => date('U'),
			'anio' => date('Y'),
			'mes' => date('m'),
			'dia' => date('d'),
			'hora' => date('H'),
			'minuto' => date('i'),
			'segundo' => date('s'),
			'titulo' => $_POST['titulo'],
			'subtitulo' => $_POST['subtitulo'],
			'icono' => $_POST['icono'],
			'texto' => $_POST['texto'],
			);
		$query = "INSERT INTO Post
		(Usuario,Utc,Anio,Mes,Dia,Hora,Minuto,Segundo,Titulo,Subtitulado,Icono,Texto)
		VALUES(:usuario,:utc,:anio,:mes,:dia,:hora,:minuto,:segundo,:titulo,:subtitulo,:icono,:texto)";

		$resul = execQuey("bdpost",$query,$params);
		if ($resul > 0) {
			header('location: index.php?resul=true');
		}else{
			header('location: formulariologs.php?resul=false');
		}
	}

	function VerPost(){
		// $query = "SELECT * FROM Post";
		$query="SELECT * FROM Post WHERE usuario='".$_SESSION['usuario']."'";
		$resul = newQuery("bdpost",$query);
		if ($resul != false || $resul >0) {
			foreach ($resul as $value) {
				echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-red'>
				<div class='panel-heading'>
				<div class='row'>
				<div class='col-xs-9 text-right'>
				<div class='huge'>Titulo</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['Titulo']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";
			//***********************************texto******************************
								echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-red'>
				<div class='panel-heading'>
				<div class='row'>
				<div class='col-xs-9 text-right'>
				<div class='huge'>Subtitulado</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['Subtitulado']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";
				//**********************************************
								echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-red'>
				<div class='panel-heading'>
				<div class='row'>
				<div class='col-xs-9 text-right'>
				<div class='huge'>Icono</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['Icono']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";
				//******************************
								echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-red'>
				<div class='panel-heading'>
				<div class='row'>
				<div class='col-xs-9 text-right'>
				<div class='huge'>Texto</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['Texto']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";

			}
		}else{
			echo "no se encontraron resultados";
		}
	}
	/*
	 <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-red'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>Registro</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>Fecha:".$fila['Anio']."-".$fila['Mes']."-".$fila['Dia']."<br/> Hora:".$fila['Hora']."-".$fila['Minuto']."-".$fila['Segundo']."<br/><a href='#'>";
                                    
                                    if ($_SESSION['login'] == "yes" ){ 
                                    echo "<a href='include/eliminarpost.php?Utc=".$fila['Utc']."'><br/><br/>Eliminar Post</a>";echo "<br/>";}else{}
                                    
                                    if ($_SESSION['login'] == "yes" ){ 
                                    echo "<a href='formularioActualizar.php?titulo=".$fila['Titulo']."&subtitulo=".$fila['Subtitulado']."&texto=".$fila['Texto']."&editando=yes&&utc=".$fila['Utc']."'>Actualizar Post</a>";}else{}
                                    echo "</span>";
                                    echo "<div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>

	*/
?>
