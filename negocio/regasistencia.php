<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/asistenciaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();



                                         
                  $objE->setfecharegistro($_POST['fec']);
                  $objE->setidmatricula($_POST['idm']);
                  $objE->setidcad($_POST['idc']);
                  $objE->setestado($_POST['est']);
                  $objE->setcomentario($_POST['obs']);


                       $objB->registro_asistencia($objE);
                       
                        
?>