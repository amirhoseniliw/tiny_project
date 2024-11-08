<?php

namespace application\model;

use PDO;
use PDOException;

class model
{
    protected $connection;
    public function __construct()
    {
        if (!isset($connection)) {
            global $dbHost, $dbName, $dbUsername, $dbPassword;
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            try {
                $this->connection = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUsername, $dbPassword, $options);
            } catch (PDOException $e) {
                echo "somthing error =" . $e->getMessage();
            }
        }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }
    protected function query($query, $values = null)
    {
        try {
            if ($values == null) {
                return $this->connection->query($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
                return $stmt;
            }
        } catch (PDOException $e) {
            echo "error =" . $e->getMessage();
        }
    }
    protected function execute($query, $values = null)
    {
        try {
            if ($values == null) {
                return $this->connection->exec($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
            }
            return true;
        } catch (PDOException $e) {
            echo "error =" . $e->getMessage();
            return false;
        }
    }
    protected function closeConnection(){
        $this->connection = null ;

    }
}
