<div class="box box-primary" id="div2" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Usuario</h3>
                </div>
                <form role="form" action="../negocio/regusuario.php" method="POST">
                  <div class="box-body">                    
                    <div class="form-group">
                        <label for="exampleInputPersona">Persona - <small>Falta Optimizar por ahora ingresar PersonaID existente</small></label>
                      <input type="text" class="form-control" name="persona" placeholder="Seleccione Persona">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRol">Rol - <small>Falta Optimizar por ahora ingresar RolID existente</label>
                      <input type="text" class="form-control" name="rol" placeholder="Seleccione Rol">
                    </div> 
                      <div class="form-group">
                      <label for="exampleInputUsuario">Usuario</label>
                      <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPregunta">Pregunta Secreta</label>
                      <input type="text" class="form-control" name="pregunta" placeholder="Pregunta Secreta">  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Respuesta Secreta</label>
                      <input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta">  
                    </div>
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
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                  </div>
                </form>
              </div>