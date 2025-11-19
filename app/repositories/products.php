<?php
require_once "repositories/database.php";

class Products
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function search($page, $name, $category)
    {
        $limit = 6;
        $offset = ($page - 1) * $limit;
        $this->database->connect();
        $query = "SELECT cover, name, description, price FROM products";
        if ($name and $category) {
            $query .= " WHERE name LIKE '%$name%' AND category = '$category'";
        } else if ($name) {
            $query .= " WHERE name LIKE '%$name%'";
        } else if ($category) {
            $query .= " WHERE category = '$category'";
        }
        $query .= " LIMIT $limit OFFSET $offset";
        $result = $this->database->query($query)->fetchAll(PDO::FETCH_ASSOC);
        $queryCount = "SELECT COUNT(*) FROM products";
        if ($name and $category) {
            $queryCount .= " WHERE name LIKE '%$name%' AND category = '$category'";
        } else if ($name) {
            $queryCount .= " WHERE name LIKE '%$name%'";
        } else if ($category) {
            $queryCount .= " WHERE category = '$category'";
        }
        $smtpCount = $this->database->query($queryCount);
        $totalPages = $smtpCount->fetchColumn();
        $this->database->disconnect();
        return array("products" => $result, "totalPages" => ceil($totalPages / $limit));
    }
}
