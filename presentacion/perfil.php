<!--
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Perfil</h4>
                  </div>
                  <div class="modal-body">
                a
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div> /.modal-content 
              </div> /.modal-dialog 

          </div> /.example-modal -->
<div class="box box-primary" id="divperfil" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Editar Perfil</h3>
                </div>
                <form role="form" action="../negocio/perfil.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Antigua Password</label>
                      <input type="password" class="form-control" name="oldpassword" placeholder="Antigua Contraseña">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPersona">Nueva Password</label>
                      <input type="password" class="form-control" name="newpassword" placeholder="Nueva Contraseña">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirme Nueva Password</label>
                      <input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirme Nueva Contraseña">
                    </div>
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
                  </div>
                </form>
              </div>