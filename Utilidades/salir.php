<?php
	//Código para destruir la sesión y retornar al inicio.
	session_start();
	session_destroy();
	header ("location: ../index.php");
	exit();
?>