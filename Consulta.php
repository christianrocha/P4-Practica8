<html>
        <head>
            <link rel="stylesheet" href="estilos.css"/>				
        </head>
        <body>
<?php
    require('Conexion.php'); 
	 
    $query = 'SELECT * FROM contacto';				
	$ejecuta = mysql_query($query);
	$count = mysql_num_rows($ejecuta);
				
    $resultado = mysql_fetch_object($ejecuta);
    $contador = 0;
    echo "</br><table> ";
	echo"<th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Telefono</th><th>Celular</th><th>Domicilio</th><th>OPCIONES</th>";
    while($contador < $count){
        echo "<tr><td>".$resultado -> id."</td><td>".$resultado -> nombre."</td><td>".$resultado -> ap."</td>
		<td>".$resultado -> am."</td><td>".$resultado -> telefono."</td><td>".$resultado -> celular."</td><td>".$resultado -> domicilio."</td>
		<td><a href = 'Ver.php?id=" . $resultado -> id. "'>Ver</a>
		<a href = 'Editar.php?id=" . $resultado -> id. "'>Editar</a>
		<a href = 'Eliminar.php?id=" . $resultado -> id. "'>Eliminar</a>
		</td></tr>";
		$resultado = mysql_fetch_object($ejecuta);
        $contador++;
    }	
    echo "</table>";   
    echo "<a href = 'Nuevo.php'><input type = 'submit' value = 'Insertar' id = 'insert'/></a>";	
?>
</body> 
</html>