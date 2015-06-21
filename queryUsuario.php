<?php 
	// session_start();

	require_once("instalacion.php");

	if (!empty($_REQUEST['action'])) {
		$action=$_REQUEST['action'];
		if ($action=='crear') {
			CrearUsuario();
		}else if ($action=='ver') {
			VerUsuario();
		}else if ($action=='update') {
			UpdateUsuario();
		}else if ($action =='delete') {
			DeleteUsuario();
		}
	}

	function CrearUsuario(){
		//proteccion de datos 
		$namFoto = subirImagen($_FILES['mi_archivo']);
		//condicion al subir la imagen del usuario
		$namFoto = ($namFoto === NULL) ? "Sin_imagen_disponible.jpg" : $namFoto;

		$params = array(
			':usuario' => $_POST['nombre'],
			':contrasena' => $_POST['contrasena'],
			':nombre' => $_POST['nombre'],
			':apellidou' => $_POST['apellidou'],
			':apellidod'=> $_POST['apellidod'],
			':titulo' => $_POST['titulo'],
			':descripcion' => $_POST['descripcion'],
			':foto' => $namFoto,
			':webpersonal' => $_POST['webpersonal'],
			':email'=> $_POST['email'],
			);

			//query para hacer insert a la tabla usuario
			$query = "INSERT INTO Usuario
			(Usuario,Contrasena,Nombre,Apellidou,Apellidod,Titulo,Descripcion,Foto,WebPersonal,Email)
			VALUES(:usuario,:contrasena,:nombre,:apellidou,:apellidod,:titulo,:descripcion,:foto,:webpersonal,:email)";

			$result = execQuey("bdpost",$query,$params);
			if ($result >0 ) {
				 header('Location: formulariologin.php?result=true');
			}else{
				header('Location: formularioRegistro.php?result=false');
			}
	}

	function VerUsuarios(){
		$query="SELECT * FROM Usuario WHERE usuario='".$_SESSION['usuario']."'";
		$result= newQuery("bdpost",$query);
		if ($result != false ||  $result > 0 ) {
			foreach ($result as $value) {
			//*********************titulo***********************************
				echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-primary'>
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
            //*********************titulo***********************************
            //*********************descripcion***********************************
                echo "<div class='col-lg-3 col-md-6'>
                <div class='panel panel-green'>
                <div class='panel-heading'>
                <div class='row'>
                <div class='col-xs-9 text-right'>
                <div class='huge'>Descripcion</div>
                </div>
                </div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['Descripcion']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";
				//*********************descripcion***********************************
				//***********************web*****************************************
				echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-yellow'>
				<div class='panel-heading'>
				<div class='row'>
				<div class='col-xs-9 text-right'>
				<div class='huge'>WebPersonal</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['WebPersonal']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";
				//***********************web*****************************************
				//***********************email*****************************************
				echo "<div class='col-lg-3 col-md-6'>
				<div class='panel panel-red'>
				<div class='panel-heading'>
				<div class='row'>
				<div class='col-xs-9 text-right'>
				<div class='huge'>Email</div>
				</div>
				</div>
				</div>
				<a href='#'>
				<div class='panel-footer'>
				<span class='pull-left'>".$value['Email']."</span>
				<div class='clearfix'></div>
				</div>
				</a>
				</div>
				</div>";
				//***********************email*****************************************

            }
        }else{
        	echo "No se encontraron datos";
        }
    }
    


	// function UpdateUsuario(){

	// 	$params = array(
	// 	':usuario' => $_POST['nombre'],
	// 	':contrasena' => $_POST['contrasena'],
	// 	':nombre' => $_POST['nombre'],
	// 	':apellidou' => $_POST['apellidou'],
	// 	':apellidod'=> $_POST['apellidod'],
	// 	':titulo' => $_POST['titulo'],
	// 	':descripcion' => $_POST['descripcion'],
	// 	':foto' => $namFoto,
	// 	':webpersonal' => $_POST['webpersonal'],
	// 	':email'=> $_POST['email'],
	// 	);


	// }


?>