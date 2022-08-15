<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/db.php'; ?>
    <?php include 'includes/head.php'; ?>

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

        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }

        .card {
            background-color: white;
            padding: 10px;
            margin-top: 20px;
        }

        .fakeimg {
            background-color: green;
            color: white;
            width: 100%;
            padding: 20px;
        }

        .leftcolumn {
            float: left;
            width: 75%;
        }

        .rightcolumn {
            float: right;
            width: 25%;
            padding-left: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        .row-select {
            text-align: center;
        }


        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }

            body {
                margin-top: 12%;
            }

            .card {
                padding: 3%;
                margin-top: 2%;
            }
        }
    </style>
    <!--- Navigation -->

    <?php $page = 'players';
    include 'includes/navbar.php'; ?>

    <!--- End Navigation -->

<body>
    <div class="row-select">
        <h1>Vælg Klub</h1>
        <form id="chooseTeam" method="post" action="#">
            <h3 name="idTeam" id="idTeam"></h3>
            <select name="teamSelect" id="teamSelect" required>
                <?php
                $sql = "SELECT * FROM finedb.club";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
									<div class="col-10 col-md-6">
										<option id=' . $row['C_ID'] . '>' . $row['C_Name'] . '</option>
									</div>
									';
                    }
                }
                ?>
            </select>
            <br>
            <br>
            <input type="submit" class="btn btn-success" name="submit" id="submitTeam" value="Se spillere">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $query = "SELECT 
            club.C_ID,
            club.C_Name,
            player.PL_Name
            FROM finedb.club
            
            INNER JOIN finedb.player
            ON player.PL_C_ID = club.C_ID 
            ";
            $data = mysqli_query($conn, $query);

            if (!$data) {
                echo ("Error description: " . mysqli_error($conn));
            } else {

                while ($row = mysqli_fetch_array($data)) {
                    echo "<tr>
                        <td style=font-weight: bold;>" . $row['C_Name'] . "<br>" . "</td>
                        <td>" . $row['PL_Name'] . "<br> <br>". "</td>                                      
                      </tr>";
                }
            }
        }
        ?>
    </div>
    <!--- Script Source Files -->
    <?php include_once 'includes/scripts.php'; ?>
    <!--- End of Script Source Files -->

</body>

</html>