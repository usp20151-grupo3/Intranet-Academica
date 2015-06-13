<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/trabajadorentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();



            $objE->setidpersona($_POST['idpersona']);                        
			$objE->setcodigo($_POST['codigo']);
			$objE->setidrol($_POST['idrol']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->registro_docente($objE);
                        header('Location:../presentacion/framework.php');
?>