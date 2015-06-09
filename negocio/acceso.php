<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/historialentity.php');

$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","");
$objB	= 	new UsuarioD();


if ($_SESSION['idusuario']>0 && $_SESSION['rol']>0) {
                                    
									
$objE->setidusuario($_SESSION['idusuario']);
$objE->setipacceso($_SERVER["REMOTE_ADDR"]);
$objB->registro_acceso($objE);

header('Location:../presentacion/framework.php');
}