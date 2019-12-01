<?php
	error_reporting(E_ALL);
	session_start();
	if(!isset($_SESSION["admin_id"]))
	{
?>
		<script>
			alert("Access Denied! Please Login first");
		</script>
<?php
	}
	else
	{
		$patid = $_REQUEST["a"];
		require "dbconfig.php";
		$qry = "DELETE FROM patient WHERE patid = $patid";
		//echo $docid;
		if($con->query($qry))
		{
?>
			<script>
				alert("Doctor Record Deleted!");
				window.location.href="http://127.0.0.1/projects/Padoc/admin_pat.php";
			</script>
<?php
		}
		else
		{
?>
			<script>
				alert("Deletion act failed!");
				window.location.href="http://127.0.0.1/projects/Padoc/admin_doctors.php";
			</script>
<?php
			
		}
	}
?>