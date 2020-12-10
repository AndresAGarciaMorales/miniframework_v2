<?php


class Errors extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function notFound(){
        $this->View->getView($this, "errors");
    }

}

$notFou = new Errors();
$notFou-> notFound();