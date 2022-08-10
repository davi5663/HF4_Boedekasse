<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><h3>Bødekasse POSTEN</h3></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page=='fines'){echo'active';}?>" 
						href="index.php">Bøder</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='admin'){echo'active';}?>" 
						href="index.php">Admin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='players'){echo'active';}?>" 
						href="index.php">Spillere</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='finetypes'){echo'active';}?>" 
						href="index.php">Bødetyper</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->
