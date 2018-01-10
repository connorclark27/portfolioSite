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

?>
