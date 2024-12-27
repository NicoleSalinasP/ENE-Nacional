<?php
$servername = "localhost";
$username = "root"; // Cambia si es necesario
$password = ""; // Cambia si tienes contraseña configurada
$dbname = "sigloxxi"; // Nombre de tu base de datos
$port="3307";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>