<?php

function crearUrl($modulo, $controlador, $accion, $parametros = false) {

    if (isset($parametros) && is_array($parametros)) {
        $parametrosPlus = implode("/", $parametros);
        $url = $_SERVER['SCRIPT_NAME'] . "/$modulo/$controlador/$accion/$parametrosPlus";
    } else {
        $url = $_SERVER['SCRIPT_NAME'] . "/$modulo/$controlador/$accion";
    }

    return $url;
}

function dd($array) {
    echo "<pre>";
    die(print_r($array));
}

function addLib($enlace) {

    // Se reemplaza en la cadena SCRIPT_NAME es archivo index.php por vacio
    $url = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

    return $url . "$enlace";
}

function addLibErrors($enlace) {

    // Se reemplaza en la cadena SCRIPT_NAME es archivo index.php por vacio
    $url = str_replace('templates/adminMaterialize/errors/error.php', '', $_SERVER['SCRIPT_NAME']);

    return $url . "$enlace";
}

function redirect($url) {
    echo "<script type='text/javascript'>window.location.href='$url'</script>";
}

function getDocumentRoot() {
    return str_replace("/web/index.php", "", $_SERVER['SCRIPT_FILENAME']);
}

//------------------ Inicio funcion de errores/ validaciones del servidor-------

function setErrores($errores = array()) {

    $mensajeError = "";

    if (is_array($errores) && count($errores) > 0) {

        $mensajeError = "<h6><strong>Por favor corregir los siguientes errores: </strong></h6>"
                . "<ul>";

        foreach ($errores as $error) {

            $mensajeError .= "<li>* " . $error . "</li>";
        }

        $mensajeError .= "</ul>";
    }

    $_SESSION['mensajeError'] = $mensajeError;
}

function getErrores() {

    $mensajeError = "";

    if (isset($_SESSION['mensajeError'])) {

        $mensajeError = $_SESSION['mensajeError'];
        unset($_SESSION['mensajeError']);
    }

    return $mensajeError;
}

//------------------ Fin funcion de errores/ validaciones del servidor----------
//------------------ Inicio función para errores de validación servidor AJAX----

function getRespuestaAccion($funcion = "") {
    $accion = true;
    $mensajes = "Acci&oacute;n exitosa. ";
    $redirect = $funcion;

    if (isset($_SESSION['mensajeError'])) {
        $accion = false;
        $mensajes = $_SESSION['mensajeError'];
        unset($_SESSION['mensajeError']);
    }

    return json_encode(array('accion' => $accion, 'mensajes' => $mensajes, 'redirect' => $redirect));
}

//------------------ Fin función para errores de validación servidor AJAX-------
//------------------ Inicio formato fechas -----------------------------------
function explodeFecha($cadena) {
    $patronFecha = "/^[0-9]*$|-/";
    if (preg_match($patronFecha, $cadena)) {
        $fecha = explode("-", $cadena);
        setFechaLetras($fecha[0], $fecha[1], $fecha[2]);
    } else {
        $fecha = explode(" ", $cadena);
        setFechaNumeros($fecha[0], $fecha[1], $fecha[2]);
    }
}

function setFechaNumeros($dia, $mes, $año) {
    if ($mes == "January,") {
        $mes = "01";
    } elseif ($mes == "February,") {
        $mes = "02";
    } elseif ($mes == "March,") {
        $mes = "03";
    } elseif ($mes == "April,") {
        $mes = "04";
    } elseif ($mes == "May,") {
        $mes = "05";
    } elseif ($mes == "June,") {
        $mes = "06";
    } elseif ($mes == "July,") {
        $mes = "07";
    } elseif ($mes == "August,") {
        $mes = "08";
    } elseif ($mes == "September,") {
        $mes = "09";
    } elseif ($mes == "October,") {
        $mes = "10";
    } elseif ($mes == "November,") {
        $mes = "11";
    } elseif ($mes == "December,") {
        $mes = "12";
    }

    $fecha = $año . "-" . $mes . "-" . $dia;
    $_SESSION['fecha'] = $fecha;
}

