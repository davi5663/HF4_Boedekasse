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
    <!--- Navigation -->

    <?php $page = 'fines';
    include 'includes/navbar.php'; ?>

    <!--- End Navigation -->

<body>
    <div class="row">
        <?php include_once './testing/storedprocedures.php' ?>
    </div>
    <!--- Script Source Files -->
    <?php include_once 'includes/scripts.php'; ?>
    <!--- End of Script Source Files -->

</body>

</html>