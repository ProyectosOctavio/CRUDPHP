<?php

require_once 'conexion.php';

$data = json_decode(file_get_contents("php://input"), true);

// Obtener el identificador del registro a actualizar desde la URL
$id = $_GET['id'];

$sql = "UPDATE carrera SET nombre='" . $data["nombre"] . "', descripcion='" . $data["descripcion"] . "', precio='" . $data["precio"] . "' WHERE id=" . $id;
$resultado=$mysql->query($sql);

if ($resultado==true) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: ";
}




?>