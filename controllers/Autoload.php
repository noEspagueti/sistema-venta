<?php
//La carga automática de clases en PHP simplifica el proceso de inclusión de los archivos de clase necesarios cuando se utilizan en el código. En lugar de tener que incluir manualmente los archivos de clase con require o include, la carga automática se encarga de hacerlo automáticamente basándose en las convenciones de nombres de espacio de nombres y ubicación de archivos.

spl_autoload_register(function ($class) {
    $fichero = 'controllers/' . $class . '.php';
    if (file_exists($fichero)) {
        require_once $fichero;
    }
});
