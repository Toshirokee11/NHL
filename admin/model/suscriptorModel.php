<?php
require_once dirname(dirname(__FILE__)). '/core/database.php';

class Suscriptor{

    protected $id;
    protected $nombre;
    protected $telefono;   
    protected $correo;

    public function __construct($nombre="", $telefono="", $correo="")
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    public function nuevo()
    {
        $ic = new Conexion();
        
        $sql = "INSERT INTO suscriptor(nombre, telefono, correo) VALUES(?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->nombre);
        $insertar->bindParam(2, $this->telefono);
        $insertar->bindParam(3, $this->correo);

        return $insertar->execute();
        
    }
    
    protected function SearchUsuario()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE username='$this->username'";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        if($consulta){

            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $objetoConsulta;

        }
        

    }
    
    protected function listUser()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE status= 1";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
       

    }

}

?>