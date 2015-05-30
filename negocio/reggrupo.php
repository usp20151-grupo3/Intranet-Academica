<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();

$val -> now();

                        $objE->setdescripcion($_POST['grupo']);                        
			$objE->setfechavigencia($_POST['date']);
                        $objE->setfechaalta($val);
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);


?>