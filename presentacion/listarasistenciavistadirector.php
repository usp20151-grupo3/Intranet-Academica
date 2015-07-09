<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet'); 
?>
<!--<script>
  $(document).ready(function(){

    $(document).off('submit','#directorasistencia');
  $(document).on('submit','#directorasistencia',function(event){
    event.preventDefault();
    var buscar_asistencia = $(this).find("input[name=buscar-directorasistencia]").val();
    $.post('../negocio/buscardirasistencia.php',{buscar_persona:buscar_persona},function(result){
        $('.table-search-director-asistencia').html(result);
    });
  });

  });
</script>-->

<div class="box box-primary" id="divdirasistencia" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Asistencia de Alumnos</h3>
                    <br/><!--<form id="directorasistencia">
                    <input maxlength="20" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  name="buscar-directorasistencia"/><button>Buscar</button>
                    </form>-->
                </div>
                <form role="form">
                  <div class="box-body table-search-director-asistencia">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Curso</th>
                    <th class="box-body">Grupo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Acción</th>
                    <?php 
                    $consulta = mysql_query("call reporte_asistencia('')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-body"> <?php echo $rol['grado'].' '.$rol['seccion'].' de '.$rol['nivel'] ?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-dirasistencia"
                                data-id="<?php echo $rol['idasistencia']?>"
                                >Editar</button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>
                  </div>
                </form>
</div>

  <div class="modal fade" id="Modaldirasistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Asistencia</h4>
                  </div>
                  <form role="form" action="../negocio/actualizardasistencia.php" method="POST">
                  <div class="modal-body body-dirasistencia">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>  
              </div>  

          </div> 