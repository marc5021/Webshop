<!DOCTYPE html>
<html>
<head>

</head>
<?php

include "connection.php";

$movieid = $_GET['movieid'];

$sql = "SELECT * FROM products WHERE id = '$movieid'";
$query = mysqli_query($conn, $sql);

$row = $query->fetch_assoc();
$moviedatabaseid = $row['id'];
$movie_title = $row['title'];
$cover_picture = $row['cover_picture'];
$backdrop_image = 'movieBackdrops/'.$row['backdrop'];
$releaseYear = $row['release_year'];
$desc = $row['description'];
$directors = $row['directors'];
$price = $row['price'];
$actorId = $row['actor_id']
?>
<body id="movieInfoBody" style="background-image: url('<?php echo $backdrop_image?>'); background-repeat: no-repeat; background-size: cover; position: absolute; color: white">
<?php
echo "<div> 
<img src='movieCovers/{$cover_picture}' alt='Cover Picture of $movie_title'></div>
<ul style='font'>
        <li>
          ";
              echo $movie_title;
              echo $releaseYear;
              echo $price.'kr';
              echo $desc;
              echo $directors;
              echo $actorId;"  
        </li>
      </ul>";

?>



</body>
</html>
