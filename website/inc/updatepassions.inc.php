<?php 

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	session_start();

	$ID = $_SESSION['user_id'];

	$passion1 = mysqli_real_escape_string($conn, $_POST['passion1']);
	$passion2 = mysqli_real_escape_string($conn, $_POST['passion2']);
	$passion3 = mysqli_real_escape_string($conn, $_POST['passion3']);
	$passion4 = mysqli_real_escape_string($conn, $_POST['passion4']);
	$passion5 = mysqli_real_escape_string($conn, $_POST['passion5']);

	$sql1 = "UPDATE user SET user_passion1 = '$passion1' WHERE user_id = '$ID';";

	mysqli_query($conn, $sql1);

	$sql2 = "UPDATE user SET user_passion2 = '$passion2' WHERE user_id = '$ID';";

	mysqli_query($conn, $sql2);

	$sql3 = "UPDATE user SET user_passion3 = '$passion3' WHERE user_id = '$ID';";

	mysqli_query($conn, $sql3);

	$sql4 = "UPDATE user SET user_passion4 = '$passion4' WHERE user_id = '$ID';";

	mysqli_query($conn, $sql4);

	$sql5 = "UPDATE user SET user_passion5 = '$passion5' WHERE user_id = '$ID';";

	mysqli_query($conn, $sql5);
	

	header("Location: ../innerpages/profilesettings.php?passionupdate=success");
	exit();
}
else {
	header("Location: ../index.php?plslogin");
}
