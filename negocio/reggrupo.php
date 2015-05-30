<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();
$temp = '1';
$temp2 = now();
			$objE->setdescripcion($_POST['grupo']);
                        $objE->setfechaalta($temp2);
			$objE->setfechavigencia($_POST['date']);                        
                        $objE->setestado($temp);
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);


?>