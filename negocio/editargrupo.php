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
                        $rol_secundaria_mostrar='';
                        $rol_primaria_mostrar='';

                        if ($rol->nivel=='Primaria') {
                        	$rol_secundaria_mostrar="style='display:none'";
                        } else if($rol->nivel=='Secundaria') {
                        	$rol_primaria_mostrar="style='display:none'";
                        }
                        
                        
                       require'../presentacion/formulario_grupo.php';
?>