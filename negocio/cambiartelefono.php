<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();
$temp = $_SESSION['idpersona'];
var_dump($temp);
                        $objE->settelefono($_POST['nuevotelefono']);
                        $objE->setidusuario([$temp]);
                        $objB->actualizar_telefono($objE);
                        
                        //header('Location:../presentacion/framework.php');
                        


?>