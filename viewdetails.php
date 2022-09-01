<?php
include_once('functions/functions.php');
$dbConnect = dbLink();
$id =  $_GET['id'];
showInformation($dbConnect,$id);
echo '<br><br><a href="index.php">Return</a>';
?>