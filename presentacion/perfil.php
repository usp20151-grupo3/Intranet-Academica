<?php 
if (isset ($_SESSION['idusuario'])){ 
                $dir = $_SESSION['direccion'];
                $cor = $_SESSION['email'];
                $tel = $_SESSION['telefono'];
                $resp = $_SESSION['respuesta'];
                $preg = $_SESSION['pregunta'];
                
	}
?>
<div class="box box-primary" id="divperfil" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Editar Perfil - <small>Debe Relogear para que los cambios surtan efecto</small></h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <div class="form-group">
                        <label for="exampleInputDireccion">Dirección  <li class="fa fa-long-arrow-right"> </li>     </label>
                      <label>    <?php print($dir)?>    </label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaldir"> Editar </a></li>  
                      <!--<input type="text" class="form-control" name="secreta" placeholder="Pregunta Secreta">-->  
                    </div>
                      <div class="form-group">
                          <label for="exampleInputEmail">Email   <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php print($cor)?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalema"> Editar </a></li>
                      <!--<input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta"> --> 
                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Teléfono  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php print($tel)?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaltel"> Editar </a></li>
                      <!--<input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta"> --> 
                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Pregunta  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php print($tel)?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaltel"> Editar </a></li>
                      <!--<input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta"> --> 
                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Respuesta  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php print($resp)?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalres"> Editar </a></li>
                      <!--<input type="text" class="form-control" name="respuesta" placeholder="Respuesta Secreta"> --> 
                    </div>
                  </div>
                  <div class="box-footer">
                      <button type="button" class="btn btn-primary" name="divpassword" data-toggle="modal" data-target="#myModal">Cambiar Password</button>
                  </div>
                </form>
              </div>