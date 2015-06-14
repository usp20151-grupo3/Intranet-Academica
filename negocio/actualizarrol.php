<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/rolentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();


                        $objE->setidrol($_POST['id_rol']);
                        $objE->setdescripcion($_POST['descripcion']);                        
			$objE->setfechavigencia($_POST['date']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_rol($objE);
                        
                        header('Location:../presentacion/framework.php?#');
?>