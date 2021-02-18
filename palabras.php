<?php
	session_start();
	include('Utilidades/conexion.php');
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Mis palabras Daw2 </title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="contenedor">
	<?php
		$username = $_SESSION['Usuario'];
		echo "<h2> $username, éstas son tus palabras </h2>";
	
		//Consulta SQL para extraer de la base de datos las palabras escritas por el usuario.
		$query = $connection->prepare("SELECT dia, palabra1, palabra2 FROM datos WHERE USUARIO=:username");
		$query->bindParam("username", $username, PDO::PARAM_STR); // Se vincula un parámetro al nombre de la variable
		$query->execute();
 
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
	
		//Se comprueba si hay resultados (Filas) y si las hay las muestra.
		if (!$result) {
			echo '<h4 class="error">No has añadido palabras. ¡Anímate!</h4>';
		} else {
			echo"<table>
					<thead>
						<tr>
							<th>Día</th>
							<th>Palabra1</th>
							<th>Palabra2</th>
						</tr>
					</thead/>
				<tbody>";
			foreach ($result as $fila){
				echo "<tr><td>".$fila['dia']."</td><td>".$fila['palabra1']."</td><td>".$fila['palabra2']."</td></tr>";
			}
			echo "</tbody></table>";
		}
		//Enlaces para la navegación.
		echo "<a href='formulario.php'> Volver </a>";
		echo "<a href='Utilidades/salir.php'> Cerrar Sesión </a>";
		
?>
	</div>
</body>
</html>


