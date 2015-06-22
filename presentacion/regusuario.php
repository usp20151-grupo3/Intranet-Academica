<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');

?>

<div class="box box-primary" id="div2" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Usuario</h3>
                </div>
                <form role="form" id='formusuario' action="../negocio/regusuario.php" method="POST">
                  <div class="box-body">                    
                    <div class="form-group">
                        <label for="exampleInputPersona">Persona</label>
                      <input type="hidden" class="form-control" id="idpersona" name="idpersona">
                      <input readonly="true" type="text" class="form-control" id="persona" name="persona" placeholder="Seleccione Persona"><a href="#" class="inline" data-toggle="modal" data-target="#Modalper">
                      <button class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                      <div class="form-group">
                          <label for="exampleInputRol">Rol</label>
                      <br><select name='roles'>
                        
                        <?php $consulta = mysql_query('call reporte_rol()');
                        $combobit="";
                        while ($row = mysql_fetch_array($consulta)){ 
                         $combobit .=" <option value='".$row['idrol']."'>".$row['descripcion']."</option>";
                         } 
                        echo $combobit; 
                        mysql_close();?>
                      </select>
                    </div> 
                      <div class="form-group">
                      <label for="exampleInputUsuario">Usuario</label>
                      <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPregunta">Pregunta Secreta</label>
                      <input type="text" class="form-control" name="pregunta" placeholder="Pregunta Secreta" required>  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Respuesta Secreta</label>
                      <input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta" required>  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputDate">Fecha Vigencia</label>
                      <input type="date" class="form-control" name="date" placeholder="Fecha Vigencia" required>
                    </div>  
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="modal fade" id="Modalper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Persona</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <thead>
                      <th>Id</th>
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
                   