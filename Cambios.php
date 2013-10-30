<?php
    require('Conexion.php');
	$Id = $_REQUEST['id'];
    $Nombre = $_REQUEST['nombre'];
	$Ap = $_REQUEST['ap'];
	$Am = $_REQUEST['am'];
	$Telefono = $_REQUEST['tel'];
	$Celular = $_REQUEST['cel'];
	$Domicilio = $_REQUEST['dom'];
    
    $query = "UPDATE contacto SET nombre = '" . $Nombre ."', ap = '" . $Ap ."', am = '" . $Am ."', telefono = '" . $Telefono ."', 
	celular = '" . $Celular ."', domicilio = '" . $Domicilio ."' WHERE id = '" . $Id ."'";
	mysql_query($query,$con);
	echo "<script>";
	echo "alert('Los datos han sido guardados...');";
	echo "location.replace('Directorio.php')";
	echo "</script>";
?>