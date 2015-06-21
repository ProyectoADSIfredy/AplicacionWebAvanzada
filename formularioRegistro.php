<?php require_once "queryUsuario.php";  ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulario de registro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            FORMULARIO REGISTRO USUARIOS
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <form role="form" action="crearusuario.php" method="post"> -->
                        <!-- <form role="form" name="formSimple" id="formSimple" enctype="multipart/form-data" method="post" action="crearusuario.php" /> -->
                        <form role="form" name="formSimple" id="formSimple" enctype="multipart/form-data" method="post" action="queryUsuario.php?action=crear"/>

                            <div class="form-group">
                                Usuario
                                <input class="form-control" type="text" name="usuario"autofocus required>
                            </div>

                            <div class="form-group">
                                Contraseña
                                <input class="form-control" type="password" name="contrasena" required>
                            </div>

                            <div class="form-group">
                            Nombre
                                <input class="form-control" type="text" name="nombre" required maxlength="50">
                            </div>

                            <div class="form-group">
                            Primer Apellido
                                <input class="form-control" type="text" name="apellidou" required maxlength="50">
                            </div>

                            <div class="form-group">
                                Segundo Apellido
                                <input class="form-control" type="text" name="apellidod" required maxlength="50">
                            </div>

                            <div class="form-group">
                                Titulo
                                <input class="form-control" type="text" name="titulo" required maxlength="50">
                            </div>

                            <div class="form-group">
                                Descripcion
                                <textarea class="form-control" rows="4" name="descripcion" maxlength="200"></textarea>
                            </div>

                            <div class="form-group">
                                <i class="fa fa-file-image-o"> </i>Foto
                               <p><input type="file" size="32" name="mi_archivo" value="" /></p>
            
                            </div>
                            <div class="form-group">
                                Web Personal
                                <input class="form-control" type="text" name="webpersonal" required>
                            </div>

                            Correo
                            <div class="form-group input-group">
                                
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" name="email" placeholder="Username">
                            </div>
                            <!-- <i class="fa fa-spinner"></i><h1>cargando datos</h1> -->
                            <!-- <h3 class="panel-title"><i class="fa fa-spinner fa-spin fa-fw"></i> Instalacion de la Base de Datos</h3> -->
                            <h2><i class="fa fa-spinner fa-spin"></i>creando usuario</h2>
                            <input type="submit" class="" value="REGISTRAR">
                            <input type="reset" class="" value="RESET">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
