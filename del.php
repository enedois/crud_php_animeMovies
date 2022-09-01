<?php
    include_once ('functions/functions.php') ;
    $dbConnect = dbLink () ;
    $id = $_GET['id'];
    delItem($dbConnect,$id);
    echo'Item Removed <br><br> <a href="index.php"> Return to Index </a>';



?>
