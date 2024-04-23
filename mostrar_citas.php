<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Consulta SQL para seleccionar todas las citas, ordenadas por fecha y hora
$consulta = "SELECT fecha, hora, nombre, motivo FROM citas ORDER BY fecha, hora";

// Ejecutar la consulta
$resultado = $conex->query($consulta);

// Verificar si hay citas encontradas
if ($resultado->num_rows > 0) {
    // Recorrer los resultados de la consulta y mostrar cada cita en la tabla
    while ($fila = $resultado->fetch_assoc()) {
        // Mostrar cada cita en una fila de la tabla
        echo "<tr>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['hora'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['motivo'] . "</td>";
        echo "</tr>";
    }
} else {
    // Si no se encontraron citas, mostrar un mensaje en una fila vacía
    echo "<tr><td colspan='4'>No se encontraron citas.</td></tr>";
}

// Cerrar la conexión a la base de datos
$conex->close();
?>
