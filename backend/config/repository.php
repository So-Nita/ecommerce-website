<?php 
    require_once 'configuration.php';
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

        public function Read($table)
        {
            try
            {
                $sql = "SELECT * FROM $table";
                $statement = $this->connection->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
            catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
                return null;
            }
        }


        public function Update($table, $data, $id)
        {
            try
            {
                $columns = "";
                foreach($data as $key => $value)
                {
                    $columns .= $key . " = " . $value . ", ";
                }
            }catch(Exception $ex)
            {
                echo "Error: " . $ex->getMessage();
            }
        }
    }
?>