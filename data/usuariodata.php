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
                
                function registro_grupo_usuario($obj){
			$objCn = new Conexion();
			$sql = "call registro_grupo_usuario('".$obj->getdescripcion()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";
			return $objCn->ejecutar($sql);	
		}
                function registro_persona($obj){
			$objCn = new Conexion();
			$sql = "call registro_persona('".$obj->getnombre()."','".$obj->getapellido()."','".$obj->getdni()."','".$obj->getsexo()."','".$obj->getdireccion()."','".$obj->gettelefono()."','".$obj->getemail()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function registro_usuario($obj){
			$objCn = new Conexion();
			$sql = "call registro_usuario('".$obj->getidpersona()."','".$obj->getrol()."','".$obj->getusuario()."','".$obj->getpassword()."','".$obj->getpregunta()."','".$obj->getrespuesta()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function reporte_perfil($obj){
			$objCn = new Conexion();
			$sql = "call reporte_perfil('".$obj->getusuario()."','".$obj->getpassword()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_telefono($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_telefono('".$obj->gettelefono()."','".$obj->getidpersona()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_direccion($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_direccion('".$obj->getidpersona()."','".$obj->getdireccion()."')";                        
			return $objCn->ejecutar($sql);	
		}
}
?>

