<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<style>
	h1{
		color:chartreuse;
		background-color: lightcyan;
	}
</style>
<body>

	<a href="logout.php">Logout</a>
	<h1>Welcome you are successfully login!!</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>
