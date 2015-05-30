<?php
// ESTO ES LA CAPA DE DATOS . DONDE HACES LAS CONSULTAS A LA BD
class UsuarioD{
    
		function verificar_usuario($obj){
			$objCn = new conexion();
			$sql = "call verificar_usuario('".$obj->getusuario()."','".$obj->getpassword()."')";
			return $objCn->ejecutar($sql);	
		}
                
                function mostrar_nombre_apellido_usuario($obj){
			$objCn = new Conexion();
			$sql = "call nombre_persona_usuario('".$obj->getusuario()."','".$obj->getpassword()."')";
			return $objCn->ejecutar($sql);	
		}
                
                function registrar_grupo_usuario($obj){
			$objCn = new Conexion();
			$sql = "call registrar_grupo_usuario('',".$obj->getdescripcion()."','','".$obj->getfechavigencia()."','".$obj->getestado()."')";
                        //$sql = ("insert into rol(descripcion,fechavigencia,estado) values ('".$obj->getdescripcion()."','".$obj->getfechavigencia()."','".$obj->getestado()."')");
			return $objCn->ejecutar($sql);	
		}
                //null, `des`, getdate(), fecvig, est
                // registrar_grupo_usuario null,descrip, getdate(), fecvig, est
                // baja grupo_usuario idrol
                //
                // registro_usuario idper, rol, usu, pass, preg, res, fec, est
                // activar usuario by idusuario
                // baja_usuario by idusuario
                                                              
//                function existe_usuario_intentos($obj){
//                $objCn = new conexion();
//                $sql = "SELECT COUNT(*) total FROM historial WHERE idusuario='$obj'";                     
//                return $objCn->ejecutar($sql);
//                }
//
//                function crear_intento_login($obj){
//                $objCn = new conexion();        
//                mysqli_query($objCn,
//                "INSERT INTO historial (idusuario, fechaacceso, intento) "
//                . "values('$obj', now(), 1);"
//                );  
//                }
//
//                function numero_intentos($obj){
//                $objCn = new conexion(); 
//                $sql = "SELECT intento FROM historial WHERE idusuario='$obj'";                     
//                return $objCn->ejecutar($sql);
//    
//                }
//
//
//                function fecha_ultimo_intento($obj){
//                $objCn = new conexion(); 
//                $sql = "SELECT fechaacceso FROM historial WHERE idusuario='$obj'";                      
//                return $objCn->ejecutar($sql);
//    
//                }
//
//                function agregar_intento_login($obj, $nrointentos){
//                $objCn = new conexion(); 
//                $sql = "UPDATE historial SET intentos='$nrointentos', fechaacceso=NOW() WHERE idusuario='$obj'";
//                return $objCn->ejecutar($sql);    
//                }
//
//
//
//
//                function verificar_intentos_login($obj)
//                {
//                    $objCn = new conexion(); 
//                    var_dump($obj->getidusuario());
//                    $existe = existe_usuario_intentos($obj->getidusuario());
//
//                    //Chequea si el usuario existe en la tabla de intentos
//                    if ($existe == 0){
//                       // Si no existe , lo crea y setup intentos to 1
//                       crear_intento_login($obj);
//                    }
//                    else{ 
//                        $num = numero_intentos($obj);
//                        $date = fecha_ultimo_intento($obj);
//
//                        // Si han pasado mas de 24hrs y el # de intentos = 3
//                        if(  strtotime($date) + 86400 > strtotime("now") && $num == 3 ){
//
//                            //Lock the account
//                            mysqli_query($objCn,
//                                "UPDATE usuario SET estado=0 where idusuario='$obj'");
//                        }
//                        else if (strtotime($date) + 86400 < strtotime("now")){ // Si ya pasaron las 24 hrs desde el ultimo intento
//                            //resetear # de intentos a 1
//                            agregar_intento_login($obj, 1); 
//                        }
//                        else { 
//                            agregar_intento_login($obj, $num + 1);
//                        }
//                    }
//
//
//
//                }
                
                
                
                                               
                
}

?>

