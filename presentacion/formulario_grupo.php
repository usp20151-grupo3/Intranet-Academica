<div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nivel</label>
                      <input type="hidden" name="id_grupo" value="<?php echo $_POST['id_grupo']?>"></input>
                      <select name="nivel" class="form-control" id="niv2">
                          
                     <?php if ($rol->nivel == 'Primaria') {
                       echo "<option value='1' selected onClick='showDiv()'>Primaria</option>";
                       echo "<option value='2' onClick='showDiv()'>Secundaria</option>";

                     } else {
                       echo "<option value='1' onClick='showDiv()'>Primaria</option>";
                       echo "<option value='2' selected onClick='showDiv()'>Secundaria</option>";
                     }
                      ?>
                     </select>
 
                    </div>
                    <div class="form-group" id="gp2">
                       <label for="exampleInputDate">Grado - Primaria</label>
                          
                          <select name="gradopri" class="form-control">
                      <?php if ($rol->grado == 'Primero') {
                       echo "<option value='1' selected>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       echo "<option value='6'>Sexto</option>";
                     } if ($rol->grado == 'Segundo') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2' selected>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       echo "<option value='6'>Sexto</option>";
                     } if ($rol->grado == 'Tercero') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3' selected>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       echo "<option value='6'>Sexto</option>";
                     } if ($rol->grado == 'Cuarto') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4' selected>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       echo "<option value='6'>Sexto</option>";
                     } if ($rol->grado == 'Quinto') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5' selected>Quinto</option>";
                       echo "<option value='6'>Sexto</option>";
                     } if ($rol->grado == 'Sexto') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       echo "<option value='6' selected>Sexto</option>";
                     }
                     ?>
                          
                          </select>
                    </div>
                      
                      
                      <div class="form-group" id="gs2" style="display:none">
                       <label>Grado - Secundaria</label>
                          
                          <select name="gradosec" class="form-control">
                      <?php if ($rol->grado == 'Primero') {
                       echo "<option value='1' selected>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       
                     } if ($rol->grado == 'Segundo') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2' selected>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       
                     } if ($rol->grado == 'Tercero') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3' selected>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       
                     } if ($rol->grado == 'Cuarto') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4' selected>Cuarto</option>";
                       echo "<option value='5'>Quinto</option>";
                       
                     } if ($rol->grado == 'Quinto') {
                       echo "<option value='1'>Primero</option>";
                       echo "<option value='2'>Segundo</option>";
                       echo "<option value='3'>Tercero</option>";
                       echo "<option value='4'>Cuarto</option>";
                       echo "<option value='5' selected>Quinto</option>";
                      
                     } 
                     ?>
                          
                          </select>
                    </div>
                      
                      <div class="form-group">
                          <label>Seccion</label>
                          <select name="seccion" class="form-control">
                          
                     <?php if ($rol->seccion == 'A') {
                       echo "<option value='A' selected>A</option>";
                       echo "<option value='B'>B</option>";
                       echo "<option value='C'>C</option>";
                       echo "<option value='D'>D</option>";

                     } if ($rol->seccion == 'B') {
                       echo "<option value='A'>A</option>";
                       echo "<option value='B' selected>B</option>";
                       echo "<option value='C'>C</option>";
                       echo "<option value='D'>D</option>";

                     } if ($rol->seccion == 'C') {
                       echo "<option value='A'>A</option>";
                       echo "<option value='B'>B</option>";
                       echo "<option value='C' selected>C</option>";
                       echo "<option value='D'>D</option>";

                     } 
                      if ($rol->seccion == 'D') {
                       echo "<option value='A'>A</option>";
                       echo "<option value='B'>B</option>";
                       echo "<option value='C'>C</option>";
                       echo "<option value='D' selected>D</option>";
                     }
                      ?>
                     </select>
                    </div>
                    <div class="checkbox">
                      <label>
                       <?php if ($rol->estado == 'Activo') {
                       echo "<input type='checkbox' name='checkbox' checked='true'> Habilitar";
                       

                     } else {
                       echo "<input type='checkbox' name='checkbox'> Habilitar";
                     }
                      ?>
                        
                        
                      </label>
                    </div>
                  </div>

                  </div>

<script>
    
    var select = document.getElementById('niv2'),
onChange = function(event) {
    
  var shown3 = this.options[this.selectedIndex].value == 1;
  document.getElementById('gp2').style.display = shown3 ? 'block' : 'none';
  
  var shown4 = this.options[this.selectedIndex].value == 2;
  document.getElementById('gs2').style.display = shown4 ? 'block' : 'none';

};


if (select.addEventListener) {
    select.addEventListener('change', onChange, false);
} else {
  select.attachEvent('onchange', function() {
    onChange.apply(select, arguments);
  });
}

</script>