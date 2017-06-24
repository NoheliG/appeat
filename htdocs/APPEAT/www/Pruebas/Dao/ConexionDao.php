<?php

class ConexionDao {

//    protected $dblink = null;
//    public $host = "https://databases.000webhost.com";
//    public $username = "id2046736_elizaroot";
//    public $password = "123456789";
//    public $databasename = "id2046736_adpeat";
//    public $charset = 'utf8';

 protected $dblink = null;
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $databasename = "adpeat";
    public $charset = 'utf8';
    function __construct() {
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $this->dblink = new PDO("mysql:host=$this->host;dbname=$this->databasename;charset=$this->charset", $this->username
                , $this->password, $opt);
        $this->dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->dblink->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $this->dblink->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

}
