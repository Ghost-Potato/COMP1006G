<?php
//connecting to database
    require_once 'database.php';

    //extending the database to include crud
    class crud extends database{
        public function __construct(){
            parent::__construct(); //calling on the parent __construct function
        }
        public function addData($query){ //grabbing the data and storing it in the result variable
            $result = $this->connection->query($query);
            if(!$result){
                return false;
            }
            $rows = array(); //creating a new array for the data
            while($row = $result->fetch_assoc()){
                $rows[] = $row; //storing rows array in new variable row
            }
            return $rows;
        }
        //execute function
        public function execute($query){
            $result = $this->connection->query($query);
            //checking results
            if(!$result){
                echo "<p>Could not perform query</p>";
                return false;
            }
            else{
                return true;
            }
        }
        public function escape_string($value){
            return $this->connection->real_escape_string($value);
        }
    }
?>
