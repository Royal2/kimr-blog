<?php
    //Inserts all the code in header.php into index.php
    require_once(__DIR__ ."/view/header.php");
    //"__DIR__ ." gets the directory in which the current file (index.php) is in, and from there it follow the path. 
    require_once(__DIR__ ."/controller/create-db.php");
    //Inserts all the code in footer.php into index.php
    require_once(__DIR__ ."/view/footer.php");
?>