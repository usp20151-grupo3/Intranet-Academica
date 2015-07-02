<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');?>

<table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">DNI</th>
                    <th class="box-body">Sexo</th>
                    <th class="box-body">Direccion</th>
                    <th class="box-body">Telefono</th>
                    <th class="box-body">Email</th>
                    <th class="box-body">Fecha de Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_persona('".$_POST['buscar_persona']."')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idpersona']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['dni']?> </td>
                    <td class="box-body"> <?php echo $rol['sexo']?> </td>
                    <td class="box-body"> <?php echo $rol['direccion']?> </td>
                    <td class="box-body"> <?php echo $rol['telefono']?> </td>
                    <td class="box-body"> <?php echo $rol['email']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-editar"
                                data-id="<?php echo $rol['idpersona']?>"> Editar </button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>