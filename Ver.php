<?php
    require('Conexion.php');	
    $id = $_REQUEST['id'];	
    $query = "SELECT * FROM contacto WHERE id=$id";
	$ejecuta = mysql_query($query,$con);
	$resultado = mysql_fetch_object($ejecuta);
?>
<html>
    <head>
	    <title>Ver Datos</title>
        <link rel="stylesheet" href="estilos.css"/>				
    </head>
	<body id = 'body2'>
        <form> 
            <center>
            <fieldset id = 'fd1'>
            <legend id = 'lgnd1'><h3>Ingrese su Usuario</h3></legend><br/>
		    <div align = left>	
                Id: 
				<?php echo $resultado -> id; ?>
				<br/>
                <br/>
                Nombre: </br>
                <?php echo $resultado -> nombre; ?>
				<br/>
                <br/>
				Apellido Paterno: </br>
                <?php echo $resultado -> ap; ?>
				<br/>
                <br/>
				Apellido Materno: </br>
                <?php echo $resultado -> am; ?>
				<br/>
                <br/>
                Telefono: </br>				
                <?php echo $resultado -> telefono; ?>
				<br/>
                <br/>
                Celular: </br>
                <?php echo $resultado -> celular; ?>
				<br/>
                <br/>
				Domicilio: </br>
                <?php echo $resultado -> domicilio; ?>
                <br/>
                <br/>
			</div>
                <a id = 'a2' href = 'Directorio.php'>Regresar<a>				
            </fieldset>                                                           
            </center> 				
        </form>  
	</body>
</html>