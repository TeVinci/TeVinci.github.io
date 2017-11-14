<?php


	
	
	if (isset($_SESSION['user_id'])) {
		


		if(@$_GET['uploaderror'] == "size") {
			echo "The maximum filesize is 100MB";
		}
		elseif (@$_GET['uploaderror'] == "error") {
			echo "There has been an error uploading this file. Please try again. (If this is not the first time you see this message try to change the name of the picture you want to upload.";
		}

		elseif (@$_GET['uploaderror'] == "filetype") {
			echo "You can only upload jpg-, jpeg-, png-, and pdf- files.";
		}

		elseif (@$_GET['uploaderror'] == "empty") {
			echo "Please select a file";
		}
	}
	else {
		header("Location: ../index.php");
	}
