<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php"style="font-family:Arial Black">Go4Give</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
		
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="fundraiser.php" class="nav-link">Fundrasier</a></li>
					<li class="nav-item"><a href="orphanage.php" class="nav-link">Orphanage</a></li>
					<!-- <li class="nav-item"><a href="volunteer.html" class="nav-link">Volunteer</a></li>
					<li class="nav-item"><a href="causes.html" class="nav-link">Causes</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
					<li class="nav-item"><a href="orphanage2.php" class="nav-link">Feedback</a></li>
					<li class="nav-item"><a href="receipt.php" class="nav-link">Receipt</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<?php if(isset($_SESSION['d_id'])){ ?>
					<li class="nav-item cta"><a href="../controller/d_logout.php" class="nav-link">Logout</a></li>
					<?php } else { ?>
					<li class="nav-item"><a href="../login/index.php" class="nav-link">Login</a></li>
					<li class="nav-item cta"><a href="../login/donor_register.php" class="nav-link">Register</a></li>
						<?php } ?>
					
				</ul>
			</div>
		</div>
	</nav>