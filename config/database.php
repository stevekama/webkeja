<?php
class Database
{
    // private $host = 'localhost';
    // private $username = 'tadteica_steve';
    // private $password = 'stevekama';
    // private $dbname = 'tadteica_tadtechafrica';

    // private $host = 'ao9moanwus0rjiex.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    // private $username = 'kg510ppi3jmrlcn9';
    // private $password = 'bemdfd7sue9ixyvy';
    // private $dbname = 'tdviu77961bgomk7';

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'webkeja';

    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->conn;
    }
}

$database = new Database();