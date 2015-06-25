<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidgrupo($_POST['id_grupo']);                        
                        $resp_rol = $objB->buscar_grupo($objE);
                        $rol = $resp_rol->fetch_object();
                        
                       require'../presentacion/formulario_grupo.php';
?>