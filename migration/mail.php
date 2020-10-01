<?php

require_once(INIT_PATH . DS . 'initialization.php');

class Mail_migration
{

    private $conn;

    // table name and schema 
    private $table_name = "mail";

    // connect to db
    public function __construct()
    {
        global $database;
        $this->conn = $database->connect();
    }

    // create table
    public function create()
    {
        $query = "CREATE TABLE IF NOT EXISTS " . $this->table_name . "(";
        $query .= "id INT(11) UNSIGNED  NOT NULL PRIMARY KEY AUTO_INCREMENT, ";
        $query .= "from_email VARCHAR(100) NOT NULL, ";
        $query .= "from_username VARCHAR(200) NOT NULL, ";
        $query .= "to_email VARCHAR(200) NOT NULL, ";
        $query .= "to_username VARCHAR(200) NOT NULL, ";
        $query .= "subject VARCHAR(200) NOT NULL, ";
        $query .= "message TEXT NOT NULL, ";
        $query .= "attachment VARCHAR(200) NOT NULL, ";
        $query .= "sendtime TIMESTAMP NULL DEFAULT NULL";
        $query .= ")";

        // execute query 
        $this->conn->exec($query);
        return true;
    }

    // drop table 
    public function drop()
    {
        $query = "DROP TABLE " . $this->table_name;

        $this->conn->exec($query);
        return true;
    }
}
