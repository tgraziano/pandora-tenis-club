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
    $this->database->connect();
    $query = "INSERT INTO messages (name, email, subject, message) VALUES (' . $name . ', ' . $email . ', ' . $subject . ', ' . $message . ')";
    $this->database->query($query);
    $this->database->disconnect();
  }
}
