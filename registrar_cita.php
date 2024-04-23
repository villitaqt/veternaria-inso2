<?php
// Verificar si se ha enviado el formulario
if(isset($_POST['registrar_cita'])) {
    // Incluir el archivo de conexión a la base de datos
    include("conexion.php");

    // Recuperar los datos del formulario
    $nombre = $_POST['cita_nombre'];
    $fecha = $_POST['cita_fecha'];
    $hora = $_POST['cita_hora'];
    $motivo = $_POST['cita_especialidad'];
    
    // Consulta SQL para insertar la cita en la base de datos
    $consulta = "INSERT INTO citas (nombre, fecha, hora, motivo) 
                 VALUES ( '$nombre', '$fecha', '$hora', '$motivo' )";

    // Ejecutar la consulta
    if($conex->query($consulta) === TRUE) {
        // Cita registrada exitosamente
        echo "La cita se ha registrado exitosamente";
        header("Location: cita.php");
        exit(); // Asegurarse de que el script se detenga aquí
    } else {
        // Error al registrar la cita
        echo "Error al registrar la cita: " . $conex->error;
    }

    // Cerrar la conexión a la base de datos
    $conex->close();
}
?>
