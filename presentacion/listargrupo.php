<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="divlgrupo" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Rol</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1">
                    
                    <th>Id</th>
                    <th>  Rol</th>
                    <th>FechaAlta</th>
                    <th>FechaVig.</th>
                    <th>Estado</th>
                    
                    <?php 
                    $color_row=array('#cccccc', 'lightblue');
                    $ind_color=0;
                    $consulta = mysql_query('Select * From rol');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=${color_row[$ind_color]>
                    <td><?php echo $rol['idrol']?> </td>
                    <td> <?php echo $rol['descripcion']?> </td>
                    <td> <?php echo $rol['fechaalta']?> </td>
                    <td> <?php echo $rol['fechavigencia']?> </td>
                    <td> <?php echo $rol['estado']?> </td>
                </tr>
                    <?php } ?>
</table>
                  </div>
                  <div class="box-footer">
                      
                  </div>
                </form>
              </div>

