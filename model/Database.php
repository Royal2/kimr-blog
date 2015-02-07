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
    
    