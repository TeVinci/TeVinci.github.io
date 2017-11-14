<?php 
	require ('../inc/HF/innerheader.php');
 ?>
<?php

if (isset($_POST['submit'])) {

	session_start();

	require_once ('../inc/dbh.inc.php');

	$id = $_SESSION['user_id'];

	$request = mysqli_real_escape_string($conn, $_POST['search']);
	$searchby = mysqli_real_escape_string($conn, $_POST['search-by']);

	if (empty($request)) {
		header("Location: ../innerpages/Friends.php?request=empty");
		die();
	}
	else {
		if ($searchby === "Identity") {

			$sql = "SELECT * from user WHERE user_uid LIKE '$request'";
			$res = mysqli_query($conn, $sql);

				if (mysqli_num_rows($res) < 1) {
					header("Location: ../innerpages/Friends.php?request=noresult");
					die();
				}
				else {
					$count = 1;
					while ($row=mysqli_fetch_assoc($res)) {
						$uid = $row ['user_uid']." ";
						$cuid = $count.$uid;
						$name = $row['user_name'];
						$cname = $count.$name;
						$count++;
					}

					echo "<div class='results'>";
					echo $count.":";
					echo $uid." ";
					echo $name."<br>";
					echo "</div>";

				}
		}
	}
}
else {
	header("Location: ../index.php?error");
	die();
}
?>



 <?php 

 	require ('../inc/HF/innerfooter.php');
  ?>
