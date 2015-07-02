<?php

?>

                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Curso</label>
                      <input type="hidden" name="id_curso" value="<?php echo $_POST['id_curso']?>"></input>
                      <input type="text" class="form-control" name="descripcion" value="<?php echo $curso->descripcion; ?>" maxlength="50" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);" required>
                    </div>
                    <div class="form-group">
                      <label>Codigo</label>
                      <input type="text" class="form-control" name="codigo" value="<?php echo $curso->codigo; ?>" maxlength="16" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);" required>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if ($curso->estado == '1') {
                       echo "<input type='checkbox' name='checkbox' checked='true'> Habilitar";
                       

                     } else {
                       echo "<input type='checkbox' name='checkbox'> Habilitar";
                     }
                      ?>
                      </label>
                    </div>
                  </div>

