<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "tu_contrasena"; // Asegúrate de que esta contraseña sea correcta
$dbname = "nbasegura";


// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Configurar el conjunto de caracteres
$conn->set_charset("utf8");
?>
