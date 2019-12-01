<!DOCTYPE html>
<html>
	<head>
		<title>Login Modules</title>
		<?php include_once 'mdb/mdbcdn.html';?>
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
		<header>
			<?php include_once"navbar.php";?>
		</header>
		<div>
			<marquee direction="right" behavior="alternate" hspace="0px" bgcolor="#78abc2"><h1 id="xyz">Login Modules</h1></marquee>
		</div>
		<!-- Card deck -->
	<div id="card-deck" class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/patient.jpg" alt="Patient Login" height="100%">
      <a href="pat_log.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Patient Login</h4>
    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/doctor.jpg" alt="Doctor Login">
      <a href="doc_log.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Doctor Login</h4>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/admin.jpg" alt="Admin Login">
      <a href="admin_log.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">
	<h4>Admin Login</h4>
    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->
	</body>
</html>