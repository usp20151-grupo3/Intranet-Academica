<div class="box-body">

                  <div class="form-group">
                      
                      <input type="hidden" name="id_usuario" value="<?php echo $_POST['id_usuario']?>"></input>
                    </div>

                  <div class="checkbox">
                      <label>
                        <?php if ($usuario->estado == '1') {
                       echo "<input type='checkbox' name='checkbox' checked='true'> Habilitar";
                       

                     } else {
                       echo "<input type='checkbox' name='checkbox'> Habilitar";
                     }
                      ?>
                      </label>
                    </div>
                  </div>