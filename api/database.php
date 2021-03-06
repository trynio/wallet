<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "wallet";
    private $username = "root";
    private $password = "";
    public $connect;
 
    // get the database connection
    public function getConnection(){
 
        $this->connect = null;
 
        try{
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->connect->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->connect;
    }
}
?>