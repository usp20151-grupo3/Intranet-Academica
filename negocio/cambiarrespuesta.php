<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/usuarioentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();
$temp = $_SESSION['idusuario'];
                        $objE->setrespuesta($_POST['nuevarespuesta']);
                        $objE->setidusuario($temp);
                        $objB->actualizar_respuesta($objE);                        
                        header('Location:../presentacion/framework.php?#');
                        


?>