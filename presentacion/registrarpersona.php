
<div class="box box-primary" id="div3">
                <div class="box-header">
                  <h3 class="box-title">Registro Persona</h3>
                </div>
                <form role="form" action="../negocio/registrarpersona.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsuario">Apellido</label>
                      <input type="text" class="form-control" name="apellido" placeholder="Apellidos">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Documento Nacional de Identidad</label>
                      <input type="text" class="form-control" name="dni" placeholder="DNI">
                    </div>
                      <div class="form-group">
                      <label>Sexo</label>
                      <br>
                      <select name="sexo">
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>
                      </select>
                      </div>
<!--                    <div class="form-group">
                        <label for="exampleInputPregunta">Sexo - <small>Falta Optimizar, 1 = Hombre & 2 = Mujer</small></label>
                      <input type="text" class="form-control" name="sexo" placeholder="Sexo">  
                    </div>-->
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Direccion</label>
                      <input type="text" class="form-control" name="direccion" placeholder="Direccion">  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Telefono</label>
                      <input type="text" class="form-control" name="telefono" placeholder="Teléfono">  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Correo Electrónico">  
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
