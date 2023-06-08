<?php

//Requiriendo una vez el fichero Config.php --> para acceder a las constantes globales

require_once './config/Config.php';
require_once './config/Helpers.php';

//solucionando el problema de obtener un $_GET['url'] vacío en la regla de reescritura

$ruta = (empty($_GET['url'])) ?  "home/index" : $_GET['url'];

// $ruta -> controlador/metodo 
//Nuestra URL filtrada va tener siertas sintaxis como index/about, entonces debemos separar tanto el primero como controlador y el segundo como un método, si hay un tercero seria un parametro

//asignar por controlador y metodo
//El metodo explode permite convertir una cadena en array con un separador
$separador = explode("/", $ruta);
$controlador = ucfirst($separador[0]);
$metodo = empty($separador[1]) ? "index" : $separador[1];

//Como hemos dicho, el indice 2 del $separador se le asigna a los $parámetros, sin importar cuantos más segmentos a su derecha se encuentren

$parametros = "";
if (!empty($separador[2])) {
    if ($separador[2] != '') {
        for ($i = 2; $i <= count($separador) - 1; $i++) {
            $parametros .=  $separador[$i] . ',';
        }
        //sintaxis del metodo trim -> trim(cadena,eliminarCaracter);
        $parametros = trim($parametros, ",");
    }
}



//El objetivo del la carga automática, permite que recargue las clases sin necesidad de usar el require o include manualmente 

require_once "./config/app/Autoload.php";

require_once "./controllers/Autoload.php";

if (file_exists("controllers/$controlador.php")) {

    $claseControlador = new $controlador();

    if (method_exists($claseControlador, $metodo)) {

        $claseControlador->$metodo($parametros);
        
    } else {

        echo "el metodo $metodo no existe en el controlador $controlador";
    }
    
} else {

    echo "el controlador $controlador no existe";
}
