<?php require_once "queryUsuario.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Ribbon Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>!Bienvenido!<span>Por favor ingresa ...</span></h1>
<div class="login-box">
		<form action="include/login.php" method="post">
		<input type="text" class="text" name="usuario" placeholder="Usuario" required autofocus />
		<input type="password" class="text" name="contrasena" placeholder="Contraseña" required>
		<div class="remember">
			<h4><a href="formularioRegistro.php">Click para registrarse</a></h4>
		</div>
		<div class="clear"> </div>
		<div class="btn">
			<input type="submit" value="LOGIN" >
		</div>
		<div class="clear"> </div>
		</form>
</div>
</body>
</html>