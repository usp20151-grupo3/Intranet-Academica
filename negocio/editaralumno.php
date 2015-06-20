<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/alumnoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","");
$objB	= 	new UsuarioD();


						$idpersona=$_POST['id_idpersona'];
                        $objE->setidalumno($_POST['id_alumno']);                        
                        $resp_alumno = $objB->buscar_alumno($objE);

                        $alumno = $resp_alumno->fetch_object();
                       require'../presentacion/formulario_alumno.php';
                       
?>