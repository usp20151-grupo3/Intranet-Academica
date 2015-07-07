<?php mysql_connect('localhost', 'root', '');
mysql_select_db('intranet');
?>
<table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Curso</th>
                    <th class="box-body">Docente</th>
                    <th class="box-body">Grado</th>
                    <th class="box-body">Fecha Vigencia</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_cad('".$_POST['buscar_cad']."')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idcad'];?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion'];?> </td>
                    <td class="box-body"> <?php echo $rol['nombre'].' '.$rol['apellido'];?> </td>
                    <td class="box-body"> <?php echo $rol['grado'].' '.$rol['seccion'].' de '.$rol['nivel'];?> </td>
                    <td class="box-body"> <?php echo $rol['fechavigencia'];?> </td>
                    <td class="box-body"> <?php echo $rol['estado'];?> </td>
                    <td class="box-body"> <button class="btn btn-default btn-flat btn-e-cad"
                                data-idcad="<?php echo $rol['idcad']?>"
                                >Editar</button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>