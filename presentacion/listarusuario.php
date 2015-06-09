<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="divlusuario" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Usuario - <small>Falta Encriptar Password</small></h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Usuario</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Rol</th>
                    <th class="box-body">Fecha Alta</th>
                    <th class="box-body">Fecha Vigencia</th>
     
                    
                    <?php 
                    $consulta = mysql_query('call reporte_usuario()');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
   
                    <td class="box-body"><?php echo $rol['usuario']?> </td>
                    <td class="box-body"><?php echo $rol['nombre']?> </td>
                    
                    <td class="box-body"><?php echo $rol['apellido']?> </td>
                    <td class="box-body"><?php echo $rol['rol']?> </td>
                
                    <td class="box-body"><?php echo $rol['fechaalta']?> </td>
                    <td class="box-body"><?php echo $rol['fechavigencia']?> </td>
                    
                </tr>
                    <?php } mysql_close(); ?>
</table>
                       </div>
                </form>
</div>
            
                      