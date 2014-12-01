<?php
    //Brings the data from database.php to create-db.php
    //require once also checks whether it has already been inserted into memory.
    require_once(__DIR__ ."/../model/database.php");
    //$connection carries the functions to access database server.
    $connection = new mysqli($host, $username, $password);
    //a conditional statement that checks whether there is an error connecting to the server.
    if($connection->connect_error) {
        //if there is an error connecting to the server: stops the code and prints an error.
        die("Error: " . $connection->connect_error);
    }
    //selects Database.
    $exists = $connection->select_db($database);
    //checks if database does not exists.
    if(!$exists){
        //sends a query to create a database.
        $query = $connection->query("CREATE DATABASE $database");
        //checks if database was created.
        if($query){
            echo "Successfully created database.".$database;
        }
    }
    else{
        //echoes if database exists.
        echo "Database already exists.";
    }
    
    //closes the connection.
    $connection->close();