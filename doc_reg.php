<!DOCTYPE html>
<html>
	<head>
		
		<title>Doctor Sign Up</title>
		<?php include_once "mdb/mdbcdn.html"; ?>
		<style>
			.form-header{text-align:center; font-family:Georgia; background-color:Cornsilk}
			.container{margin-top:0px; font-family:"Constantia"; font-weight:bold; font-size: 20px; background-color: LavenderBlush; padding:20px 50px;}
			select{height:35px; width:227px}
			</style>
	</head>
	<body style="background-color:LightGrey">
		<?php include_once "navbar.php"; ?>
		<section>
			<form action="docreg_valid.php" method="POST" enctype="multipart/form-data">
				<div class="form-container">
				<div class="form-header">
					<h1>Doctor Details</h1>
				</div>
				<div class="container">
					<div class="row">
						<div class="col">
							<label for="dname">Full Name</label>
						</div>
						<div class="col">
							<input type="text" name="dname" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="demail">Email</label>
						</div>
						<div class="col">
							<input type="email" name="demail" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="pasw">Password</label>
						</div>
						<div class="col">
							<input type="password" name="pasw" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="contact">Contact Number</label>
						</div>
						<div class="col">
							<input type="text" name="contact" required>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="spec">Speciality</label>
						</div>
						<div class="col">
							<select name="spec">
								<option value="none" selected>Doctor Speciality</option>
								<option value="allergologist">Allergologist‎</option>
								<option value="Anatomist‎">Anatomist‎</option>
								<option value="Anesthesiologist‎">Anesthesiologist‎</option>
								<option value="Cardiologist‎">Cardiologist‎</option>
								<option value="Dermatologist‎ ">Dermatologist‎ </option>
								<option value="Diabetologist‎">Diabetologist‎</option>
								<option value="Endocrinologist">Endocrinologist‎</option>
								<option value="Gastroenterologist‎">Gastroenterologist</option>
								<option value="Gynaecologist‎">Gynaecologist‎</option>
								<option value="Hematologist‎">Hematologist</option>
								<option value="Hygienist">Hygienist</option>
								<option value="Immunologist‎ ">Immunologist‎ </option>
								<option value="Leprologist">Leprologist</option>
								<option value="Nephrologist‎">Nephrologist‎</option>
								<option value="Neurologist">Neurologist</option>
								<option value="Obstetrician‎">Obstetrician‎</option>
								<option value="Oncologist‎">Oncologist‎</option>
								<option value="osteologist">Osteologist</option>
								<option value="Ophthalmologist‎">Ophthalmologist</option>
								<option value="Otolaryngologist">Otolaryngologist</option>
								<option value="Pediatrician‎ ">Pediatrician‎ </option>
								<option value="Psychiatrist">Psychiatrist</option>
								<option value="Pulmonologist‎ ">Pulmonologist‎ </option>
								<option value="Radiologist‎">Radiologist‎</option>
								<option value="Rheumatologist">Rheumatologist</option>
								<option value="Urologist">Urologist</option>
								<option value="Virologist‎">Virologist‎</option>
								<option value=""></option>
							</select>
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="pfimg">Upload your image</label>
						</div>
						<div class="col">
							<input type="file" name="pfimg">
						</div>
						<div class="w-100">&nbsp;</div>
						<div class="col">
							<label for="medlic">Upload your medical license</label>
						</div>
						<div class="col">
							<input type="file" name="medlic">
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