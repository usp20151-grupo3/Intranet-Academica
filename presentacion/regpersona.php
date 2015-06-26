<div class="box box-primary" id="div3" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Persona</h3>
                </div>
                <form role="form" action="../negocio/regpersona.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombres" maxlength="30" onkeypress="return validLetter(event);" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsuario">Apellido</label>
                      <input type="text" class="form-control" name="apellido" placeholder="Apellidos" maxlength="30" onkeypress="return validLetter(event);" required>
                    </div> 
                    <div class="form-group">
                      <label>Documento Nacional de Identidad</label>
                      <input type="text" class="form-control" name="dni" placeholder="DNI" maxlength="8" onkeypress="return validNumber(event);" required>
                    </div>
                    <div class="form-group">
                     <label>Sexo</label><br>
                     <select name="sexo" class="form-control">
                     <option value="1">Masculino</option>
                     <option value="2">Femenino</option>
                     </select>

                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Direccion</label>
                      <input type="text" class="form-control" name="direccion" placeholder="Direccion" maxlength="100" required>  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Telefono</label>
                      <input type="text" class="form-control" name="telefono" placeholder="Teléfono" maxlength="15" onkeypress="return validNumber(event);" required>  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" maxlength="50" required>  
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
