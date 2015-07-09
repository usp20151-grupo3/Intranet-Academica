<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/asistenciaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidasistencia($_POST['id_asistencia']);                        
                        $objE->setfecharegistro($_POST['fecha']);                        
                        $objE->setestado($_POST['asistencia']);                        

                       	$objB->actualizar_dasistencia($objE);                        
                        header('Location:../presentacion/framework.php?#');
                       
?>