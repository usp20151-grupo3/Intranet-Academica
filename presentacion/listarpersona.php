<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>
<script src="../recursos/js/persona.js"></script>
<div class="box box-primary" id="divlpersona" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Persona</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">DNI</th>
                    <th class="box-body">Sexo</th>
                    <th class="box-body">Direccion</th>
                    <th class="box-body">Teléfono</th>
                    <th class="box-body">Email</th>
                    <th class="box-body">FechaRegistro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query('call reporte_persona()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idpersona']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['dni']?> </td>
                    <td class="box-body"> <?php echo $rol['sexo']?> </td>
                    <td class="box-body"> <?php echo $rol['direccion']?> </td>
                    <td class="box-body"> <?php echo $rol['telefono']?> </td>
                    <td class="box-body"> <?php echo $rol['email']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> 
                      <button class="btn btn-default btn-flat btn-editar"
                                data-id="<?php echo $rol['idpersona']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>
                  </div>
                </form>
</div>


<div class="modal fade" id="Modalepersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Persona</h4>
                  </div>
                  <form role="form" action="../negocio/actualizarpersona.php" method="POST">
                  <div class="modal-body body-persona">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div> 