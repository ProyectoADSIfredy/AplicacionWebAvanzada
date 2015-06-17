<?php require_once "Instalacion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Instalacion - Gestion de Usuarios</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Creacion de la base de datos</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        u<img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="include/unlog.php"><i class="fa fa-fw fa-power-off"></i>Cerrar Sesíon</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- ------------------------MENU--------------------------- -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <li class="active">
                        <a href="viewInstall.php"><i class="fa fa-list-alt"></i>Instalacion BD</a>
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-list-alt"></i>Mis Blogs</a>
                    </li>
                    <li>
                        <a href="formulariologs.php"><i class="fa fa-outdent"></i>Registro Logs</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id='page-wrapper'>
            <div class='container-fluid'>
                <div class='row'>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Instalacion
                            <small>Usuarios</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Instalacion</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Tablas y Base de Datos
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-spinner fa-spin fa-fw"></i> Instalacion de la Base de Datos</h3>
                            </div>
                            <div class="panel-body">
                                
                                <?php CreateBD(); ?>
                                <br/>
                                <div class="alert alert-success">
                                    <strong>Proceso Completado!</strong> Se ha creado la base de datos.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
</div>"   
</body>
</html>
