<?php
	error_reporting(E_ALL);
	if(isset($_GET['submit']))
	{
		require_once("dbconfig.php");
		$pname = $_GET["pname"];
		$pemail = $_GET["pemail"];
		$pasw = $_GET["pasw"];
		$gender = $_GET["gender"];
		$addr = $_GET["addr"];
		$dupqry = "SELECT patemail, patpass FROM patient WHERE patemail='$pemail' OR patpass='$pasw'";
		$r = $con->query($dupqry);
		if($r->num_rows>0)
		{
?>
			<script>
				alert('Please use another email or password!');
				window.location.href="http://127.0.0.1/projects/Padoc/pat_reg.php";
			</script>
<?php
		}
		else
		{
			$qry = "INSERT INTO patient(patname, patemail, patpass, pgender, paddr) values('$pname', '$pemail', '$pasw', '$gender', '$addr')";
			$r = $con->query($qry);
			if($r==TRUE)
			{
				echo 
				"<script>
					alert('Account Created!');
					window.location.href='http://127.0.0.1/projects/Padoc/pat_log.php';	
				</script>";
			}
			else
			{
				echo "Error : ".$con->error;
			}
		}
	}
	else
	{
		echo "Form not submitted successfully";
	}
?>