<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
		<?php include "mdb/mdbcdn.html";?>
		<link rel="stylesheet" href="css/mystyle.css">
		<link rel="stylesheet" href="css/fonts.css">
	</head>
	<body id="background">
	<header>
		<?php include"navbar.php";?>
	</header>
	<form action="admin_val.php" method="get">
	<div id="log_container">
	<!--Form with header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header" style="background-color:black;text-align:center;">
            <h1><span class="form-headtext">Admin Login:</span></h1>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-id-card prefix"></i>
            <input type="text" id="form2" class="form-control" placeholder="Admin ID" name="adminid" required>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control" placeholder="Password" name="pass" required>
        </div>

        <div class="text-center">
            <button class="btn" type="submit" style="background-color:black" name="submit">Login</button>
        </div>

    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not Registered? <a href="#">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>

</div>
<!--/Form with header-->
	</div>
	</form>
	</body>
<html>