<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();
$temp = $_SESSION['idusuario'];
                        $objE->settelefono($_POST['nuevotelefono']);
                        $objE->setidusuario([$temp]);
                        $objB->actualizar_telefono($objE);
                        var_dump($temp);
                        //header('Location:../presentacion/framework.php');
                        


?>