<?php 
    class Configuration 
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname="test";
        private $conn;
         
        private function Connection(){
            try
            {
                $this->conn = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully"; 
            }
            catch(PDOException $ex)
            {
                echo "Connection failed: " . $ex->getMessage();
            }
        }
        public function GetConnection(){
            $this->Connection();
            return $this->conn;
        }
    }
?>