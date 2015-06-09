<?php
require('../conexion/conexion.php');
require'../data/usuariodata.php';

 
 $objD = new UsuarioD(); 

switch ($_POST['evento']) {
    
    case 'vista':
        $res_usuarios   =   $objD->listar_persona();
        
        while ($objeto = $res_usuarios->fetch_object()){
                $personas[] = $objeto;
        }
        
        require'../presentacion/listarpersona.php';
        
        break;
    
    default:
            echo "Ocurrio un Error";
	break;
}