<?php
session_start();
require('../conexion/conexion.php');
require('../entidad/usuarioentity.php');
require('../data/usuariodata.php');

$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();
    $objE->setusuario($_POST['user']);
    $objE->setpassword(md5($_POST['password']));
    $res_usuario    =	$objB-> verificar_usuario($objE);
    $dato_usuario   =   $objB-> mostrar_nombre_apellido_usuario($objE);
    $dato_perfil    =   $objB-> reporte_perfil($objE);
    if (count($res_usuario)>0) {				
        $datos      = $res_usuario  ->fetch_object(); // -> AQUI EXTRAES LOS DATOS.
        $datonombre = $dato_usuario ->fetch_object();
        $datoperfil = $dato_perfil  ->fetch_object();

        $_SESSION['usuario']        = $datos->usuario;
        $_SESSION['idusuario']      = $datos->idusuario;
        $_SESSION['rol']            = $datos->idrol;
        $_SESSION['fechaalta']      = $datos->fechaalta;
        $_SESSION['idpersona']      = $datos ->idpersona;
        $_SESSION['respuesta']      = $datos ->respuesta;
        $_SESSION['pregunta']       = $datos ->pregunta;
        $_SESSION['nombrelog']      = $datonombre->nombre;
        $_SESSION['apellidolog']    = $datonombre->apellido;
        $_SESSION['direccion']      = $datoperfil->direccion;
        $_SESSION['email']          = $datoperfil->email;
        $_SESSION['telefono']       = $datoperfil->telefono;
        
        if ($_SESSION['idusuario']>0 && $_SESSION['rol']>0) {
            header('Location:../presentacion/framework.php');
        }
        else {
            header('Location:../');}
        }
?>
