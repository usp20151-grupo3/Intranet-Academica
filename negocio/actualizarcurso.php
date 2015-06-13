<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/cursoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();


                        $objE->setidcurso($_POST['id_curso']);
                        $objE->setdescripcion($_POST['descripcion']);                        
			$objE->setcodigo($_POST['codigo']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_curso($objE);
                        
                        header('Location:../presentacion/framework.php');
?>