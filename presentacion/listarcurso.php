<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
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
                    <?php 
                    $consulta = mysql_query('call reporte_curso()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idcurso']?> </td>
                    <td class="box-body"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-body"> <?php echo $rol['codigo']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                </tr>
                    <?php } mysql_close(); ?>
                    </table>
                  </div>
                </form>
</div>