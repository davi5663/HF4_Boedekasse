<?php
include_once 'includes/db.php';

// enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//connect to database

//run the store proc
$result = mysqli_query($conn, "CALL MostFines");

//loop the result set
while ($row = mysqli_fetch_array($result)){     
  echo $row[0] . " " . + $row[1]. '<br> <br>'; 
}