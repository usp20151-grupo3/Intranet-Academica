<?php 

mysql_connect('localhost', 'root', '');
mysql_select_db('intranet');

$consulta = mysql_query("call reporte_perfil('".$_SESSION['idusuario']."')");
$perfil = mysql_fetch_array($consulta)

?>
<div class="box box-primary" id="divperfil" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Editar Perfil</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <div class="form-group">
                        <label>Dirección  <li class="fa fa-long-arrow-right"> </li>     </label>
                      <label>    <?php echo $perfil['direccion']; ?>    </label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaldir"> Editar </a></li>  
                      
                    </div>
                      <div class="form-group">
                          <label>Email   <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $perfil['email']; ?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalema"> Editar </a></li>
                      
                    </div>
                      <div class="form-group">
                      <label>Teléfono  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $perfil['telefono']; ?> </label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modaltel"> Editar </a></li>
                      
                    </div>
                      <div class="form-group">
                      <label>Pregunta  <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo $perfil['pregunta']; ?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalpre"> Editar </a></li>
                      
                    </div>
                      <div class="form-group">
                      <label>Respuesta <li class="fa fa-long-arrow-right"> </li> </label>
                      <label>    <?php echo substr($perfil['respuesta'],0,5); mysql_close()?></label>   <li class="fa fa-file-text-o"> <a href="#" class="inline" data-toggle="modal" data-target="#Modalres"> Editar </a></li>
                      
                    </div>
                  </div>
                  <div class="box-footer">
                      <button type="button" class="btn btn-primary" name="divpassword" data-toggle="modal" data-target="#myModal">Cambiar Password</button>
                  </div>
                </form>
              </div>