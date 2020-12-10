<?php

class Conexion
{
    public $conect;

    public function __construct()
    {
        $strconexion = "mysql:host=".conf_host.";dbname=".conf_dbname.";charset=utf8";
        try {
            $this->conect = new PDO($strconexion,conf_user,conf_pass);
            //echo 'Successful Connection';
        }catch (Exception $exception) {
            $this->conect = 'Error de conexion';
            echo "ERROR:". $exception->getMessage();
        }
    }

}//End Class

//instance
$conect = new Conexion();