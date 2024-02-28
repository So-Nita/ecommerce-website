<?php 
    require_once 'configuration.php';
    require_once '../models/product.php';
    class Repository 
    {
        private object $connection;
        public function __construct() 
        {
            $this->GetConnection();
        }

        private function GetConnection()
        {
            if(!isset($this->connection))
            {
                $conn = new Configuration();
                $this->connection = $conn->GetConnection();
            }
        }
        
        public function Create($table, $data)
        {
            try
            {
                $columns = implode(", ", array_keys($data));
                $values = implode(", ", array_values($data));

                $sql = "Insert into $table ($columns) values ($values)";
                $statement = $this->connection->prepare($sql);
                $statement->execute();

            }catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
            }
        }

        public function ReadAll($table)
        {
            try
            {
                $sql = "SELECT * FROM $table";
                $statement = $this->connection->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
                return $result;
            }
            catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
                return null;
            }
        }

        public function Read($table, $key)
        {
            try
            {
                $sql = "SELECT * FROM $table Where id = $key";
                $statement = $this->connection->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
                return $result;
            }
            catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
                return null;
            }
        }


        public function Update($table, $data, $key)
        {
            try
            {
                $columns = "";
                foreach($data as $key => $value)
                {
                    $columns .= $key . " = " . $value . ", ";
                }
                $sql = "UPDATE $table SET $columns Where id = $key";
                $result = $this->connection->exec($sql);
                return ($result) ? true : false;
            }catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
            }
        }

        public function Delete($table, $key) 
        {
            try
            {
                $sql = "DELETE From $table Where id = $key";
                $statement = $this->connection->prepare($sql);
                $result = $statement->execute();
                return ($result) ? true : false;

            }catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
            }
        }
    }
?>