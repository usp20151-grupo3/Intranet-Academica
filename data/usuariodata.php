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
			$sql = "call registrar_grupo_usuario('".$obj->getdescripcion()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";
			return $objCn->ejecutar($sql);	
		}
                function registro_persona($obj){
			$objCn = new Conexion();
			//$sql = "call registro_persona('".$obj->getnombre()."','".$obj->getapellido()."','".$obj->getdni()."','".$obj->getsexo()."','".$obj->getdireccion()."','".$obj->gettelefono()."','".$obj->getemail()."','".$obj->getestado()."')";
                        $sql = "INSERT INTO persona  (nombre,apellido,dni,sexo,direccion,telefono,email,estado) VALUES ('".$obj->getnombre()."','".$obj->getapellido()."','".$obj->getdni()."','".$obj->getsexo()."','".$obj->getdireccion()."','".$obj->gettelefono()."','".$obj->getemail()."','".$obj->getestado()."')";
			return $objCn->ejecutar($sql);	
		}
}//INSERT INTO persona  (nombre,apellido,dni,sexo,direccion,telefono,email,fecharegistro,estado) 
//VALUES (nom,ape,doc,sex,dir,tel,cor,now(),est)
//                        $objE->setnombre($_POST['nombre']);                        
//			  $objE->setapellido($_POST['apellido']);
//                        $objE->setdni($_POST['dni']);
//                        $objE->setsexo($_POST['sexo']);
//                        $objE->setdireccion($_POST['direccion']);
//                        $objE->settelefono($_POST['telefono']);
//                        $objE->setemail($_POST['telefono']);
//                      
//                        if (isset($_POST['checkbox'])) {
//                        $objE->setestado(1);



?>

