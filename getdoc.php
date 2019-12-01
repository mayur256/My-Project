<?php
	include "dbconfig.php";
	$a = $_REQUEST["c"];
	$out = "<option value=none>Name of the doctor goes here...</option>";
	$qry = "SELECT docname FROM doctors WHERE docspec = '$a'";
	if($r = $con->query($qry))
	{
		while($ra = $r->fetch_assoc())
		{
			array_unique($ra);
			$out.="<option value='$ra[docname]'>".$ra['docname']."</option>";
		}
		echo $out;
	}
	else
	{
		echo "No value returned";
	}
?>