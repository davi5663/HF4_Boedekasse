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
        window.alert("Bøde Oprettet!");
    </script>';
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  echo mysqli_error($conn);
  mysqli_close($conn);
}
?>

<body>
  <h1>Bøde Oprettet</h1>
  <a href="../admin.php">
    <button>Admin</button>
  </a>
  <a href="../index.php">
    <button>Forside</button>
  </a>
</body>