<?php
/*Define los parámetros de conexión a la base de datos.
Los parámetros se tomas del fichero de variables de entorno: .env
DB_HOST: Nombre o dirección del gestor de BD MariaDB
DB_NAME: Nombre de la BD
DB_USER: Usuario de la BD
DB_PASSWORD: Contraseña del usuario e la BD
*/

/*Con gentenv se obtiene el valor de una variable de entorno*/
define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/*
Otra alternativa es definir directamente los parámetros de conexión:
define('DB_HOST', 'mariadb');
define('DB_PORT', '3307');
define('DB_NAME', 'electroshop');
define('DB_USER', 'usuario');
define('DB_PASSWORD', 'usuario@1');
*/


//Abre una nueva conexión al servidor MySQL/MariaDB
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//$mysqli = new mysqli('mariadb', 'usuario', 'usuario1', 'electroshop');
//Devuelve una descripción del último error producido en la conexión a la BD
if ($mysqli->connect_error) {
    printf('Falló la conexión: %s\n', mysqli_connect_error());
    exit();
}
?>
