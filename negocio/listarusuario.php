<?php
require('../conexion/conexion.php');
require'../data/usuariodata.php';

 
 $objD = new UsuarioD(); 

switch ($_POST['evento']) {
    
    case 'vista':
        $res_usuarios   =   $objD->listar_usuario();
        
        while ($objeto = $res_usuarios->fetch_object()){
                $usuarios[] = $objeto;
        }
        
        require'../presentacion/listarusuario.php';
        
        break;
    
    default:
            echo "Ocurrio un Error";
	break;
}
