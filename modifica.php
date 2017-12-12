<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
 
mysql_select_db("fabrica",$conexion) or
  die("Problemas en la selección de la base de datos");
 
$registros=mysql_query("select codigo from clientes
                       where idClientes='$_REQUEST[idClientes]'",$conexion) or
  die("Problemas en el select:".mysql_error());
if ($reg=mysql_fetch_array($registros))
{
  mysql_query("delete from clientes where idClientes='$_REQUEST[idClientes]'",$conexion) or
    die("Problemas en el select:".mysql_error());
  echo "Se efectuó el borrado del cliente .";
}
else
{
  echo "No existe un cliente con ese id.";
}
mysql_close($conexion);
?>
</body>
</html> 