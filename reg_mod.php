<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<?php include"mdb/mdbcdn.html";?>
<link rel="stylesheet" href="css/regmod.css">
<link rel="stylesheet" href="css/mystyle.css">

</head>
<body style="background-color:rgba(0,10,55,0.6)">
<header>
	<?php include"navbar.php";?>
</header>
		<div>
			<marquee direction="right" behavior="alternate" hspace="0px" bgcolor="#78abc2"><h1 id="xyz">Registration Modules</h1></marquee>
		</div>
<section id="logins" class="container container-fluid">
<div class="scontainer">

<div class="container-fluid lmodules">
<div class="row" align="center">
<div class="col-sm-6">
<a href="doc_reg.php"><img src="images/doctor.jpg" alt="Doctor_Sign Up" width="250" height="250"></a>
<h3>Doctor Sign Up</h3>
</div>
<div class="col-sm-6">
<a href="pat_reg.php"><img src="images/patient.jpg" width="250" alt="Patient_Sign Up" height="250"></a>
<h3>Patient Sign Up</h3>
</div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>