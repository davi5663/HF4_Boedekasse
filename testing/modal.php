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
        <h2>Opret bøde</h2>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#createModal">Tryk her for at oprette en bøde</button>
        <!-- Modal - Create -->
        <div class="modal fade" id="createModal" role="dialog">
            <?php
            include_once '../includes/db.php';
            ?>
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 style="font-weight:bold;">Test</h4>
                    </div>
                    <form id="createFine" method="post">
                        <div class="modal-body">
                            <input placeholder="Bøde Navn" type="text" name="fineName" id="fineName" required>
                        </div>
                        <div class="modal-body">
                            <input placeholder="Bøde Beskrivelse" type="text" name="fineDescription" id="fineDescription" required>
                        </div>
                        <div class="modal-body">
                            <input placeholder="Bøde Pris" max=1000 type="number" name="finePrice" id="finePrice" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Luk</button>
                            <input type="submit" class="btn btn-success" name="submit" id="submitCreate" value="Opret bøde">
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

        <br>
        <br>

        <h2>Speciel bøde</h2>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#giveModal">Tryk her for at give en bøde</button>
        <!-- Modal - Give -->
        <div class="modal fade" id="giveModal" role="dialog">
            <?php
            include_once '../includes/db.php';
            ?>
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form id="createFine" method="post">
                        <select name="selectPlayerId" id="selectPlayerId" required>
                            <?php
                            $sql = "SELECT * FROM finedb.player";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '
									<div class="col-10 col-md-6">
										<option id="playerId" value=' . $row['PL_ID'] . '>' . $row['PL_Name'] . '</option>
									</div>
									';
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <select name="selectFineId" id="selectFineId" required>
                            <?php
                            $sql = "SELECT * FROM finedb.fine";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '
									<div class="col-10 col-md-6">
										<option id="fineId" value=' . $row['F_ID'] . '>' . $row['F_Fine'] . '</option>
									</div>
									';
                                }
                            }
                            ?>
                        </select>
                        <input type="submit" class="btn btn-success" name="submit" id="submitGive" value="Giv bøde">
                    </form>
                </div>
            </div>
        </div>
        <!--- Modal Ends --->
    </div>

    <script>
        $("#submitCreate").click(function(e) {
            console.log($("#fineName").val());
            var createFine = {
                fineName: $("#fineName").val(),
                fineDescription: $("#fineDescription").val(),
                finePrice: $("#finePrice").val(),
                submit: true,
            };

            $.ajax({
                url: 'createFine.php',
                type: 'POST',
                data: postData,
                success: function(data) {
                    alert("Bøde givet")
                    window.location.href = "modal.php";
                    console.info(data);
                    localStorage.setItem(data);
                    throw "exit";
                },
            });

            e.preventDefault();
        });

        $("#submitGive").click(function(e) {
            var giveFine = {
                fineName: $("#playerId").val(),
                fineDescription: $("#fineId").val(),
                submit: true,
            };

            $.ajax({
                url: 'giveFine.php',
                type: 'POST',
                data: dataPost,
                success: function(data) {
                    alert("Bøde givet")
                    window.location.href = "modal.php";
                    console.info(data);
                    localStorage.setItem(data);
                    throw "exit";
                },
            });

            e.preventDefault();
        });
    </script>

</body>

</html>