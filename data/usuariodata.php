<?php 
class UsuarioD{
    
		function verificar_usuario($obj){
			$objCn = new conexion();
			$sql = "call verificar_usuario('".$obj->getusuario()."','".$obj->getpassword()."')";
			return $objCn->ejecutar($sql);	
		}
		function listar_usuario(){
			$objCn = new conexion();
			$sql = "call reporte_usuario()";
			return $objCn->ejecutar($sql);	
		}
                function listar_persona(){
			$objCn = new conexion();
			$sql = "call reporte_persona()";
			return $objCn->ejecutar($sql);	
		}
                function listar_rol(){
			$objCn = new conexion();
			$sql = "call reporte_rol()";
			return $objCn->ejecutar($sql);	
		}
                function mostrar_nombre_apellido_usuario($obj){
			$objCn = new Conexion();
			$sql = "call nombre_persona_usuario('".$obj->getusuario()."')";
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
		        function registro_alumno($obj){
			$objCn = new Conexion();
			$sql = "call registro_alumno('".$obj->getidpersona()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function registro_usuario($obj){
			$objCn = new Conexion();
			$sql = "call registro_usuario('".$obj->getidpersona()."','".$obj->getrol()."','".$obj->getusuario()."','".$obj->getpassword()."','".$obj->getpregunta()."','".$obj->getrespuesta()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function registro_docente($obj){
			$objCn = new Conexion();
			$sql = "call registro_docente('".$obj->getidpersona()."','".$obj->getcodigo()."','".$obj->getidrol()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function registro_curso($obj){
			$objCn = new Conexion();
			$sql = "call registro_curso('".$obj->getdescripcion()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function reporte_perfil($obj){
			$objCn = new Conexion();
			$sql = "call reporte_perfil('".$obj->getusuario()."')";                    
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
                function actualizar_correo($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_correo('".$obj->getidpersona()."','".$obj->getemail()."')";                        
			return $objCn->ejecutar($sql);	
		}
                 function actualizar_respuesta($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_respuesta('".$obj->getidusuario()."','".$obj->getrespuesta()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_pregunta($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_pregunta('".$obj->getidusuario()."','".$obj->getpregunta()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function actualizar_persona($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_persona('".$obj->getidpersona()."','".$obj->getnombre()."','".$obj->getapellido()."','".$obj->getdni()."','".$obj->getsexo()."','".$obj->getdireccion()."','".$obj->gettelefono()."','".$obj->getemail()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function buscar_persona($obj){
			$objCn = new Conexion();
			$sql = "call buscar_persona('".$obj->getidpersona()."')";                        
			return $objCn->ejecutar($sql);	
		}
}
?>