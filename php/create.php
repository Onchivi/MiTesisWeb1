<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, apellido, edad, telefono) VALUES ('$nombre', '$apellido', '$edad', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
