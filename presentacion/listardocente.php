<?php require_once '../conexion/conpdo.php';
$pdo=conpdo();
?>
<script>
  $(document).ready(function(){

    $(document).off('submit','#searchdoc');
  $(document).on('submit','#searchdoc',function(event){
    event.preventDefault();
    var buscar_docente = $(this).find("input[name=buscar-doc]").val();
    $.post('../negocio/buscardocente.php',{buscar_docente:buscar_docente},function(result){
        $('.table-search-doc').html(result);
    });
  });

  });
</script>
<div class="box box-primary" id="divldocente" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar docente</h3>
                    <br/><form id="searchdoc"><input name="buscar-doc"/><button>Buscar</button></form>
                </div>
                <form role="form">
                  <div class="box-body table-search-doc">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">IdTrabajador</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $listardocente = $pdo->prepare("call reporte_docente('')");
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
                    <?php } ?>
                    </table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modaledocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Docente</h4>
                  </div>
                  <form role="form" action="../negocio/actualizartrabajador.php" method="POST">
                  <div class="modal-body body-docente">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>  
              </div>  

          </div> 