function setFechaLetras($año, $mes, $dia) {

    if ($mes == '01' or $mes == '1') {
        $mes = "Enero";
    } elseif ($mes == '02' or $mes == '2') {
        $mes = "Febrero";
    } elseif ($mes == '03' or $mes == '3') {
        $mes = "Marzo";
    } elseif ($mes == '04' or $mes == '4') {
        $mes = "Abril";
    } elseif ($mes == '05' or $mes == '5') {
        $mes = "Mayo";
    } elseif ($mes == '06' or $mes == '6') {
        $mes = "Junio";
    } elseif ($mes == '07' or $mes == '7') {
        $mes = "Julio";
    } elseif ($mes == '08' or $mes == '8') {
        $mes = "Agosto";
    } elseif ($mes == '09' or $mes == '9') {
        $mes = "Septiembre";
    } elseif ($mes == '10') {
        $mes = "Octubre";
    } elseif ($mes == '11') {
        $mes = "Noviembre";
    } elseif ($mes == '12') {
        $mes = "Diciembre";
    }
    $fecha = $dia . " de " . $mes . " del " . $año;
    $_SESSION['fecha'] = $fecha;
}

function getFecha() {
    $fecha = $_SESSION['fecha'];
    Unset($_SESSION['fecha']);
    return $fecha;
}

//------------------ Fin formato fechas -----------------------------------
//-----------------------consulta # progamaciones-------------------------

include_once('../model/Sesion/sesionModel.php');


function top10Adulto() {
    $objTopAdulto = new sesionModel();

    $sql10 = "SELECT * FROM top10Radio where emisora LIKE '%adulto_contemporaneo%' and estado = 'Activo' ORDER BY pocision ASC";
    $sqlTop10 = $objTopAdulto->select($sql10);

    $objTopAdulto->cerrar();

    return $sqlTop10;
}

function top10Jovenes() {
    $objTopJovenes = new sesionModel();

    $sql10 = "SELECT * FROM top10Radio where emisora LIKE '%jovenes%' and estado = 'Activo' ORDER BY pocision ASC";
    $sqlTop10 = $objTopJovenes->select($sql10);

    $objTopJovenes->cerrar();

    return $sqlTop10;
}

function top10Instrumental() {
    $objTopInstrumental = new sesionModel();

    $sql10 = "SELECT * FROM top10Radio where emisora LIKE '%instrumental%' and estado = 'Activo' ORDER BY pocision ASC";
    $sqlTop10 = $objTopInstrumental->select($sql10);

    $objTopInstrumental->cerrar();

    return $sqlTop10;
}

function podcast() {
    $objPodcast = new SesionModel();

    $sql = "SELECT * FROM podcast WHERE nameSubCategory <> 'Especiales Coomeva Salud' AND emisora LIKE '%adulto_contemporaneo%' AND carrusel = 'Si' ORDER BY RAND() LIMIT 20";
    $sqlPodcast = $objPodcast->select($sql);

    $objPodcast->cerrar();

    return $sqlPodcast;
}

function noticias() {
    $objNoticias = new SesionModel();

    date_default_timezone_set("America/Bogota");
    date_default_timezone_get();
    $fecha = date("Y-m-d");

    $sql = "SELECT * FROM ce_noticias";
    $sqlNoticias = $objNoticias->select($sql);

    $objNoticias->cerrar();

    return $sqlNoticias;
}


function videos() {
    $objVideos = new SesionModel();

    date_default_timezone_set("America/Bogota");
    date_default_timezone_get();
    $fecha = date("Y-m-d");

    $sql = "SELECT * FROM videoscoomeva LIMIT 0,5";
    $sqlVideos = $objVideos->select($sql);

    $objVideos->cerrar();

    return $sqlVideos;
}
