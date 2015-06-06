<?php
session_start();
session_unset();

require('../conexion/conexion.php');
require('../entidad/usuarioentity.php');
require('../data/usuariodata.php');

// $con 	= 	new Conexion();
// $objE	= 	new UsuarioE("","","","","","","","","","");
// $objB	= 	new UsuarioD();

// 			$objE->setusuario($_POST['user']);
// 			$objE->setpassword(md5($_POST['password']));

            $usuario = $_POST['usuario'];
            $pass = md5($_POST['password']);

            $resp   = mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' LIMIT 1",$conexion);
            //$resp2  = mysql_query("SELECT * FROM historial WHERE usuario='$usuario' LIMIT 1",$conexion);

            if(mysql_num_rows($resp) == 1){
                $row    = mysql_fetch_assoc($resp);
                //$row2   = mysql_fetch_assoc($resp2);
                if($row['intento'] < 3){
                //if($row2['intento'] < 3){
                    if($pass == $row['password']){ 
                        session_start();
                        $_SESSION['idusuario']  = $row['idusuario'];
                        $_SESSION['usuario']    = $row['usuario'];
                        $_SESSION['rol']        = $row['idrol'];
                        $_SESSION['fechaalta']  = $row['fechaalta'];
                        $_SESSION['idpersona']  = $row['idpersona'];
                        $_SESSION['pregunta']   = $row['pregunta'];
                        $_SESSION['respuesta']  = $row['respuesta'];
                        $fechaacceso = time();
                        $ipacceso = $_SERVER["REMOTE_ADDR"];
                        mysql_query("UPDATE usuario SET intento=0, ipacceso='$ipacceso', fechaacceso='$fechaacceso' WHERE idusuario='$row[idusuario]' LIMIT 1",$conexion);
                        mysql_query("UPDATE historial SET ipacceso='$ipacceso', fechaacceso='$fechaacceso' WHERE idusuario='$row[idusuario]' LIMIT 1",$conexion);
                        header('Location:../presentacion/framework.php');
                    } else {
                        mysql_query("UPDATE usuario SET intento=intento+1 WHERE idusuario='$row[idusuario]' LIMIT 1",$conexion);
                        /////////////////////////////////////////////////////////////////// 
                        echo "Contraseña incorrecta."; 
                    } 
                } else { 
                    mysql_query("UPDATE usuario SET estado=2 WHERE idusuario='$row[idusuario]' LIMIT 1",$conexion);
                    ///////////////////////////////////////////////////////////////
                    echo "Cuenta bloqueada ..."; } /// Salida para cuando supere los intentos de conexion fallidos 
            } else { echo "No existe tal usuario."; }
                

                //    $res_usuario =   $objB-> verificar_usuario($objE);
                // $dato_usuario   =   $objB-> mostrar_nombre_apellido_usuario($objE);
                // $dato_perfil    =   $objB->reporte_perfil($objE);
                
                // if (count($res_usuario)>0) {
                //     $datos      = $res_usuario->fetch_object(); // -> AQUI EXTRAES LOS DATOS.
                //     $datonombre = $dato_usuario->fetch_object();
                //     $datoperfil = $dato_perfil->fetch_object();
				// $_SESSION['usuario']        = $datos->usuario;
    //             $_SESSION['idusuario']      = $datos->idusuario;
				// $_SESSION['rol']            = $datos->idrol;
    //             $_SESSION['fechaalta']      = $datos->fechaalta;
    //             $_SESSION['idpersona']      = $datos ->idpersona;
    //             $_SESSION['respuesta']      = $datos ->respuesta;
    //             $_SESSION['pregunta']       = $datos ->pregunta;
    //             $_SESSION['nombrelog']      = $datonombre->nombre;
    //             $_SESSION['apellidolog']    = $datonombre->apellido;
    //             $_SESSION['direccion']      = $datoperfil->direccion;
    //             $_SESSION['email']          = $datoperfil->email;
    //             $_SESSION['telefono']       = $datoperfil->telefono;
               
    //             if ($_SESSION['idusuario']>0 && $_SESSION['rol']>0) {
				// 	header('Location:../presentacion/framework.php');
				// }
    //             else {
    //             header('Location:../');
    //             }
                
            // }
?>
