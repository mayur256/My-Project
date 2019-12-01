<?php
	session_start();
	error_reporting(E_ALL);
	if(!isset($_SESSION["pid"]))
	{
?>
		<script>alert("Invalid Access!")</script>
<?php
	}
	else if(isset($_GET["submit"]) && !empty($_REQUEST["aptdate"] && $_REQUEST["aptime"]))
	{
		include "dbconfig.php";
		$pname = $_REQUEST["pat_name"];
		$dspec = $_REQUEST["dspec"];
		$dname = $_REQUEST["dname"];
		$apdate = $_REQUEST["aptdate"];
		$aptime = $_REQUEST["aptime"];
		$pid = $_SESSION["pid"];
		$did = $_REQUEST["did"];
		
		/** echo "$pname"."<br/>";
		echo "$dspec"."<br/>";
		echo "$dname"."<br/>";
		echo "$apdate"."<br/>";
		echo "$aptime","<br/>";
		echo "$pid"."<br/>";
		echo "$did"."<br/>"; *///function definition goes here
	function dupbook($pid, $did, $apdate, $aptime)
	{
		include "dbconfig.php";
		$dupqry = "SELECT aid FROM pat_appoint WHERE pat_id = '$pid' AND doc_id = '$did' AND aptdate = '$apdate' AND aptime = '$aptime'";
		$res = $con->query($dupqry);
		if($res->num_rows>0)
		{
			$match = 1;
		}
		else
		{
			$match = 0;
		}
		return $match;
	}
		$match = dupbook($pid, $did, $apdate, $aptime);
		if($match==1)
		{
			echo "<script>
					alert('Booking already present');
					window.location.href='http://127.0.0.1/projects/Padoc/pat_appoint.php';
					</script>";
		}
		else
		{
			$qry = "INSERT IGNORE INTO pat_appoint(doc_cat, doc_name, pat_name, pat_id, doc_id, aptdate, aptime) VALUES('$dspec', '$dname', '$pname', '$pid', '$did', '$apdate', '$aptime')";
			$res = $con->query($qry);
			if($res)
			{
				echo "<script>
						alert('Appointment Booked');
						window.location.href='http://127.0.0.1/projects/Padoc/pat_appoint.php';
					</script>";
			}
			else
			{
				echo "<script>
						alert(Booking failed);
						window.location.href='http://127.0.0.1/projects/Padoc/pat_appoint.php';
						
				</script>";
			}
		}
			
	}
	else
	{
		echo "
				<script>
					alert('Please enter date and time.');
					window.location.href='http://127.0.0.1/projects/Padoc/pat_appoint.php';
				</script>
				";
	}
	
?>		