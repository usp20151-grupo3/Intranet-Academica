<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();


                        

                        if($_POST['nivel']==1){
                        $objE->setidgrupo($_POST['id_grupo']);
                        $objE->setnivel($_POST['nivel']);                        
						$objE->setgrado($_POST['gradopri']);
                        $objE->setseccion($_POST['seccion']);
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_grupo($objE);                        
                        header('Location:../presentacion/framework.php?#');
                        }

                        if($_POST['nivel']==2){
                        $objE->setidgrupo($_POST['id_grupo']);
                        $objE->setnivel($_POST['nivel']);                        
						$objE->setgrado($_POST['gradosec']);
                        $objE->setseccion($_POST['seccion']);
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_grupo($objE);                        
                        header('Location:../presentacion/framework.php?#');
                        }
?>