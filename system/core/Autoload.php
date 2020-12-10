<?php

spl_autoload_register(function ($class){
    if (file_exists("systems/core/".$class.".php")){
        require_once("system/core/".$class.".php");
    }
});

/*
 *
spl_autoload_register(function ($class){
    if (file_exists("systems/libs/".$class.".php")){
        require_once("system/libs/".$class.".php");
    }
});
 * */