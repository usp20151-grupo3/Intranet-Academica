<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/trabajadorentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();


						$idpersona=$_POST['id_idpersona'];
                        $objE->setidtrabajador($_POST['id_trabajador']);                        
                        $resp_trabajador = $objB->buscar_trabajador($objE);

                        $trabajador = $resp_trabajador->fetch_object();
                       require'../presentacion/formulario_trabajador.php';
                       
?>