<?php

class clsconexion{

    public $conectar=null;

    function __construct(){
        require_once('config/config.php');
        $this->conectar = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        if (mysqli_connect_errno()) {
            printf("Imposible conectarse: %s\n", mysqli_connect_error());
            exit();
        }
    }
}

?>