<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>
<script>
  $(document).ready(function(){

    $(document).off('submit','#searchal');
  $(document).on('submit','#searchal',function(event){
    event.preventDefault();
    var buscar_al = $(this).find("input[name=buscar-al]").val();
    $.post('../negocio/buscaralumno.php',{buscar_al:buscar_al},function(result){
        $('.table-search').html(result);
    });
  });

  });
</script>
<div class="box box-primary" id="divlalumno" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Alumno</h3>
                    <br/><form id="searchal"><input maxlength="30" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);"  name="buscar-al"/><button>Buscar</button></form>
                </div>
                <form role="form">
                  <div class="box-body table-search">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    <?php 
                    $consulta = mysql_query("select alumno.idalumno, persona.idpersona,persona.nombre,persona.apellido, alumno.codigo, 
case alumno.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona
where persona.apellido like '%%'");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idalumno']?> </td>
                    <td class="box-body"> <?php echo $rol['nombre']?> </td>
                    <td class="box-body"> <?php echo $rol['apellido']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button class="btn btn-default btn-flat btn-e-alumno"
                                data-id="<?php echo $rol['idalumno']?>"
                                data-idpersona="<?php echo $rol['idpersona'];?>" >Editar</button>
                                </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>
                  </div>
                </form>
</div>

<div class="modal fade" id="Modalealumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Alumno_</h4>
                  </div>
                  <form role="form" action="../negocio/actualizaralumno.php" method="POST">
                  <div class="modal-body body-alumno">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>  
              </div>  

          </div> 