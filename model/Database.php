<?php
    class Database {
        private $connection;
        private $host;
        private $username;
        private $password;
        private $database;
        //Constructor class.
        public function __construct($host, $username, $password, $database) {
            //Storing information.
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            
            //$connection carries the functions to access database server.
            $this->connection = new mysqli($host, $username, $password);
            //a conditional statement that checks whether there is an error connecting to the server.
            if($this->connection->connect_error) {
                //if there is an error connecting to the server: stops the code and prints an error.
                die("<p>Error: " . $this->connection->connect_error . "</p>");
            }
            //selects Database.
            $exists = $this->connection->select_db($database);
            //checks if database does not exists.
            if(!$exists){
                //sends a query to create a database.
                $query = $this->connection->query("CREATE DATABASE $database");
                //checks if database was created.
                if($query){
                    echo "<p>Successfully created database.".$database . "</p>";
                }
            }
            else{
                //echoes if database exists.
                echo "Database already exists.";
            }
        }
        
        public function openConnection() {
            //creating new connection.
            $this->connection = new mysqli($this->host, $this->username,$this->password, $this->database);
            //checks for connection errors.
            if($this->connection->connect_error) {
                die("<p>Error: " . $this->connection->connection_error . "<p>");
            }
        }
        
        public function closeConnection() {
            //closes connection if it is set.
            if(isset($this->connection)) {
                $this->connection->close();
            }
        }
        
        public function query($string) {
            $this->openConnection();

            $query = $this->connection->query($string);

            $this->closeConnection();

            return $query;
        }
            
    }
    
    