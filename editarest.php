<?php

require_once 'conexion.php';

$data = json_decode(file_get_contents("php://input"), true);

// Obtener el identificador del registro a actualizar desde la URL
$id = $_GET['id'];

$sql = "UPDATE estudiante SET codigo='" . $data["codigo"] . "', nombres='" . $data["nombres"] . "', apellidos='" . $data["apellidos"] ."', fechaNac='" . $data["fechaNac"] ."', idcarrera='" . $data["idcarrera"] ."' WHERE id=" . $id;
$resultado=$mysql->query($sql);

if ($resultado==true) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: ";
}




?>