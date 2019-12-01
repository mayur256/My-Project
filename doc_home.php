<?php
	session_start();
	if(!isset($_SESSION["logid"]))
	{
?>
		<script>
			alert("Invalid Access! Please Login First..");
			window.location.href="http://127.0.0.1/projects/Padoc/doc_log.php";
		</script>
<?php
	}
	else
	{
?>
	<html>
		<head>
			<title>Doctor - Home</title>
		</head>
		<body>
			<header>
				<?php include "doc_navbar.php"?>
			</header>
		</body>
	</html>
<?php
	}
?>