<?php
 
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}
mysql_select_db("intranet");
$nombre=$_POST["txtuser"];
$password=$_POST["txtpass"];

$contador;

$query="SELECT `usuario`,`password` FROM `usuario` WHERE `usuario`='$nombre' and `password`='$password' "
        . "and estado='1'";
$rs=mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs); 



if($nr == 1){ 
    ?>
<script language="javascript">
alert("Ingreso Correctamente");
location.href = "index.html";
</script>

<?php 
//
    
}


else if($nr <= 0) { 
?>
<script language="javascript">
alert("Los Datos Ingresados No coinciden o El usuario ha sido bloqueado");
location.href = "login.html";
</script>

<?php 
++$contador;
if($contador==3)
{
    $sql="UPDATE usuario SET estado = '0' WHERE usuario = $nombre";
    if (mysqli_query($conexion, $sql)) {
        echo "<p> record updated successfully</p>";
    }
    
}
}   
?>