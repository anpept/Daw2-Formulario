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
</head>
<body>
<?php
	echo "<h1> BIENVENIDO AL FORMULARIO $usuario </h1>";

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
        <label >Escriba una palabra</label>
        <input type="text" name="palabra1" required />
    </div>
	<div class="form-element">
        <label >Escriba otra palabra</label>
        <input type="text" name="palabra2" required />
    </div>
    <button type="submit" name="login" value="login">Guardar palabras</button>
</form>
<?php
	//Se recoge a través de GET si ha ocurrido un error, y se muestra un mensaje en concecuencia.
	if (isset($_GET["Error"])){
		if ($_GET["Error"] == 0){
			echo "<h5> Se han guardado con éxito las palabras, gracias por su participación </h5>";
		} else {
			echo "<h5> Ups, Ha ocurrido un error </h5>";
		}
	}
	echo "<a href='palabras.php'> Mis palabras </a>";
	echo "<a href='Utilidades/salir.php'> Cerrar Sesión </a>";
?>

</body>
</html>


