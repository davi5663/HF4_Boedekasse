<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/scripts.php'; ?>
<?php include_once 'includes/db.php'; ?>
<?php include 'includes/head.php'; ?>

<?php $page = 'upcoming';
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
                margin-top: 0%;
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
    $fixtures = $LiveScoreApi->getUpcomingGames();

    include 'includes/left.php'; ?>

    <?php foreach ($fixtures as $_fixtures) { ?>
        <div class="card bg-info">
            <div class="row text-dark">
                <div class="col-md-2 time-box">
                    <?= $_fixtures['time'] ?>
                </div>
                <div class="col-md-4 team-name">
                    <?= $_fixtures['home_name'] ?>
                </div>
                <div class="col-md-2">
                    v
                </div>
                <div class="col-md-4 team-name">
                    <?= $_fixtures['away_name'] ?>
                </div>
            </div>
        </div>
</body>

</html>
<?php
    }
    include 'includes/right.php';
?>