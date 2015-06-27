<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/cadentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();



       $idcad="";
       $idtrabajador="";
       $idgrupo="";
       $idcruso="";

            $objE->setidcad($_POST['id_cad']);

            $resp_cad = $objB->buscar_cad($objE);

            $cad = $resp_cad->fetch_object();

            $idcad = $cad->idcad;
            $idtrabajador = $cad->idtrabajador;
            $idgrupo = $cad->idgrupo;
            $idcurso = $cad->idcurso;

            require'../presentacion/formulario_cad.php';

                        
?>