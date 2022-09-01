<?php
    include_once ('functions/functions.php') ;
    $dbConnect = dbLink () ;
    $id = $_POST['id'] ;
    $title = $_POST['title'] ;
    $year = $_POST['year'] ;
    $rating = $_POST['rating'] ;
    $audsc = $_POST['audiencescore'] ;
    $runtime = $_POST['runtime'] ;
    $genre = $_POST['genre'] ;
    $summary = $_POST ['summary'] ;
    $director = $_POST ['director'] ;
    $stars = $_POST ['stars'] ;
    updateDetails ( $dbConnect , $id , $title ,'title') ;
    updateDetails ( $dbConnect , $id , $year ,'year') ;
    updateDetails ( $dbConnect , $id , $rating ,'rating') ;
    updateDetails ( $dbConnect , $id , $audsc ,'audiencescore') ;
    updateDetails ( $dbConnect , $id , $runtime ,'runtime') ;
    updateDetails ( $dbConnect , $id , $genre ,'genre') ;
    updateDetails ( $dbConnect , $id , $director ,'director') ;
    updateDetails ( $dbConnect , $id , $stars ,'stars') ;
    echo'<br> <br> <a href="index.php"> Return to Index </a>';

    ?>