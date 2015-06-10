<?php 

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

$resul = mysql_query("SELECT * FROM post WHERE usuario='".$_SESSION['usuariotemporal']."';");

while ($fila = mysql_fetch_array($resul)) {

    echo " <div id='page-wrapper'>
            <div class='container-fluid'>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-red'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>Fecha registro</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>".$fila['Anio']."-".$fila['Mes']."-".$fila['Dia']."</span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- //////////////////////////////////////FIN PARTE EMAIL/////////////////////////7 -->
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-red'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>Hora de registro</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>".$fila['Hora']."-".$fila['Minuto']."-".$fila['Segundo']."</span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                    </div>";


}
mysql_close($conexion);
?>