<div class="box box-primary" id="regmatricula" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro de Matricula</h3>
                </div>
                <form role="form" action="../negocio/regmatricula.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Seleccionar Alumno</label>
                      <input type="hidden" class="form-control" id="idmalumno" name="idmalumno">
                      <input type="text" readonly="true" class="form-control" id="mnombre" name="alumno" placeholder="Seleccione Alumno" required>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalbuscaralumno">
                      <button class="btn btn-default btn-flat"> Buscar</button> </a>
                      <div class="form-group">
                      <label>Seleccionar Apoderado</label>
                      <input type="hidden" class="form-control" id="idmpersona" name="idmpersona">
                      <input type="text" readonly="true" class="form-control" name="apoderado" id="mapoderado" placeholder="Seleccione Apoderado" required>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalbuscarapoderado">
                      <button class="btn btn-default btn-flat">Buscar</button> </a>
                      </div>
                      <div class="form-group">
                      <label>Seleccionar Grupo de Estudio</label>
                      <input type="hidden" class="form-control" id="idmgrupo" name="idmgrupo">
                      <input type="text" readonly="true" class="form-control" name="grupo" id="mgrupo" placeholder="Seleccione Nivel, Grado y Seccion" required>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalbuscargrupo">
                      <button class="btn btn-default btn-flat">Buscar</button> </a>
                      </div>
                      <div class="form-group">
                      <label>Parentesco</label>
                      <select name="parentesco" class="form-control">
                      <option value="M">Madre</option>
                      <option value="P">Padre</option>
                      <option value="A">Abuela</option>
                      <option value="B">Abuelo</option>
                      <option value="T">Tia</option>
                      <option value="O">Tio</option>
                      </select>
                      </div>                                     
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox" checked="true"> Habilitar
                      </label>
                    </div>
                  </div>

                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary" id="submit" name="submit">Confirmar</button>
                  </div>
                 </div>
                </form>             
             </div> 

             <div class="modal fade" id="Modalbuscaralumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Alumno</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <thead>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Codigo</th>
                      <th></th>
                    </thead>
                    <tbody>
                   <?php mysql_connect('localhost', 'root', '');
                    mysql_select_db('intranet');
                    $consulta = mysql_query('call reporte_alumno()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idalumno']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php ?>
                    <button class="btn-m-alumno"
                    data-id="<?php echo $rol['idalumno']?>"
                    data-alumno="<?php echo $rol['nombre'].' '. $rol['apellido'];?>">Seleccionar</button> 
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

          <div class="modal fade" id="Modalbuscarapoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Apoderado</h4>
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
                    <td class="box-body"> <?php ?>
                    <button type="button" class="btn-m-apoderado"
                    data-idapoderado="<?php echo $rol['idpersona']?>"
                    data-apoderado="<?php echo $rol['nombre'].' '. $rol['apellido'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php }  mysql_close(); ?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 

          <div class="modal fade" id="Modalbuscargrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Grupo de Estudio</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <thead>
                      <th>Id</th>
                      <th>Nivel</th>
                      <th>Grado</th>
                      <th>Seccion</th>
                      <th></th>
                    </thead>
                    <tbody>
                   <?php mysql_connect('localhost', 'root', '');
                    mysql_select_db('intranet');
                    $consulta = mysql_query('call reporte_grupo_estudio()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idgrupo']?> </td>
                    <td class="box-body"> <?php echo $rol['nivel']?> </td>
                    <td class="box-body"> <?php echo $rol['grado']?> </td>
                    <td class="box-body"> <?php echo $rol['seccion']?> </td>
                    <td class="box-body"> <?php ?>
                    <button type="button" class="btn-m-grupo"
                    data-idmgrupo="<?php echo $rol['idgrupo']?>"
                    data-mgrupo="<?php echo $rol['grado'].' '. $rol['seccion'].' de '. $rol['nivel'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php }  mysql_close(); ?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 
