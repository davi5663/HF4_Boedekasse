<head>
	<?php
	include '../includes/head.php';
	include_once '../includes/db.php';
	include_once '../testing/createFine.php';
	?>
</head>

<body>

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h1 class="text-center pt-5 pb-3">Bøde Bassen</h2>
				<div class="row justify-content-center text-center">
					<div class="col-md-7 border border rounded">
						
						<form id="createFine" method="post">
							<h3 name="fineId" id="fineId"></h3>
							<select name="choosePlayer" id="choosePlayer" required>
								<?php
								$sql = "SELECT * FROM finedb.player";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);
								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo '
									<div class="col-10 col-md-6">
										<option id=' . $row['PL_ID'] . '>' . $row['PL_Name'] . '</option>
									</div>
									';
									}
								}
								?>
							</select>
							<input type="submit" class="btn btn-success" name="submit" id="submitPlayer" value="Giv bøde">
						</form>
					</div>
				</div>
				<!--- End Row -->
		</div>
		<!--- End Container -->
	</div>
	<!--- End Jumbotron -->



</body>
<script>
	var id = window.location.href.split('/').pop();
	document.getElementById("fineId").innerHTML = id


	$("#submitPlayer").click(function(e) {
		var postData = {
			fineId: $("#fineId").val(),
			choosePlayer: $("#choosePlayer").val(),
			submit: true,
		};

		$.ajax({
			url: 'giveFine.php',
			type: 'POST',
			data: postData,
			success: function() {
                    window.location.href = "../index.php";
                    console.info(data);
                    localStorage.setItem(data);
                },
		});

		e.preventDefault();
	});
</script>

</html>