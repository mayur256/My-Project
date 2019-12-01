<?php
	include "admin_navbar.php";
	session_start();
	if(!isset($_SESSION['admin_id']))
	{
?>
		<script>
			alert("Access Denied! Please Login first!");
			window.location.href="http://127.0.0.1/projects/Padoc/admin_log.php";
		</script>
<?php
	}
?>
<!DOCTYPE html>
<head>
	<title>Admin Home</title>
</head>
<body>
<!-- Jumbotron -->
<div class="jumbotron text-center">

  <!-- Title -->
  <h2 class="card-title h2">ADMIN PANEL</h2>
  <!-- Subtitle -->
  <p class="blue-text my-4 font-weight-bold">Admin Controls are situated here....</p>

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-xl-7 pb-2">

      

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-4">

 

</div>
<!-- Jumbotron -->
<body>
</html>