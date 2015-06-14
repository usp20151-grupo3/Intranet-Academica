<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/rolentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidrol($_POST['id_rol']);                        
                        $resp_rol = $objB->buscar_rol($objE);
                        $rol = $resp_rol->fetch_object();
                        
                       require'../presentacion/formulario_rol.php';
?>