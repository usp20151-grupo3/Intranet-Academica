<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","");
$objB	= 	new UsuarioD();

			$objE->setusuario($val);
			$objE->setpassword;



?>