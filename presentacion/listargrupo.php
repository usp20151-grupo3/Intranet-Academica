<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<script>
  $(document).ready(function(){

    $(document).off('submit','#searchgrupo');
  $(document).on('submit','#searchgrupo',function(event){
    event.preventDefault();
    var buscar_grupo = $(this).find("select[name=buscar-grupo]").val();
    $.post('../negocio/buscargrupo.php',{buscar_grupo:buscar_grupo},function(result){
        $('.table-search-grupo').html(result);
    });
  });

  });
</script>

<div class="box box-primary" id="listgrupo" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Grupo <small>- Busqueda por grado </small></h3>
                <br/>
                <form id="searchgrupo">
                    
                    <select name="buscar-grupo">
                     <option value="">Listar Todo</option>
                     <option value="1">Primero</option>
                     <option value="2">Segundo</option>
                     <option value="3">Tercero</option>
                     <option value="4">Cuarto</option>
                     <option value="5">Quinto</option>
                     <option value="6">Sexto</option>
                     </select>
                    <button>Buscar</button></form>

                    </div>
                <form role="form">
                  <div class="box-body table-search-grupo">                    
                    <table border="1" class="box box-primary">
                        
                    <th class="box-body">Id</th>
                    <th class="box-body">Nivel</th>
                    <th class="box-body">Grado</th>
                    <th class="box-body">Sección Alta</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    
                    <?php 
                    $consulta = mysql_query("Select idgrupo,case nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case grado 
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado
, seccion, fecharegistro, case estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from grupo 
where grado like '%'");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idgrupo']?> </td>
                    <td class="box-body"> <?php echo $rol['nivel']?> </td>
                    <td class="box-body"> <?php echo $rol['grado']?> </td>
                    <td class="box-body"> <?php echo $rol['seccion']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-grupo"
                                data-id="<?php echo $rol['idgrupo']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } mysql_close();?>
</table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modalegrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Grupo de Estudio </h4>
                  </div>
                  <form role="form" action="../negocio/actualizargrupo.php" method="POST">
                  <div class="modal-body body-grupo">
                 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>  
              </div>  

          </div>