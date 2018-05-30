<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
    <title>TUF movies</title>
</head>
<body>

<?php include "connection.php";

?>
<div class="feed">
<!--  This is supposed to be one of the "feeds"-->
<h1> New Movies </h1>
<table class="data-table">
        <tbody>
    <?php
    while ($row = mysqli_fetch_array($query))
    {
      //rows in table variables
      $cover_picture = $row['cover_picture'];
      $movie_title = $row['title'];
      $price = $row['price'];
      $movie_id = $row['id'];

      //this part loops through each movie and displays them
      echo "<div class=\"gallery\">
                <a href='movieinfo.php?movieid=$movie_id'>
                 <div class='title'><div class=\"desc\">$movie_title </div></div>
                 <img src=\"movieCovers/{$cover_picture}\" alt=\"$movie_title\" width=\"300\" height=\"200\">
              <div class=\"desc\">$price Kr.</div>
              </a>
            </div>";
      }
    ?>
    </tbody>
</table>
</div>

<div class="feed">
  <h1> Action </h1>

</div>

<div class="feed">
  <h1> Family </h1>
</div>
</body>
</html>
