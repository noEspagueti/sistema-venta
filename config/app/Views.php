<?php
//Esta clase es la principal para poder comunicarse un controlador con cualquier vista, donde se establecerá la recarga de dicha clase en caso de que exista
class Views
{

    /**
     * 
     * $ruta -> Especifica la ruta de la vista
     * $nombreArchivo -> Especifica el nombre de la vista 
     * $datos -> Especifica los datos que se van a compartir en la vista de los datos del modelo
     * 
     */

    public function obtenerVista($ruta, $nombreArchivo, $datos = "")
    {
        $viewsRuta = "";
        if ($ruta == "principal") {
            $viewsRuta = "views/$nombreArchivo.php";
        } else {
            $viewsRuta = "views/$ruta/$nombreArchivo.php";
        }
        require $viewsRuta;
    }
}
