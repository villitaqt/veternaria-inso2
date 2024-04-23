<?php
include("conexion.php");

if(isset($_POST['registrar'])) {
    $nombre = $_POST['reg_nombre'];
    $dni = $_POST['reg_dni'];
    $email = $_POST['reg_correo'];
    $user = $_POST['reg_user'];
    $password = $_POST['reg_contraseña'];

    // Consulta SQL para insertar el usuario en la base de datos
    $consulta = "INSERT INTO usuarios (nombre, dni, correo, usuario, contrasena) VALUES ('$nombre', '$dni', '$email', '$user', '$password')";

    if($conex->query($consulta) === TRUE) {
        // Redirigir a la página de inicio de sesión
        header("Location: registrar.html");
        exit(); // Asegurarse de que el script se detenga aquí
    } else {
        echo "Error al registrar usuario: " . $conex->error;
    }

}
?>