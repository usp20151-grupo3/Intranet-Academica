<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();



                        $objE->setidpersona($_POST['id_persona']);                        
                        $resp_persona = $objB->buscar_persona($objE);

                        $persona = $resp_persona->fetch_object();
                       require'../presentacion/formulario_persona.php';
?>