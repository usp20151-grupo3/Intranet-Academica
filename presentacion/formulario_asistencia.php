<?php

?>
            
                  <div class="box-body">

                    <div class="form-group">
                      <label>Fecha Asistencia</label>
                      <input type="hidden" name="idcad" value="<?php echo $idcad; ?>"/>
                      <input type="date" class="form-control" name="fecha" required/>
                    </div>
                    <div class="form-group">
                      <label>Listado Alumno <small>A=Asistio, F=Falto, J=Justificacion</small></label>
                      
                      <table border="1" class="box box-primary">
                    <th class="box-body">Nombre</th>
                    <th class="box-body">Apellido</th>
                    <th class="box-body">Codigo</th>
                    <th class="box-body">Observacion</th>
                    <th class="box-body">Asistencia</th>
                    
                    <?php 
                    error_reporting(0);
                    foreach($respuesta as $rol){ ?>
                   <tr bgcolor=#F0FFFF>
                    
                    <td class="box-body"> <input type="hidden" name="idmat" value="<?php echo $rol->idmatricula; ?>"/>
                    <?php echo $rol->nombre;?> </td>
                    <td class="box-body"> <?php echo $rol->apellido;?> </td>
                    <td class="box-body"> <?php echo $rol->codigo;?> </td>
                    

                    <td class="box-body"> <input type="text" class="form-control" name="observacion" onpaste="return false;" ondrop="return false;" placeholder="Observacion" onkeypress="return validLetter(event);" maxlength="50" /></td>

                    <td class="box-body"> 
                    <button type="button" class="btn btn-default btn-flat btn-a" 
                    data-idmatasi="<?php echo $rol->idmatricula; ?>"  
                    data-idcadasi="<?php echo $idcad; ?>" 
                    data-idestasi="<?php echo 'A'; ?>"
                    >A</button>
                    <button class="btn btn-default btn-flat btn-f" 
                    data-idmatasi="<?php echo $rol->idmatricula; ?>"  
                    data-idcadasi="<?php echo $idcad; ?>" 
                    data-idestasi="<?php echo 'F'; ?>">F</button>
                    <button class="btn btn-default btn-flat btn-j" 
                    data-idmatasi="<?php echo $rol->idmatricula; ?>"  
                    data-idcadasi="<?php echo $idcad; ?>" 
                    data-idestasi="<?php echo 'J'; ?>">J</button>

                    </td>
                </tr>
                    <?php } ?>
                    </table>

                  
                    </div>
                    
                  </div>