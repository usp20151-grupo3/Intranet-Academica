<?php mysql_connect('localhost', 'root', '');
                    mysql_select_db('intranet');
?>
<script>
  $(document).ready(function(){

  $(document).off('submit','#searchcad');
  $(document).on('submit','#searchcad',function(event){
    event.preventDefault();
    var buscar_cad = $(this).find("input[name=buscar-cad]").val();
    $.post('../negocio/buscarcad.php',{buscar_cad:buscar_cad},function(result){
        $('.table-search-cad').html(result);
    });
  });

  });
</script>
<div class="box box-primary" id="listcad" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Curso - Grupo de Estudio asignado a Docente <small>- Busqueda por apellido </small></h3> 
                <br/><form id="searchcad">
                    <input maxlength="50" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  name="buscar-cad"/><button>Buscar</button></form>
                </div>
                <form role="form">
                  <div class="box-body table-search-cad">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Curso</th>
                    <th class="box-body">Docente</th>
                    <th class="box-body">Grado</th>
                    <th class="box-body">Fecha Vigencia</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_cad('')");
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
                  </div>
                </form>
</div>
<div class="modal fade" id="Modalecad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Curso - Grupo de Estudio asignado a Docente </h4>
                  </div>
                  <form role="form" action="../negocio/actualizarcad.php" method="POST">
                  <div class="modal-body body-cad">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div>