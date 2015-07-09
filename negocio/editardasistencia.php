<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/asistenciaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidasistencia($_POST['id_asistencia']);                        
                        $resp_dasistencia = $objB->buscar_dasistencia($objE);

                        $dasistencia = $resp_dasistencia->fetch_object();
                        
                       require'../presentacion/formulario_dasistencia.php';
                       
?>