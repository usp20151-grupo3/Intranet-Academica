<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/cadentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();



                                         
                  $objE->setidcurso($_POST['idcadcurso']);
			$objE->setidtrabajador($_POST['idcaddocente']);
			$objE->setidgrupo($_POST['idcadgrupo']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->registro_cad($objE);

                        header('Location:../presentacion/framework.php?#');
?>