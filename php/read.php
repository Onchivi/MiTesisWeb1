<?php
include 'conexion.php';

$sql = "SELECT nombre, apellido, edad, telefono FROM usuarios";
$result = $conn->query($sql);

$usuarios = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
    
} 
header('Content-Type: application/json');
echo json_encode($usuarios);
$conn->close();
?>
