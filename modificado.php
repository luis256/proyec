<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=@mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("fabrica",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("update proveedores
                         set Telefono='$_REQUEST[telefononuevo]' 
                         where Telefono='$_REQUEST[telefonoviejo]'",$conexion) or  
die("Problemas en el select:".mysql_error());
  echo "El telefono fue modificado con exito";
?>
<br>
<a href="index.html"><input type="submit" value="Regresar"></a>
</body>
</html>