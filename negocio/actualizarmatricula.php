<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/matriculaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();


			
            $objE->setidmatricula($_POST['id_matricula']);                        
            $objE->setidalumno($_POST['id_alumno_sel']);                        
			$objE->setidpersona($_POST['id_persona_sel']);
			$objE->setidgrupo($_POST['id_grupo_sel']);
			$objE->setparentesco($_POST['parentesco']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->actualizar_matricula($objE);

                        header('Location:../presentacion/framework.php?#');
?>