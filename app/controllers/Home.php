<?php

class home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    //methods
    public function home($params){
        $this->View->getView($this, "home");
    }

}//END CLASS
