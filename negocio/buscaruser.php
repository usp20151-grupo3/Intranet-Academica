<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

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
                    $consulta = mysql_query("call reporte_usuario_his('".$_POST['buscar_user']."')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
   
                    <td class="box-body"><?php echo $rol['Login']?> </td>
                    <td class="box-body"><?php echo $rol['Nombres']?> </td>   
                    <td class="box-body"><?php echo $rol['Grupo']?> </td>
                    <td class="box-body"><?php if($rol['facceso']==''){echo 'No ha logeado a la fecha';} else{
                        echo $rol['facceso'];
                        }?> </td>
                    <td class="box-body"><?php if($rol['ip']==''){echo 'No ha logeado a la fecha';} 
                    else{
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