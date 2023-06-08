<?php
//En este fichero vamos a definir nuetras constantes globales, es decir variables que vamos poder acceder a ellas en todo el proyecto


// el método define() en PHP se utiliza para definir constantes y permite crear constantes globales. Las constantes son valores que no cambian durante la ejecución de un programa y se utilizan para almacenar información que no debe ser modificada una vez que se define. La convención común es escribir el nombre de la constante en mayúsculas para distinguirla de las variables normales.

//      Una vez que se define una constante global, se puede acceder a ella en cualquier parte del programa. Por ejemplo:

// echo NOMBRE_CONSTANTE;

//En esta constante vamos almacenar la ruta de nuestro proyecto
define("BASE_URL", "http://localhost/sistema_venta/");
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '1234');
define('DBNAME','sistema');
define('CHARSET','');
define('TITLE','SISTEMA-VENTA');