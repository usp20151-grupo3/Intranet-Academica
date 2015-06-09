<?php ?>

<div class="modal fade" id="Modalpre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form role="form" action="../negocio/cambiarpregunta.php" method="POST">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cambiar Pregunta Secreta</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="form-group">
                      <label for="exampleInputUsuario">Nueva Pregunta Secreta</label>
                      <input type="text" class="form-control" name="nuevapregunta" placeholder="Nueva Pregunta Secreta">
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