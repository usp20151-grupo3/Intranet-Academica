<div class="box-body">
                  <div class="form-group">
                      <label>Nombre</label>         
                      <input  type="hidden" name="id_alumno"  value="<?php echo $_POST['id_alumno']?>"></input>
                      <input  type="hidden" name="id_persona_al" id="idpalumno" value="<?php echo $idpersona ?>"></input>
                      <input readonly="true" type="text" class="form-control" id="nalumno" name="persona" value="<?php echo $alumno->nombre; ?>" required />
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalselalumno">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                      <div class="form-group">
                      <label>Codigo</label>
                      <input type="text" class="form-control" name="codigo" value="<?php echo $alumno->codigo; ?>" required />                     
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>

<div class="modal fade" id="Modalselalumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                    <button type="button" class="alumno"
                    data-id="<?php echo $rol['idpersona']?>"
                    data-persona="<?php echo $rol['nombre'].' '.$rol['apellido'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php } mysql_close();?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-al">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 