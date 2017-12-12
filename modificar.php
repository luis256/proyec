<meta charset="UFT-8">
<html>
<head>
<title>Produccion</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
 <header>
  <div class="wrapper">
 	 <div class="logo">
 	 	<img src="img/logo.png" width="200" height="100">
 	 </div>
 	 <nav>
 	 	<a href="proveedor.html">Regresar</a>     
 	 </nav>
  </div>
 </header>
<?php

$conexion=mysqli_connect("localhost","root","","fabrica") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from proveedores
                        where idProveedores='$_REQUEST[idProveedores]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="modificado.php" method="post">
Ingrese nuevo Nombre:
<input type="text" name="nombrenuevo" value="<?php echo $reg['Nombre'] ?>">
<br>
<input type="hidden" name="nombreviejo" value="<?php echo $reg['Nombre'] ?>">
Ingrese nuevo Telefono:
<input type="text" name="telefononuevo" value="<?php echo $reg['Telefono'] ?>">
<br>
<input type="hidden" name="telefonoviejo" value="<?php echo $reg['Telefono'] ?>">
Ingrese nuevo Precio unitario:
<input type="text" name="preciounitarionuevo" value="<?php echo $reg['Preciounitario'] ?>">
<br>
<input type="hidden" name="preciounitarioviejo" value="<?php echo $reg['Preciounitario'] ?>">
<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe proveedor";
?>
</body>
</html>