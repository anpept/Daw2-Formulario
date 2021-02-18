<?php
	//Código para guardar los datos del formulario
	include('conexion.php');
	session_start();
 
    $usuario = $_SESSION['Usuario'];
	if (isset($_POST['palabra1'])) {
		
		// Se recogen los datos enviados
		$dia = $_POST['dia'];
		$palabra1 = $_POST['palabra1'];
		$palabra2 = $_POST['palabra2'];
		 
		//Consulta SQL para almacenar los datos en la Base de datos 
		$query = $connection->prepare("INSERT INTO datos(USUARIO,DIA,PALABRA1,PALABRA2) VALUES (:usuario, :dia, :palabra1, :palabra2)");
		$query->bindParam("usuario", $usuario, PDO::PARAM_STR); //Vincula un parámetro al nombre de la variable
		$query->bindParam("dia", $dia, PDO::PARAM_STR);
		$query->bindParam("palabra1", $palabra1, PDO::PARAM_STR);
		$query->bindParam("palabra2", $palabra2, PDO::PARAM_STR);
		$result = $query->execute();
 
		if ($result) { 
			//Si tiene éxito a traves de GET se envía un 0.			
			header("location: ../formulario.php?Error=0");
			
		} else {
			//Si no tiene éxito se envía un 1 a través de GET.
			header("location: ../formulario.php?Error=1");
			
		}
	} else {
		//Si ocurre un error al enviarse los datos se envía un 1 a través de GET.
		header("location: ../formulario.php?Error=1");		
	}
?>