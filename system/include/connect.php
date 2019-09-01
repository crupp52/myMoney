<?php
  //éles
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mymoney_db";

  //teszt
  /*$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "transaction";*/

  $conn = mysqli_connect($servername, $username,$password,$dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>
