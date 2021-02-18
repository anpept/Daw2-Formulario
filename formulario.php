<?php
	session_start();
	$usuario = $_SESSION['Usuario'];
?>
<!DOCTYPE html>
<!-- Vista del Formulario -->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Formulario Daw2 </title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="formulario">
	<?php
		echo "<h2> BIENVENIDO $usuario </h2>";
	?>
	<form method="post" action="Utilidades/guardar.php" name="signin-form">    
		<div class="form-element">
			<select name="dia">
				<option>¿Qué día es hoy?</option> 
				<option value="Lunes">lunes</option> 
				<option value="Martes">martes</option> 
				<option value="Miércoles">miércoles</option> 
				<option value="Jueves">jueves</option> 
				<option value="Viernes">viernes</option> 
				<option value="Sábado">sábado</option> 
				<option value="Domingo">domingo</option> 
			</select>
		</div>
		<div class="form-element">
			
			<input type="text" name="palabra1" placeholder="Escriba una palabra" required />
		</div>
		<div class="form-element">
			<input type="text" name="palabra2" placeholder="Escriba otra palabra" required />
		</div>
		<div class="form-element">
			<input type="submit" name="Guardar" value="Guardar">
		</div>
	</form>
	<?php
		//Se recoge a través de GET si ha ocurrido un error, y se muestra un mensaje en concecuencia.
		if (isset($_GET["Error"])){
			if ($_GET["Error"] == 0){
				echo "<h4 class='error'> Se han guardado con éxito las palabras, gracias por su participación. </h4>";
			} else {
				echo "<h4 class='error'> Ups, Ha ocurrido un error </h4>";
			}
		}
	?>
		<a href='palabras.php'> Mis palabras </a>
		<a href='Utilidades/salir.php'> Cerrar Sesión </a>
	</div>

</body>
</html>


