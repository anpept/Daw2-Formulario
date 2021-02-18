# Daw2-Formulario Antonio Peñate

Primer ejercicio de la asignatura DAW2.
Es una pequeña web realizada en PHP y que usa mysql. Tiene un inicio de sesión, y un pequeño formulario para guardar palabras.

Tiene implementadas varias utilidades:

  **Cerrar sesión:** Destruye la sesión y vuelve a la página de inicio.
  
  **Guardar:** Sirve para guardar las palabras del formulario.
  
  **Palabras:** Muestra las palabras almacenadas por un usuario concreto.
  
  **Validar:** Determina si las credenciales de acceso son correctas.
  
  **Conexión:** Sirve para establecer una conexión con la base de datos MySQL.
  
Para poder usar este ejercicio es necesario un entorno WAMP, LAMP o XAMP. (En mi caso usé WAMP). En la Base de Datos se debe ejecutar el script *“Crear_tablas.sql”* para crear las tablas necesarias y algunos usuarios para que pueda funcionar el ejercicio. Las claves de los usuarios son *“123456”*.

El siguiente paso en configurar los datos de la base de datos en las primeras líneas del fichero *“Conexión.php”*. En ellas hay que definir el usuario, contraseña, servidor, base de datos y puerto. En el ejemplo están las que usa por defecto WAMP.

define('USER', 'root');

define('PASSWORD', '');

define('HOST', 'localhost');

define('DATABASE', 'daw2');

define('PORT', '3308');

###### EL código usado en este ejercicio está extraído de las siguientes páginas:

[Formulario de inicio de sesión con PHP & MySQL](https://obedalvarado.pw/blog/formulario-inicio-sesion-php-mysql/)

[Sistema de Login con Sesiones usando PHP Y MYSQL](https://www.youtube.com/watch?v=9BLoMGO-XcU)

[Crear un formulario PHP de inicio de sesión](https://code.tutsplus.com/es/tutorials/create-a-php-login-form--cms-33261)

[PDO not working with Port](https://stackoverflow.com/questions/21046672/pdo-not-working-with-port)

[PDOStatement::bindParam](https://www.php.net/manual/es/pdostatement.bindparam.php)

[Consultas a bases de datos desde PHP con PDO](https://josehernandez.es/2012/01/07/consultas-base-datos-pdo.html)

[Como recorrer consulta PDO en PHP](https://es.stackoverflow.com/questions/68150/como-recorrer-consulta-pdo-en-php)

CSS - [Group Input Search Form Design Using Html & CSS | Form Input Group](https://www.youtube.com/watch?v=WTO2jm-cpaM)

CSS - [How To Create a Login Form - Simple Sign In Page Design in Htlm and CSS](https://www.youtube.com/watch?v=VegNcFl4EhA&t=9s)

