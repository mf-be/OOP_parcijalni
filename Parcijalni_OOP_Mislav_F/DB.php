<?php
//NAZIV FAJLA ISTO KO I KLASA inace ti ne vuce kako triba, pazi
class DB
{
    private static $instance = null;
    private $conn;

    private function __construct()
    {
      try 
        {
          $this->conn = new PDO('mysql:host='.DBHOST.'; dbname='.DBNAME.';charset=utf8', DBUSER, DBPASS);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        }
      catch(PDOException $e) 
        {
          echo "Connection failed: " . $e->getMessage();
        }
    }
    
    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new DB();  
      }
      return self::$instance;
    }
    
    public function getConnection()
    {
      return $this->conn;     
    }
  }
?>