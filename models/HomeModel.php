<?php

//DAO

class HomeModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDatos($correo)
    {
        $sql = "SELECT nombre,correo,clave from usuarios WHERE correo = '$correo'";
        $data = $this->select($sql);
        return $data;
    }
}
