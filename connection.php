
<?php

//database information
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "movies";

//connecting to the database
$conn = mysqli_connect("$host","$dbusername","$dbpassword","$db");
mysqli_set_charset($conn,'utf8');

//check for error in connection
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//Selecting table and executing query
$sql = 'SELECT * FROM products';
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}




