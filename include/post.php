<?php 

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

$resul = mysql_query("SELECT * FROM usuario WHERE usuario='".$_SESSION['usuariotemporal']."';");

while ($fila = mysql_fetch_array($resul)) {
    echo "<div id='page-wrapper'>

            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <h1 class='page-header'>
                             <small>".$_SESSION['nombre']." ".$_SESSION['apellidou']." ".$_SESSION['apellidod']."</small>
                        
                        </h1>
                        
                        <div class='mifoto'><img src='images/".$_SESSION['foto'].".jpeg' height='150px' width='150px'></div>
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
                                    <span class='pull-left'>".$_SESSION['titulo']."</span>
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
                                    <span class='pull-left'>".$_SESSION['descripcion']."</span>
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
                                    <span class='pull-left'>".$_SESSION['webpersonal']."</span>
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
                                    <span class='pull-left'>".$_SESSION['email']."</span>
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

}
mysql_close($conexion);
?>