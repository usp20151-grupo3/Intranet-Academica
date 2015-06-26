<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="listmatricula" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Matricula</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre Alumno</th>
                    <th class="box-body">Nombre Apoderado</th>
                    <th class="box-body">Grupo de Estudio</th>
                    <th class="box-body">Parentesco</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    
                    <?php 
                    $consulta = mysql_query('call reporte_matricula()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idmatricula']?> </td>
                    <td class="box-body"> <?php echo $rol['anombre']?> </td>
                    <td class="box-body"> <?php echo $rol['pnombre']?> </td>
                    <td class="box-body"> <?php echo $rol['grado'].' '.$rol['seccion'].' de '.$rol['nivel']?> </td>
                    <td class="box-body"> <?php echo $rol['parentesco']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-mat"
                                data-id="<?php echo $rol['idmatricula']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } mysql_close();?>
</table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modalematricula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Matricula </h4>
                  </div>
                  <form role="form" action="../negocio/actualizarmatricula.php" method="POST">
                  <div class="modal-body body-matricula">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div>


