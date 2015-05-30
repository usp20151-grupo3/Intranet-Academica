

<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="divlgrupo" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Rol</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-header">Id</th>
                    <th class="box-header">  Rol</th>
                    <th class="box-header">FechaAlta</th>
                    <th class="box-header">FechaVig.</th>
                    <th class="box-header">Estado</th>
                    
                    <?php 
                    $consulta = mysql_query('Select * From rol');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF class="box-header">
                    <td class="box-header"><?php echo $rol['idrol']?> </td>
                    <td class="box-header"> <?php echo $rol['descripcion']?> </td>
                    <td class="box-header"> <?php echo $rol['fechaalta']?> </td>
                    <td class="box-header"> <?php echo $rol['fechavigencia']?> </td>
                    <td class="box-header"> <?php echo $rol['estado']?> </td>
                </tr>
                    <?php } ?>
</table>
                  </div>
                  <div class="box-footer">
                      
                  </div>
                </form>
              </div>

