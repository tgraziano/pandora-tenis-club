<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "pandora_tenis";
    public $connection;

    public function connect()
    {
        try {
            $conexion = new PDO(
                "mysql:host=$this->host;dbname=$this->database",
                $this->user,
                $this->password
            );
            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            $this->connection = $conexion;
        } catch (PDOException $e) {
            throw new Exception("Error al intentar conectar la base de datos: " . $e->getMessage());
        }
    }

    public function disconnect()
    {
        if ($this->connection) {
            $this->connection = null;
        }
    }

    public function query($query)
    {
        return $this->connection->query($query);
    }
}
