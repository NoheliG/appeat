<?php

header('Content-type: application/json');
require_once '../Logica/Metodos.php';
$objSesion = new Metodos();
$errro;
$respuesta;
$data;
if (!empty($_POST)) {
    if (isset($_POST["nombre_plato"]) && isset($_POST["descripcion_plato"]) && isset($_POST["precio_plato"]) && isset($_POST["stock_plato"])) {
        if ($_POST["nombre_plato"] != "" && $_POST["descripcion_plato"] != "" && $_POST["precio_plato"] != "") {
            $plato = $_POST['nombre_plato'];
            $des = $_POST['descripcion_plato'];
            $precio = $_POST['precio_plato'];
            $stock = $_POST['stock_plato'];
            $rec = $objSesion->registrarPlatillo($plato, $des, $precio, $stock);
            if ($rec != null && $rec == true) {
                $data = $rec;
                $errro = "200";
                $respuesta = "datos ingresados";
            } else {
                $data = "null";
                $errro = "500";
                $respuesta = "error en la insercion de datos";
            }
//        } else {
//            $data = "null";
//            $errro = "500";
//            $respuesta = "error enviar";
//        }
        }
    }
}
$miArray = array("error_code" => $errro, "Data" => $data, "message" => $respuesta);
$data = json_encode($miArray);
echo $data;
?>