<?php
if($_POST){
    var_dump($_POST);
	$Codigo = $_POST['codigo'];
	var_dump($Codigo);
	}
?>		

    <?php
	    $Codigo = $_POST['codigo'];
	    $Password = $_POST['pass'];
		
        if(($Codigo == 100 && $Password == 'udg')||
           ($Codigo == 110 && $Password == 'tonala')||
           ($Codigo == 1 && $Password == 'root')){
            session_start();				
            $_SESSION['codigo'] = $Codigo;
            $_SESSION['pass'] = $Password;
		         
        header('Location: Directorio.php');
        }else{
        header('Location: Cerrar.php');
        }				  
    ?>