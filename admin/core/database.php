<?php

class Conexion{
    public $db;

 public function __construct()
    {
    $host = "localhost";
    $dbname = "ghxumdmy_neonhouselednew";
    $username = "ghxumdmy_neonhoselednew";
    $password = "C,nnQLkM7a!p";
    /*
    $host = "localhost";
    $dbname = "ghxumdmy_neonhouselednew";
    $username = "ghxumdmy_neonhouselednew";
    $password = "C,nnQLkM7a!p";
    */
    try {
        $this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    } catch (PDOException $th) {
        echo "Error: ". $th->getMessage();
    }

    }
    public function CloseConexion()
    {
        $this->db = null;
    }
}


?>