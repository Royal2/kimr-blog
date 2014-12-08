<?php
    //Header.
    require_once(__DIR__ ."/view/header.php");  //Inserts all the code in header.php into index.php
    //Navigation.
    require_once(__DIR__ ."/view/navigation.php");  //Inserts all the code in navigation.php into index.php
    //Creates Database.
    require_once(__DIR__ ."/controller/create-db.php");  //"__DIR__ ." gets the directory in which the current file (index.php) is in, and from there it follow the path.
    //Footer.
    require_once(__DIR__ ."/view/footer.php");  //Inserts all the code in footer.php into index.php
?>