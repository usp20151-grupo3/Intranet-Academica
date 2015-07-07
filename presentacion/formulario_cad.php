<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Asignar Curso y Alumno a Docente</h3>
                </div>
                
                  <div class="box-body">
                    <div class="form-group">
                      <label>Seleccionar Docente</label>
                      <input type="hidden" class="form-control" value="<?php echo $idcad ?>" id="idselcad" name="id_cad" />
                      <input type="hidden" class="form-control" value="<?php echo $idtrabajador ?>" id="idselcaddocente" name="idselcaddocente" value="<?php echo $idtrabajador; ?>"/>
                      <input type="text" readonly="true" class="form-control" value="<?php echo $cad->nombre.' '.$cad->apellido ?>"id="desselcaddocente" name="docente" placeholder="Seleccione docente" required/>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalseldoc">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                    <div class="form-group">
                      <label>Asignar Curso</label>
                      <input type="hidden" class="form-control" value="<?php echo $idcurso ?>" id="idcadselcurso" name="idcadselcurso"/>
                      <input type="text" readonly="true" value="<?php echo $cad->descripcion ?>"class="form-control" id="descadselcurso" name="curso" placeholder="Seleccione Curso" required/>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalselcur">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                    <div class="form-group">
                      <label>Asignar Grupo de Estudio <small>(Alumnos)</small></label>
                      <input type="hidden" class="form-control" value="<?php echo $idgrupo ?>" id="idselcadgrupo" name="idselcadgrupo"/>
                      <input type="text" readonly="true" value="<?php echo $cad->grado.' '.$cad->seccion.' de '.$cad->nivel?>" class="form-control" name="grupo" id="desselcadgrupo" placeholder="Grupo de Estudio" required/>
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalselgru">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                    </div>
                    <div class="form-group">
                          <label>Fecha Vigencia</label>
                      <input type="date" class="form-control" name="date" value="<?php echo $cad->fechavigencia ?>" required/>
                      </div> 
                    <div class="checkbox">
                      <label>
                        <?php if ($cad->estado == 'Activo') {
                       echo "<input type='checkbox' name='checkbox' checked='true'> Habilitar";
                       

                     } else {
                       echo "<input type='checkbox' name='checkbox'> Habilitar";
                     }
                      ?>
                      </label>
                    </div>
                  </div>
                  

              </div>

              <div class="modal fade" id="Modalseldoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Docente</h4>
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
                    $consulta = mysql_query("call reporte_docente_activo('')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idtrabajador']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php ?>
                    <button type="button" class="cadseldocente"
                    data-idcad="<?php echo $rol['idtrabajador']?>"
                    data-cadpersona="<?php echo $rol['nombre'].' '.$rol['apellido'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php } mysql_close();?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-cad">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div>

          <div class="modal fade" id="Modalselcur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Seleccionar Docente</h4>
                  </div>
                  <div class="modal-body">
                  <table  class="box box-primary">
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>                 
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body"> </th>
                    <?php mysql_connect('localhost', 'root', '');
                    mysql_select_db('intranet');
                    $consulta = mysql_query('call reporte_curso_activo()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idcurso']?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>

                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> 
                      <button type="button" class="cadseleccioncurso"
                    data-idcadseleccioncurso="<?php echo $rol['idcurso']?>"
                    data-cadseleccioncurso="<?php echo $rol['descripcion'];?>">Seleccionar</button> 
                    </td>
                    </td>
                   
                </tr>
                    <?php } mysql_close();?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-cadcur">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div>

          <div class="modal fade" id="Modalselgru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                    <button type="button" class="cadgrupo"
                    data-idcadgrupo="<?php echo $rol['idgrupo']?>"
                    data-cadgrupo="<?php echo $rol['grado'].' '. $rol['seccion'].' de '. $rol['nivel'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php }  mysql_close(); ?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-grup">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 