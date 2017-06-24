<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../Dao/ConexionDao.php';

class Metodos extends ConexionDao {

    function LogearseApp($usuario, $password) {
        $rec = null;
        try {
            $query = "select * from usuario WHERE nombre_usuario = '$usuario'";
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
            $query = "";
            $stm = $this->dblink->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            $rec = null;
        }
        return $rec;
    }

}
