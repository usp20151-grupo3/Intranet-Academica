
<div class="box box-primary" id="regcurso" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Curso</h3>
                </div>
                <form role="form" action="../negocio/regcurso.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Curso</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Ingrese Nombre de Curso" maxlength="50" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  required>
                    </div>
                    <div class="form-group">
                      <label>Codigo</label>
                      <input type="text" class="form-control" name="codigo" placeholder="Codigo" onkeypress="return validNumber(event);" ondrop="return false;" onpaste="return false;" maxlength="16" required>
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

              