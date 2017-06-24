<?php

header('Content-type: application/json');
require_once '../Logica/Metodos.php';
$rec1;
$objSesion = new Metodos();
$errro;
$respuesta;
$data;
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$data1 = json_decode(file_get_contents('php://input'));
if (empty($data1['nombre_usuario']) == false && empty($data1['clave']) == false) {
    $user = $data1['nombre_usuario'];
    $password = $data1['clave'];
    $rec = $objSesion->LogearseApp($user, $password);
    if ($rec != null && $rec == true) {
        $data = $rec;
        $errro = "200";
        $respuesta = "Persona Logeada";
        header("Location: menuprincipal.html"); 
    } else {
        $data = "null";
        $errro = "500";
        $respuesta = "Usuario y contraseña incorrectos";
    }
} else {
    $data = "null";
    $errro = "500";
    $respuesta = "Usuario y contraseña incorrectos";
}

$miArray = array("error_code" => $errro, "Data" => $data, "message" => $respuesta);
$data = json_encode($miArray);
echo $data;
}
?>
