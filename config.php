<?php
$db = mysqli_connect("localhost","root","","truongthi");
mysqli_set_charset($db, "utf-8");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>