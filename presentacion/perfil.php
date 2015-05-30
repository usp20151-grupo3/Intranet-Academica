<?php 
if (isset ($_SESSION['idusuario'])){ 
                $dir = $_SESSION['direccion'];
                $cor = $_SESSION['email'];
                $tel = $_SESSION['telefono'];
	}
?>
<div class="box box-primary" id="divperfil" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Editar Perfil</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <div class="form-group">
                        <label for="exampleInputDireccion">Dirección  <li class="fa fa-long-arrow-right"> </li>     </label>
                      <label>    <?php print($dir)?>    </label><li class="fa fa-file-text-o"> <li class="fa fa-long-arrow-right" data-toggle="modal" data-target="#myModal"></li> <a href="#" class="inline"> Editar </a></li>  
                      <!--<input type="text" class="form-control" name="secreta" placeholder="Pregunta Secreta">-->  
                    </div>
                      <div class="form-group">
                          <label for="exampleInputEmail">Email   </label>
                      <label>    <?php print($cor)?></label>
                      <!--<input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta"> --> 
                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Teléfono  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php print($tel)?></label>
                      <!--<input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta"> --> 
                    </div>
                  </div>
                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Confirmar</button> 
                      <button type="button" class="btn btn-primary" name="divpassword" data-toggle="modal" data-target="#myModal">Cambiar Password</button>
                  </div>
                </form>
              </div>