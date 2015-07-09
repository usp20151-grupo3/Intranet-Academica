<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/matriculaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();



       $idcad=$_POST['idc'];


            $objE->setidgrupo($_POST['idg']);
            $resp_asist = $objB->buscar_lasistencia_matricula($objE);

            
            
            if (count($resp_asist)>0) {
                  while ($asist = $resp_asist->fetch_object()) {
                        $respuesta[] = $asist;
                  }
            }           


            require'../presentacion/formulario_asistencia.php';

                        
?>