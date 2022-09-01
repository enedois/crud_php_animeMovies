<?php
include_once('functions/functions.php');
$dbConnect = dbLink();
$title = $_POST['title'];
$year = $_POST['year'];
$rating = $_POST['rating'];
$audsc =$_POST['audiencescore'];
$runtime = $_POST['runtime'];
$genre = $_POST['genre']; 
$summary = $_POST['summary']; 
$director = $_POST['director'];
$stars = $_POST['stars']; 
$result = insertData($dbConnect,$title,$year,$rating,$audsc,$runtime,$genre,$summary,$director, $stars); 
if($result){ echo 'Added successfully'; } else{ echo 'Failed to add'; 
} echo '<br><br><a href="index.php">Return to Index</a>'; 


?>