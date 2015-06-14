<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/usuarioentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();


                        $objE->setidpersona($_POST['idpersona']);
                        $objE->setrol($_POST['roles']);                        			
                        $objE->setusuario($_POST['usuario']);
                        $objE->setpassword(md5($_POST['password']));
                        $objE->setpregunta($_POST['pregunta']);
                        $objE->setrespuesta($_POST['respuesta']);
                        $objE->setfechavigencia($_POST['date']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->registro_usuario($objE);
                        
                        header('Location:../presentacion/framework.php?#');
//var_dump($objE);
?>