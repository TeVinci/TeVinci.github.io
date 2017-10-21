<?php

session_start();

if (isset($_POST['submit'])) {
	include 'dbh.inc.php';
}
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Errorhandler
	//check if inputs empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	//check if uid exists
	} else {
		$sql = "SELECT * FROM user WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashin pwd
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//LogIn user
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_uid'] = $row['user_uid'];
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['user_img'] = $row['user_img'];
					$_SESSION['user_signupdate'] = $row['user_signupdate'];
					header("Location: ../innerpages/MyHome.php?login=success");
					exit();
				} else {
					header("Location: ../index.php?login=empty");
					exit();
				}
			}
		}
	}
	
