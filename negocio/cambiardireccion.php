<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();
$temp = $_SESSION['idpersona'];
                        $objE->setdireccion($_POST['nuevadireccion']);
                        $objE->setidpersona($temp);
                        $objB->actualizar_correo($objE);                        
                        header('Location:../presentacion/framework.php');
                        


?>

