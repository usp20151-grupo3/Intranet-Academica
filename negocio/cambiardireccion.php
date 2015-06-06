<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();

                        $objE->setdireccion($_POST['nuevadireccion']);
                        $objE->setidpersona($_SESSION['idpersona']);
                        $objB->actualizar_direccion($objE);                        
                        header('Location:../presentacion/framework.php');
                        


?>

