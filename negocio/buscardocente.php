<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');?>

<table border="1" class="box box-primary">
                    
                    <th class="box-body">IdTrabajador</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_docente('".$_POST['buscar_docente']."')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idtrabajador']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button class="btn btn-default btn-flat btn-e-docente"
                                data-id="<?php echo $rol['idtrabajador']?>"
                                data-idpersona="<?php echo $rol['idpersona'];?>" >Editar</button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>