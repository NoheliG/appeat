<?php

header('Content-type: application/json');
require_once '../Logica/Metodos.php';
$rec1;
$objSesion = new Metodos();
$errro;
$respuesta;
$data;
if (empty($_POST['nombre_usuario']) == false && empty($_POST['clave']) == false) {
    $nombre = $_POST['nombre_restaurante'];
    $ruc = $_POST['ruc'];
    $correo = $_POST['correo_restaurante'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];
    $rec = $objSesion->RegistrarRestaurante($nombre, $ruc, $correo, $telefono, $usuario, $clave);
    if ($rec != null && $rec == true) {
        $data = $rec;
        $errro = "200";
        $respuesta = "Persona Logeada";
    } else {
        $data = "null";
        $errro = "500";
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
