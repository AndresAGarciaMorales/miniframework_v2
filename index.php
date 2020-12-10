<?php
/*
 * ======================================================
 * framework main file by /Andres Alejandro Garcia Morales/
 * ======================================================
 * Controller routing and methods
 * The Router file is called, it manages the routes
 * The routes are managed with the "uri"
 * Config Files
*/
//**** Configs ****
require_once 'system/core/Config.php';
require_once 'app/models/Conexion.php';

// **** BASE ROUTER ****
define('BASE_ROUTER','system/router/Router.php');
//Class is required
require_once(BASE_ROUTER);
$routeIndex = new Router;
$routeIndex->Route();

// **** Helpers ****
define('BASE_HELPER', 'system/helpers/Helpers.php');
require_once(BASE_HELPER);

// **** BASE AUTOLOAD ****
define('BASE_AUTOLOAD','system/core/Autoload.php');
//File is required
require_once(BASE_AUTOLOAD);


// **** VIEW ****
define('BASE_VIEW','system/core/View.php');
require_once(BASE_VIEW);
$view = new Views();

// **** CONTROLLER ****
define('BASE_CONTROLLER','system/core/Controllers.php');
require_once (BASE_CONTROLLER);
$control = new Controllers();

// **** HOME ****
define('BASE_HOME','app/controllers/Home.php');
require_once(BASE_HOME);
$control->LoadModel($routeIndex->controller, $routeIndex->method);

// **** BASE LOAD ****
define('BASE_LOAD', 'system/Load/Load.php');
require_once(BASE_LOAD);
$load = new Load($routeIndex->controller,$routeIndex->method, $routeIndex->params);

