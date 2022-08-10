<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><h3>ID BY IGOR</h3></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page=='home'){echo'active';}?>" 
						href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='id'){echo'active';}?>" 
						href="index.php">Identification</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->
