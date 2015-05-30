<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();

if(isset($_POST['checkbox']))
$objE->setestado(1);
else
$objE->setestado(0);

$temp = 1;

			$objE->setdescripcion($_POST['grupo']);                        
			$objE->setfechavigencia($_POST['date']);                        
                        
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);


?>