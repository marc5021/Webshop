<!DOCTYPE html>
<html>
<head>

</head>
<?php

use webshop\Movie;
use webshop\SqlController;

include "class_loader.php";

$movieid = $_GET['movieid'];

$conn = SqlController::getConnection();

$sql = "SELECT * FROM products WHERE id = '$movieid'";
$query = mysqli_query($conn, $sql);

$row = $query->fetch_assoc();
$movie = new Movie($row);

?>
<body id="movieInfoBody" style="background-image: url('<?php echo $backdrop_image?>'); background-repeat: no-repeat; background-size: cover; position: absolute; color: white">
<?php
echo "<div> 
<img src='movieCovers/{$movie->getCoverPicture()}' alt='Cover Picture of {$movie->getTitle()}'></div>
<ul style='font'>
        <li>
          ";
              echo $movie->getTitle();
              echo $movie->getReleaseYear();
              echo $movie->getPrice().'kr';
              echo $movie->getDescription();
              echo $movie->getDirectors();
              echo $movie->getActors();"  
        </li>
      </ul>";

?>



</body>
</html>
