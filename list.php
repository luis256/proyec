<meta charset="UFT-8">
<title>Almacen</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
 <header>
  <div class="wrapper">
 	 <div class="logo">
 	 	<img src="img/logo.png" width="200" height="100">
 	 </div>
 	 <nav>
 	 	<a href="index.html">Inicio</a>
               
 	 </nav>
  </div>
 </header>
<center>
 <h1>ALMACEN</h1>
</center>

<table border="1" cellspacing=1 cellpadding=2 style="font-size: 9pt"><tr>
<td><font face="verdana"><b>idProduccion</b></font></td>
<td><font face="verdana"><b>idProducto</b></font></td>
<td><font face="verdana"><b>Presentacion</b></font></td>
<td><font face="verdana"><b>Descripcion</b></font></td>
<td><font face="verdana"><b>Cantidad</b></font></td>
</tr>

<?php  
  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("fabrica", $link)
      or die ("Error al conectar a la base de datos.");

  $query = "SELECT idProduccion, idProducto, Presentacion, Descripcion, Cantidad " .
      "FROM produccion" ;
  $result = mysql_query($query);
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"15%\"><font face=\"verdana\">" . 
	    $row["idProduccion"] . "</font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    $row["idProducto"] . "</font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    $row["Presentacion"] . "</font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    $row["Descripcion"]. "</font></td>";    
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    $row["Cantidad"]. "</font></td></tr>"; 

  }
  mysql_free_result($result);
  mysql_close($link);
?>
</table>

</body>
</html>