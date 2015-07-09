<?php
session_start();
require('../conexion/conexion.php');
require('../entidad/usuarioentity.php');
require('../data/usuariodata.php');
require('../entidad/historialentity.php');



$con    =   new Conexion();
$objE   =   new UsuarioE("","","","","","","","","","");
$objH   =   new UsuarioH("","","");
$objB   =   new UsuarioD();
$est = "";
$rest = "";
            $objE->setusuario($_POST['user']);
            $objE->setpassword(md5($_POST['password']));           
            $res_usuario    =   $objB-> verificar_usuario($objE);
            $dato_usuario   =   $objB-> mostrar_nombre_apellido_usuario($objE);
            $res_iftrabajador   =   $objB-> iftrabajador($objE);
            $res_ifalumno   =   $objB-> ifalumno($objE);
            
            if (count($res_usuario)>0) {    
                error_reporting(0);            
                $datos = $res_usuario->fetch_object(); 
                $datonombre = $dato_usuario->fetch_object();
                $datoidtrab = $res_iftrabajador->fetch_object();
                $datoidalumno = $res_ifalumno->fetch_object();
                                
                $ip = $_SERVER["REMOTE_ADDR"];      

                $_SESSION['usuario']        = $datos->usuario;              
                $_SESSION['idusuario']      = $datos->idusuario;
                $_SESSION['rol']            = $datos->idrol;
                if ($_SESSION['rol']==3) {
                $_SESSION['idtrabajador']            = $datoidtrab->idtrabajador;                   
                }
                if ($_SESSION['rol']==4) {
                $_SESSION['idalumno']            = $datoidalumno->idalumno;                   
                }
                
                $_SESSION['estado']            = $datos->estado;
                $_SESSION['restado']            = $datos->restado;
                $est = $_SESSION['estado'];
                $rest = $_SESSION['restado'];
                                $_SESSION['anho']      = $datos->anho;
                                $_SESSION['dia']      = $datos->dia;
                                $_SESSION['mes']      = $datos->mes;
                                $_SESSION['idpersona']      = $datos ->idpersona;
                                $_SESSION['nombrelog']         = $datonombre->nombre;
                                $_SESSION['apellidolog']       = $datonombre->apellido;


                if ($_SESSION['idusuario']>0 && $_SESSION['estado']>0 && $_SESSION['restado']>0) { 

                $objH->setidusuario($_SESSION['idusuario']);
                $objH->setipacceso($ip);
                $res_user_hist = $objB-> registro_usuario_historial($objH);                  
                    header('Location:../presentacion/framework.php?#');                 
                    }
                                        if($est=="0") {
                                        echo '<script language="javascript">alert("Cuenta Bloqueada");
                                        window.location.href="../";    
                                        </script>';
                                        }elseif($rest=="0"){
                                        echo '<script language="javascript">alert("El grupo al que perteneces fue dado de baja");
                                        window.location.href="../";    
                                        </script>';
                                        }                                   
                                        else{
                                          echo '<script language="javascript">alert("Clave Incorrecta");
                                        window.location.href="../";    
                                        </script>';  
                                        }  
    }   
                                                     
?>