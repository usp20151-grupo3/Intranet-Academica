                <div class="box box-primary" id="div1" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Grupo de Usuarios - Rol</h3>
                </div>
                <form role="form" action="../negocio/reggrupo.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Grupo</label>
                      <input type="text" class="form-control" name="grupo" placeholder="Grupo">
                      <div class="form-group">
                      <label for="exampleInputDate">Fecha Vigencia</label>
                      <input type="date" class="form-control" name="date" placeholder="Fecha Vigencia">
                    </div>                                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="submit" name="submit">Confirmar</button>
                  </div>
                 </div>
                </form>             
             </div>          
