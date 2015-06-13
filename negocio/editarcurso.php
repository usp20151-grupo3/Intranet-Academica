<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/cursoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidcurso($_POST['id_curso']);                        
                        $resp_curso = $objB->buscar_curso($objE);

                        $curso = $resp_curso->fetch_object();
                       require'../presentacion/formulario_curso.php';
?>