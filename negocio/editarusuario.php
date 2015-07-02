<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/usuarioentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidusuario($_POST['id_usuario']);                        
                        $resp_usuario = $objB->buscar_usuario($objE);
                        
                        $usuario = $resp_usuario->fetch_object();
                       require'../presentacion/formulario_usuario.php';
?>