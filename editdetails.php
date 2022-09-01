<?php
include_once('functions/functions.php');
$dbConnect=dbLink();
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"content="IE=edge">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
$sql='SELECT * FROM movie';
foreach($dbConnect->query($sql) as $row)
{
if($row["id"]==$id){
echo'
<form action="editresolve.php" method="post">
<label for="title">Title</label>
<input type="text" name="title" value="'.$row['title'].'"><br>
<label for="year">Year</label>
<input type="number"name="year" value="'.$row['year'].'"><br>
<label for="rating">Rating</label>
<input type="text" name="rating" value="'.$row['rating'].'"><br>
<label for="audiencescore">Audience Score</label>
<input type="number"step="any" name="audiencescore" value="'.$row['audienceScore'].'"><br>
<label for="runtime">Runtime</label>
<input type="number"name="runtime" value="'.$row['runtime'].'"><br>
<label for="genre">Genre</label>
<input type="text"name="genre" value="'.$row['genre'].'"><br>
<label for="summary">Summary</label>
<input type="text"name="summary" value="'.$row['summary'].'"><br>
<label for="director">Director</label>
<input type="text"name="director" value="'.$row['director'].'"><br>
<label for="stars">Stars</label>
<input type="text"name="stars" value="'.$row['stars'].'"><br>
<input type="hidden" name="id" value="'.$row['id'].'">
<input type="submit"value="Update Movie information to Database">
</form>';
}}

echo'<br><br><a href="index.php">Return</a>';
?>
</body>
</html>