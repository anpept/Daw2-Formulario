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
