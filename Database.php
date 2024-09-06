<?php
class Database 
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "CAS_db";
    public $conn = null;

    public function __construct() {
        try {
            // connection for db.
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage()."<br>";
        }
        
    }
}
?>
 