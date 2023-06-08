<?php
class Conexion
{
    protected $connect;
    //Establecemos el patrón de diseño singleton
    
    public function __construct()
    {
        if(!isset($this->connect)){
            $this->connect = $this->connection();
        }
    }

    public function connection()
    {
        try {
            $connector = new PDO("mysql:host=" . HOST . ";" . "dbname=" . DBNAME . ';' . CHARSET, USER, PASS);
            $connector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            echo "error en la conexion: " . $error->getMessage();
        }
        return $connector;
    }
}
