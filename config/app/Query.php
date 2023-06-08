<?php

//PDO::prepare — Prepara una sentencia para su ejecución y devuelve un objeto sentencia
// Si el servidor de la base de datos prepara con éxito la sentencia, PDO::prepare() devuelve un objeto PDOStatement. Si no es posible, PDO::prepare() devuelve false o emite una excepción PDOException (dependiendo del manejo de errores).


// PDO::prepare() - Prepara una sentencia para su ejecución y devuelve un objeto sentencia PDOStatement
// PDOStatement::execute — Ejecuta una sentencia preparada
// PDOStatement::fetch() - Obtiene la siguiente fila de un conjunto de resultados

// PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas del conjunto de resultados.



// PDOStatement::fetchAll() - Devuelve un array que contiene todas las filas del conjunto de resultados

// PDO::lastInsertId — Devuelve el ID de la última fila o secuencia insertada

class Query extends Conexion
{

    private $connection;

    public function __construct()
    {
        parent::__construct();
        $this->connection = $this->connect;
    }

    public function select($consultaSql)
    {
        $result = $this->connection->prepare($consultaSql);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function selectAll($consultaSql)
    {
        $result = $this->connection()->prepare($consultaSql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar($consultaSql, $array)
    {
        $result = $this->connection->prepare($consultaSql);
        $data =  $result->execute($array);
        if (!$data) {
            return 0;
        }
        return 1;
    }

    public function actualizar($consultaSql, $array)
    {
        $result = $this->connection->prepare($consultaSql);
        $data = $result->execute($array);
        if ($data) {
            return 1;
        }
        return 0;
    }
}
