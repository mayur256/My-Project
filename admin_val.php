<?php
	session_start();		//session inception
	error_reporting(E_ALL);
	$adminid = $_GET["adminid"];
    $apass = $_GET["pass"];
	if(isset($_GET["submit"]))
	{
		$con = new mysqli("localhost", "root", "", "padoc");
		if($con)
		{
			$authenqry = "SELECT * FROM admin WHERE aid = '$adminid' AND adpass = '$apass'";
			$res = $con->query($authenqry);
			if($res->num_rows>0)
			{	$_SESSION['admin_id'] = $adminid;
				?>
				<script>
					alert("Welcome Mr. <?php $aname = $res->fetch_assoc(); print_r($aname["adname"]);?>");
					window.location.href = "http://127.0.0.1/projects/Padoc/admin_home.php";
				</script>
				<?php
			
			}
			else
			{
				?>
				<script>
					alert("Invalid Admin ID or Password");
					window.location.href = "http://127.0.0.1/projects/Padoc/admin_log.php";
				</script>
				<?php
			}
		}
	}
?>