<?php
include '../includes/db.php';

if (isset($_POST['submit-button'])) {
    $name = $_POST['fineName'];
    $description = $_POST['fineDescription'];
    $price = $_POST['finePrice'];
    $sql = "INSERT INTO finedb.fine (F_Fine, F_Description, F_Price) VALUES ('$name','$description','$price')";
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
<head>
    <meta http-equiv="refresh" content="0; url=../admin.php"/>
</head>