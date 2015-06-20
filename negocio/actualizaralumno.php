<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/alumnoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","");
$objB	= 	new UsuarioD();


                        $objE->setidalumno($_POST['id_alumno']);
                        $objE->setidpersona($_POST['id_persona_al']);
						$objE->setcodigo($_POST['codigo']);                   
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_alumno($objE);
                        
                        header('Location:../presentacion/framework.php?#');
?>