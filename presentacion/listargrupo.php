

<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="listgrupo" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Grupo</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                        
                    <th class="box-body">Id</th>
                    <th class="box-body">Nivel</th>
                    <th class="box-body">Grado</th>
                    <th class="box-body">Sección Alta</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    
                    <?php 
                    $consulta = mysql_query('call reporte_grupo_estudio()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idgrupo']?> </td>
                    <td class="box-body"> <?php echo $rol['nivel']?> </td>
                    <td class="box-body"> <?php echo $rol['grado']?> </td>
                    <td class="box-body"> <?php echo $rol['seccion']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-grupo"
                                data-id="<?php echo $rol['idgrupo']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } mysql_close();?>
</table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modalegrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Grupo de Estudio </h4>
                  </div>
                  <form role="form" action="../negocio/actualizargrupo.php" method="POST">
                  <div class="modal-body body-grupo">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div>