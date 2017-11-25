<?php

session_start();
	
	if (isset($_SESSION['user_uid'])) {
		
		include_once 'dbh.inc.php';

		$uid = $_SESSION['user_uid'];



		$sql = "SELECT * FROM user WHERE user_uid='$uid'";

		$result = mysqli_query($conn, $sql);

		$resultCheck = mysqli_num_rows($result);


			if ($resultCheck < 1) {
				header("Location: ../index.php?login=error");
			}
			else {
				$row = mysqli_fetch_assoc($result) ;
					
				$id = $row['user_id'];	
				$signup = $row['user_signupdate'];


				$_SESSION['user_id'] = $id;
				$_SESSION['user_uid'] = $uid;
				$_SESSION['user_name'] = $name;
				$_SESSION['user_signupdate'] = $signup;

				header("Location: ../innerpages/Home.php?signup=success");
			}
	}
	else {
		header("Location: ../index.php");
	}