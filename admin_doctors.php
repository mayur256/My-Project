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
		<title>All Doctors</title>
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
				<h1> Doctor Details</h1>
				<div class="doc-table">
					<table id="tablePreview" class="table table-striped table-hover table-borderless" style="font-size:40px;">
					<!--Table head-->
						<thead>
							<tr>
								<th> Name</th>
								<th> Email</th>
								<th> Contact Number </th>
								<th> Speciality </th>
								<th> &nbsp; </th>
								<th> &nbsp; </th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$qry = "SELECT did, docname, docemail, docnum, docspec FROM doctors";
								$res = $con->query($qry);
								if($res->num_rows>0)
								{
									while($resarray = $res->fetch_assoc())
									{
										$did = $resarray["did"];
										echo "<tr>";
										echo "<td>".$resarray["docname"]."</td>";
										echo "<td>".$resarray["docemail"]."</td>";
										echo "<td>".$resarray["docnum"]."</td>";
										echo "<td>".$resarray["docspec"]."</td>";
										echo "<td><a href='delete_doc.php?a=$did'><button type='button' class='btn-danger btn-sm'>DELETE</button></a></td>";
										echo "<td><a href='view_doc.php?b=$did'><button type='button' class='btn-info btn-sm'>VIEW</button></a></td>";
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