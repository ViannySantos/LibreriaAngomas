<?php
// Función para limpiar y validar los datos ingresados en el formulario
function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

// Obtener los datos enviados desde el formulario y limpiarlos
$Fecha = limpiarDatos($_GET['Fecha']);
$Hora = limpiarDatos($_GET['Hora']);
$Size = limpiarDatos($_GET['Size']);
$Nombre = limpiarDatos($_GET['Nombre']);
$Notas = limpiarDatos($_GET['Notas']);

// Validar los datos ingresados
$errores = array();

if (empty($Fecha)) {
    $errores[] = "Por favor, ingresa una Fecha.";
}

if (empty($Hora)) {
    $errores[] = "Por favor, ingresa una Hora.";
}

if (empty($Size)) {
    $errores[] = "Por favor, selecciona una opción.";
}

if (empty($Nombre)) {
    $errores[] = "Por favor, ingresa tu Nombre.";
}

if (empty($Notas)) {
    $errores[] = "Por favor, ingresa las Notas.";
}

// Realizar la conexión a la base de datos
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "tenisspicy_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Insertar los datos del formulario en la tabla correspondiente
$sql = "INSERT INTO pedidos (Fecha, Hora, Size, Nombre, Notas) VALUES ('$Fecha', '$Hora', '$Size', '$Nombre', '$Notas')";

if ($conn->query($sql) === TRUE) {
    echo "El pedido se ha registrado correctamente";
} else {
    echo "Error al registrar el pedido: " . $conn->error;
}

$conn->close();
?>
