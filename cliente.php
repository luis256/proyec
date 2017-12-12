<html>
<head>
<title>registro</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","fabrica") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into clientes(idClientes,Nombredecontacto,Telefono,idProducto,Cantidad,Preciodeventa,Totaldeventa) values 
                       ('$_REQUEST[idClientes]','$_REQUEST[Nombredecontacto]','$_REQUEST[Telefono]','$_REQUEST[idProducto]','$_REQUEST[Cantidad]','$_REQUEST[Preciodeventa]','$_REQUEST[Totaldeventa]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Cliente registrado.";
?>
<br>
<a href="index.html"><input type="submit" value="Regresar"></a>
</body>
</html>