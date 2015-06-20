<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/rolentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();

if(  strtotime($_POST['date']) > strtotime("now")){
                        $objE->setidrol($_POST['id_rol']);
                        $objE->setdescripcion($_POST['descripcion']);                        
			$objE->setfechavigencia($_POST['date']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_rol($objE);
                        
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

                        
?>