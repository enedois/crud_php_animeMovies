
<?php
//echo 'include worked';
function dbLink(){
    $servername = "localhost";
    $username = "renan";
    $password = "12345";
    $dbname = 'animemovies';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        return $conn;
    } catch(Exception $e) {
        echo "Connection failed: " . $e;
    }
}

function insertData($dbConnect,$title,$year,$rating,$audsc,$runtime,$genre,$summary,$director, $stars){
    $q = "INSERT INTO movie(id,title,year,rating,audiencescore,runtime,genre,summary,director, stars) 
    VALUES (NULL,:tt,:yr,:rat,:asco,:rt,:ge,:su,:di,:st);"; 
    $query = $dbConnect->prepare($q); 
    $query->bindParam(":tt",$title); 
    $query->bindParam(":yr",$year); 
    $query->bindParam(":rat",$rating); 
    $query->bindParam(":asco",$audsc); 
    $query->bindParam(":rt",$runtime); 
    $query->bindParam(":ge",$genre); 
    $query->bindParam(":su",$summary); 
    $query->bindParam(":di",$director); 
    $query->bindParam(":st",$stars); 
    $result = $query->execute(); 
    return $result; 
} 


function listMovie($dbConnect){
    $sql = 'SELECT * from movie';
    foreach ($dbConnect->query($sql) as $row){
        echo '<br>'.$row['title'].'';
        echo '<a href="viewdetails.php?id='.$row['id'].'">[View Details]</a>';
        echo '<a href="editdetails.php?id='.$row['id'].'">[EditDetails]</a>';
        echo '<a href="del.php?id='.$row['id'].'">[Delete]</a>';
    }
}


function showInformation($dbConnect,$id){
    $sql = 'SELECT * FROM movie';
    foreach ($dbConnect->query($sql) as $row){
        if($row['id'] == $id){
            echo '<br>'.'Title: '.$row['title'].'';
            echo '<br>'.'Year: '.$row['year'].'';
            echo '<br>'.'Rating: '.$row['rating'].'';
            echo '<br>'.'Audience Score: '.$row['audienceScore'].'';
            echo '<br>'.'Runtime: '.$row['runtime'].'';
            echo '<br>'.'Genre: '.$row['genre'].'';
            echo '<br>'.'Summary: '.$row['summary'].'';
            echo '<br>'.'Director: '.$row['director'].'';
            echo '<br>'.'Stars: '.$row['stars'].'';
            
        }
    }

}

function updateDetails($dbConnect,$id,$details,$field) {
    $q = $dbConnect -> prepare ("UPDATE movie SET $field = :det WHERE id = :edid") ;
    $q-> bindValue (':det',$details) ;
    $q-> bindValue (':edid',$id) ;
    $q-> execute () ;
}

function delItem($dbConnect,$id) {
    $sql = "DELETE FROM movie WHERE id = :id ";
    $stmt = $dbConnect-> prepare ($sql) ;            
    $stmt-> bindParam (':id',$id) ;
    $stmt-> execute();
}

?>