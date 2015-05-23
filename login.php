<?php
 

$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}


mysql_select_db("intranet");
 


$nombre=$_POST["txtuser"];
$password=$_POST["txtpass"];


$query="SELECT `usuario`,`password` FROM `usuario` WHERE `usuario`='$nombre' and `password`='$password' ";
$rs=mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs); 



if($nr == 1){ 
    
header("Location:index.html"); 

}


else if($nr <= 0) { 
   
  header("Location:login.html"); 
}   
?>