<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<h4>Bødekasse POSTEN</h4>
			</a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'fines') {
												echo 'active';
											} ?>" href="index.php">Bøder</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'finetypes') {
												echo 'active';
											} ?>" href="index.php">Bødetyper</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'players') {
												echo 'active';
											} ?>" href="players.php">Spillere</a>
					</li>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->
</body>

</html>