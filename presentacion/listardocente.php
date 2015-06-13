<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="divldocente" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar docente</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">IdTrabajador</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query('call reporte_docente()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idtrabajador']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaledocente">
                      <button class="btn btn-default btn-flat"> Editar </button> </a> </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modaledocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Docente</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <thead>
                      <th>Numero</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th></th>
                    </thead>
                    <tbody>
                   <?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
                    $consulta = mysql_query('call reporte_persona()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idpersona']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php ?><button class="btn-persona"
                                                          data-id="<?php echo $rol['idpersona']?>"
                                                          data-persona="<?php echo $rol['nombre'].' '. $rol['apellido'];?>">Seleccionar</button> </td>
                   
                </tr>
                    <?php } mysql_close();?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 