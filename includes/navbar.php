<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<h4>Posten Bødekasse</h4>
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
											} ?>" href="finetypes.php">Bødetyper</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'players') {
												echo 'active';
											} ?>" href="players.php">Spillere</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'livescore') {
												echo 'active';
											} ?>" href="livescore.php">LiveScore</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'upcoming') {
												echo 'active';
											} ?>" href="upcoming.php">Kommende Kampe</a>
					</li>
					<li class="nav-item">
						<a>  </a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page == 'admin') {
												echo 'active';
											} ?>" href="admin.php">Admin</a>
					</li>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->
</body>

</html>