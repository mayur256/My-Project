<?php
	error_reporting(E_ALL);
	if(isset($_POST['submit']))
	{
		$a = array();
		require_once "dbconfig.php";
		$dqry = "SELECT docemail, docpass FROM doctors WHERE docemail='$_POST[demail]'";
		$r = $con->query($dqry);
		if($r->num_rows>0)
		{
?>
			<script>
				alert("Please use another email or password!");
				window.location.href="http://127.0.0.1/projects/Padoc/doc_reg.php";
			</script>
<?php
		}
		else if($_FILES["pfimg"]["size"]>0 && $_FILES["medlic"]["size"]>0)
		{
			$dname = $_POST["dname"];
			$demail = $_POST["demail"];
			$dpasw = $_POST["pasw"];
			$dcontact = $_POST["contact"];
			$dspec = $_POST["spec"];
			$medlic = addslashes(file_get_contents($_FILES["medlic"]["tmp_name"]));
			$check = getimagesize($_FILES["pfimg"]["tmp_name"]);
			if($check===FALSE)
			{
				echo "<script>alert('Uploaded Image is not an image');
					window.location.href='http://127.0.0.1/projects/Padoc/doc_reg.php';
				</script>";
			}
			else
			{
				$imgname = $_FILES["pfimg"]["name"];
				//echo "You reached here.";
				$dpfimg = addslashes(file_get_contents($_FILES["pfimg"]["tmp_name"]));
				$qry = "INSERT INTO doctors VALUES('','$dname','$demail','$dpasw','$dcontact','$dpfimg','$medlic','$dspec')";
				$res = $con->query($qry);
				if($res==TRUE)
				{
?>
					<script>
						alert("Doctor Registration successfull!");
						window.location.href="http://127.0.0.1/projects/Padoc/doc_log.php";
					</script>
<?php
						
				}
				else
				{
?>
					<script>
						alert("Doctor Registration failed!");
						window.location.href="http://127.0.0.1/projects/Padoc/doc_reg.php";
					</script>
<?php
					
				}
			}
		}
		else
		{
			echo "Documents not successfully uploaded!";
		}
		
	}
	else
	{
		echo "Submit not set!";
	}
?>