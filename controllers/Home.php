<?php
//En el controlador de una entidad se va establecer la comunicación al modelo, es decir que las clases que pertenecen en el directorio de controllers serán los intermediarios para comunicarse con el modelo y la vista.

//Este controlador Home va llamar al controlador en config/app/Controller, que cargará los datos y la comunicación al modelo HomeModel
class Home extends Controller
{

    // La llamada parent::__construct(); en PHP se utiliza dentro de un constructor de una clase para llamar al constructor de la clase padre. Es decir que vamos a cargar el modelo en caso de que exista en el directorio models
    private $datos;
    public function __construct()
    {
        parent::__construct();
        //inicializamos la sessiones para acceder a los datos de los usuarios registrados en todas las rutas
        session_start();
    }


    public function index()
    {
        $datos = array("tituloPagina" => "Iniciar sesión", "script" => "login.js");
        $this->view->obtenerVista("principal", "login", $datos);
    }

    //Este método se ha llamado en el index.php que viene siendo el segundo segmento de la URL, por eso es importante relcar que cada segundo segmento se puede solicitar en los controladores que se encuentran en la capa controllers

    public function validar()
    {
        if (isset($_POST["correo"]) && isset($_POST["clave"])) {
            //validaciones en el lado del servidor
            if (empty($_POST["correo"]) || empty($_POST["clave"])) {
                $res = array("mensaje" => "Revisar el campo de login, mensaje del servidor", "tipo" => "warning");
            } else {
                //Aqui vamos hacer uso del metodo strClean que evitar las inyecciones SQL
                $correo = strClean($_POST["correo"]);
                $clave = strClean($_POST["clave"]);
                $data = $this->model->getDatos($correo);
                if ($data === false) {
                    $res = array("mensaje" => "Esta cuenta no existe", "tipo" => "warning");
                } else {
                    if (password_verify($clave, $data["clave"])) {
                        //Establecemos una session para el nombre del usuario
                        $_SESSION["nombre_usuario"] = $data["nombre"];
                        $_SESSION["correo"] = $data["correo"];
                        $res = array("mensaje", "Bienvenidos al sistema", "tipo" => "success");
                    } else {
                        $res = array("mensaje", "Contraseña incorrecta", "tipo" => "warning");
                    }
                }
            }
        } else {
            $res = array("mensaje" => "error en el servidor, no se declararon los campos de correo y contraseña", "tipo" => "error");
        }
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        die();
    }
}
