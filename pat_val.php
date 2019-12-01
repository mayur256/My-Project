<?php
	session_start();  //session for patient login begins here
	$patemail = $_GET["pemail"];
	$patpass = $_GET["pasw"];
	if(isset($_GET["sub"]))
	{
		$con = new mysqli("localhost", "root", "", "padoc");
		if($con)
		{
			$authenqry = "SELECT * FROM patient WHERE patemail = '$patemail' AND patpass = '$patpass'";
			$resset = $con->query($authenqry);
			if($resset->num_rows>0)
			{
				$resarray = $resset->fetch_assoc();
				$_SESSION["pid"] = $resarray["patid"];		//patient session id set here
				$_SESSION["pn"] = $resarray["patname"];
?>
				<script>
					alert("Login Successfull! Welcome <?php echo $_SESSION['pn']; ?>");
					window.location.href="http://127.0.0.1/projects/Padoc/pat_home.php";
				</script>
<?php
			}
			else
			{
?>
				<script>
					alert("Invalid Login Credentials!");
					window.location.href="http://127.0.0.1/projects/Padoc/pat_log.php";
				</script>
<?php
			}
			
		}
	}
?>