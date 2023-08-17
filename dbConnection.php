<?php

$host = "localhost"; // Host de la base de datos
$username = "if0_34747524"; // Nombre de usuario de la base de datos
$password = "CSJkwayT1Mwqr"; // Contraseña de la base de datos
$dbname = "if0_34747524_AngomasDB"; // Nombre de la base de datos

// Crear conexión
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}



?>