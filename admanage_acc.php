<?php
	include "admin_navbar.php";
	session_start();
	if(!isset($_SESSION['admin_id']))
	{
?>
		<script>
			alert("Access Denied! Please Login first!");
			window.location.href="http://127.0.0.1/projects/Padoc/admin_log.php";
		</script>
<?php
	}
?>