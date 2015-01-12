<?php
    //Brings the data from config.php to create-db.php
    //require once also checks whether it has already been inserted into memory.
    require_once(__DIR__ ."/../model/config.php");
    //$connection carries the functions to access database server.
    $connection = new mysqli($host, $username, $password);
    //a conditional statement that checks whether there is an error connecting to the server.
    if($connection->connect_error) {
        //if there is an error connecting to the server: stops the code and prints an error.
        die("<p>Error: " . $connection->connect_error . "</p>");
    }
    //selects Database.
    $exists = $connection->select_db($database);
    //checks if database does not exists.
    if(!$exists){
        //sends a query to create a database.
        $query = $connection->query("CREATE DATABASE $database");
        //checks if database was created.
        if($query){
            echo "<p>Successfully created database.".$database . "</p>";
        }
    }
    else{
        //echoes if database exists.
        echo "Database already exists.";
    }
    //sends query to create a table named posts.
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"    //creates column "id".
            . "title varchar(255) NOT NULL," //creates column "title".
            . "post text NOT NULL,"    //creates column "post".
            . "PRIMARY KEY (id))"); //set primary key to id, primary key is a unique character.
    //checks if table posts was created.
    if($query){
        //echos if table posts was created.
        echo "<p>Successfully created table: posts<p>";
    }
    else{
        //echos error if table posts was not created or already exists.
        echo "<p>$connection->error</p>";
    }
    
    //closes the connection.
    $connection->close();