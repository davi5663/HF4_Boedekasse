<?php
error_reporting(E_ALL);
require_once __DIR__.'/../includes/db.php';
if (isset($_POST['submit'])) {
    $name = $_POST['fineName'];
    $description = $_POST['fineDescription'];
    $price = $_POST['finePrice'];
    $sql = "INSERT INTO finedb.fine (F_Fine, F_Description, F_Price) VALUES ('$name','$description','$price')";
    if (mysqli_query($conn, $sql)) {
        $lastId = $conn->insert_id;

        echo $lastId;
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    echo mysqli_error($conn);
    mysqli_close($conn);
}
