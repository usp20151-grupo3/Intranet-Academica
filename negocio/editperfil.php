<?php
session_start();
require('../conexion/conexion.php');
require('../entidad/usuarioentity.php');
require('../data/usuariodata.php');

$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();
			$objE->setusuario($_POST['user']);
			$objE->setpassword($_POST['password']);
			$res_usuario	=	$objB-> verificar_usuario($objE);                        
                        $dato_perfil = $objB->reporte_persona_perfil($objE);
			if (count($res_usuario)>0) {				
				$datos = $res_usuario->fetch_object(); // -> AQUI EXTRAES LOS DATOS.
                                $datoperfil = $dato_perfil->fetch_object();
                                
                                $_SESSION['direccion']       = $datoperfil->direccion;
                                $_SESSION['email']       = $datoperfil->email;
                                $_SESSION['telefono']       = $datoperfil->telefono;
										
                                                    }			
?>