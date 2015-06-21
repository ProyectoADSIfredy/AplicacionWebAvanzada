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
				<div class='huge'>Informacion</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'><a href='formularioActualizar.php?titulo=".$value['Titulo']."&subtitulo=".$value['Subtitulado']."&texto=".$value['Texto']."'><i class='fa fa-pencil fa-fw'></i></a>&nbsp;<a href='queryPost.php?id=".$value['IdPost']."'><i class='fa fa-times'></i></a><br/>Fecha"." ".$value['Anio']."/".$value['Mes']."/".$value['Dia']."<br/>Hora"." ".$value['Hora'].":".$value['Dia']."</span>
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
				<div class='huge'>Post</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>Titulo Post:"." ".$value['Titulo']."<br/>Subtitulo Post"." ".$value['Subtitulado']."</span>
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
				</div>
				<div class='container-fluid'>
			    <h1 class='page-header'>
			    <small></small>
			    </h1>
			    </div>";
			}
		}else{
			echo "no se encontraron resultados";
		}
	}

	function UpdatePost(){
		
		$params = array(
			// ':IdPost' => $_SESSION['IdPost'],
			':usuario' => $_SESSION['usuario'],
			':utc' => date('U'),
			':anio' => date('Y'),
			':mes' => date('m'),
			':dia' => date('d'),
			':hora' => date('H'),
			':minuto' => date('i'),
			':segundo' => date('s'),
			':titulo' => $_POST['titulo'],
			':subtitulo' => $_POST['subtitulo'],
			':icono' => $_POST['icono'],
			':texto' => $_POST['texto'],
			);
		$query="UPDATE post SET
		 Usuario=:usuario,
		 Utc=:utc,
		 Anio=:anio,
		 Mes=:mes,
		 Dia=:dia,
		 Hora=hora,
		 Minuto=:minuto,
		 Segundo=:segundo,
		 Titulo=:titulo,
		 Subtitulado=:subtitulo,
		 Icono=:icono,
		 Texto=:texto
		 where Utc=:utc";
		$resul = execQuey("bdpost",$query,$params);
		var_dump($query);
		

		if ($resul > 0) {
			echo "estoy por aca ";
			// unset($_SESSION['idpost']);
			// $_SESSION['idpost'] = NULL;
			header('Location : index.php');
			
		}else{
			header('Location : formularioActualizar.php');
		}
	}

	function DeletePost(){

		$idpost = $_GET['id'];

		$params = array(
			'idpost' = $_GET['id'];
			);

		$query="DELETE FROM post WHERE IdPost=:idpost";
	}
//AQUI QUEDE 

?>
  