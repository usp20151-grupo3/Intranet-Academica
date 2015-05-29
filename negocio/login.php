<?php
session_start();
require('../conexion/conexion.php');
require('../entidad/usuarioentity.php');
require('../entidad/historialentity.php');
require('../data/usuariodata.php');

$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","");
$objB	= 	new UsuarioD();

switch ($_POST['evento']) {

	case 'verificar':

			$objE->setusuario($_POST['user']);
			$objE->setpassword($_POST['password']);

			$res_usuario	=	$objB-> verificar_usuario($objE);
                        $dato_usuario = $objB-> mostrar_nombre_apellido_usuario($objE);
                        $intento_fallido = $objB->verificar_intentos_login($objE);
// AHORA EXTRAEMOS LOS DATOS DENTRO DEL OBJETO

			if (count($res_usuario)>0) {
				
				$datos = $res_usuario->fetch_object(); // -> AQUI EXTRAES LOS DATOS. se ahce asi por que es 1 dato , pero si fueran un monton de rows
                                $datonombre = $dato_usuario->fetch_object(); // se usaria un while para recojerlo con una varibla y llenaramos todo en un array. eso sera mas adelante.

				$_SESSION['usuario']        = $datos->usuario;				
                                $_SESSION['idusuario']      = $datos->idusuario;
				$_SESSION['rol']            = $datos->idrol;
                                $_SESSION['fechaalta']      = $datos->fechaalta;
                                $_SESSION['nombre']         = $datonombre->nombre;
                                $_SESSION['apellido']       = $datonombre->apellido;

				if ($_SESSION['idusuario']>0 && $_SESSION['rol']>0) {
					
					header('Location:../presentacion/framework.php');
					
					}
                                        else {
                                        header('Location:../');}
										

			}
                        //var_dump($datos); // var_dump imprime el dato sea objeta o lo que sea , temuestra q es lo q contiene.
			
	break;
	
	default:
	
	break;
}
?>
