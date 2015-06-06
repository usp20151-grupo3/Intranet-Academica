<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/usuarioentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();

                        $objE->setrespuesta($_POST['nuevarespuesta']);
                        $objE->setidusuario($_SESSION['idusuario']);
                        $objB->actualizar_respuesta($objE);                        
                        header('Location:../presentacion/framework.php');
                        


?>