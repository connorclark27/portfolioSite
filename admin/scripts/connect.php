<?php
// This file will connect us to the database.
$user = "root";
// For MAC $pass = "root";
$pass = ""; //For PC
$url = "localhost";
$db = "db_movies";

$link = mysqli_connect($url, $user, $pass, $db); //PC
//For MAC include port address $link = mysqli_connect($url, $user, $pass, $db, "8888");

//Check Connection error
if(mysqli_connect_errno()){
  printf("Connect Failed: %s\n", mysqli_connect_error());
  exit();
}

?>
