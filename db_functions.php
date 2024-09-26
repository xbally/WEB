<?php
require "db_credentials.php";

function connect_db(){
  global $servername, $username, $db_password, $dbname, $dbdata, $dbsubname ;
  $conn = mysqli_connect($servername, $username, $db_password, $dbname, $dbdata, $dbsubname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  return($conn);
}

function disconnect_db($conn){
  mysqli_close($conn);
}

?>
