<?php

/*
 * This route class fulfills the function of obtaining and managing the routes of the framework
 * With the base {controller} {method} {parameters}
 * Router class starts
*/
class Router
{
    public $uri;
    public $controller;
    public $method;
    public $params;

    public function __construct()
    {
        //null
    }

    //This Route function validates the Uri
    public function Route(){
        //based on /controller/method/params->
        //Get url and explode / return array
        $this->uri = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
        $this->uri = trim($this->uri,'/');
        $this->uri = explode('/',$this->uri);
        $this->controller = $this->uri[0];
        $this->method = $this->uri[0];
        $this->params = "";

        //condition to validate the methods
        if (!empty($this->uri[1])){
            if ($this->method !=""){
                $this->method = $this->uri[1];
            }

        }

        //condition to validate the params

        if (!empty($this->uri[2])){

            if ($this->uri[2] !=""){
                for ($i = 2; $i < count($this->uri); $i++){
                    $this->params .= $this->uri[$i].',';
                    //remove the last ','
                    $this->params = explode(',',$this->params);
                }

            }

        }

    }//END ROUTE

}//END CLASS