<?php 

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("blogsonline",$conexion);

$resul = mysql_query("SELECT * FROM post WHERE usuario='".$_SESSION['usuariotemporal']."' LIMIT 5;");

while ($fila = mysql_fetch_array($resul)) {

    echo " <div id='page-wrapper'>
            <div class='container-fluid'>
                <div class='row'>

                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-red'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>Registro</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>Fecha:".$fila['Anio']."-".$fila['Mes']."-".$fila['Dia']."<br/> Hora:".$fila['Hora']."-".$fila['Minuto']."-".$fila['Segundo']."<br/><a href='include/eliminarpost.php?Utc=".$fila['Utc']."'><br/><br/>Eliminar Post</a><br/><a href='formularioActualizar.php?titulo=".$fila['Titulo']."&subtitulo=".$fila['Subtitulado']."&texto=".$fila['Texto']."&editando=yes&&utc=".$fila['Utc']."'>Actualizar Post</a></span>

                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'>Titulo:".$fila['Titulo']."<br/>SubTitulo:".$fila['Subtitulado']."<a href='#'></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>

                                         <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'>".$fila['Icono']."<a href='#'></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>   


    <div class='col-lg-3 col-md-6'>
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
                                    <span class='pull-left'>".$fila['Texto']."<a href='#'></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>

                     ";
}
mysql_close($conexion);
?>