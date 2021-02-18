<!DOCTYPE html>
<html lang="es">
<!-- Vista del Formulario de login -->
<head>
	<meta charset="UTF-8">
	<title> Ejercicio Daw2 </title>
</head>
<body>
	<form method="post" action="Utilidades/validar.php" name="signin-form">
    <div class="form-element">
        <label >Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Iniciar Sesión</button>
</form>
<?php
	//Si se envía un 1 a través de GET se muestra un mensaje de error.
	if (isset($_GET["Error"])){
		if ($_GET["Error"] == 1){
			echo "<h5> Los datos introducidos son incorrectos </h5>";
		}
	}
?>
</body>
</html>
	