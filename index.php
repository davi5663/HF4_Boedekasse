<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <!--- Navigation -->
    <?php $page='home'; include 'includes/navbar.php'; ?>
    <!--- End Navigation -->

    <!--- Start Jumbotron -->
    <div class="jumbotron">
        <div class="container">
		<?php
			include_once 'includes/db.php';

			$sql = "SELECT 
					PersonIdentification.PI_ID as 'ID', 
					PersonIdentification.PI_FirstName as 'First Name', 
					PersonIdentification.PI_LastName as 'Last Name',
					Gender.G_Gender as 'Gender', 
					PersonIdentification.PI_Birthday as 'Birthday',
					PersonIdentification.PI_Image as 'Image'
					
					FROM PersonIdentification 
					
					INNER JOIN Gender ON PersonIdentification.PI_Gender=Gender.G_ID";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo 
            '
                <div class="row justify-content-center text-left">
                    <div class="col-10 col-md-4" >
                        <a>
                            <img class="col-10 col-md-6"src="' . $row['Image'] . '">
                        </a>
                    </div>
                    <div class="col-10 col-md-5" >
						<h3 class="pb-3 pt-4" style="color:black;">' . $row['First Name'] . ' '. $row['Last Name'] . '</h3>
						<h3 class="pb-3" style="color:black;">' . $row['Gender'] . ' </h3>
						<h3 class="pb-3" style="color:black;">' . $row['Birthday'] . ' </h3>
                    </div>
                </div>
            ';
				}
			}
            ?>
            <!--- End Row -->
        </div><!--- End Container --> 