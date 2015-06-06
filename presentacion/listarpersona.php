
<div class="box box-primary" id="divlpersona" >
                <div class="box-header">
                    <h3 class="box-title">Listar Persona</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">Id</th>
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">DNI</th>
                    <th class="box-body">Sexo</th>
                    <th class="box-body">Direccion</th>
                    <th class="box-body">Teléfono</th>
                    <th class="box-body">Email</th>
                    <th class="box-body">FechaRegistro</th>
                    <th class="box-body">Estado</th>
                     <?php foreach($personas as $persona){?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $persona->idpersona; ?> </td>
                    <td class="box-body"> <?php echo $persona->nombre; ?> </td>
                    <td class="box-body"> <?php echo $persona->apellido; ?> </td>
                    <td class="box-body"> <?php echo $persona->dni; ?> </td>
                    <td class="box-body"> <?php echo $persona->sexo; ?> </td>
                    <td class="box-body"> <?php echo $persona->direccion; ?> </td>
                    <td class="box-body"> <?php echo $persona->telefono; ?> </td>
                    <td class="box-body"> <?php echo $persona->email; ?> </td>
                    <td class="box-body"> <?php echo $persona->fecharegistro; ?> </td>
                    <td class="box-body"> <?php echo $persona->estado; ?> </td>
                </tr>
                    <?php } ?>
                    </table>
                  </div>
                </form>
</div>