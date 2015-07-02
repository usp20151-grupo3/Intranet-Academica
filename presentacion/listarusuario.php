<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>
<script>
  $(document).ready(function(){

    $(document).off('submit','#searchuser');
  $(document).on('submit','#searchuser',function(event){
    event.preventDefault();
    var buscar_user = $(this).find("input[name=buscar-user]").val();
    $.post('../negocio/buscaruser.php',{buscar_user:buscar_user},function(result){
        $('.table-search-user').html(result);
    });
  });

  });
</script>
<div class="box box-primary" id="divlusuario" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Usuario <small>- Busqueda por Login - Nota: El IP sale ::1 porque se está logeando desde localhost</small></h3>
                <br/>
                <form id="searchuser">
                    <input maxlength="30" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  name="buscar-user"/><button>Buscar</button></form>
                    </div>
                <form role="form">
                  <div class="box-body table-search-user">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Login</th>
                    <th class="box-body">Nombres</th>
                    <th class="box-body">Rol</th>
                    <th class="box-body">Fecha <small>de Ultimo Acceso</small></th>
                    <th class="box-body">IP <small>de Ultimo Acceso</small></th>
                    <th class="box-body">Fecha Alta</th>
                    <th class="box-body">Fecha Vigencia</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Acción</th>
     
                    
                    <?php 
                    $consulta = mysql_query("call reporte_usuario_his('')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
   
                    <td class="box-body"><?php echo $rol['Login']?> </td>
                    <td class="box-body"><?php echo $rol['Nombres']?> </td>   
                    <td class="box-body"><?php echo $rol['Grupo']?> </td>
                    <td class="box-body"><?php if($rol['facceso']==''){echo 'No ha logeado a la fecha';} else{
                        echo $rol['facceso'];
                        }?> </td>
                    <td class="box-body"><?php if($rol['ip']==''){echo 'No ha logeado a la fecha';} else{
                        echo $rol['ip'];
                        }?> </td>
                    <td class="box-body"><?php echo $rol['falta']?> </td>
                    <td class="box-body"><?php echo $rol['fvig']?> </td>
                    <td class="box-body"><?php echo $rol['estado']?> </td>
                    <td class="box-body"> 
                      <button type="button" class="btn btn-default btn-flat btn-darbaja"
                                data-idb="<?php echo $rol['idusuario']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } mysql_close(); ?>
</table>
                       </div>
                </form>
</div>

            
                      <div class="modal fade" id="Modaldarbaja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Habilitar o Inhabilitar Usuario</h4>
                  </div>
                  <form role="form" action="../negocio/actualizarusuario.php" method="POST">
                  <div class="modal-body body-darbaja">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div>