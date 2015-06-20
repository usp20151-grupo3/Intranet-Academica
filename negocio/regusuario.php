<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/usuarioentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();


if(  strtotime($_POST['date']) > strtotime("now")){
    

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
            $message = "Registrado Correctamente";
            echo "<script type='text/javascript'>alert('$message');
            document.location=('../presentacion/framework.php?#');
            </script>";
                        }
                        else {
                            
            $message = "La fecha ingresada debe ser mayor a la fecha de hoy";
            echo "<script type='text/javascript'>alert('$message');
            document.location=('../presentacion/framework.php?#');
            document.show()
            </script>";
                            
                        }
//var_dump($objE);
?>