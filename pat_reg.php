<!DOCTYPE html>
<html>
	<head>
		
		<title>Patient Sign Up</title>
		<?php include_once "mdb/mdbcdn.html"; ?>
		<link rel="stylesheet" href="./css/patreg.css">
		<style>
			select{height:80%;width:60%};
		</style>
	</head>
	<body>
		<?php include_once "navbar.php"; ?>
		<section>
			<form action="patreg_valid.php" method="GET">
				<div class="form-container">
				<div class="form-header">
					<h1>Patient Details</h1>
				</div>
				<div class="container">
					<div class="row">
						<div class="col">
							<label for="pname">Full Name</label>
						</div>
						<div class="col">
							<input type="text" name="pname" class="form-control" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="pemail">Email/Mob. no</label>
						</div>
						<div class="col">
							<input type="text" name="pemail" class="form-control" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="pasw">Password</label>
						</div>
						<div class="col">
							<input type="password" name="pasw" class="form-control" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="gender">Gender</label>
						</div>
						<div class="col">
							<input type="radio" name="gender" value="male"> &nbsp;Male </input> &nbsp;&nbsp;
							<input type="radio" name="gender" value="female"> &nbsp;Female </input>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="addr">Address</label>
						</div>
						<div class="col">
							<select id="" name="addr" class="form-control">
								<option value="0"></option>
								<option value="chala">Chala</option>
								<option value="chanod">Chanod</option>
								<option value="gunjan">Gunjan</option>
							</select>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<center><button class="btn btn-primary btn-lg" type="reset">Cancel</button></center>
						</div>
						<div class="col">
							<center><button class="btn btn-primary btn-lg" type="submit" name="submit">Register</button></center>
						</div>
				</div>
				</form>
				</div>
			</form>
		</section>
	</body>
</html>