<?php

require_once '../Dao/ConexionDao.php';

class Metodos extends ConexionDao {

    function LogearseApp($usuario, $password) {
        $rec = null;
        try {
            $query = "select * from usuario where nombre_usuario='$usuario' and clave='$password'";
            $stm = $this->dblink->prepare($query);
            $stm->execute();
            $rec = $stm->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            $rec = null;
        }
        return $rec;
    }

    function ListarPlatos() {
        $rec = null;
        try {
            $query = "select nombre_plato from plato";
            $stm = $this->dblink->prepare($query);
            $stm->execute();


            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);

            $platillo = array(); //creamos un array

            while ($row = mysqli_fetch_array($result)) {
                
                $nombre = $row['nombre_plato'];
             
                $platillo[] = array('nombre' => $nombre);
            }
        } catch (Exception $ex) {
            $rec = null;
        }
        return $platillo;
    }

    function registrarPlatillo($plato, $des, $precio, $stock) {
        $rec = null;
        try {
            $query = "INSERT INTO plato (nombre_plato, descripcion_plato, precio_plato, stock_plato) values ('$plato', '$des', '$precio', '$stock');";
            $stm = $this->dblink->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $rec = null;
        }
        return $rec;
    }

    function editarPlatillo($id, $descripcion_plato, $precio_plato, $stock_plato, $tiempo_preparo) {
        $rec = null;
        try {
            $query = "Update plato Set descripcion_plato='$descripcion_plato', precio_plato='$precio_plato', stock_plato='$stock_plato', tiempo_preparo='$tiempo_preparo', telefono='$descripcion_plato' Where id_plato='$id';";
            $stm = $this->dblink->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $rec = null;
        }
        return $rec;
    }

    function eliminarPlatillo($id, $descripcion_plato, $precio_plato, $stock_plato, $tiempo_preparo) {
        $rec = null;
        try {
            $query = "Update plato Set descripcion_plato='$descripcion_plato', precio_plato='$precio_plato', stock_plato='$stock_plato', tiempo_preparo='$tiempo_preparo', telefono='$descripcion_plato' Where id_plato='$id';";
            $stm = $this->dblink->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $rec = null;
        }
        return $rec;
    }

    function RegistrarRestaurante($nombre, $ruc, $correo, $telefono, $usuario, $clave) {
//        $rec = null;
        try {
            $query = "call insertar('$nombre','$ruc','$correo','$telefono','$usuario','$clave')";
            $stm = $this->dblink->prepare($query);
            $stm->execute();
            $rec = $stm->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $ex->getMessage();
//            $rec = null;
        }
        return $rec;
    }

}
