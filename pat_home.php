<?php
	session_start();
	if(!isset($_SESSION["pid"]))
	{
?>
		<script>
			alert("Please Login first!");
			window.location.href="http://127.0.0.1/projects/Padoc/pat_log.php";
		</script>
<?php
	}
	else
	{
		include "dbconfig.php";
		$q = "SELECT * FROM patient WHERE patid='$_SESSION[pid]'";
		$r = $con->query($q);
		$ra = $r->fetch_assoc();
		
		// appointment details fetching query
		$aptq = "SELECT * FROM pat_appoint WHERE pat_id='$_SESSION[pid]'";
		$apt_result = $con->query($aptq);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Patient Home</title>
		<style>
			#aptheader{background-color:AliceBlue;font-family:"Impact";font-weight:bold;letter-spacing:15px;text-align:center}
			#tabheader{background-color:AliceBlue;font-family:"Impact";font-weight:bold;letter-spacing:15px;text-align:center}
			h1{background-color:GhostWhite; text-align:center;}
			thead{background-color:black;color:white;}
			.td{font-size:18px;font-family:"Times New Roman";text-align:center}
			tbody{background-color:AliceBlue}
			.apts{margin-top:80px}
		</style>
	</head>
	<body>
			<?php include "pat_navbar.php"?>
			<header>
				<h1>Patient Portal</h1>
			</header>
			<section>
				<div id="patinfo" class="">
					<div id="tabheader">
						<h3>Personal Info</h3>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th class="td">Name</th>
								<th class="td">Gender</th>
								<th class="td">Email/Contact no : </th>
								<th class="td">Address</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="td"><?php echo $ra["patname"]; ?></td>
								<td class="td"><?php echo $ra["pgender"]; ?></td>
								<td class="td"><?php echo $ra["patemail"]; ?></td>
								<td class="td"><?php echo $ra["paddr"]; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="apts" class="apts">
					<div id="aptheader">
						<h3>Appointments<h3>
					</div>
					<div>
						<table class="table">
							<thead>
								<tr>
									<th class="td">Doctor Speciality</th>
									<th class="td">Doctor Name</th>
									<th class="td">Date</th>
									<th class="td">Time</th>
									<th class="td">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while($apt_ra = $apt_result->fetch_assoc())
									{
										$a = $apt_ra["aid"];
										echo "<tr>";
										echo	"<td class='td'>".$apt_ra['doc_cat']."</td>";
										echo	"<td class='td'>".$apt_ra['doc_name']."</td>";
										echo	"<td class='td'>".$apt_ra['aptdate']."</td>";
										echo	"<td class='td'>".$apt_ra['aptime']."</td>";
										echo	"<td class='td'><button type='button' class='btn-danger btn-sm' onclick=del('$a')>CANCEL</button></td>";
										echo"</tr>";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			
			
			
			<!-- Javascripts -->
			<script>
				function del(b)
				{
					var x;
					x = confirm("You sure about that?");
					if(x==1)
					{
						var xmlhttp;
						var url = "deleteapt.php";
						url+= "?c="+b;
						if(window.XMLHttpRequest)
						{
							xmlhttp = new XMLHttpRequest(); // object for chrome, firefox, etc
							xmlhttp.onreadystatechange = function(){
								if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
								{
									window.location.reload(true);
								}
							}
							xmlhttp.open("GET", url, false);
							xmlhttp.send(null);
						}
						else
						{
							xmlhttp = new ActiveXObject("Mircosoft.XMLHTTP"); // for IE
						}
					}
					else
					{
						//nothing to do here.....
					}
				}
			</script>
	</body>
</html>
<?php
	}
?>