<?php
	session_start();
	require_once dirname(__FILE__)."/functions/connection.php";
	$login = $_SESSION['loggued_on_user'];
	$sql = "DELETE FROM users_shop where login='$login'";
	mysqli_query($db, $sql);
	unset($_SESSION['loggued_on_user']);
	header("location: index.php");
?>