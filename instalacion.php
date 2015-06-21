<?php

	function CreateBD($name = "bdpost"){
		$usuario="fredy";
		$contrasena="fredy";
		try {
			//creacion de la base de datos y seleccion de la base de datos
			$db = new PDO("mysql:host=localhost;dbname=".$name,$usuario,$contrasena);
			//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); visualiza errores en la base de datos
			
			echo "<i class='fa fa-check-square-o'></i> Se ha creado/seleccionado la base de datos correctamente."."<br/>";

			//creacion de la tabla usuario
			$query = "CREATE TABLE IF NOT EXISTS Usuario(
				IdUsuario int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
				Usuario varchar(30),
				Contrasena varchar(30), 
				Nombre varchar(50), 
				ApellidoU varchar(50), 
				ApellidoD varchar(50), 
				Titulo varchar(50), 
				Descripcion varchar(200), 
				Foto varchar(40), 
				WebPersonal varchar(100), 
				Email varchar(50), 
				Permiso int)";

			//condicion para saber si se creo la tabla usuarios
			$resul = $db->exec($query);
			echo ($resul === false)?"<i class='fa fa-times-circle'></i>No se pudo crear la tabla usuarios."."<br/>":"<i class='fa fa-check-square-o'></i>Se creo correctamente la tabla Usuarios."."<br/>";
			
			//creacion de la tabla blogs		
			$query = "CREATE TABLE IF NOT EXISTS Post(
				IdPost int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
				Utc int, 
				Anio int, 
				Mes int, 
			 	Dia int, 
			 	Hora int, 
			 	Minuto int, 
			 	Segundo int, 
			 	Titulo varchar(120), 
			 	Subtitulado varchar(200), 
			 	Icono varchar(100), 
			 	Texto varchar(4000)";
			//condicion para saber si se creo la tabla post
			$resul = $db->exec($query);
			echo ($resul === false) ? "<i class='fa fa-times-circle'></i>No se pudo crear la tabla Post."."<br/>" : "<i class='fa fa-check-square-o'></i>Se creo correctamente la tabla Post."."<br/>";

			$db=NULL; //cerramos la base de datos 
			
		} catch (Exception $e) {
			echo $e->getMessage();
			
		}

	}

	function execQuey($name="bdpost", $query, $params=NULL){
		$usuario="fredy";
		$contrasena="fredy";
		try {
			//seleccion de la base de datos 
			$db = new PDO("mysql:host=localhost;dbname=".$name."",$usuario,$contrasena);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if ($params===NULL) {
				$resul=$db->exec($query);
			}else{
				$cmd = $db->prepare($query);
				$resul = $cmd->execute($params);
			}
			$db=NULL;
			return ($resul);
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	function newQuery($name = "BDpost", $query){
		$usuario="fredy";
		$contrasena="fredy";
		try {
			$db = new PDO("mysql:host=localhost;dbname=".$name,$usuario,$contrasena);
			// $db = new PDO("mysql:host=localhost;dbname='".$name."','".$usuario."','".$contrasena."'");
			$resul=$db->query($query);

			$db=NULL;
			return ($resul);
			
		} catch (Exception $e) {

			echo $e->getMessage();
			
		}
	}

	function subirImagen ($namFile){
		include('class.upload.php');
		$archivos = new Upload($namFile);
		if ($archivos->uploaded){
			$foto=$archivos->file_new_name_body = $archivos->file_src_name_body;
			$foto=$foto.".".$archivos->file_src_name_ext;
			$archivos->Process('archivos');
			if($archivos->processed){
				echo "Archivo Subido";
				$archivos->Clean();
				return $foto;
			}
		}else{
			echo "Error al subir el archivo...".$archivos->error;
			$archivos->Clean();
			return NULL;
		}
	}
?>