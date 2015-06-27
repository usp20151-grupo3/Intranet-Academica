<?php ?>

<div class="modal fade" id="Modalres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form role="form" action="../negocio/cambiarrespuesta.php" method="POST">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cambiar Respuesta Secreta</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="form-group">
                      <label for="exampleInputUsuario">Nueva Respuesta Secreta</label>
                      <input type="text" class="form-control" name="nuevarespuesta" placeholder="Nueva Respuesta Secreta" maxlength="20" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>  
              </div>  

          </div>
    </form>
    </div>