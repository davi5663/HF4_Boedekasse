<?php 
error_reporting(0);
ini_set('display_errors', 0);
?>
<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>
	<!--- Navigation -->
	<?php $page = 'admin';
	include 'includes/navbar.php'; ?>
	<!--- End Navigation -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h1 class="text-center pt-5 pb-3">Bøde Bassen</h2>
				<div class="row justify-content-center text-center">
					<div class="col-md-7 border border rounded">
						<img class="col-md-11" src="img/Loginoffice.jpeg">
						<form action="admin-login.php" method="POST">
							<input class="col-md-6 pb-1 pt-1 mt-0" placeholder="Username" type="text" id="A_User" name="A_User">
							<input class="col-md-6 pb-1 pt-1 mt-1" placeholder="Password" type="password" id="A_Pass" name="A_Pass">
							<p>
								<input type="submit" id="btn" value="Login" class="btn btn-outline-dark pt-2 pb-2 mt-1">
							</p>
						</form>

						<?php
						include_once './includes/db.php';

						$AdminUser = $_POST['A_User'];
						$AdminPass = $_POST['A_Pass'];

						$sql = "SELECT * FROM Admin WHERE A_User = '$AdminUser' and A_Pass = '$AdminPass'";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							header("Location: admin.php");;
						} else {
							echo
								'<div">
									<p>Please Login</p>
								</div>
								';
						}
						?>
					</div>
				</div>
				<!--- End Row -->
		</div>
		<!--- End Container -->
	</div>
	<!--- End Jumbotron -->


	<!--- Script Source Files -->
	<?php include 'includes/scripts.php'; ?>
	<!--- End of Script Source Files -->

</body>

</html>