<?php
	session_start();
	session_destroy();
	// Redirect to the home page:
	header('Location: index.php');
?>
