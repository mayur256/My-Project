<!DOCTYPE html>
<html>
	<head>
		<title>Patient Login</title>
		<?php include "mdb/mdbcdn.html";?>
		<link rel="stylesheet" href="css/mystyle.css">
		<link rel="stylesheet" href="css/fonts.css">
	</head>
	<body id="background">
	<header>
		<?php include"navbar.php";?>
	</header>
	<form action="pat_val.php" method="get">
	<div id="log_container">
							<!--Form with header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header  purple darken-4">
            <h1><i class="fa fa-lock"></i> <span class="form-headtext">Patient Login:</span></h1>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" name="pemail" class="form-control" placeholder="Patient Email ID/Contact no." required>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form2" name="pasw" class="form-control" placeholder="Password" required>
        </div>

        <div class="text-center">
            <button name="sub" class="btn" type="submit" style="background-color:indigo">Login</button>
        </div>

    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not Registered? <a href="pat_reg.php">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>

</div>
<!--/Form with header-->
	</div>
	</form>
	</body>
<html>