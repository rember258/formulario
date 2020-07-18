<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rember</title>
</head>
<body>
<?php
error_reporting(0);
if($enviar){
	$link=mysql_connect("localhost","root","usbw");
	mysql_select_db("carrera",$db);
	$sql="INSERT INTO agenda(nombre, direccion, telefono)";
	$sql.="VALUES('$nombre','$direccion','$telefono')";
	$result=mysql_query($sql);
	echo"¡Gracias! Hemos recibido sus datos.\n";
}else{
?>
<form method="post" action="registro.php">
Nombre    : <input type="text" name="nombre" /><br />
Direccion : <input type="text" name="direccion" /><br />
Telefono:<input type="text" name="telefono" /><br />
<input type="submit" name="enviar" value="Aceptar informacion" />
</form>
</body>
</html>