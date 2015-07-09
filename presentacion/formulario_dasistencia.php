<div class="box-body">
                    <div class="form-group">
                      <label>Fecha Registro</label>
                      <input type="hidden" name="id_asistencia" value="<?php echo $_POST['id_asistencia']?>"/>
                      <input type="date" class="form-control" name="fecha" value="<?php echo $dasistencia->fecharegistro; ?>" required/>
                    </div>
                    <div class="form-group">
                      <label>Alumno</label>
                      <input readonly="true" type="text" class="form-control" name="alumno" value="<?php echo $dasistencia->nombre.' '.$dasistencia->apellido; ?>" maxlength="16" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);" required>
                    </div>
                    <div class="form-group">
                      <label>Curso</label>
                      <input readonly="true" type="text" class="form-control" name="curso" value="<?php echo $dasistencia->descripcion; ?>" maxlength="16" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);" required>
                    </div>
                    <div class="form-group">
                      <label>Grupo</label>
                      <input readonly="true" type="text" class="form-control" name="grupo" value="<?php echo $dasistencia->grado.' '.$dasistencia->seccion.' de '.$dasistencia->nivel; ?>" maxlength="16" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);" required>
                    </div>
                    <div class="form-group">
                    <select name="asistencia" class="form-control">
                      <?php if ($dasistencia->estado == 'Asistio') {
                       echo "<option value='A' selected>Asistio</option>";
                       echo "<option value='F'>Falto</option>";
                       echo "<option value='J'>Justificado</option>";
                       
                     } if ($dasistencia->estado == 'Falto') {
                       echo "<option value='A'>Asistio</option>";
                       echo "<option value='F' selected>Falto</option>";
                       echo "<option value='J'>Justificado</option>";
                       
                     }
                     if ($dasistencia->estado == 'Justificacion') {
                       echo "<option value='A'>Asistio</option>";
                       echo "<option value='F'>Falto</option>";
                       echo "<option value='J' selected>Justificacion</option>";
                       
                     }
                     ?>
                     </select>
                     </div>

                  </div>