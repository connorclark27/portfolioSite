<?php
  $user = 'root';
  $pass = ''; // this should be a blank host for windows machines
  $host = 'localhost';
  $db = 'portfoliosite'; // whatever you called your dataBase

  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset($conn, 'utf8');

  if (!$conn) {
    echo "Something Broke";
    exit;
  }

  //echo "Connected!";

  if (isset($_GET['getAllVideos'])) {
    $myQuery = "SELECT * FROM tbl_photos";
    $result = mysqli_query($conn, $myQuery);

    $rows = array();

    while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;

    }

    //var_dump($rows);
    echo json_encode($rows);
 
  }

  

  //get a single row using a query parameter
  if (isset($_GET['carModel'])) { //see if there's  parameter called carModel
    $car = $_GET['carModel']; //whatever comes after the ?

  $myQuery = "SELECT * FROM mainmodel WHERE model = '$car'";
  $result = mysqli_query($conn, $myQuery);

  $row = mysqli_fetch_assoc($result);

  echo json_encode($row);
  }

?>
