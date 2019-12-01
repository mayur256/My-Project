<!DOCTYPE html>
<html>
	<head>
		<title>View Doctor</title>
		<?php
			error_reporting(E_ALL);
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
		?>
		<style>
			.container{margin-top:20px}
			.xyz{font-size:20px;}
		</style>
	</head>
	<body>
		<?php include "dbconfig.php";
			  include "pat_navbar.php";
			  $a = $_REQUEST["b"];
			  $qry = "SELECT * FROM doctors WHERE did = '$a'";
			  $rs = $con->query($qry);
			  $ra = $rs->fetch_assoc();
		?>
		
		
		<section>
			<div class="container">
				<div class="card" style="background-color:Azure;text-align:center;margin-left:200px;margin-right:200px;margin-bottom:100px">
					<div class="card-body">
						<h3 class="card-title"><?php echo $ra["docname"] ;?></h3>
						<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($ra['docpfimg']).'"/ height=300 width=350>'; ?>
					</div>
						<p class="xyz">Speciality : <?php echo $ra["docspec"];?></p>
						<p class="xyz">Email : <?php echo $ra["docemail"];?></p>
						<p class="xyz">Contact Number : <?php echo $ra["docnum"];?></p>
						<p class="xyz">License : </p>
						
						<object data="data:application/pdf;base64,<?php echo base64_encode($ra['doclic']) ?>" type="application/pdf" style="height:400px;width:100%"></object>
				</div>
			</div>
			</div>
		</section>
	</body>
</html>