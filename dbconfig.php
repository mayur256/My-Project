<?php
	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","padoc");
	
	$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if(!$con)
	{
		die("Connection Failed : ".$con->connect_error);
	}
?>