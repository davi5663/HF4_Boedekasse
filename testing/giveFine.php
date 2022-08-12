<?php
error_reporting(E_ALL);
require_once __DIR__.'/../includes/db.php';
if (isset($_POST['submit'])) {
    $id = $_POST['playerId'];
    $player = $_POST['fineId'];
    $sql = "INSERT INTO finedb.receipt (A_ID, F_ID, PL_ID) VALUES (2,'$id','$player')";
    if (mysqli_query($conn, $sql)) {
      $lastId = $conn->insert_id;

      echo $lastId;
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    echo mysqli_error($conn);
    mysqli_close($conn);
}