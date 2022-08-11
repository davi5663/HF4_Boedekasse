<?php
if (isset($_POST['submit'])) {
    $name = $_POST['fineName'];
    $description = $_POST['fineDescription'];
    $price = $_POST['finePrice'];
    $sql = "INSERT INTO finedb.fine (F_Fine, F_Description, F_Price) VALUES ('$name','$description','$price')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>