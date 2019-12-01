<!DOCTYPE html>
<?php
	error_reporting(E_ALL);
	session_start();
	if(!isset($_SESSION["pid"]))
	{
?>
		<script>
			alert("To make an appointment please login first!");
			window.location.href="http://127.0.0.1/projects/Padoc/pat_log.php";
		</script>
<?php
	}
	else
	{
		include "dbconfig.php";
		$a = "SELECT DISTINCT docspec FROM doctors";
		$r = $con->query($a);
		$b = "SELECT did, docname FROM doctors WHERE docspec = ";
?>
<html>
	<head>
		<title>Book Appointment</title>
		<style>
			.table{border:2px solid Skyblue;}	
			.header{background-color:Aquamarine;font-family:"Arial";text-align:center;}
		</style>
	</head>
	<body>
		<header>
			<?php include "pat_navbar.php"; ?>
		</header>
		<section>
			<div class="header">
				<h1>Book Appointment</h1>
			</div>
				<div style="margin-left:150px;margin-right:150px;">
					<form action="bookap.php" method="get">
					<table class="table">
							<tr>
								<td style="text-align:center;font-size:20px;font-family:Constantia;font-weight:bold">Patient Name</td>
								<td><input class="form-control" type="text"id="pn" name="pat_name" value="<?php  echo $_SESSION['pn']?>" readonly required /></td>
							</tr>
							<tr>
								<td style="text-align:center;font-size:20px;font-family:Constantia;font-weight:bold">Doctor Category</td>
								<td>
									<select id="spec" class="form-control" onchange="getSelValue(this.value)" name="dspec" required>
										<option value="none" selected>Speciality</option>
										<?php
											while($ra = $r->fetch_assoc())
											{
												echo "<option value='$ra[docspec]'>".$ra['docspec']."</option>\n\t";
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;font-size:20px;font-family:Constantia;font-weight:bold">Doctor Name</td>
								<td>
									<select class="form-control" id="docname" name="dname" onchange="getInfo(this.value)" required>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;font-size:20px;font-family:Constantia;font-weight:bold">Date : </td>
								<td>
									<input id="aptdate" name="aptdate"  class="form-control" type="date" />
								</td>
							</tr>
							<tr>
								<td style="text-align:center;font-size:20px;font-family:Constantia;font-weight:bold">Time</td>
								<td>
									<input type="time" class="form-control" id="aptime" name="aptime" />
								</td>
							</tr>
					</table>
					<div class="row">
						<div class="col">
							<center><button type="reset" class="btn btn-primary btn-lg" onclick="window.location.reload();">Cancel</button></center>
						</div>
						<div class="col">
							<center><button class="btn btn-primary btn-lg" type="submit" name="submit">Book</button></center>
						</div>
					</div>
					<input type="hidden" id="docid" name="did" />
					</form>
				</div>
		</section>
		<footer>
			<div>
				<p>Note : Our booking hours are between '10:00 to 18:00'</p>
			</div>
		</footer>
		
		<script>
			
			function getSelValue(str)
			{
				var xmlhttp;
				//alert(str);
				if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
					//alert("Object Created!");
				}
				xmlhttp.onreadystatechange = function(){
					if(this.readyState==4 && this.status==200)
					{
						document.getElementById("docname").innerHTML = this.responseText;
					}
				}
				var url = "getdoc.php";
				url = url+"?c="+str;
				xmlhttp.open("GET", url, true);
				xmlhttp.send(null);
			}
			
			
			
			
			<!-- Get Doctor ID-->
			
			function getInfo(dn)
			{
				var xmlhttp;
				//alert(dn);
				if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
					//alert("Object Created!");
				}
				xmlhttp.onreadystatechange = function(){
					if(this.readyState==4 && this.status==200)
					{
						document.getElementById("docid").value=this.responseText;
					}
				}
				var url = "getdocid.php";
				url = url+"?x="+dn;
				xmlhttp.open("GET", url, true);
				xmlhttp.send(null);
			}
		</script>
	</body>
<?php
	}
?>
</html>
