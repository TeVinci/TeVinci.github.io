<?php
	session_start();
	
	
	if (isset($_SESSION['user_id'])) {
		include '../inc/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>MySpace</title>

	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' type='text/css' href='../CSS/innergeneral.css'>

</head>
<body>
	<div class="header">
		<div class="profileimg">
			<?php
			$id = $_SESSION['user_id'];
			$sql = "SELECT profileimg FROM user WHERE user_id='$id'";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {

				while ($row = mysqli_fetch_assoc($result)) {
					$profileimg = $row['profileimg'];
					$destination = $id.".".$profileimg;
		 			
		 			if ($profileimg == 'new') {
		 				echo "<div id='profileimg'>";
						echo "<img width='40px' height='30px' src='userimg/default.jpg'>";
						echo ">/div>";
					}
					else {
						
						echo "<div id='profileimg'>";
						echo "<img width='40px' height='30px' src='userimg/".$destination."'>";
						echo "</div>";
					}
				}
				
			}
		?>
		</div>
		<div class="mywrapper">
			<div class="mymenu">
				<ul>
					<li>
						<a href="../innerpages/message.php">My Messages</a>
					</li>
					<li>
						<a href="#">My Projects</a>
					</li>
					<li>
						<a href="#">My Posts</a>
					</li>
					<li>
						<a href="#">My files</a>
					</li>
					<li>
						<a href="#">My Evaluations</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="logout">
			<form action='../inc/logout.inc.php' method='POST' id='logout'>
				<button type='submit' name ='submit'>Logout</button>
			</form>
		</div>
		<nav>
		
			<select class="headernav" onchange="location.href=this.options[this.selectedIndex].value;" placeholder="">
				<option>
					<?php 
						$url=$_SERVER['REQUEST_URI'];
						$exp= explode("/", $url);
						$end = end($exp);
						$current = explode(".", $end);
						echo ucfirst($current[0]);
					 ?>
				</option>
				<option value="home.php">
					<a href="home.php">Home</a>
				</option>
				<option value="projects.php">
					<a href="projects.php">Projects</a>
				</option>
				<option value="knowledgebase.php">
					<a href="knowledgebase.php">Knowledge base</a>
				</option>
				<option value="discussionboard.php">
					<a href="discussionboard.php">Discussion board</a>
				</option>
				<option value="learningspace.php">
					<a href="learningspace.php">Learning space</a>
				</option>
				<option value="gallery.php">
					<a href="gallery.php">Gallery</a>
				</option>
			</select>
			
		</nav>
	</div>
	

<?php
} else {
	header("Location: ../index.php?error=plsLogin");
}
?>