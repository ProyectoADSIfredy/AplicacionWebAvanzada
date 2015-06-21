<?php 
require_once"queryPost.php";

$titulo = $_GET['titulo'];
$subtitulo = $_GET['subtitulo'];
$texto = $_GET['texto'];
// $utc = $_GET['utc'];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Actualiacion de post</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Actualizar de Post 
                        </h1>
                    </div>
                    <div class="col-lg-6">
                        <form role="form" action="queryPost.php?action=update" method="post">
                            <!-- //queryUsuario.php?action=crear"/> -->
                            <div class="form-group">
                                Titulo
                                <input class="form-control" type="text" name="titulo" value="<?php echo $titulo; ?>" autofocus>
                            </div>

                            <div class="form-group">
                                SubTitulo
                                <input class="form-control" type="text" name="subtitulo" value="<?php echo $subtitulo ?>">
                            </div>
                            <div class="form-group">
                                Icono
                                <input class="form-control" type="text" name="icono">
                            </div>

                            <div class="form-group">
                                Texto
                                <textarea class="form-control" rows="4" name="texto" maxlength="4000"><?php echo $texto ?></textarea><br/>
                             <input type="submit" value="Actualizar">
                            </div>
                            <input type="hidden" name="utc" value="<?php echo $utc; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
