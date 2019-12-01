<?php 
	if(isset($_REQUEST["login"]))
	{
		session_start();
		include "dbconfig.php";
		$demail = $_REQUEST["demail"];
		$dpasw = $_REQUEST["dpasw"];
		$qry = "SELECT did, docname FROM doctors WHERE docemail = '$demail' AND docpass = '$dpasw'";
		$r = $con->query($qry);
		if($r->num_rows>0)
		{
			$ra = $r->fetch_assoc();
			$_SESSION['logid'] = $ra["did"];
?>
			<script>
				alert("Welcome Dr. <?php echo $ra['docname']?>");
				window.location.href="http://127.0.0.1/projects/Padoc/doc_home.php";
			</script>
<?php
		}
		else
		{
			echo "<script>
					alert('Invalid Login Credentials!');
					window.location.href='http://127.0.0.1/projects/Padoc/doc_log.php';
					</script>";
		}
	}
	else
	{
		echo "Bad Request. Go Back";
	}
?>