<?php


namespace APP\config;


use PDO;
use PDOException;

class Database
{
    private $host = "localhost";
    private $db_name = "siluet";
    private $username = "root";
    private $password = "root";
    public $conn;

    /**
     * @return PDO
     */
    public function getConnection(): PDO
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->conn;
    }
}