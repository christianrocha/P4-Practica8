<!DOCTYPE html>
<html>
        <head>
                <title>Practica 5</title> 
                <link rel="stylesheet" href="estilos.css"/>				
        </head>
        <body>
            <h1>Inicio de Sesi&oacute;n</h1>
			<form method = 'post' action = 'Iniciar.php'>   
			    <center>
                <fieldset>
                <legend><h3>Inicie Sesion</h3></legend><br/>
				<div>
				Codigo : </br>
                    <input type = 'text' size = '40' maxlength = '255' name = 'codigo'/>                                
                    <br/>
                    <br/>
				Password : </br>
                    <input type = 'password' size = '40' maxlength = '255' name = 'pass'/>
                    <br/>
                    <br/>					  
                </div>
                    <input type = 'submit' value = 'Iniciar Sesion'/> 				
                </fieldset>                                                           
                </center>      
            </form>
        </body> 
</html>