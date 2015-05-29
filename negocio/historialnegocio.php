<?php
session_start();
require('../conexion/conexion.php');
require('../entidad/historialentity.php');
require('../data/usuariodata.php');
require('../data/login.php');

$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","");
$objB	= 	new UsuarioD();

			$objE->setusuario($val);
			$objE->setpassword;



?>