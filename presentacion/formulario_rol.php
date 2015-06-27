<div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Rol</label>
                      <input type="hidden" name="id_rol" value="<?php echo $_POST['id_rol']?>"></input>
                      <input type="text" class="form-control" name="descripcion" value="<?php echo $rol->descripcion; ?>" maxlength="30" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);" required>
                    </div>
                    <div class="form-group">
                          <label for="exampleInputDate">Fecha Vigencia</label>
                      <input type="date" class="form-control" name="date" value="<?php echo $rol->fechavigencia; ?>" required>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox" checked="true"> Habilitar
                      </label>
                    </div>
                  </div>

                  </div>