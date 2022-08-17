<?php
include '../includes/db.php';

if (isset($_POST['submit-button'])) {
    $name = $_POST['playerName'];
    $number = $_POST['playerPhone'];
    $sql = "INSERT INTO finedb.player (PL_Name, PL_Phone) 
            VALUES ('$name', $number)";
    if (mysqli_query($conn, $sql)) {
        echo
        '<script>
            window.alert("Spiller Oprettet!");
        </script>';
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    echo mysqli_error($conn);
    mysqli_close($conn);
}
?>

<head>
    <meta http-equiv="refresh" content="0; url=../admin.php" />
</head>