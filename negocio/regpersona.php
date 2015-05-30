<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","");
$objB	= 	new UsuarioD();



                        $objE->setnombre($_POST['nombre']);                        
			$objE->setapellido($_POST['apellido']);
                        $objE->setdni($_POST['dni']);
                        $objE->setsexo($_POST['sexo']);
                        $objE->setdireccion($_POST['direccion']);
                        $objE->settelefono($_POST['telefono']);
                        $objE->setemail($_POST['telefono']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);
                        header('Location:../presentacion/framework.php');


?>