<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $codigo = $_POST["codigo"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $fechaNac = $_POST["fechaNac"];
    $idcarrera = $_POST["idcarrera"];
    $my_query = "insert into estudiante(codigo, nombres, apellidos, fechaNac, idcarrera) 
    values('".$codigo."', '".$nombres."', '".$apellidos."' , '".$fechaNac."' , '".$idcarrera."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>