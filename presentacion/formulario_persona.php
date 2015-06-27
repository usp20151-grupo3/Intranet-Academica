
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Nombre</label>
                      <input type="hidden" name="idpersona" value="<?php echo $_POST['id_persona']?>"></input>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" value="<?php echo $persona->nombre; ?>" maxlength="30" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsuario">Apellido</label>
                      <input type="text" class="form-control" name="apellido" placeholder="Apellidos" value="<?php echo $persona->apellido; ?>" maxlength="30" ondrop="return false;" onpaste="return false;" onkeypress="return validLetter(event);" required>
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Documento Nacional de Identidad</label>
                      <input type="text" class="form-control" name="dni" placeholder="DNI" value="<?php echo $persona->dni; ?>" maxlength="8" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);" required>
                    </div>
                    <div class="form-group">
                     <label>Sexo</label><br>
                     <select name="sexo" class="form-control">
                     <?php if ($persona->sexo == '1') {
                       echo "<option value='1' selected>Masculino</option>";
                       echo "<option value='2'>Femenino</option>";

                     } else {
                       echo "<option value='1'>Masculino</option>";
                       echo "<option value='2' selected>Femenino</option>";
                     }
                      ?>
                     </select>

                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Direccion</label>
                      <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo $persona->direccion; ?>" maxlength="100" ondrop="return false;" onpaste="return false;"  required>  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Telefono</label>
                      <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value="<?php echo $persona->telefono; ?>" maxlength="15" ondrop="return false;" onpaste="return false;" onkeypress="return validNumber(event);" required>  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="<?php echo $persona->email; ?>" maxlength="50" ondrop="return false;" onpaste="return false;"  required>  
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox" checked="true"> Habilitar
                      </label>
                    </div>
                  </div>
         