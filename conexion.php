<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "veterinaria_db";

// Crear conexión
$conex = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conex->connect_error) {
    die("La conexión ha fallado: " . $conex->connect_error);
}
?>