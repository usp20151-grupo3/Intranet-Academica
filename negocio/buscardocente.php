<?php require_once '../conexion/conpdo.php';
$pdo=conpdo();
?>

<table border="1" class="box box-primary">
                    
                    <th class="box-body">IdTrabajador</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $listardocente = $pdo->prepare("call reporte_docente('".$_POST['buscar_docente']."')");
                    $listardocente->execute();
                    $result_docente = $listardocente -> fetchAll(PDO::FETCH_ASSOC);
                    foreach($result_docente as $rol){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idtrabajador']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-docente"
                                data-id="<?php echo $rol['idtrabajador']?>"
                                data-idpersona="<?php echo $rol['idpersona'];?>" >Editar</button>
                                </td>
                </tr>
                    <?php } $pdo=null; ?>
                    </table>