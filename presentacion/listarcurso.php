<?php require_once '../conexion/conpdo.php';
$pdo=conpdo();
?>

<div class="box box-primary" id="divlcurso" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar curso</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>                 
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $listarcurso = $pdo->prepare("call reporte_curso()");
                    $listarcurso->execute();
                    $result_curso = $listarcurso -> fetchAll(PDO::FETCH_ASSOC);
                    foreach($result_curso as $rol){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idcurso']?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> 
                      <button type="button" class="btn btn-default btn-flat btn-e-curso"
                                data-id="<?php echo $rol['idcurso']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } $pdo=null; ?>
                    </table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modalecurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Curso</h4>
                  </div>
                  <form role="form" action="../negocio/actualizarcurso.php" method="POST">
                  <div class="modal-body body-curso">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div> 