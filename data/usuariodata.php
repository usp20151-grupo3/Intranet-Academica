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
                
}
?>

