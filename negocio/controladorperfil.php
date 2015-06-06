<?php
session_start();
require('../conexion/conexion.php');
require'../data/usuariodata.php';
require'../entidad/usuarioentity.php';
 
 $objD = new UsuarioD(); 
 $objE = new UsuarioE('','','','','','','','','','');

switch ($_POST['evento']) {
    
    case 'vista':
        
       $objE->setusuario($_SESSION['usuario']);
       $res_perfil   =   $objD->reporte_perfil($objE);
        $rep_persona = $objD->listar_persona();
        $perfil_ = $res_perfil->fetch_object();
          $persona_ = $rep_persona->fetch_object();
             $tempd  = $persona_->direccion; 
             $tempt  = $perfil_->telefono;
             $tempe  = $perfil_->email;
             $tempp  = $perfil_->pregunta;
             $tempr  = $perfil_->respuesta;
                       
        require'../presentacion/perfil.php';
        
        
        break;
    
    default:
            echo "Ocurrio un Error";
	break;
}