<!DOCTYPE html>
<?php include 'includes/head.php' ?>
<?php include 'includes/scripts.php' ?>
<?php include_once 'includes/db.php' ?>

<head>
    <meta charset="UTF-8">
</head>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial;
        margin-top: 2%;
        padding: 25px;
        background: #f1f1f1;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
        body {
            margin-top: 12%;
        }
    }
</style>

<body>
    <?php include 'includes/navbar.php' ?>
    <!--- End Navigation -->
    <div class="row justify-content-center" style="text-align: center;">
        <!-- Opret Bøde -->
        <div class="col-md-3">
            <h2>Opret Spiller</h2>
            <!-- Content HUSK -->
            <div>
                <form id="createFine" action="testing/createPlayer.php" method="post" autocomplete="off">
                    <div class="mt-2">
                        <input placeholder="Fuldt navn" type="text" name="playerName" id="playerName" required>
                    </div>

                    <div class="mt-2">
                        <input placeholder="Telefonnummer" max=99999999 type="number" name="playerPhone" id="playerPhone" required>
                    </div>

                    <div class="mt-2">
                        <input type="submit" class="btn btn-success" name="submit-button" value="Opret Spiller">
                    </div>
                </form>
            </div>
        </div>
        <!--- End --->

        <!-- Opret Bøde -->
        <div class="col-md-3">
            <h2>Opret bøde</h2>
            <div>
                <form id="createFine" action="testing/createFine.php" method="post" autocomplete="off">
                    <div class="mt-2">
                        <input placeholder="Bøde Navn" type="text" name="fineName" id="fineName" required>
                    </div>

                    <div class="mt-2">
                        <input placeholder="Bøde Beskrivelse" type="text" name="fineDescription" id="fineDescription" required>
                    </div>

                    <div class="mt-2">
                        <input placeholder="Bøde Pris" max=1000 type="number" name="finePrice" id="finePrice" required>
                    </div>

                    <div class="mt-2">
                        <input type="submit" class="btn btn-success" name="submit-button" value="Opret Bøde">
                    </div>
                </form>
            </div>
        </div>
        <!--- End --->

        <!-- Giv bøde -->
        <div class="col-md-3">
            <h2>Giv bøde</h2>
            <form id="giveFine" action="testing/giveFine.php" method="post" autocomplete="off">
                <div class="mt-2">
                    <select name="selectPlayerId" id="selectPlayerId" required style="width:180px;">
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
                </div>

                <div class="mt-2">
                    <select name="selectFineId" id="selectFineId" required style="width:180px;">
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
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-success" name="submit-button" id="submitGive" value="Giv bøde">
                </div>
            </form>
        </div>
        <!--- End --->
    </div>


</body>

</html>