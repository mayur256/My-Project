<?php
	session_start();
	if(isset($_SESSION["admin_id"]))
	{
		session_destroy();
	}
?>
	<script>
	window.location.href="http://127.0.0.1/projects/Padoc/admin_log.php";
	</script>
<?php
?>