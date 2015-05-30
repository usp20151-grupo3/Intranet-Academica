<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();

                        $objE->settelefono($_POST['nuevotelefono']);                        			
                        $objB->actualizar_telefono($objE);                        
                        header('Location:../presentacion/framework.php');
                        


?>