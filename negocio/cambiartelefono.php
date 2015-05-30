<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();



                        $objE->setdescripcion($_POST['grupo']);                        
			$objE->setfechavigencia($_POST['date']);
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->registro_grupo_usuario($objE);                        
                        header('Location:../presentacion/framework.php');
                        


?>