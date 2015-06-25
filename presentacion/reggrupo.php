
<div class="box box-primary" id="reggrupo" style="display:none">
                <div class="box-header">
                  <h3 class="box-title">Registro Grupo de Estudio</h3>
                </div>
                <form role="form" action="../negocio/reggrupo.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nivel</label>
                      <br/>
                     <select name="nivel" class="form-control" id="niv">
                     <option value="1" onClick='showDiv()'>Primaria</option>
                     <option value="2" onClick='showDiv()'>Secundaria</option>
                     </select>
                      
                    </div>
                     <div class="form-group" id="gp" >
                     <label>Grado</label>
                     <br/>
                     <select name="gradopri" class="form-control">
                     <option value="1">Primero</option>
                     <option value="2">Segundo</option>
                     <option value="3">Tercero</option>
                     <option value="4">Cuarto</option>
                     <option value="5">Quinto</option>
                     <option value="6">Sexto</option>
                     </select>
                     </div>  
                      
                     <div class="form-group" id="gs" style="display:none">
                     <label>Grado</label>
                     <select name="gradosec" class="form-control">
                     <option value="1">Primero</option>
                     <option value="2">Segundo</option>
                     <option value="3">Tercero</option>
                     <option value="4">Cuarto</option>
                     <option value="5">Quinto</option>
                     </select>
                     
                     
                      </div>  
                      
                       <div class="form-group">
                      <label>Sección</label>
                          <br/>
                     <select name="seccion" class="form-control">
                     <option value="A">A</option>
                     <option value="B">B</option>
                     <option value="C">C</option>
                     <option value="D">D</option>
                     
                     </select>
                          
                      </div>
                    <div class="checkbox">
                      <label>
                          <input type="checkbox" name="checkbox" checked="true"> Habilitar
                      </label>
                    </div>
                  </div>

                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary" id="submit" name="submit">Confirmar</button>
                  </div>                 
                </form>             
             </div>          
