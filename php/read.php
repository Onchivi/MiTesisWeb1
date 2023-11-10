<?php
include 'conexion.php'; // Incluye el script de conexión modificado

$sql = "SELECT id, nombre, apellido, edad, telefono FROM usuarios"; // Tu consulta SQL
$result = $conn->query($sql);

$usuarios = array();

if ($result->num_rows > 0) {
    // Recorre los resultados y añádelos al array
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
    echo json_encode($usuarios); // Envía los resultados en formato JSON
} else {
    echo json_encode([]); // Envía un array vacío si no hay resultados
}

$conn->close(); // Cierra la conexión
?>
