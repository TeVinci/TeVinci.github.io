<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>signuperror</title>

	<link href="../CSS/styleslogin.css" type="text/css" rel="stylesheet">
</head>

</html>
<?php

	
	
	if (isset($_SESSION['user_id'])) {
		include 'dbh.inc.php';

		if (@$_GET['signup'] == "empty") {
			echo "<h5>please fill in all fields</h5>";
		} 
		elseif (@$_GET['signup'] == "identity_invalid") {
			echo "<h5>your identity can only contain numbers and letters</h5>";
		} 

		elseif (@$_GET['signup'] == "name_invalid") {
			echo "<h5>sorry, only letters and (,) are allowed in your name</h5>";
			
		} 
		elseif (@$_GET['signup'] == "nomatch") {
			echo "<h5>the password confirmation failed</h5>";

		}
		elseif (@$_GET['signup'] == "pwdshort") {
			echo "<h5>Sorry, but for your own safety the passwords has to be at least 6 characters long.</h5>";
			
		}
		elseif (@$_GET['signup'] == "passionlow") {
			echo "<h5>Please choose at least one passion category, don't worry you can always change this later.</h5>";
			
		}
		elseif (@$_GET['signup'] == "identityused") {
			echo "<h5>Sorry, this identity is already identifying someone</h5>";
			
		} 
		elseif (@$_GET['signup'] == "success") {
			echo "<h5>you are successfully registered, please login</h5>";
		}
	}
	else {
		header("Location: ../index.php");
	}
		

