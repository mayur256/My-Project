<?php
	session_start();
	if(!isset($_SESSION["pid"]))
	{
		header("Location:http://127.0.0.1/projects/Padoc/pat_home.php");
		exit();
	}
	else
	{
		include "dbconfig.php";
		$aid = $_REQUEST["c"];
		$dqry = "DELETE FROM pat_appoint WHERE aid = '$aid'";
		$res = $con->query($dqry);
	}
?>