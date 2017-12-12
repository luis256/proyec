<html>
<head>
<title>registro</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","fabrica") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into proveedores(idProveedores,Nombre,Producto,Telefono,Cantidad,Preciounitario,Totaldeventa) values 
                       ('$_REQUEST[idProveedores]','$_REQUEST[Nombre]','$_REQUEST[Producto]','$_REQUEST[Telefono]','$_REQUEST[Cantidad]','$_REQUEST[Preciounitario]','$_REQUEST[Totaldeventa]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "proveedor registrado.";
?>
<br>
<a href="index.html"><input type="submit" value="Regresar"></a>
</body>
</html>