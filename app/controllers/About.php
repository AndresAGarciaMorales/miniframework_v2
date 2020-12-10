<?php

class About extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    //methods
    public function about($params){
        $this->View->getView($this, "about");
    }

}//END CLASS
