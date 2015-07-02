<div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Rol <small> <?php echo $mens ?></small></label>
                      <input type="hidden" name="id_rol" value="<?php echo $_POST['id_rol']?>"></input>
                      <input type="text" class="form-control" name="descripcion" value="<?php echo $rol->descripcion; ?>" maxlength="30" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);" required <?php echo $editrol; ?>/>
                    </div>
                    <div class="form-group">
                          <label for="exampleInputDate">Fecha Vigencia</label>
                      <input type="date" class="form-control" name="date" value="<?php echo $rol->fechavigencia; ?>" required/>
                    </div>
                    <?php if ($rol->descripcion<>'Administrador') {
                    
                     ?>
                    <div class="checkbox">
                      <label>
                      <?php if ($rol->estado == '1') {
                       echo "<input type='checkbox' name='checkbox' checked='true'> Habilitar";
                     } else {
                       echo "<input type='checkbox' name='checkbox'> Habilitar";
                     }
                      }?>
                      </label>
                    </div>
                  </div>

                  </div>