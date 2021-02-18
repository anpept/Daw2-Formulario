<?php
//Código necesario para establecer una conexión con la Base de datos MySQL
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'daw2');
define('PORT', '3308');
 
try {
    $connection = new PDO("mysql:host=".HOST."; port=3308; dbname=".DATABASE.";charset=utf8", USER, PASSWORD);	
	 
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>