<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/usuarioentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","","","","","","");
$objB	= 	new UsuarioD();

//      function setidusuario($val) {$this->idusuario=$val;}
//	function setidpersona($val) {$this->idpersona=$val;}
//        function setrol($val) {$this->idrol=$val;}
//	function setusuario($val) {$this->usuario=$val;}
//	function setpassword($val) {$this->password=$val;}
//        function setpregunta($val) {$this->pregunta=$val;}
//        function setrespuesta($val) {$this->respuesta=$val;}
//        function setfechaalta($val) {$this->fechaalta=$val;}
//        function setfechavigencia($val) {$this->fechavigencia=$val;}
//	function setestado($val) {$this->estado=$val;}


                        $objE->setidpersona($_POST['persona']);
                        $objE->setrol($_POST['rol']);                        			
                        $objE->setusuario($_POST['usuario']);
                        $objE->setpassword($_POST['password']);
                        $objE->setpregunta($_POST['pregunta']);
                        $objE->setrespuesta($_POST['respuesta']);
                        $objE->setfechavigencia($_POST['date']);
                      
                        if (isset($_POST['checkbox'])) {
                        $objE->setestado(1);
                        } else {
                        $objE->setestado(0);
}
                        $objB->registro_usuario($objE);
                        
                        header('Location:../presentacion/framework.php');
?>