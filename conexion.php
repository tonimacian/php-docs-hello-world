<?php
$host = 'mysql-cefire0001.mysql.database.azure.com';
$db = 'misdatos';
$user = 'cefire@mysql-cefire0001';
$password = '123456Ab.';

$conexion = mysqli_connect($host, $user, $password, $db);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "¡Conexión exitosa!";
?>
