<?php
class Admin extends Controller
{

    public function __construct()
    {
        parent::__construct();
        //Dato: cada vez que se crea un nuevo controlador en el paquete controllers, es importante inicializar nuevamen las sessiones, yaque este se guarda hasta que se cierre el navegador
        session_start();
    }

    public function index()
    {
        $nombreUsuario = $_SESSION["nombre_usuario"];
        $correoUsuario = $_SESSION["correo"];
        $datos = array("tituloPagina" => "Panel Administrativo", "nombreUsuario" => $nombreUsuario, "correoUsuario" => $correoUsuario ,"footer" => "Desarrollado por Miguel Silva");
        $this->view->obtenerVista("admin", "admin", $datos);
    }
}
