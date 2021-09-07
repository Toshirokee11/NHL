<?php

class Conexion{
    public $db;

 public function __construct()
    {
    $host = "localhost";
    $dbname = "ghxumdmy_neonhouselednew";
<<<<<<< HEAD
    $username = "ghxumdmy_neonhoselednew";
    $password = "C,nnQLkM7a!p";
=======
    $username = "root";
    $password = "";
>>>>>>> 3f8cff30cdec1cc4eec93e7976396d55ba28b9c2
    /*
    $host = "localhost";
    $dbname = "ghxumdmy_neonhouselednew";
    $username = "ghxumdmy_neonhoselednew";
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