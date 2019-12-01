<!DOCTYPE html>
<html>
	<head>
		<title>Padoc</title>
		<?php include 'mdb/mdbcdn.html';?>
		<link rel="stylesheet" href="css/colours.css">
		<link rel="stylesheet" href="css/fonts.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark indigo">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
			aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="index.php"><img class="rounded-circle" src="images/main_icon.jpg" alt="main icon" height="40" width="60" /></a>
			<ul class="navbar-nav mr-auto mt-lg-0">
			<li class="nav-item active">
			<a class="nav-link" href="<?php $_SELF;?>">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Book Appointment</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
			<a class="nav-link">Contact</a>
			</li>
			</ul>
			</nav>
			</div>
		</header>
		<section>
					<!-- Jumbotron -->
<div class="card card-image" style="background-image: url('images/d3.jpg');background-size:contain;background-repeat:no-repeat;">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5 fonts">

      <!-- Content -->
	  <h1 id="gotham">GOTHAM GENERAL HOSPITAL</h1>
	  <hr>
     <h2>Book Your Appointment here!!!</h2>
	 <h3>at your ease...</h3>
	 <h5>Our Motto</h5>
	 <p id="motto">"Personal care, professional approach. We provide the most exhaustive diagnosis and treatment regimen for our patients."</p>
	 <a class="btn btn-primary" role="button" href="log_mod.php">Logins</a>
	 <a class="btn btn-primary" role="button" href="reg_mod.php">Registration</a>

    </div>
  </div>
</div>
<!-- Jumbotron -->
		</section>
		<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
	<p>This is solely a property of gotham national city.</p>
      </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
	</body>
</html>