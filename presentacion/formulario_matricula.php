<?php

?>

                <div class="box-body">
                  <div class="form-group">
                      <label>Alumno</label>         
                      <input type="hidden" name="id_matricula"  value="<?php echo $_POST['id_matricula']?>"/>
                      <input type="hidden" name="id_alumno_sel" id="id_alumno_sel" value="<?php echo $idalumno ?>" />
                      <input readonly="true" type="text" class="form-control" id="nselalumno" name="alumno" value="<?php echo $matricula->anombre; ?>" required />
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalselealumno">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                  </div>
                  <div class="form-group">
                      <label>Apoderado</label>         
                      <input type="hidden" name="id_persona_sel" id="id_persona_sel" value="<?php echo $idpersona ?>" />
                      <input readonly="true" type="text" class="form-control" id="mselpersona" name="persona" value="<?php echo $matricula->pnombre; ?>" required />
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalselapoderado">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                  </div>
                  <div class="form-group">
                      <label>Grupo de Estudio</label>         
                      <input type="hidden" name="id_grupo_sel" id="id_grupo_sel" value="<?php echo $idgrupo ?>" />
                      <input readonly="true" type="text" class="form-control" id="nselgrupo" name="grupo" value="<?php echo $matricula->grado.' '. $matricula->seccion .' de '. $matricula->nivel; ?>" required />
                      <a href="#" class="inline" data-toggle="modal" data-target="#Modalselgrupo">
                      <button type="button" class="btn btn-default btn-flat"> Buscar</button> </a>
                  </div>

<div class="form-group">
<select name="parentesco" class="form-control">
                      <?php if ($matricula->parentesco == 'Madre') {
                       echo "<option value='M' selected>Madre</option>";
                       echo "<option value='P'>Padre</option>";
                       echo "<option value='A'>Abuela</option>";
                       echo "<option value='B'>Abuelo</option>";
                       echo "<option value='T'>Tia</option>";
                       echo "<option value='O'>Tio</option>";
                     }
                       if ($matricula->parentesco == 'Padre') {
                       echo "<option value='M'>Madre</option>";
                       echo "<option value='P' selected>Padre</option>";
                       echo "<option value='A'>Abuela</option>";
                       echo "<option value='B'>Abuelo</option>";
                       echo "<option value='T'>Tia</option>";
                       echo "<option value='O'>Tio</option>";
                     }
                       if ($matricula->parentesco == 'Abuela') {
                       echo "<option value='M'>Madre</option>";
                       echo "<option value='P'>Padre</option>";
                       echo "<option value='A' selected>Abuela</option>";
                       echo "<option value='B'>Abuelo</option>";
                       echo "<option value='T'>Tia</option>";
                       echo "<option value='O'>Tio</option>";
                     }
                       if ($matricula->parentesco == 'Abuelo') {
                       echo "<option value='M'>Madre</option>";
                       echo "<option value='P'>Padre</option>";
                       echo "<option value='A'>Abuela</option>";
                       echo "<option value='B' selected>Abuelo</option>";
                       echo "<option value='T'>Tia</option>";
                       echo "<option value='O'>Tio</option>";
                     }
                       if ($matricula->parentesco == 'Tia') {
                       echo "<option value='M'>Madre</option>";
                       echo "<option value='P'>Padre</option>";
                       echo "<option value='A'>Abuela</option>";
                       echo "<option value='B'>Abuelo</option>";
                       echo "<option value='T' selected>Tia</option>";
                       echo "<option value='O'>Tio</option>";
                     }
                       if ($matricula->parentesco == 'Tio') {
                       echo "<option value='M'>Madre</option>";
                       echo "<option value='P'>Padre</option>";
                       echo "<option value='A'>Abuela</option>";
                       echo "<option value='B'>Abuelo</option>";
                       echo "<option value='T'>Tia</option>";
                       echo "<option value='O' selected>Tio</option>";
                     }
?>
                     </select>
                     </div>
                    <div class="checkbox">
                      <label>
                       <?php if ($matricula->estado == 'Activo') {
                       echo "<input type='checkbox' name='checkbox' checked='true'> Habilitar";
                       

                     } else {
                       echo "<input type='checkbox' name='checkbox'> Habilitar";
                     }
                      ?>
                      </label>
                    </div>
                </div>



<div class="modal fade" id="Modalselealumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                    $consulta = mysql_query('call reporte_alumno_activo()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idalumno']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php ?>
                    <button type="button" class="matriculaalumno"
                    data-idalumno="<?php echo $rol['idalumno']?>"
                    data-nombrealumno="<?php echo $rol['nombre'].' '.$rol['apellido'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php } mysql_close();?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-alu">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 

          <div class="modal fade" id="Modalselapoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                    $consulta = mysql_query('call reporte_persona_activo()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idpersona']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php ?>
                    <button type="button" class="matriculaapoderado"
                    data-idselapoderado="<?php echo $rol['idpersona']?>"
                    data-selapoderado="<?php echo $rol['nombre'].' '. $rol['apellido'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php }  mysql_close(); ?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-apo">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 

          <div class="modal fade" id="Modalselgrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                    <button type="button" class="matriculagrupo"
                    data-idmatriculagrupo="<?php echo $rol['idgrupo']?>"
                    data-matriculagrupo="<?php echo $rol['grado'].' '. $rol['seccion'].' de '. $rol['nivel'];?>">Seleccionar</button> 
                    </td>
                   
                </tr>
                    <?php }  mysql_close(); ?>                   
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-modal-close-gru">Close</button>
                    
                  </div>
                </div>  
              </div>  

          </div> 