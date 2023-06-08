<?php

//Esta clase es la principal para poder comunicarse un controlador con cualquier modelo y vista, donde se establecerá la recarga de dicha clase en caso de que exista

class Controller
{
    //Estos atrbutos establecen la comunicación inteligente entre la vista y el controlador donde una vez que se haya hecho una petición al modelo este pueda responder con una vista

    public $model;
    public $view;

    public function __construct()
    {
        $this->view = new Views();
        $this->model = $this->cargarModelo();
    }



    function cargarModelo()
    {
        $modelo = get_class($this) . 'Model';
        $rutaModelo = "models/$modelo.php";
        if (file_exists($rutaModelo)) {
            require_once $rutaModelo;
            return new $modelo();
        }
    }
}
