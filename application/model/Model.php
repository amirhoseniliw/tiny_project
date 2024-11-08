<?php 
namespace application\model;
use PDO ;
use PDOException ;
class model {
    protected $connection;
    public function __construct()
    {
        if (!isset($connection)) {
            global $dbHost , $dbName , $dbUsername , $dbPassword ;
            $options = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8");
            try {
                $this->connection = new PDO("mysql:host=". $dbHost . ";dbname=". $dbName , $dbUsername , $dbPassword , $options);
            } catch (PDOException $e) {
                echo "somthing error =". $e->getMessage() ;
            }
        }
    }
    
}