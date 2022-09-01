
<?php
include_once('functions/functions.php');
$dbConnect = dbLink();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add movie Details</h3>
    <form action="addmovie.php" method="post">
    <input type="text" name="title" placeholder="Enter title of movie" id=""><br/>
    <input type="number" name="year" placeholder="Enter Year of Release"  id=""><br/>
    <input type="text" name="rating" placeholder="Enter Rating" id=""><br/>
    <input type="number" name="audiencescore" placeholder="Enter Audience Score" id=""><br/>
    <input type="number" name="runtime" placeholder="Enter Runtime" id=""><br/>
    <input type="text" name="genre" placeholder="Enter Genre" id=""><br/>
    <input type="text" name="summary" placeholder="Enter Summary" id=""><br/>
    <input type="text" name="director" placeholder="Enter Director" id=""><br/>
    <input type="text" name="stars" placeholder="Enter Stars" id=""><br/>
    <input type="submit" value="Submit">
    </form>

    <?php
    listMovie($dbConnect);
    ?>
    
</body>
</html>