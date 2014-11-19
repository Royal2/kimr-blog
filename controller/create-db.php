<?php
    //Brings the data from database.php to create-db.php
    //require once also checks whether it has already been inserted into memory.
    require_once("../model/database.php");
    //$connection carries the functions to access database server.
    $connection = new mysqli($host, $username, $password);
