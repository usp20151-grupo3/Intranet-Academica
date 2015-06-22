
<div class="box box-primary" id="regcurso" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Curso</h3>
                </div>
                <form role="form" action="../negocio/regcurso.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Curso</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Ingrese Nombre de Curso" onkeypress="return validLetter(event);" required>
                    </div>
                    <div class="form-group">
                      <label>Codigo</label>
                      <input type="text" class="form-control" name="codigo" placeholder="Codigo" onkeypress="return validNumber(event);" maxlength="16" required>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                  </div>
                </form>
              </div>

              