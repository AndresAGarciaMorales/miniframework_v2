<?php

class Load
{
    public $controller;
    public $method;
    public $params;

    public function __construct($controller, $method, $params)
    {
        $this->Loader($controller, $method, $params);
    }

    public function Loader($controller,$method, $params){

        $controllerFile = "app/controllers/".$controller.".php";

        if (file_exists($controllerFile)){
            require_once($controllerFile);
            $controller = new $controller;
            if (method_exists($controller, $method)){
                $controller->{$method}($params);
            }else{
                require_once 'app/controllers/Errors.php';
            }
        }else{
            require_once 'app/controllers/Errors.php';
        }

    }//END FUNCTION

}//END CLASS
