<?php

session_start();


if (isset($_SESSION['u_id'])) {
	include 'inc/dbh.inc.php';
	header ("Location: innerpages/MyHome.php");
	die();
}

?>	
<!DOCTYPE html>
<html lang="en">
<head>

	<title>frontpage</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="CSS/styleslogin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<header>
		<nav>
			<div class="main-wrapper">
				<h2>CoSpace</h2>
				<div class="nav-login">
					<form action="inc/login.inc.php" method="POST" id="login-form">
						<input type="text" name="uid" placeholder="Username">
						<input type="password" name="pwd" placeholder="password">
						<Button type="submit" name="submit">Login</Button>
					</form>
		
				</div>
			</div>
		</nav>
	</header>
	
