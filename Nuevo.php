    <?php
    session_start();
    if(!isset($_SESSION['codigo'])){
    header('Location: Sesion.php');
    }
    ?>
<html>
    <head>
    <title>Insertar Datos</title>
	<link rel="stylesheet" href="estilos.css"/>
    </head>
    <body id = 'body2'>
        <h1>Nuevo Contacto</h1>
        <a href = 'Cerrar.php'><h3>cerrar sesion</h3></a>
        <form   method = 'post' action = 'Insertar.php'> 
            <center>
            <fieldset id = 'fd1'>
            <legend id = 'lgnd1'><h3>Ingrese su Usuario</h3></legend><br/>
		    <div>			
                Nombre: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'nombre'/>
				<br/>
                <br/>
				Apellido Paterno: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'ap'/>
				<br/>
                <br/>
				Apellido Materno: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'am'/>
				<br/>
                <br/>
                Telefono: </br>				
                <input type = 'text' size = '40' maxlength = '255' name = 'tel'/>
				<br/>
                <br/>
                Celular: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'cel'/>
				<br/>
                <br/>
				Domicilio: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'dom'/>
                <br/>
                <br/>
			</div>
                <input type = 'submit' value = 'Guardar'/>
                <input type = 'reset' value= 'Limpiar Datos'/>	
                <a id = 'a2' href = 'Directorio.php'>Regresar<a>				
            </fieldset>                                                           
            </center> 				
        </form>  	
    </body>
</html>