<?php
	session_start();
	include('Utilidades/conexion.php');
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Mis palabras Daw2 </title>
</head>
<body>
<?php
	$username = $_SESSION['Usuario'];
	echo "<h1> $username, éstas son tus palabras </h1>";
	
	//Consulta SQL para extraer de la base de datos las palabras escritas por el usuario.
    $query = $connection->prepare("SELECT dia, palabra1, palabra2 FROM datos WHERE USUARIO=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR); // Se vincula un parámetro al nombre de la variable
    $query->execute();
 
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
	
	//Se comprueba si hay resultados (Filas) y si las hay las muestra.
    if (!$result) {
        echo '<p class="error">No has añadido palabras</p>';
    } else {
		foreach ($result as $fila){
			echo $fila['palabra1']."-".$fila['palabra2']."-".$fila['dia']."<br>";
		}
    }
	//Enlaces para la navegación.
	echo "<a href='Utilidades/salir.php'> Cerrar Sesión </a>";
	echo "<a href='formulario.php'> Volver </a>";
?>

</body>
</html>


