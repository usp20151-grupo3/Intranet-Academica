<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet'); 

?>

<table border="1" class="box box-primary">
                    
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Curso</th>
                    <th class="box-body">Grupo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Acción</th>
                    <?php 
                    $consulta = mysql_query("call reporte_asistencia_alumno_v_docente('".$_POST['idt']."','".$_POST['buscar_dasis']."')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-body"> <?php echo $rol['grado'].' '.$rol['seccion'].' de '.$rol['nivel'] ?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-dasistencia"
                                data-id="<?php echo $rol['idasistencia']?>"
                                >Editar</button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>