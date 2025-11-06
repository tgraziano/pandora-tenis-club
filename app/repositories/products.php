<?php
require_once "repositories/database.php";

class Products
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll()
    {
        $this->database->connect();
        $query = "SELECT * FROM products";
        $result = $this->database->connection->query($query);
        $this->database->disconnect();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
