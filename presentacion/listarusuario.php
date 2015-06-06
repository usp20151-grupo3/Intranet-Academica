
<div class="box box-primary" id="divlusuario">
                <div class="box-header">
                    <h3 class="box-title">Listar Usuario</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                      <table border="1" class="box box-primary">
                    

                    <th class="box-body">Usuario</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>                   
                    <th class="box-body">Rol</th>
                    <th class="box-body">FechaAlta</th>
                    <th class="box-body">FechaVigencia</th>
                    <?php foreach($usuarios as $usuario){?>
                   <tr bgcolor=#F0FFFF>
                       
                    <td class="box-body"><?php echo $usuario->usuario;?> </td>
                    <td class="box-body"><?php echo $usuario->nombre;?> </td>
                    <td class="box-body"><?php echo $usuario->apellido;?> </td>           
                    <td class="box-body"><?php echo $usuario->rol;?> </td>
                    <td class="box-body"><?php echo $usuario->fechaalta;?> </td>
                    <td class="box-body"><?php echo $usuario->fechavigencia;?> </td>
                    
                </tr>
<?php }?>
</table>
                       </div>
                </form>
</div>
            
                      