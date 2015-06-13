<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/personaentity.php');


$con    =       new Conexion();
$objE   =       new UsuarioE("","","","","","","","","","");
$objB   =       new UsuarioD();


                        $objE->setidpersona($_POST['idpersona']);
                        $objE->setnombre($_POST['nombre']);                        
                        $objE->setapellido($_POST['apellido']);
                        $objE->setdni($_POST['dni']);
                        $objE->setsexo($_POST['sexo']);
                        $objE->setdireccion($_POST['direccion']);
                        $objE->settelefono($_POST['telefono']);
                        $objE->setemail($_POST['email']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_persona($objE);
                        header('Location:../presentacion/framework.php?#');
?>