<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();
$temp = '1';
			$objE->setdescripcion($_POST['grupo']);
			$objE->setfechavigencia($_POST['date']);                        
                        $objE->setestado($temp);



?>