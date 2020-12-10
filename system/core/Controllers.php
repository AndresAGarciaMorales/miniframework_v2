<?php

class Controllers
{

    public function __construct()
    {
        //Views class instance
        $this->View = new Views();

    }

    //function that loads the models
    public function LoadModel($controller, $method)
    {
        //model path
        $model = $controller . "Model";
        $routeClass = "app/models/" . $model  . ".php";
        //controller path                      capitalize controller letter
        $routeController = "app/controllers/" . ucwords($controller) . ".php";

        //validates that the method exists, and if it exists it requires it
        if (file_exists($routeController)) {
            require_once ($routeController);
            $controller = new $controller;

            if (method_exists($controller, $method)) {
                echo "Si existe el metodo";
                //HERE TO LOAD THE MODELS
                require_once($routeClass);
                $this->model = new $model();

            } else {
                echo "No existe el metodo desde controller";
                require_once 'app/controllers/Errors.php';
            }
        }else{
            echo "no existe el controlador desde controllers";
            require_once 'app/controllers/Errors.php';
        }




    }
}





