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
    else {
        //if there is no error connecting to the server: prints success.
        echo "Success" . $connection->host_info;
    }
    //closes the connection.
    $connection->close();