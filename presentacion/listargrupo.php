<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="divlgrupo" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Rol</h3>
                </div>
                <form role="form"> asd
                  <div class="box-body">                    
                    <table>
                    <caption> Lista de Roles</caption>;
                    <th>IdRol</th>
                    <th>Descripcion</th>
                    <th>FechaAlta</th>
                    <th>FechaVigencia</th>
                    <th>Estado</th>
                    
                    <?php 
                    $consulta = mysql_query('Select * From rol');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr>
                    <td><?php echo $rol['idrol']?> </td>
                    <td><?php echo $rol['descripcion']?> </td>
                    <td><?php echo $rol['fechaalta']?> </td>
                    <td><?php echo $rol['fechavigencia']?> </td>
                    <td><?php echo $rol['estado']?> </td>
                </tr>
                    <?php } ?>
</table>
                  </div>
                  <div class="box-footer">
                      
                  </div>
                </form>
              </div>

