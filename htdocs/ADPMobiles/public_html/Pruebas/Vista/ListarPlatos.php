<?php
header('Content-type: application/json');
require_once '../Logica/Metodos.php';
$rec1;
$objSesion = new Metodos();
$errro;
$respuesta;
$data;
$count;
$rec = $objSesion->ListarPlatos();
if ($rec != null && $rec == true) {
    $data = $rec;
    $errro = "200";
    $respuesta = "Lista";
    $count = count($rec);
} else {
    $data = "null";
    $errro = "500";
    $respuesta = "No hay platos regisrados";
    $count = 0;
}

$miArray = array("error_code" => $errro, "Data" => $data, "message" => $respuesta, "count" => $count);
$data = json_encode($miArray);
echo $data;
?>

