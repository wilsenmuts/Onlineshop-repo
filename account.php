<?php
  $conn = mysqli_connect("localhost", 'root', '', 'landlorddb');

  if(!$conn)
  {
  	die('Please Check Your connection'.mysql_error());
  }

?>