<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/cadentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();





            $objE->setidcad($_POST['id_cad']);
            $objE->setidtrabajador($_POST['idselcaddocente']);
            $objE->setidcurso($_POST['idcadselcurso']);
            $objE->setidgrupo($_POST['idselcadgrupo']);

            if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
                  }
             $objB->actualizar_cad($objE);

            header('Location:../presentacion/framework.php?#');                    
?>