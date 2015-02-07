<?php
    //Brings the data from config.php to create-db.php
    //require once also checks whether it has already been inserted into memory.
    require_once(__DIR__ ."/../model/config.php");
    
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