<?php
	error_reporting(E_ALL);
	session_start();
	if(!isset($_SESSION["admin_id"]))
	{
?>
		<script>
			alert("Access Denied! Please Login first!");
			window.location.href="http://127.0.0.1/projects/Padoc/admin_log.php";
		</script>
<?php
	}
	require "dbconfig.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Patient List</title>
		<style>
			thead{color:whitesmoke;background-color:black;}
			tbody{font-size:2em; background-color:FloralWhite}
			h1{text-align:center;font-family:"Times New Roman";background-color:Ivory;color:BlueViolet}
		</style>
	</head>
	<body>
		<header>
				<?php include "admin_navbar.php"?>
		</header>
		<section>
			<div class="container">
				<h1> List of Patients</h1>
				<div class="doc-table">
					<table id="tablePreview" class="table table-striped table-hover table-borderless" style="font-size:40px;">
					<!--Table head-->
						<thead>
							<tr>
								<th> Name</th>
								<th> Contact no / Email</th>
								<th> Gender </th>
								<th> Address </th>
								<th> &nbsp; </th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$qry = "SELECT * FROM patient";
								$res = $con->query($qry);
								if($res->num_rows>0)
								{
									while($resarray = $res->fetch_assoc())
									{
										$pip = $resarray["patid"];
										echo "<tr>";
										echo "<td>".$resarray["patname"]."</td>";
										echo "<td>".$resarray["patemail"]."</td>";
										echo "<td>".$resarray["pgender"]."</td>";
										echo "<td>".$resarray["paddr"]."</td>";
										echo "<td><a href='delete_pat.php?a=$pip'><button type='button' class='btn-danger btn-sm'>DELETE</button></a></td>";
										echo "</tr>";
									}
								}
							?>
						</tbody>
					</table>
				</div>
				
			</div>
		</section>
	</body>
</html>