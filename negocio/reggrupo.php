<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();
$temp = 1;

			$objE->setdescripcion('Prueba');                        
			$objE->setfechavigencia('31/07/2015');                        
                        $objE->setestado($temp);
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);
   var_dump($reg_grupo);                     
$_SESSION['grupo'] = $reg_grupo->descripcion;
$_SESSION['date'] = $reg_grupo->fechavigencia;
$_SESSION['estado'] = $reg_grupo->estado;


?>