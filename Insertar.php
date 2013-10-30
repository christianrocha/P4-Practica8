<?php
    require('Conexion.php');
	
    $Nombre = $_REQUEST['nombre'];
	$Ap = $_REQUEST['ap'];
	$Am = $_REQUEST['am'];
	$Telefono = $_REQUEST['tel'];
	$Celular = $_REQUEST['cel'];
	$Domicilio = $_REQUEST['dom'];
    
    $query = "INSERT INTO contacto(nombre,ap,am,telefono,celular,domicilio) VALUES ('".$Nombre."','".$Ap."','".$Am."','".$Telefono."','".$Celular."','".$Domicilio."')";
	mysql_query($query,$con);
	echo "<script>";
	echo "alert('Los datos han sido Insertados...');";
	echo "location.replace('Directorio.php')";
	echo "</script>";
?>