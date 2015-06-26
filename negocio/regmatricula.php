<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/matriculaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();



            $objE->setidalumno($_POST['idmalumno']);                        
			$objE->setidpersona($_POST['idmpersona']);
			$objE->setidgrupo($_POST['idmgrupo']);
			$objE->setparentesco($_POST['parentesco']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->registro_matricula($objE);

                        header('Location:../presentacion/framework.php?#');
?>