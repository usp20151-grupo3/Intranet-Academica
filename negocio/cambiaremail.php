<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();

                        $objE->setemail($_POST['nuevoemail']);
                        $objE->setidpersona($_SESSION['idpersona']);
                        $objB->actualizar_correo($objE);                        
                        header('Location:../presentacion/framework.php');
                        


?>