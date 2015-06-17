<?php 

session_start();

include "include/variablesusuario.php";

if (isset($_GET['editando'])) {
    $editando = $_GET['editando'];
}else{
    $editando = "no";
}

if (isset($_SESSION['login'])) {
    
}else{
    $_SESSION['login'] = "no";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog</title>
    <link rel="css/stylefoto.css" type="text/css" href="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
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
                <a class="navbar-brand" href="index.php">Usuario: <?php echo $_SESSION['usuario']; ?></a>
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
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['usuario']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        u<img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['nombre']." ".$_SESSION['apellidou'] ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['usuario']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src='archivos/<?php echo $_SESSION['foto']; ?>' height='30px' width='30px'> <?php echo $_SESSION['nombre']." ".$_SESSION['apellidou']." ".$_SESSION['apellidod']; ?><b class="caret"></b></a>
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

                    <div class='col-lg-12'>
                        <h1 class='page-header'>
                             <!-- <small>".$_SESSION['nombre']." ".$_SESSION['apellidou']." ".$_SESSION['apellidod']."</small> -->
                             <small><?php echo $_SESSION['nombre']." ".$_SESSION['apellidou']." ".$_SESSION['apellidod']; ?></small>
                        </h1>
                        <div class='mifoto'><img src='archivos/<?php echo $_SESSION['foto']; ?>' height='150px' width='150px'></div>
                         <br/>
                        </div>
                <div class='row'>
                    <!-- /////////////////////////////////INICIO TITULO///////////////////////////////////////////////////// -->
                    <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'><?php echo $_SESSION['titulo'];?></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ////////////////////////////////FIN PARTE TITULO////////////////////////////////////////////////// -->
                    <!-- ////////////////////////////////INICIO PARTE DESCRIPCION//////////////////////////////////////////-->
                    <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'><?php echo $_SESSION['descripcion'];?></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- //////////////////////////////////////FIN PARTE DESCRIPCION/////////////////////////7 -->
                    <!-- //////////////////////////////////////FIN PARTE WEB PERSONAL////////////////////////7 -->
                    <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'><?php echo $_SESSION['webpersonal'];?></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- //////////////////////////////////////FIN PARTE WEB PERSONAL/////////////////////////7 -->
                    <!-- //////////////////////////////////////INICIO PARTE EMAIL/////////////////////////7 -->
                    <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'><?php echo $_SESSION['email'];?></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- //////////////////////////////////////FIN PARTE EMAIL/////////////////////////7 -->
                </div>
            </div>
        </div>
    </div>";

        <?php if ($_SESSION['login'] == "yes" ){} 
        if ($editando == "no") { include "include/post.php"; }else{}?>


        <?php if ($editando == "yes") { include "include/formularioActualizar.php"; }else{}?>        
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
