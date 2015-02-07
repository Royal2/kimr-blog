<?php
    require_once(__DIR__ . "/database.php");
    //creates a path to our project.
    $path = "/kimr-blog/";
    
    //Variables to connect to the localhost server.
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    
    $connection = new Database($host, $username, $password, $database);