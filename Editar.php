<?php
    require('Conexion.php');	
    $id = $_REQUEST['id'];	
    $query = "SELECT * FROM contacto WHERE id=$id";
	$ejecuta = mysql_query($query,$con);
	$resultado = mysql_fetch_object($ejecuta);
?>
<html>
    <head>
	    <title>Editar Datos</title>
	    <link rel="stylesheet" href="estilos.css"/>				
	</head>
	    <body id = 'body2'>
            <form method = 'post' action = 'Cambios.php'> 
            <center>
            <fieldset id = 'fd1'>
            <legend id = 'lgnd1'><h3>Ingrese su Usuario</h3></legend><br/>
		    <div align = left>	
                Id: <?php echo $resultado -> id; ?>
				<br/>
                <br/>
                Nombre: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'nombre' value ='<?php echo $resultado -> nombre; ?>' />
				<br/>
                <br/>
				Apellido Paterno: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'ap' value ='<?php echo $resultado -> ap; ?>' />
				<br/>
                <br/>
				Apellido Materno: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'am' value ='<?php echo $resultado -> am; ?>' />
				<br/>
                <br/>
                Telefono: </br>				
                <input type = 'text' size = '40' maxlength = '255' name = 'tel' value ='<?php echo $resultado -> telefono; ?>' />
				<br/>
                <br/>
                Celular: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'cel' value ='<?php echo $resultado -> celular; ?>' />
				<br/>
                <br/>
				Domicilio: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'dom' value ="<?php echo $resultado -> domicilio; ?>" />
                <br/>
                <br/>
			</div>
                <input type = 'submit' value = 'Guardar'/>
                <a id = 'a2' href = 'Directorio.php'>Regresar<a>				
            </fieldset>                                                           
            </center> 				
        </form>  
	</body>
</html>