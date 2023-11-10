<?php
include 'conexion.php';

$id = $_POST['id'];

$sql = "DELETE FROM usuarios WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado con éxito";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();
?>
