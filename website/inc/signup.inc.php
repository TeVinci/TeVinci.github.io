<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$passion_cat1 = mysqli_real_escape_string($conn, $_POST['passion_cat1']);
	$passion_cat2 = mysqli_real_escape_string($conn, $_POST['passion_cat2']);
	$passion_cat3 = mysqli_real_escape_string($conn, $_POST['passion_cat3']);
	$Location = mysqli_real_escape_string($conn, $_POST['Location']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$conpwd = mysqli_real_escape_string($conn, $_POST['conpwd']);
	$date = date("Y-m-d");

	//Errorhandlers
		//check for empty fields
	if (empty($uid) || empty($name) ||empty($pwd) || empty($conpwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
		//check if passions are selected
	} 
	else {
		//check if input characters are valid
		if (!preg_match("/[A-Za-z0-9]+/", $uid)){
			header("Location: ../signup.php?signup=identity_invalid");
			exit();
		} 
		elseif (!preg_match("/^[a-zA-Z ,]*$/", $name)) {
			header("Location: ../signup.php?signup=name_invalid");
			exit();
			//check if pwd match
		} 
		elseif ($pwd != $conpwd) {
			header ("Location: ../signup.php?signup=nomatch");
			exit();
		} 
		elseif (strlen($pwd) < 6) {
			header ("Location: ../signup.php?signup=pwdshort");
			exit();
		} 
		elseif ($passion_cat1 == "please select a passion category" && $passion_cat2 == "please select a passion category" && $passion_cat3 == "please select a passion category") {
			header ("Location: ../signup.php?signup=passionlow");
			exit();
		}
		else {
			//check if user exists
			$sql = "SELECT * FROM users WHERE user_uid='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			}
			if ($resultCheck > 0) {
				header("Location: ../signup.php?signup=identityused");
				exit();
			} 
			else {
				//hashing password
				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
				// insert into database
				$sql = "INSERT INTO users (user_uid, user_name, user_passioncat1, user_passioncat2, user_passioncat3, user_pwd, user_signupdate) VALUES ('$uid', '$name', '$passion_cat1', '$passion_cat2', '$passion_cat3', '$hashedPwd', '$date');";
				mysqli_query($conn, $sql);
				header("Location: ../index.php?signup=success");
				exit();
			}

		}
	}

 	else {
		header("Location: ../index.php");
		exit();
}