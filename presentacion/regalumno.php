<div class="box box-primary" id="regalumno" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Alumno</h3>
                </div>
                <form role="form" action="../negocio/regalumno.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Persona</label>
                      <input type="hidden" class="form-control" id="idalumno" name="idpersona">
                      <input readonly='true' type="text" class="form-control" id='alumno' name="persona" placeholder="Seleccionar Persona">
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalalumno">
                      <button class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsuario">Codigo</label>
                      <input type="text" class="form-control" name="codigo" placeholder="Nombres" maxlength="10" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);"  required>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox" checked="true"> Habilitar
                      </label>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="modal fade" id="Modalalumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Persona</h4>
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
                    <td class="box-body"> <?php ?>
                    <button class="btn-alumno"
                    data-id="<?php echo $rol['idpersona']?>"
                    data-persona="<?php echo $rol['nombre'].' '. $rol['apellido'];?>">Seleccionar</button> 
                    </td>
                   
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