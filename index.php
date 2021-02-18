<!DOCTYPE html>
<html lang="es">
<!-- Vista del Formulario de login -->
<head>
	<meta charset="UTF-8">
	<title> Ejercicio Daw2 </title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="formulario-login">
		<form method="post" action="Utilidades/validar.php" name="signin-form">
			<h2> Iniciar Sesión </h2>
			<div class="form-element">
				<i class="fa fa-user"></i>
				<input type="text" name="usuario" placeholder="Nombre de Usuario" pattern="[a-zA-Z0-9]+" required />
			</div>
			<div class="form-element">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Contraseña" required />
			</div>
			<div class="form-element">
				<input type="submit" name="login" value="Iniciar Sesión">
			</div>
		</form>
		<?php
		//Si se envía un 1 a través de GET se muestra un mensaje de error.
		if (isset($_GET["Error"])){
			if ($_GET["Error"] == 1){
				echo "<h5 class='mensaje-error'> Los datos introducidos son incorrectos </h5>";
			}
		}
	?>
	</div>
</body>
</html>
	