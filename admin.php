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
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h5></h5>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
            </div>
            <div class="col-sm">
                Opret bøde
            </div>
            <div class="col-sm">
                Opret en brugerdefinderede bøde
            </div>
        </div>
    </div>
    <!--- Script Source Files -->
    <?php include_once 'includes/scripts.php'; ?>
    <!--- End of Script Source Files -->

</body>

</html>