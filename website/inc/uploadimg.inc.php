<?php 
	session_start();

	if (isset($_POST['submit'])) {
		
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png', 'pdf');

		$id = $_SESSION['user_id'];

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 1000000) {
					include_once 'dbh.inc.php';
					$fileNameNew = $id.".".$fileActualExt;
					$fileDestination = '../innerpages/userimg/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					$sql = "UPDATE user SET profileimg= '$fileActualExt' WHERE user_id = '$id';";
					$result = mysqli_query($conn, $sql);
					header("Location: ../innerpages/home.php?uploadsuccess");
					
				}
				else {
					echo "The file is larger than 100mb";
				}
			}
			else {
				echo "There was an error uploading this file";
			}
		}
		else {
			echo "You can only upload (jpg, jpeg, png, and pdf files.";
		}
	}