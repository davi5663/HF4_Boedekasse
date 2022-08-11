<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Speciel bøde</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tryk her for at opret</button>

        <!-- Modal -->

        <div class="modal fade" id="myModal" role="dialog">
            <?php
            include_once '../includes/db.php';
            ?>
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 style="font-weight:bold;">Test</h4>
                    </div>
                    <form id="createFine" action="../includes/getResult.php" method="post">
                        <div class="modal-body">
                            <input placeholder="Bøde Navn" type="text" name="fineName" required>
                        </div>
                        <div class="modal-body">
                            <input placeholder="Bøde Beskrivelse" type="text" name="fineDescription" required>
                        </div>
                        <div class="modal-body">
                            <input placeholder="Bøde Pris" max=1000 type="number" name="finePrice" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Luk</button>
                            <input type="submit" class="btn btn-success" name="submit" value="Opret bøde">
                        </div>
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
                    </form>
                </div>
            </div>
        </div>
        <!--- Modal Ends --->
    </div>
    <script>
        const Http = new XMLHttpRequest();
        const url = 'giveFine.php';
        Http.open("POST", url);
        Http.send();

        Http.onreadystatechange = (e) => {
            console.log(Http.responseText)
        }


        //Success oprettet

        //Vise den nye modal
    </script>
</body>

</html>