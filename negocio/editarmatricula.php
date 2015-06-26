<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/matriculaentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","");
$objB	= 	new UsuarioD();

$idalumno="";
                        $idpersona=""; 
                        $idgrupo="";    

                        $objE->setidmatricula($_POST['id_matricula']);                        
                        $resp_rol = $objB->buscar_matricula($objE);
                        $matricula = $resp_rol->fetch_object();
                        $idmatricula = $matricula->idmatricula;
                        $idalumno = $matricula->idalumno;
                        $idpersona = $matricula->idpersona;
                        $idgrupo = $matricula->idgrupo;
                                         
                        
                       require'../presentacion/formulario_matricula.php';
?>