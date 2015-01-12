<?php
    require_once(__DIR__ . "/../model/config.php");
    //creates a new connection.
    $connection = new mysqli($host, $username, $password, $database);
    
    //recieves form post and sets it to a variable.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //echoes form post.
    echo "<p>Title: $title</p>";
    echo "<p>Post: $post</p>";
    //creates query to insert into db.
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
    //checks query.
    if($query){
        echo "<p>Successfully inserted post: $title</p>";
    }
    else {
        echo "<p>$connection->error</p>";
    }
    $connection->close();