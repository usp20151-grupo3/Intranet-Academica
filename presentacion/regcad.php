
<div class="box box-primary" id="regcad" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Asignar Curso y Alumno a Docente</h3>
                </div>
                <form role="form" action="../negocio/regcad.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Seleccionar Docente</label>
                      <input type="hidden" class="form-control" id="idcaddocente" name="idcaddocente"/>
                      <input type="text" readonly="true" class="form-control" id="descaddocente" name="docente" placeholder="Seleccione docente" required/>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalcaddocente">
                      <button class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                    <div class="form-group">
                      <label>Asignar Curso</label>
                      <input type="hidden" class="form-control" id="idcadcurso" name="idcadcurso"/>
                      <input type="text" readonly="true" class="form-control" id="descadcurso" name="curso" placeholder="Seleccione Curso" required/>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalcadcurso">
                      <button class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                    <div class="form-group">
                      <label>Asignar Grupo de Estudio <small>(Alumnos)</small></label>
                      <input type="hidden" class="form-control" id="idcadgrupo" name="idcadgrupo"/>
                      <input type="text" readonly="true" class="form-control" name="grupo" id="descadgrupo" placeholder="Grupo de Estudio" required/>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalcadgrupo">
                      <button class="btn btn-default btn-flat"> Buscar</button> </a>
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



<div class="modal fade" id="Modalcaddocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Docente</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <th class="box-body">IdTrabajador</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_docente_activo('')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idtrabajador']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> 
                    <button class="btn-cad-docente"
                    data-idcaddocente="<?php echo $rol['idtrabajador']?>"
                    data-caddocente="<?php echo $rol['nombre'] .' '.$rol['apellido'];?>">Seleccionar</button> 
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



<div class="modal fade" id="Modalcadcurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Curso</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>                 
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query('call reporte_curso_activo()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idcurso']?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> 
                      <button class="btn-cad-curso"
                    data-idcadcurso="<?php echo $rol['idcurso']?>"
                    data-descadcurso="<?php echo $rol['descripcion'];?>">Seleccionar</button> 
                    </td>
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


          <div class="modal fade" id="Modalcadgrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                    $consulta = mysql_query('call reporte_grupo_estudio_activo()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idgrupo']?> </td>
                    <td class="box-body"> <?php echo $rol['nivel']?> </td>
                    <td class="box-body"> <?php echo $rol['grado']?> </td>
                    <td class="box-body"> <?php echo $rol['seccion']?> </td>
                    <td class="box-body"> <?php ?>
                    <button type="button" class="btn-cad-grupo"
                    data-idcadgrupo="<?php echo $rol['idgrupo']?>"
                    data-cadgrupo="<?php echo $rol['grado'].' '. $rol['seccion'].' de '. $rol['nivel'];?>">Seleccionar</button> 
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