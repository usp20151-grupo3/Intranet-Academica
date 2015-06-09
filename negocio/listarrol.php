<?php
require('../conexion/conexion.php');
require'../data/usuariodata.php';

 
 $objD = new UsuarioD(); 

switch ($_POST['evento']) {
    
    case 'vista':
        $res_usuarios   =   $objD->listar_rol();
        
        while ($objeto = $res_usuarios->fetch_object()){
                $roles[] = $objeto;
        }
        
        require'../presentacion/listarrol.php';
        
        break;
    
    default:
            echo "Ocurrio un Error";
	break;
}