<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="recursos/css/style.css" />
        
    </head>
    <body>
       
<form id="form" name="form" action="negocio/login.php" method="POST"><!-- ESTE FORMULARIO ENVIA LOS DATOS A LA CAPA DE NEGOCIO PARA QUE ALLI SE VERIFIQUE LOS DATOS SIN 
    SON CORRECTOS O NO, siempre trata de que los inputs o checkbox o cualqueir cosa q uses para ingrear datos , lleven name e id el mismo nombre -->
	<div id="block">
		<label id="user" for="name">p</label>
		<input type="text" name="user" id="name" placeholder="Usuario" required/>
		<label id="pass" for="password">k</label>
		<input type="password" name="password" id="password" placeholder="Contraseña" required />
                <input type="hidden"  value="verificar" name="evento" /> 
		<input type="submit" id="submit" name="submit" value="a"/>
	</div>
</form>
<div id="option"> 
<!--	<p>Intranet Academica</p> -->
	<a href="#">Recuperar Clave</a>
</div>
            </body>
</html>
