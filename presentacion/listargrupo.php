<?php mysqli_connect('localhost', 'root', '', 'intranet');
?>

<div class="box box-primary" id="divlistgrupo" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Editar Perfil - <small>Debe Relogear para que los cambios surtan efecto</small></h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table>
                    <caption> Lista de Roles</caption>;
                    <th>IdRol</th>
                    <th>Descripcion</th>
                    <th>FechaAlta</th>
                    <th>FechaVigencia</th>
                    <th>Estado</th>
                    <th><input type="submit" name="BtnEliminar" value="Eliminar"/></th>
                    <?php 
                    $consulta = mysqli_query('Select * From rol');
                    while ($rol = mysqli_fetch_array($consulta)); ?>
                   <tr>
                    <td><?php echo $rol['idrol']?></td>
                    <td><?php echo $rol['Descripcion']?></td>
                    <td><?php echo $rol['FechaAlta']?></td>
                    <td><?php echo $rol['FechaVigencia']?></td>
                </tr>
</table>
                  </div>
                  <div class="box-footer">
                      <button type="button" class="btn btn-primary" name="divpassword" data-toggle="modal" data-target="#myModal">Cambiar Password</button>
                  </div>
                </form>
              </div>

