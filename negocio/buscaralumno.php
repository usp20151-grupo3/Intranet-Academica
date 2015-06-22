<?php
require_once '../conexion/conpdo.php';
$pdo=conpdo();


?>
<table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $listaralumno = $pdo->prepare("select alumno.idalumno, persona.idpersona,persona.nombre,persona.apellido, alumno.codigo, 
case alumno.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona
where persona.apellido like '%".$_POST['buscar_al']."%'");
                    $listaralumno->execute();
                    $result_alumno = $listaralumno -> fetchAll(PDO::FETCH_ASSOC);
                    foreach($result_alumno as $rol){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idalumno']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-alumno"
                                data-id="<?php echo $rol['idalumno']?>"
                                data-idpersona="<?php echo $rol['idpersona'];?>" >Editar</button>
                                </td>
                </tr>
                    <?php } $pdo=null; ?>
                    </table>