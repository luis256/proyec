<html>
<head>
<title>registro</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","fabrica") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into ventas(idventas,Nombredecontacto,Telefono,idProducto,Cantidad,PrecioUnitario,Totaldeventa) values 
                       ('$_REQUEST[idventas]','$_REQUEST[Nombredecontacto]','$_REQUEST[Telefono]','$_REQUEST[idProducto]','$_REQUEST[Cantidad]','$_REQUEST[PrecioUnitario]','$_REQUEST[Totaldeventa]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Venta registrada.";
?>
<br>
<a href="index.html"><input type="submit" value="Regresar"></a>
</body>
</html>