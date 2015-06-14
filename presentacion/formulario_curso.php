<?php

?>
<div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Curso</label>
                      <input type="hidden" name="id_curso" value="<?php echo $_POST['id_curso']?>"></input>
                      <input type="text" class="form-control" name="descripcion" value="<?php echo $curso->descripcion; ?>" required>
                    </div>
                    <div class="form-group">
                      <label>Codigo</label>
                      <input type="text" class="form-control" name="codigo" value="<?php echo $curso->codigo; ?>" required>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>

                  </div>