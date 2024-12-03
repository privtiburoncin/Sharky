<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Servidor de la base de datos
$username = "root"; // Usuario de la base de datos (puedes cambiarlo por otro usuario si es necesario)
$password = ""; // Contraseña del usuario (dejar vacío si no tiene contraseña)
$dbname = "nbasegura"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Opcional: Configurar el conjunto de caracteres para evitar problemas con acentos
$conn->set_charset("utf8");
?>