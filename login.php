<?php
include("conexion.php");

if(isset($_POST['login'])) {
    $correo = $_POST['login_correo'];
    $contraseña = $_POST['login_contraseña'];

    // Consulta SQL para buscar al usuario en la base de datos
    $consulta = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contraseña'";
    $resultado = $conex->query($consulta);

    if($resultado->num_rows > 0) {
        // Usuario encontrado, iniciar sesión
        session_start();
        $_SESSION['correo'] = $correo;
        header("Location: index.html"); // Redirigir al usuario al panel de control
        exit();
    } else {
        // Usuario no encontrado, mostrar mensaje de error
        echo "Correo electrónico o contraseña incorrectos.";
    }
}
?>