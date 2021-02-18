<?php
	include('conexion.php');
	session_start();
 
    $nombre = $_POST['usuario'];
    $password = $_POST['password'];
	
	//Consulta SQL para comprobar si existe el nombre de usuario.
    $query = $connection->prepare("SELECT * FROM usuarios WHERE NOMBRE=:nombre");
    $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
	 
    if (!$result) { 
	//No existe el usuario introducido Se envía un 1 a través de GET.        
		header("location: ../index.php?Error=1");
    } else {
        if (password_verify($password, $result['password'])) { 
		//Inicio de Sesión Correcto
            $_SESSION['user_id'] = $result['id'];
			$_SESSION['Usuario'] = $result['nombre'];
			header("location: ../formulario.php");
        } else { 
		//Contraseña incorrecta, se envía un 1 a través de GET
			header("location: ../index.php?Error=1");
        }
    }

?>