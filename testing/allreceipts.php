<!DOCTYPE html>
<html lang="en">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial;
        margin-top: 4%;
        padding: 20px;
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
    <div class="leftcolumn">
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $result = mysqli_query($conn, "CALL AllReceipts");
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '
            <div class="card">
                <h3>' . $row['Fine'] . '</h3>
                <h5>' . $row['Player Name'] . '</h5>
                <p>' . $row['Description'] . '</p>
                <button class="fakeimg">Betal ' . $row['Price'] . ',- </button>
            </div>
        ';
            }
        }
        ?>
    </div>
</body>
</html>