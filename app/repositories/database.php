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
            $this->connection = new PDO(
                "mysql:host=$this->host;dbname=$this->database",
                $this->user,
                $this->password
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function disconnect()
    {
        $this->connection = null;
    }
}
