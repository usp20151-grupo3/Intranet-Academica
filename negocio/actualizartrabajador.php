<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/trabajadorentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();


                        $objE->setidtrabajador($_POST['id_trabajador']);
                        $objE->setidpersona($_POST['id_persona_sel']);
						$objE->setcodigo($_POST['codigo']);                   
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_trabajador($objE);
                        
                        header('Location:../presentacion/framework.php?#');
?>