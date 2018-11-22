<?php


session_start();
// Se incluye archivo para helper
include_once("lib/php/helper.php");
include_once("lib/config/csrf.class.php");
// Se incluyen todas las variables globales del sitio
include_once("lib/php/global.php");

//se incluye el paginado
include_once("lib/php/PaginadoClass.php");

//se incluyen las funciones para validar
include_once("lib/php/validaciones.php");


    if (!isset($_SERVER['PATH_INFO'])) {
        // Se carga el header de nuestra aplicación
        include_once('web/template/header.html.php');
        // Se carga la vista principal del aplicativo
        include_once('web/template/principal.html.php');
        // Se carga el footer de nuestra aplicación
        include_once('web/template/footer.html.php');
    } else {

        // /equipos/equipos/crear
        $cadena = explode("/", $_SERVER['PATH_INFO']);
//    dd($_SESSION);
        // Captura el nombre del modulo con la primer letra mayuscula
        $modulo = ucwords($cadena[1]);

        // Captura el nombre del controlador
        $controller = $cadena[2];

        // Captura la funcion del controlador
        $accion = $cadena[3];

        //Inicio para validar permisos de navegación
        include_once('controller/Permisos/permisosController.php');
        $objPermiso = new PermisosController();
        if (!$objPermiso->validarAcceso($cadena)) {
            include_once('web/template/errors/accessDenied.html.php');
            die();
        }
        //Fin validación permisos de navegación
        // /equipos/equipos/crear/noVista
        if (!isset($cadena[4]) || $cadena[4] != "noVista") {

            // Se carga el header de nuestra aplicación
            include_once('web/template/header.html.php');

        }

        // Se cargan los parametros
        $count = 4;
        while (isset($cadena[$count])) {
            $parametros[] = $cadena[$count];
            $count++;
        }

        $pathController = "controller/" . $modulo . "/" . $controller . "Controller.php";
        if(!isset($pathController)){
            echo "NO HAY";
        }
        $controllerClass = ucwords($controller) . "Controller";

        include_once($pathController);

        // ajustar
        $objController = new $controllerClass();

        if (!isset($parametros)) {
            $objController->$accion();
        } else {
            $objController->$accion($parametros);
        }

        if (!isset($cadena[4]) || $cadena[4] != "noVista") {


            // Se carga el footer de nuestra aplicación
            include_once('web/template/footer.html.php');
        }
    }

?>
