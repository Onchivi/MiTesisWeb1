<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', edad='$edad', telefono='$telefono' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
?>
