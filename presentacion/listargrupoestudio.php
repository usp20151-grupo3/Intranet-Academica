<?php mysql_connect('localhost', 'root', '');
                    mysql_select_db('intranet');
?>

<div class="box box-primary" id="divgrupoestudio" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Lista de Grupo de Estudio - Control Asistencia
                </div>
                <form role="form" id="formasistencia">
                  <div class="box-body table-search-cad">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Curso</th>
                    <th class="box-body">Grado</th>
                    <th class="box-body">Fecha Vigencia</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_cad_trabajador('".$_SESSION['idtrabajador']."')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idcad'];?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion'];?> </td>
                    <td class="box-body"> <?php echo $rol['grado'].' '.$rol['seccion'].' de '.$rol['nivel'];?> </td>
                    <td class="box-body"> <?php echo $rol['fechavigencia'];?> </td>
                    <td class="box-body"> <?php echo $rol['estado'];?> </td>
                    <td class="box-body"> <button class="btn btn-default btn-flat btn-asistencia" type="button" name="divasist"
                                 data-idcadas="<?php echo $rol['idcad']?>"
                                 data-idgruas="<?php echo $rol['idgrupo']?>" 
                                >Ver</button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>
                  </div>
                </form>

                <div id="formulario-ver">
                  
                </div>
</div>
