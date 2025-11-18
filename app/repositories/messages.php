<?php
require_once "../repositories/database.php";

class Messages
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function insertOne($name, $email, $subject, $message)
    {
      try {
        $this->database->connect();
        $query = "INSERT INTO messages (name, email, subject, message) VALUES (' . $name . ', ' . $email . ', ' . $subject . ', ' . $message . ')";
        $this->database->query($query);
        $this->database->disconnect();
      } catch (Exception $e) {
        throw new Exception("Error al intentar insertar el mensaje: " . $e->getMessage());
      }
    }
}

?>