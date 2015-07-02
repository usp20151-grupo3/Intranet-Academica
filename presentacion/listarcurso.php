<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>
<script>
  $(document).ready(function(){

    $(document).off('submit','#searchcurso');
  $(document).on('submit','#searchcurso',function(event){
    event.preventDefault();
    var buscar_curso = $(this).find("input[name=buscar-curso]").val();
    $.post('../negocio/buscarcurso.php',{buscar_curso:buscar_curso},function(result){
        $('.table-search-cur').html(result);
    });
  });

  });
</script>
<div class="box box-primary" id="divlcurso" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar curso <small>- Busqueda por descripción Curso </small></h3>
                <br/><form id="searchcurso">
                    <input maxlength="50" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  name="buscar-curso"/><button>Buscar</button></form>
                </div>
                <form role="form">
                  <div class="box-body table-search-cur">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>                 
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("call reporte_curso('')");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
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
                    <?php } mysql_close(); ?>
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