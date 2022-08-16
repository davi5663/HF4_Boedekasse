<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/scripts.php'; ?>
<?php include_once 'includes/db.php'; ?>
<?php include 'includes/head.php'; ?>

<?php $page = 'livescore';
include 'includes/navbar.php'; ?>

<head>
    <meta http-equiv="refresh" content="30">
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

        .container {
            color: black;
            font-weight: bold;
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
    <?php include 'includes/navbar.php'; ?>
    <!--- End Navigation -->

<body>
    <?php
    ini_set('display_errors', 'Off');
    error_reporting(E_ALL);

    require_once 'LiveScoreApi.class.php';

    $LiveScoreApi = new LiveScoreApi($API_KEY,  $API_SECRET, $servername, $username, $password, $dbname);
    $scores = $LiveScoreApi->getLivescores();

    include 'includes/left.php';

    foreach ($scores as $_score) { ?>

        <div class="match-line">
            <div class="row">
                <div class="col-md-2 time-box">
                    <?= $_score['competition_name'] ?>
                </div>
                <div class="col-md-2 time-box">
                    <?= $_score['scheduled'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 time-box">
                    <?= $_score['time'] ?>
                </div>
                <div class="col-md-4 team-name">
                    <?= $_score['home_name'] ?>
                </div>
                <div class="col-md-2 score-box">
                    <?= $_score['score'] ?>
                </div>
                <div class="col-md-4 team-name rigth">
                    <?= $_score['away_name'] ?>
                </div>
            </div>
        </div>
</body>

</html>
<script>
    windows.setTimeout(function() {
        window.location.reload();
    }, 30000);
</script>

<?php
    }
    include 'includes/right.php';
?>