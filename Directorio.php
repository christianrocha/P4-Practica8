<!DOCTYPE html>
<html>
    <head> 
	<title>Directorio</title>
	<link rel="stylesheet" href="estilos.css"/> 
	</head>
    <body id = 'body2'>
	    <a href = 'Sesion.php'><h3>cerrar sesion</h3></a>
             
    </body>
</html>

<?php 	
    session_start();
    if(!isset($_SESSION['codigo'])){
	    header('Location: Sesion.php');
    }
	require_once('Consulta.php');
?> 