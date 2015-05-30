
<div class="box box-primary" id="divperfil" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Editar Perfil</h3>
                </div>
                <form role="form" action="../negocio/perfil.php" method="POST">
                  <div class="box-body">                    
                    <div class="form-group">
                      <label for="exampleInputPregunta">Pregunta Secreta</label>
                      <input type="text" class="form-control" name="secreta" placeholder="Pregunta Secreta">  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Respuesta Secreta</label>
                      <input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta">  
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>
                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Confirmar</button> 
                      <button type="button" class="btn btn-primary" name="divpassword" data-toggle="modal" data-target="#myModal">Cambiar Password</button>
                  </div>
                </form>
              </div>