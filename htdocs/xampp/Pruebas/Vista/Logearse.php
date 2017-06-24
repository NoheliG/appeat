<?php
session_start();
header('Content-type: application/json');
require_once '../Logica/Metodos.php';
$rec1;
$objSesion = new Metodos();
$errro;
$respuesta;
$data;
if (empty($_POST['nombre_usuario']) == false && empty($_POST['clave']) == false) {
    $user = $_POST['nombre_usuario'];
    $password = $_POST['clave'];
    $rec = $objSesion->LogearseApp($user, $password);
    if ($rec != null && $rec == true) {
        
        $data = $rec;
        $errro = "200";
        $respuesta = "Persona Logeada";
    } else {
        $data = "null";
        $errro = "400";
        $respuesta = "Usuario y contraseña incorrectos";
    }
} else {
    $data = "null";
    $errro = "500";
    $respuesta = "error enviar";
}
$miArray = array("error_code" => $errro, "Data" => $data, "message" => $respuesta);
$data = json_encode($miArray);
echo $data;
?>
