<?php
    require("Conexion.php");
	$id = $_REQUEST['id'];
	$query = "DELETE FROM contacto WHERE id = $id";
	mysql_query($query,$con);
	
	echo "<script>";
	echo "alert('Los datos han sido eliminados correctamente');";
	echo "location.replace('Directorio.php')";
	echo "</script>";
?>