<?php 


?>
<div class="box box-primary" id="divperfil">
                <div class="box-header">
                    <h3 class="box-title">Editar Perfil - <small>Debe Relogear para que los cambios surtan efecto</small></h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <div class="form-group"><?php {?>
                        <label for="exampleInputDireccion">Dirección  <li class="fa fa-long-arrow-right"> </li>     </label>
                      <label>    <?php echo $tempd ?>    </label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaldir"> Editar </a></li>  
 
                    </div>
                      <div class="form-group">
                          <label for="exampleInputEmail">Email   <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $tempe ?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalema"> Editar </a></li>

                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Teléfono  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $tempt ?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaltel"> Editar </a></li>

                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Pregunta  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $tempp ?>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalpre"> Editar </a></li>
 
                    </div>
                      <div class="form-group">
                      <label for="exampleInputTelefono">Respuesta  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $tempr ?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalres"> Editar </a></li>
                    <?php }?>
                    </div>
                  </div>
                  <div class="box-footer">
                      <button type="button" class="btn btn-primary" name="divpassword" data-toggle="modal" data-target="#myModal">Cambiar Password</button>
                  </div>
                </form>
              </div>