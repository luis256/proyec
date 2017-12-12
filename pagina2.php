<html>
<head>
<title>registro</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","fabrica") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into produccion(idProduccion,idProducto,Presentacion,Descripcion,Cantidad,Precioporcaja) values 
                       ('$_REQUEST[idProduccion]','$_REQUEST[idProducto]','$_REQUEST[Presentacion]','$_REQUEST[Descripcion]','$_REQUEST[Cantidad]','$_REQUEST[Precioporcaja]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Produccion almacenada.";
?>
<br>
<a href="index.html"><input type="submit" value="Regresar"></a>
</body>
</html>