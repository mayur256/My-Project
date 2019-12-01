<?php
	require("dbconfig.php");
	$dn = $_REQUEST["x"];
	$qry = "SELECT did FROM doctors WHERE docname = '$dn'";
	$res = $con->query($qry);
	$out = "";
	if($res)
	{
		while($ra = $res->fetch_assoc())
		{
			$out = $ra["did"];
		}
		echo $out;
	}
	else
	{
		echo "No value returned.";
	}
		
?>