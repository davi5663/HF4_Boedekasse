<!DOCTYPE html>
<html lang="en">

<style>
    * 
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

<body>
    <div class="rightcolumn">
        <h3>Flest Bøder</h3>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $result = mysqli_query($conn, "CALL MostFines");
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '
            <div class="card">
                <div class="fakeimg">' . $row['Player Name'] . ' ' . $row['Most Fines'] . '</div><br>
            </div>
        ';
            }
        }
        ?>
    </div>
</body>
</html>