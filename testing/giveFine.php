<?php
include_once '../includes/db.php';

if (isset($_POST['submit-button'])) {
  $id = $_POST['selectFineId'];
  $player = $_POST['selectPlayerId'];

  $sql = "INSERT INTO finedb.receipt (A_ID, F_ID, PL_ID) 
          VALUES (2,$id,$player)";
  if (mysqli_query($conn, $sql)) {
    echo
    '<script>
        window.alert("Bøde givet!");
    </script>';
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  echo mysqli_error($conn);
  mysqli_close($conn);
}
?>
<head>
    <meta http-equiv="refresh" content="0; url=../index.php" />
</head>