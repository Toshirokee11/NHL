<?php

if(isset($_POST['action']) && !empty($_POST['action'])) 
{
    $action = $_POST['action'];

    switch($action) 
    {
        case 'autenticar': autenticar(); break;
    }
}

function autenticar(){
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    echo "true";
}

?>
