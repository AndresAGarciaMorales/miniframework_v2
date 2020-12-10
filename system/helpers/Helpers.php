<?php


//base url of the web
function base_url()
{
    define('BASE_URL','http://localhost/framewok_2/');
    return BASE_URL;
}

//Debugging data in an array
function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

//This is the base for tokens, you can make a token for login among others
function token($params)
{

    if ($params && isset($_GET['token'])){
        echo '<br>';
        echo "The token is: ";
        echo $_GET['token'];
    }else{
        echo '<br>';
        echo 'No existe el token';
    }
}
